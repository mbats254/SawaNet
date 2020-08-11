<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Theme;
use \App\SiteContent;
use Artisan;
use Illuminate\Support\Facades\Schema;
use \App\Table;

class ThemeController extends Controller
{
    //
    public function select_theme(Request $request)
    {
        $pattern = "Themes/";
        // $string = 'index.html';
        // $class = new \DirectoryIterator;
        // $dir = new DirectoryIterator($path);
        // $files = array();

        // $totalFiles = 0;
        // $cont = 0;
        // foreach ($dir as $file){
        //     if (!$file->isDot()){
        //         $content = file_get_contents($file->getPathname());
        //         if (strpos($content, $string) !== false) {
        //             $files[$file->getMTime()] = $file->getBasename();
        //         }
        //     }
        // }

        // ksort($files);

        // return array('files' => $files, 'totalFiles' => $cont);





        function rglob($pattern, $flags = 0) {
            $files = glob($pattern, $flags);
            foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
                $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
            }
            return $files;
        }


    }
    public function add_theme(Request $request)
    {
        $site_content = SiteContent::orderBy('id','desc')->get()->first();
        $field_array = explode(',',$site_content->field_array);
        $theme_location = $site_content->theme_location;
         return view('theme.add_theme',compact('field_array','theme_location'));
    }
    public function post_theme(Request $request)
    {
        // Artisan::call('make:model -m '.$request->theme_name);

        $this->validate($request, [
            'table_name' => 'max:255|unique:tables|required'
            ]);
        $array_str = implode(',',$request->field_array);
          $table = Table::updateorCreate([
                'table_name' => $request->table_name,
                'uniqid' => uniqid(),
                'field_array' => $array_str,
                'theme_location' => $request->theme_location
            ]);

        $theme_name = $request->table_name;
        $theme_location = $request->theme_location;

        Schema::create($theme_name, function($table) use($theme_name,$theme_location)
        {
            $table->increments('id');
            $table->string($theme_name);
            $table->string('theme_location');

        });
        for($i=0;$i<sizeof(($request->field_array));$i++){
            $field_name = $request->field_array[$i];
        Schema::table($theme_name, function ($table) use($field_name) {
            $table->longText($field_name);
                });
        }

        $folder =  '../resources/views/'.$theme_name;
        mkdir ($folder, 0775);
        fopen($folder."/index.blade.php", "w");
        $location  = explode('/',$theme_location);
        unset($location[0]);

        $location_str = implode('/',$location);

        copy($location_str, $folder."/index.blade.php");
        $theme_resources = '../public/'.$theme_name;
        mkdir($theme_resources,0775);
        $location  = explode('/',$theme_location);
        $last_index = sizeof($location) - 1;
        unset($location[$last_index]);
        unset($location[0]);
        $location_string = implode('/',$location).'/';
        shell_exec("cp -r $location_string $theme_resources");
        $path_to_file = $folder."/index.blade.php";
        $file_contents = file_get_contents($path_to_file);
        $new_resources_css = '<link href="/'.$theme_name.'/web/css';
        $new_resources_js = '<script src="/'.$theme_name.'/web/js';
        $new_resources_images = '/'.$theme_name.'/web/images/';
        $file_contents = str_replace('<link href="css',$new_resources_css,$file_contents);
        $file_contents = str_replace('<script src="js',$new_resources_js,$file_contents);
        $file_contents = str_replace('images/',$new_resources_images,$file_contents);
         file_put_contents($path_to_file,$file_contents);
        //  $field_names = $request->field_array;
         return redirect()->route('view_theme',[$table->uniqid]);
        //

        // $myfile = fopen($file_name, "r") or die("Unable to open file!");
        // return fread($myfile,10000);
        // require 'HomeController.php';
    }
    public function site_content(Request $request)
    {
        $path_name = $_GET['path_name'];

        $field_array = $_GET['field_array'];


        SiteContent::updateorCreate([
         'field_array' => $field_array,
         'theme_location' => $path_name
        ]);
        return 'haha';
    }

    public function view_theme(Request $request)
    {
        $table = Table::where('uniqid','=',$request->uniqid)->get()->first();
        $field_array = explode(',',$table->field_array);
        $theme_name = $table->table_name;
        // dd($theme_name);
        return view($theme_name.".index",compact('field_array','theme_name'));

    }
    public function field_connect(Request $request)
    {
        $content = $_GET['selection'];
        $field_name = $_GET['field_name'];
        $theme_name = $_GET['theme_name'];
        $table_details = Table::where('table_name','=',$theme_name)->get()->first();

        \DB::table($theme_name)->insert(
            [$field_name => $content,$theme_name => $theme_name,'theme_location' => $table_details->theme_location]
        );
        return $content;
    }
}

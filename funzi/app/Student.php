<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\Assignment_Sent;
class Student extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'email','user_id','class_id','parent_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function class()
    {
        return $this->belongsTo('App\Darasa');
    }
}

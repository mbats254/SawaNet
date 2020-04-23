<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Parents extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'email','children_array','user_id','phone_number'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

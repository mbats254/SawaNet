<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    //$table->bigInteger('');
    // $table->bigInteger('');
    // $table->string('uniqid');
    protected $fillable = [
        'user_id', 'package_id','uniqid','amount_paid','duration_of_subscription','user_name'
    ];
}

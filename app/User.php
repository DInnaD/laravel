<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // relatons HasMany
    // public static function temlates(){
    //     return $this->hasOne(Template::class, 'id_template', 'temlate_id');
    // }
    // public static function bunches(){
    //     return $this->hasOne(Bunch::class, 'id_bunch', 'bunch_id');
    // }
    // public static function subscribers(){
    //     return $this->hasOne(Subscriber::class, 'id_subscriber', 'subscriber_id');
    // public static function compaigns(){
    //     return $this->hasOne(Compaign::class, 'id_compaign', 'compaign_id');
}


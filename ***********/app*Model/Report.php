<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{

    use SoftDeletes;
//for updating without del id or other main fields, stus 'fillable' equal update agriment
    protected $primaryKey = 'id_report';

    protected $fillable = ['compaign_id'];
    protected $fillable = ['subscriber_id'];
    protected $fillable = ['subscriber_id'];

    // public static function subscribers(){
    //     return $this->hasOne(Subscriber::class, 'id_subscriber', 'subscriber_id');
    // public static function compaigns(){
    //     return $this->hasOne(Compaign::class, 'id_compaign', 'compaign_id');

    
}

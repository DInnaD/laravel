<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compaign extends Model
{

    use SoftDeletes;
//for updating without del id or other main fields, stus 'fillable' equal update agriment
    protected $primaryKey = 'id_compaign';
    
    protected $fillable = ['name_compaign'];
    protected $fillable = ['template_id'];
    protected $fillable = ['bunch_id'];
    protected $fillable = ['description_compaign'];
    
    // public static function temlates(){
    // 	return $this->hasOne(Template::class, 'id_templates', 'temlates_id');
    // }
    // public static function bunches(){
    //     return $this->hasOne(Bunch::class, 'id_bunches', 'bunches_id');
    // }
    // public static function user(){
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{

    use SoftDeletes;
//for updating without del id or other main fields, stus 'fillable' equal update agriment
    protected $fillable = ['firstname_subscriber'];
    protected $fillable = ['lastname_subscriber'];
    protected $fillable = ['email_subscriber'];
    //public function getCreatedFormatAttribute('Y-m-d H:i:s'$subscriberses)->format('Y-m-d / H:i:s');
    // public static function user(){
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compaigns extends Model implements \App\Libs\Interfaces\Owened
{
    use Selectable, SoftDeletes, Avaliable {

        boot as bootOwnedEvents;
    }
    
    protected $table = 'compaigns';

    protected $primaryKey = 'id_compaigns';
    protected $attributes = [
        'status' => 10
    ];
    public function getOwenedFields(){

        return 'user_id','created_by';
    }
    public static function boot(){

        parent::boot();
        self::bootOwenedEvents();
        parent::observe(new CampaignsObserver());
    }
    //$compaigns = Compaigns::where('created_by', \Auth::user()->id);
 //    public function scope Owened($query){
 //    	return $query->where('created_by', \Auth::user()->id);
	// }

    protected $fillable = ['name_compaigns'];
    protected $fillable = ['templates_id'];
    protected $fillable = ['bunches_id'];
    protected $fillable = ['description_compaigns'];

   // relatons
    public static function temlates(){
    	return $this->hasOne(Template::class, 'id_templates', 'temlates_id');
    }
    public static function bunches(){
        return $this->hasOne(Bunch::class, 'id_bunches', 'bunches_id');
    }
    public static function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}

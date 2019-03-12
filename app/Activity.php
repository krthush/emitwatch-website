<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Activity extends Model
{
	use NodeTrait;
	
	protected $fillable = ['name','of_parent_percent','semi_idle','keys','lmb','rmb','scrollwheel','start_on','details','time'];

    protected $visible = ['id', 'name', 'of_parent_percent', 'time', 'children'];

    // public function childs() 
    // {
    //     return $this->hasMany('App\Activity','parent_id') ;
    // }

    // // Each branch may have a parent
    // public function parent() {
    //     return $this->belongsTo('App\Activity','parent_id');
    // }
}

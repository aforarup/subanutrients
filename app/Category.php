<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Category extends Model {
	use ObservantTrait;
	
    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}

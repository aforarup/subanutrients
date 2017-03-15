<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Product extends Model {
	use ObservantTrait;
	
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

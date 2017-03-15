<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Testimonial extends Model {
	use ObservantTrait;
	
    protected $table = 'testimonials';

}

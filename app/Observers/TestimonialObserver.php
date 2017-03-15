<?php
namespace App\Observers;

use App\Testimonial;

class TestimonialObserver
{
    function toAscii($str, $replace=array(), $delimiter='-') {
        setlocale(LC_ALL, 'en_US.UTF8');
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[/_|+ -]+/", $delimiter, $clean);

        return $clean;
    }
    
    /**
     * Listen to the Testimonial creating event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function creating(Testimonial $Testimonial)
    {
        //code...
    }

     /**
     * Listen to the Testimonial created event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function created(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial updating event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function updating(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial updated event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function updated(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial saving event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function saving(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial saved event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function saved(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial deleting event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function deleting(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial deleted event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function deleted(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial restoring event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function restoring(Testimonial $Testimonial)
    {
        //code...
    }

    /**
     * Listen to the Testimonial restored event.
     *
     * @param  Testimonial  $Testimonial
     * @return void
     */
    public function restored(Testimonial $Testimonial)
    {
        //code...
    }
}
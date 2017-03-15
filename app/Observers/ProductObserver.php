<?php
namespace App\Observers;

use App\Product;

class ProductObserver
{
    function toAscii($str, $replace=array(), $delimiter='-') {
        setlocale(LC_ALL, 'en_US.UTF8');
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[_|+ -]+/", $delimiter, $clean);

        return $clean;
    }
    
    /**
     * Listen to the Product creating event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function creating(Product $Product)
    {
        //code...

    }

     /**
     * Listen to the Product created event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function created(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product updating event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function updating(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product updated event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function updated(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product saving event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function saving(Product $Product)
    {
        //code...
        $Product->setAttribute('slug', $this->toAscii($Product->getAttributeValue('name')));
    }

    /**
     * Listen to the Product saved event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function saved(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product deleting event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function deleting(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product deleted event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function deleted(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product restoring event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function restoring(Product $Product)
    {
        //code...
    }

    /**
     * Listen to the Product restored event.
     *
     * @param  Product  $Product
     * @return void
     */
    public function restored(Product $Product)
    {
        //code...
    }
}
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Category;
use App\Product;
Route::get('/', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    return view('home', ['title' => 'Home', 'categories' => $categories]);
});


Route::get('/products/', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $products = Product::orderBy('name', 'asc')->get();
    return view('category', ['title' => 'Products',
        'categories' => $categories,
        'products' => $products,
        'cat' => ''
    ]);
});

Route::get('/products/{category}', function ($category) {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $cat = Category::where('slug', $category)->firstOrFail();
    $products = Product::orderBy('name', 'asc')->get();
//    return var_dump($products);
//    return $cat;
    return view('category', ['title' => $cat->name,
        'categories' => $categories,
        'products' => $products,
        'cat' => $cat
    ]);
});

Route::get('/product/{product?}', function ($product) {
    $categories = Category::orderBy('created_at', 'asc')->get();
    if(isNonEmptyString($product)) {
        $prod = Product::where('slug',$product)->firstOrFail();
        $prods = Product::where('category_id', $prod->category->id)->get()->except($prod->id);
        return view('product', ['title' => $prod->name.' - '.$prod->category->name,
            'categories' => $categories,
            'prod' => $prod,
            'products' => $prods,
        ]);
    } else {
        return redirect('products');
    }
});

Route::get('/contact-us/', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    return view('contact', ['title' => 'Contact Us',
        'categories' => $categories
    ]);
});

Route::get('/about-us/', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $products = Product::orderBy('name', 'asc')->get();
    return view('about', ['title' => 'About Us',
        'categories' => $categories,
        'products' => $products,
    ]);
});

Route::get('/core-strength/', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $products = Product::orderBy('name', 'asc')->get();
    return view('corestrength', ['title' => 'Core Strength',
        'categories' => $categories,
        'products' => $products,
    ]);
});

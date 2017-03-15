<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use \App\Product;
use \App\Category;

use Illuminate\Http\Request;

class ProductController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(Product::with('category'));
            //$this->filter->add('category_id','Category','select')->options(\App\Category::pluck("name", "id")->all());
            $this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('category.name', 'Category');
			$this->addStylesToGrid();

        //*/
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('code', 'Code', 'text')->rule('required');


        */
        $this->edit = \DataEdit::source(new Product());
        $this->edit->add('name', 'Name', 'text');
        $this->edit->add('category_id','Category','select')->options(Category::pluck("name", "id")->all());
        $this->edit->add('presentation','Presentation','text')->rule('required');
        $this->edit->add('composition','Composition','redactor')->rule('required');
        $this->edit->add('benefits','Benefits','redactor')->rule('required');
        $this->edit->add('usage','Usage','redactor')->rule('required');

        return $this->returnEditView();
    }    
}

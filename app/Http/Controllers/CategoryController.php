<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Category;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CategoryController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new Category);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->addStylesToGrid();

        //*/
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('description', 'Description', 'textarea')->rule('required');


        //*/
       
        return $this->returnEditView();
    }    
}

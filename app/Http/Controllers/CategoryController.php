<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use DB;
class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category.categoryEntry');
    }

    public function save(Request $request){

    	$categoryEntry = new Main();
        
    	 $categoryEntry->categoryName = $request->name;
         
    	$categoryEntry->Shortdescription  = $request->Shortdescription;

    	$categoryEntry->publicationStatus   = $request->publicationStatus;
        


        $categoryEntry->save();
        return redirect('/category/save')->with('message','Data insert successfully');


    }

    public function manage(){
    $categories = DB::table('mains')->paginate(5);

    return view('admin.category.categoryManage', ['category'=>$categories]);

    }

    public function edit($id){
        $categoryEdit = Main::where('id',$id)->first();
    return view('admin.category.categoryEdit', ['category'=>$categoryEdit]);
    }


    public function update(Request $request){
        $category = Main::find($request->categoryID);
        $category->categoryName = $request->name;
        $category->Shortdescription = $request->Shortdescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();

        return redirect('/category/manage')->with('message', 'updated successfully');
    }

    public function delete($id){
        $categoryDelete = Main::find($id);
        $categoryDelete->delete();
        return redirect ('/category/manage')->with('message','Deleted successfully');

    }
}

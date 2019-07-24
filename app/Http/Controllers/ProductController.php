<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\picture;
use DB;
class ProductController extends Controller
{
    public function index(){

     $categories = Main::where('publicationStatus',1)->get();

    	return view('admin.product.productEntry',['categories'=>$categories]);
          
    }

    public function save(Request $request){
    	$product = new picture();
    	$product->productName = $request->name;
    	$product->categoryID = $request->categoryID;
    	$product->price = $request->price;
    	$product->qty = $request->qty;
    	$product->shortDescription = $request->Shortdescription;
    	$product->longDescription = $request->longDescription;
    	$product->picture = 'picture';
    	$product->publicationStatus = $request->publicationStatus;

    	$product->save();

    	$lastId = $product->id;
    	$pictureInfo = $request->file('pic');

    	$picName = $lastId.$pictureInfo->getClientOriginalName();
    	$folder = "productImage/";
    	$pictureInfo->move($folder,$picName);


    	$picUrl = $folder.$picName;

    	$productPic = picture::find($lastId);

    	$productPic->picture = $picUrl;
    	$productPic->save();

    	return redirect('/product/entry')->with('message','Product Insert Successfully');
    	
    }

    public function manage(){
    	$products = DB::table('pictures')
         ->join('mains','mains.id','=','categoryID')
         ->select('pictures.*','mains.categoryName as catName')
         ->paginate(6);

    	return view('admin.product.productManage',['products'=>$products]);
    }
}
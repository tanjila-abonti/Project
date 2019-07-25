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
         ->orderBy('pictures.id','asc')
         ->paginate(6);

    	return view('admin.product.productManage',['products'=>$products]);
    }

    public function singleProduct($id)
        {
         
         echo "$id";
         $productById = DB::table('pictures')
         ->join('mains','mains.id', '=','categoryID')
         ->select('pictures.*', 'mains.categoryName as catName')
         ->where('pictures.id',$id)
         ->first();

         return view('admin.product.singleProduct',['product'=>$productById]);

        } 

        public function editProduct($id){       
        
          $product = Picture::where('id',$id)->first();
          $category = Main::where('publicationStatus',1)->get();
         
         return view('admin.product.productEdit', ['product'=> $product,'categories'=>$category]);
        }
       

       public function updateProduct(Request $request){

      

        $productPic = Picture::where('id',$request->product_id)->first();
         

     $picInfo = $request->file('pic');
     $picName = $request->product_id.$picInfo->getClientOriginalName();
    $path = "productImage/";
    $picUrl = $path.$picName;
    $picInfo->move($path,$picName);
    
    $product = picture::find($request->product_id);

    $product->productName = $request->name;
    $product->categoryID = $request->categoryID;
    $product->price = $request->price;
    $product->qty = $request->qty;
    $product->shortDescription = $request->Shortdescription;
    $product->longDescription = $request->longDescription;
    $product->publicationStatus = $request->publicationStatus;
    $product->picture = $picUrl;

    $product->save();
       return redirect('/product/manage')->with('message','Product Update Successfully');
   }

}
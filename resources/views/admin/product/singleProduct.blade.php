@extends('admin.master')


@section('page-title')
    Single Product
@endsection

@section('content-heading')
  Single Product
 
@endsection

@section('mainContent')
 <img src= "{{asset ($product->picture)}}" width ="300" > <br> <hr>

Name:{{$product->productName}} <br> 
Category Name: {{$product->catName}} <br>
Price: {{$product->price}} <br>
Quantity: {{$product->qty}} <br> <br>
<p> <h4>Short description: </h4> {{$product->shortDescription}}  </p> <br>
<p> <h4>long Description: </h4>{{$product->longDescription}}  </p> <br>
Publication Status: {{($product->publicationStatus == 1)? 'Published' : 'Unpublished'}}

@endsection
  
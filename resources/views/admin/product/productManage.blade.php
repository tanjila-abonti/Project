@extends('admin.master')

@section('page-title')
    Product Manage
@endsection

@section('content-heading')
  Product Manage
 
@endsection

@section('mainContent')
  

  <?php
  $i=0;
  ?>
<div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                  <tr>
                                  <th>SI</th>
                                    <th>Name</th>
                                     <th>Category Name</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>qty</th>
                                    <th>Publication Status</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($products as $product)
                                	<tr>
                                	<td> {{ ++$i }} </td>
                                      <td>{{ $product->productName}} </td>
                                      <td>{{ $product->catName}} </td>
                                      <td>{{ $product->price}} </td>
                                      <td>{{ $product->qty}} </td>
                                      <td><img src="{{asset ($product->picture )}}" width="60px>" alt="no pic" ></td>
                                      <td>{{ ($product->publicationStatus ==1)? 'published' : 'Unpublished'}} </td>
                                       <td><a {{}} href="" target="__blank"> view </a> |Edit | Delete</td>

                                	 </tr>
                                	 @endforeach
                                </tbody>
                            </table>

                            {{$products->links()}}
                        </div>
@endsection

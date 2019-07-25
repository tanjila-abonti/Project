@extends('admin.master')

@section('page-title')
    Product Edit
@endsection

@section('content-heading')
   Edit the Product
 
@endsection

@section('mainContent')
<div class="panel-body">
         <div class="row">
            <div class="col-lg-6">
             {!! Form::open(['url'=>'/product/edit','method'=>'post', 'enctype'=>'multipart/form-data']) !!}
            
                        <div class="form-group">
                              <label> Product Name </label>
                              <input type="text" class="form-control" value ="{{$product->productName}}"  name="name">
                           </div>

                           <div class="form-group">
                                <label> Category</label>
                                <select name="categoryID" class="form-control">
                                  @foreach($categories as $category)
                                     <option value='{{$category->id}}' >{{$category->categoryName}}</option>
                                   @endforeach
                                 </select>
                             </div>

                             <div class="form-group">
                              <label> Price </label>
                              <input type="number"  value="{{$product->price}}"   class="form-control" name="price">
                           </div>

                           <div class="form-group">
                              <label> Quantity </label>
                              <input type="number" value="{{$product->qty}}" class="form-control" name="qty">
                           </div>

                         
                          <div class="form-group">
                             <label>Short Description</label>
                             <textarea class="form-control" name="Shortdescription" placeholder="Enter Short Description"> {{$product->Shortdescription}}</textarea>
                          </div>

                           <div class="form-group">
                             <label>Long Description</label>
                             <textarea class="form-control" name="longDescription" placeholder="Enter Long Description">{{$product->longDescription}} </textarea>
                          </div>


                          <div class="form-group">
                              <label> Picture </label>
                              <input type="file" name="pic">
                           </div>

                             <div class="form-group">
                                <label> Publication Status</label>
                                <select name="publicationStatus"class="form-control">
                                <option value='1'>Published </option>
                            <option value='0'>Unpublished </option>    
                                 </select>
                             </div>

                     <input type="hidden" name="product_id" value="{{ $product->id}}">
                                  

                  <div class="form group">
                    <input type="submit" value="submit"  class="btn btn-block btn-primary">
                       </div>
                 {!! Form::close() !!}
                      </div> 

                      <script type="text/javascript">
                      	document.forms['productEditForm'].elements['categoryID'].value="{{$product->categoryID}}"

                      </script>

                      <script type="text/javascript">
                      	document.forms['productEditForm'].elements['publicationStatus'].value='{{$product->categoryID}}';


                    
                      	document.forms['productEditForm'].elements['publicationStatus'].value='{{$product->publicationStatus}}';

                      </script>
                         </div>
                             </div>
                 }
                    }

  @endsection
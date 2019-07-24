@extends('admin.master')

@section ('page-title')
    Admin: Category Edit
@endsection

 @section('content-heading')
    Category Edit
 @endsection


 @section('mainContent')
  <div class="panel-body">
         <div class="row">
            <div class="col-lg-6">

               	{!! Form::open(['url'=>'/category/edit','method'=>'post','name'=>'editForm', 'role'=>'form']) !!}
                          
                          <div class="form-group">
                              <label> Category Name </label>
                              <input class="form-control" name="name" value="{{$category->categoryName}}">
                           </div>

                          <div class="form-group">
                             <label>Short Description</label>
                             <textarea class="form-control" name="Shortdescription" placeholder="Enter Short Description">{{$category->Shortdescription}}</textarea>
                          </div>

                             <div class="form-group">
                                <label> Publication Status</label>
                                <select name="publicationStatus"class="form-control">
                                <option value='1'>Published </option>

                            <option value='0'>Unpublished </option>    
                                 </select>
                             </div>

                                  <input type="hidden" name="categoryID" value='{{$category->id}}'>

                  <div class="form group">
                    <input type="submit" value="submit"  class="btn btn-block btn-primary">
                       </div>
                    <!! Form::close() !!>
                      </div>

                      <script type="text/javascript">
                      	
                      	document.forms['editForm'].elements['publicationStatus'].value='{{$category->publicationStatus}}'                  
                      	   </script>
                         </div>
                             </div>
 @endsection
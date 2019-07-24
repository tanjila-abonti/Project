@extends('admin.master')

@section ('page-title')
Admin: Category Manage
@endsection


@section('content-heading')
CategoryControl Area
<br>
{{Session::get('message')}}
<hr>
Total Item in this page : {{$category ->count()}} <br>
Total Item: {{ $category->total()}} <br>
Page No: {{ $category->currentPage()}} <br>
From: {{ $category->firstItem()}} No Item to {{ $category->lastItem()}} No Item
@endsection


@section ('mainContent')

<div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                  <tr>
                                  <th>SI</th>
                                    <th>Name</th>
                                     <th>Description</th>
                                    <th>Publication Status</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                       $i=0;
                                	?>
                                	@foreach($category as $singleCategory)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singleCategory->categoryName}}</td>
                                        <td>{{$singleCategory->Shortdescription}}</td>
                                        <td>{{($singleCategory->publicationStatus ==1)?'Published':'Unpublished'}}</td>
                                        <td class="center"><a href="{{ url('/category/edit/'.$singleCategory->id) }}">Edit </a> | <a href="{{ url('/category/delete/'.$singleCategory->id) }}"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$category->links()}}
                        </div>



@endsection
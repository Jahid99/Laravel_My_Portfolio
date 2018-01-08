@extends('admin.layouts.master')


@section('content')
<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add <small>Category</small>
                        </h1>
                        
                    </div>
                    <div class="col-lg-12">
                       
                        <form action="{{ route('categories.store') }}" method="POST">
                            <div class="form-group">
                              <label for="name">Name :</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value="" required="required">
                            </div>
                            <div class="form-group">
                              <label for="slug">Slug :</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Category Slug" name="slug" value="">
                            </div>
                            
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                   
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            @endsection
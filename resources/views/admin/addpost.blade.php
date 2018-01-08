@extends('admin.layouts.master')


@section('content')
<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add <small>Post</small>
                        </h1>
                        
                    </div>
                    <div class="col-lg-12">
                       
                        <form action="{{ route('posts.store') }}" method="POST">
                            <div class="form-group">
                              <label for="title">Title :</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title" value="" required="required">
                            </div>
                            <div class="form-group">
                              <label for="slug">Slug :</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Post Slug" name="slug" value="">
                            </div>

                             <div class="form-group">
                                <label for="category_id">Category ID Input:</label>
                                <select class="form-control" name="category_id" required="required">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="body">Body :</label>
                              <textarea id="body" name="body" required="required">     </textarea>
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
@extends('admin.layouts.master')


@section('content')
<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        
                    </div>
                    <div class="col-lg-12">
                       
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                              <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td><a href="{{ route('categories.edit', $category->id) }}"><button type="button">Edit</button></a>  |

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <br><button>Delete</button>
                                    </form>

                                 </td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            @endsection
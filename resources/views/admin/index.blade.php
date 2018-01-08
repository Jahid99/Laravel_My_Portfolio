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
                                <th>Title</th>
                                <th>Body</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                              <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
                                <td><a href="{{ route('posts.edit', $post->id) }}"><button type="button">Edit</button></a>  |

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <br><button>Delete</button>
                                    </form>

                                 </td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                                        {!! $posts->links(); !!}
                                    </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            @endsection
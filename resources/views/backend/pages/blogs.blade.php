@extends('backend.layouts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Blogs</h3>
                </div>
                <div class="col text-right">
                    <a href="{{route('show_new_blog_page')}}" class="btn btn-sm btn-success">Add new</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Written By</th>
                            <th scope="col">Written At</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <th scope="row">{{$blog->title}}</th>
                                <td class="mutltiline_td">{{$blog->content}}</td>
                                <td>{{$blog->user->name}}</td>
                                <td>{{$blog->created_at->diffForHumans()}}</td>
                                @if ((Auth::user()->id)==($blog->user_id))
                                    <td>
                                        <form action="{{route('delete_blog' , ['id'=>$blog->id])}}" method="get">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
          </div>
        </div>
       
    </div>
    
@endsection
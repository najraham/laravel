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
                    <a href="{{route('add_skill')}}" class="btn btn-sm btn-success">Add new</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Heading</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            <tr>
                                <th scope="row">{{$skill->heading}}</th>
                                <td class="mutltiline_td">{{$skill->progress_value}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a  href="{{route('show_edit_skill' , ['id'=>$skill->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{route('delete_skill' , ['id'=>$skill->id])}}" method="get">
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
          </div>
        </div>
       
    </div>
    
@endsection
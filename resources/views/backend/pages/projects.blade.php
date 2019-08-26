@extends('backend.layouts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Projects</h3>
                </div>
                <div class="col text-right">
                    <a href="{{route('add_project')}}" class="btn btn-sm btn-success">Add new</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Project Image</th>
                            <th scope="col">Project Url</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{$project->project_image}}</th>
                                <td>{{$project->project_url}}</td>
                                <td>{{$project->project_name}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a  href="{{route('show_edit_project' , ['id'=>$project->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{route('delete_project' , ['id'=>$project->id])}}" method="get">
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
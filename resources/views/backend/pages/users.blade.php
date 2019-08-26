@extends('backend.layouts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Users</h3>
                </div>
                <div class="col text-right">
                    <a href="{{route('show_add_user_page')}}" class="btn btn-sm btn-success">Add new</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">User id</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Role</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <th scope="row">{{$user->name}}</th>
                                <td>{{$user->email}}</td>
                                @if (($user->role)==1)
                                    <td>Admin</td>
                                @else
                                    <td>Normal</td>
                                @endif
                                
                                
                                <td>
                                    <form action="{{route('delete_user' , ['id'=>$user->id])}}" method="get">
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
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
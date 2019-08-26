@extends('backend.layouts.layout')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <form method="POST" action="{{route('add_new_user')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput2" placeholder="Enter name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter e-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput3">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleFormControlInput3" placeholder="Enter password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput3">Confirm Password</label>
                                    <input type="text" name="password_confirmation" class="form-control" id="exampleFormControlInput3" placeholder="Enter password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput4">Role</label>
                                        <input type="text" name="role" class="form-control" id="exampleFormControlInput4" placeholder="Enter role">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-lg-right mr-5 mb-3">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection
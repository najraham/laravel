@extends('backend.layouts.layout')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <form method="POST" action="{{route('edit_project')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$project->id}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Project Image</label>
                                    <input type="text" name="image" class="form-control" id="exampleFormControlInput2" placeholder="Enter heading" value="{{$project->project_image}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Project Url</label>
                                    <textarea rows="2" name="url" class="form-control" id="exampleFormControlInput1" placeholder="Enter description">{{$project->project_url}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Project Name</label>
                                        <textarea rows="3" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter description">{{$project->project_name}}</textarea>
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
@extends('frontend.layouts.layout')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <form method="POST" action="{{route('add_blog')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput2" placeholder="Enter title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <textarea type="textarea" rows="3" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Enter description"></textarea>
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
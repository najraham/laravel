@extends('backend.layouts.layout')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <form method="POST" action="{{route('edit_index')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$index->id}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Heading</label>
                                    <input type="text" name="heading" class="form-control" id="exampleFormControlInput2" placeholder="Enter heading" value="{{$index->heading}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <textarea rows="3" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Enter description">{{$index->description}}</textarea>
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
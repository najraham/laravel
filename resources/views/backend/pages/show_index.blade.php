@extends('backend.layouts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Index</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Heading</th>
                                <th scope="col">Description</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                        <span class="mb-0 text-sm">{{$index->heading}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="multiline_td">{{$index->description}}</td>
                                <td><a href="{{route('show_edit_index' , ['id'=>$index->id])}}" class="btn btn-warning">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
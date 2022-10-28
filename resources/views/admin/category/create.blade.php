@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Category </h4>
                        <a href="{{ url('admin/category') }}" class="btn btn-primary float-end"> Back </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/category') }}" method="post">
                            @csrf
                            <h4> Category </h4>

                            <div class="mb-3">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control">    
                            </div>

                            {{-- <div class="mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control">    
                            </div> --}}

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>



                        </form>

                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
@endsection
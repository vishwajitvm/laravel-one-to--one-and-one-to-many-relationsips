@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                @if (session('message'))
                    <h4 class="alert alert-success"> {{ session('message') }} </h4>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Category List </h4>
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end"> Add Category </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                <tr>
                                    <td> {{ $category->id }} </td>
                                    <td> {{ $category->name }} </td>
                                    <td>{{  $category->slug }}</td>
                                    <td>
                                        {{-- <a href=" {{ url('students/'.$student->id.'/edit') }} " class="btn btn-primary btn-md mx-2">Edit</a> --}}
                                        <form action="{{ url('admin/category/'.$category->id.'/delete') }} " class="d-inline" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-md mx-2">Delete</button>

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
    </div>
    
@endsection
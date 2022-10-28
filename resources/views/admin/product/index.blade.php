@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                @if (session('message'))
                    <h4 class="alert alert-success bg-success text-light"> {{ session('message') }} </h4>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Products List </h4>
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary float-end"> Add Products </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>name</th>
                                    <th>slug</th>
                                    <th>Price</th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->category->name }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td>{{  $item->slug }}</td>
                                    <td>{{  $item->price }}</td>
                                    <td>
                                        <a href=" {{ url('admin/products/'.$item->id.'/edit') }} " class="btn btn-primary btn-md mx-2">Edit</a>

                                        {{-- <form action="{{ url('students/'.$student->id) }} " class="d-inline" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-md mx-2">Delete</button>

                                        </form> --}}
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
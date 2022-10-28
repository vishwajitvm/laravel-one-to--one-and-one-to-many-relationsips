@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit  Products </h4>
                        <a href="{{ url('admin/products') }}" class="btn btn-primary float-end"> Back </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/products/'.$product->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <h4 class="mb-3"> {{ $product->name }} Products </h4>

                            <div class="mb-3">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control" id="">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ $product->category_id == $item->id?'selected':'' }} > {{ $item->name }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="name">product Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" id="name" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="price">product Price</label>
                                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary ">Update</button>
                            </div>



                        </form>

                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
@endsection
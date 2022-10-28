@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Products </h4>
                        <a href="{{ url('admin/products') }}" class="btn btn-primary float-end"> Back </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/products') }}" method="post">
                            @csrf
                            <h4 class="mb-3"> Products </h4>

                            <div class="mb-3">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control" id="">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                    @endforeach
                                </select>                            </div>


                            <div class="mb-3">
                                <label for="name">product Name</label>
                                <input type="text" name="name" id="name" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="price">product Price</label>
                                <input type="text" name="price" id="price" class="form-control">    
                            </div>

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
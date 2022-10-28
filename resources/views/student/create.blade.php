@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Students </h4>
                        <a href="{{ url('students') }}" class="btn btn-primary float-end"> Back </a>
                    </div>

                    <div class="card-body">

                        <form action="{{ url('students') }}" method="post">
                            @csrf
                            <h4> Student </h4>

                            <div class="mb-3">
                                <label for="fullname">Full name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">    
                            </div>

                            <h4> Student Detail </h4>

                            <div class="mb-3">
                                <label for="alter_phone">Alternative Phone Number</label>
                                <input type="text" name="alter_phone" id="alter_phone" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="course">Course</label>
                                <input type="text" name="course" id="course" class="form-control">    
                            </div>

                            <div class="mb-3">
                                <label for="roll_no">Roll Number</label>
                                <input type="text" name="roll_no" id="roll_no" class="form-control">    
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
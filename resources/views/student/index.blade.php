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
                        <h4> Students List </h4>
                        <a href="{{ Route('students.create') }}" class="btn btn-primary float-end"> Add Student </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>fullname</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>alter_phone</th>
                                    <th>course</th>
                                    <th>roll_no</th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                <tr>
                                    <td> {{ $student->id }} </td>
                                    <td> {{ $student->fullname }} </td>
                                    <td>{{  $student->email }}</td>
                                    <td>{{  $student->phone }}</td>
                                    <td> {{ $student->studentDetail->alter_phone }} </td>
                                    <td> {{ $student->studentDetail->course }} </td>
                                    <td> {{ $student->studentDetail->roll_no }} </td>
                                    <td>
                                        <a href=" {{ url('students/'.$student->id.'/edit') }} " class="btn btn-primary btn-md mx-2">Edit</a>
                                        <form action="{{ url('students/'.$student->id) }} " class="d-inline" method="post">
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
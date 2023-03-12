@extends('layouts.admin')

@section('content')


<div class="container my-5 py-5">
    <div class="col-md-12">
        <div class="row">   
            @if(session('message'))   
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif 

            <div class="card">
                <div class="card-header">
                    <h3>Doctor List
                        <span class="float-end">
                            <a href="{{ url('/admin/add-doctor') }}" class="btn btn-primary mb-2">
                                Add Doctor
                            </a>
                        </span>
                    </h3>
                    <div class="card-body text-center">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th>Speciality</th>
                                    <th>Phone</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->speciality }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>
                                    <img src="{{ asset("$doctor->image") }}" alt="doctorImg" style="width:70px; height:70px;">
                                </td>
                                <td>
                                    <a href="{{ url('/admin/doctor/'.$doctor->id.'/edit') }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('/admin/doctor/'.$doctor->id.'/delete') }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
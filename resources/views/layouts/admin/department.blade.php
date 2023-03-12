@extends('layouts.admin')

@section('content')


<div class="container my-5 py-5">
    <div class="col-md-12">
        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="row">
            <!-- <div class="col-md-3">
                <img src="{{ asset('assets\image\hospital.JFIF') }}" style="width:300px; hei
                    :800px;" alt="NoImg">
            </div> -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Department List
                            <span class="float-end">
                                <a href="{{ url('/admin/add-department') }}" class="btn btn-primary mb-2">
                                    Add Department
                                </a>
                            </span>
                        </h3>
                        <div class="card-body text-center">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">   
                                        <div class="col-md-1">                               
                                        <th>Name</th>
                                        </div>  
                                        <div class="col-md-3">
                                        <th>Descriprtion</th>
                                        </div>
                                        <div class="col-md-5">
                                        <th>Details</th>
                                        </div>
                                        <div class="col-md-3">
                                        <th>Action</th>
                                    </div>
                                    </tr>
                                </thead>
                                @forelse($departments as $department)
                                <tr class="text-left">
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->description }}</td>
                                    <td>{{ $department->details }}</td>
                                    <td>
                                        <a href="{{ url('/admin/department/'.$department->id.'/edit') }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ url('/admin/department/'.$department->id.'/delete') }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <div colspan="4" style="color:red"><h3>No Departments Found </h3></div>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
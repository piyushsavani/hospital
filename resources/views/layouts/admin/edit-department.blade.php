@extends('layouts.admin')

@section('content')

<div class="container mt-3 ">
    <div class="py-3">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header">
                    <div class="col-md-12">

                        <form action="{{ url('admin/update-department/'.$department->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="my-3">
                                <lable>Name</lable>
                                <input type="text" name="name" value="{{ $department->name }}" class="form-control my-2">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="my-4">
                                <lable>Description</lable><br>
                                <input type="text" name="description" value="{{ $department->description }}"  class="form-control my-2">
                                @error('description') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <lable>Description</lable><br>
                                <textarea name="details" id="" cols="70" rows="3" class="form-control my-2">{{$department->details}}</textarea>
                                @error('speciality') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                        
                            
                            <button type="submit" class="btn btn-success my-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
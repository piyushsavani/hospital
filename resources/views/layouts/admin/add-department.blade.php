@extends('layouts.admin')

@section('content')

<div class="container mt-3 ">
    <div class="py-3">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header">
                    <div class="col-md-12">

                        <form action="{{ url('admin/save-department') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <lable>Name</lable>
                                <input type="text" name="name" class="form-control my-2">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="my-3">
                                <lable>Description</lable>
                                <input type="text" name="description" class="form-control my-2">
                                @error('speciality') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <lable>Description</lable>
                                <textarea name="details" id="" cols="70" rows="3" class="form-control my-2">
                                @error('speciality') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-success my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
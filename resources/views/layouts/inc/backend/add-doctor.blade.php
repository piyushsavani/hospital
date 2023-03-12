@extends('layouts.admin')

@section('content')

<div class="container mt-3 ">
    <div class="py-3">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header">
                    <div class="col-md-12">

                        <form action="{{ url('admin/save-doctor') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <lable>Name</lable>
                                <input type="text" name="name" class="form-control">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="my-3">
                                <select name="speciality" class="form-select">
                                    <option value="">Select Speciality</option>
                                    @foreach($speciality as $department)
                                    <option value="{{$department->name}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <lable>Phone</lable>
                                <input type="tel" name="phone" class="form-control">
                                @error('phone') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <lable>Image</lable>
                                <input type="file" name="image">
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
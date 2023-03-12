@extends('layouts.admin')

@section('content')

<div class="container mt-3">
    <div class="py-3">
        <div class="col-md-10">
            <div class="card justify-center my-5">
                <div class="card-header">
                    <div class="col-md-12">

                        <form action="{{ url('admin/update-doctor/'.$doctor->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="my-3">
                                <lable>Name</lable>
                                <input type="text" name="name" value="{{$doctor->name}}" class="form-control">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="my-3">
                                <lable>Speciality</lable>
                                <input type="text" value="{{$doctor->speciality}}" name="speciality"
                                    class="form-control">
                                @error('speciality') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <lable>Phone</lable>
                                <input type="tel" name="phone" value="{{$doctor->phone}}" class="form-control">
                                @error('phone') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <lable>Image</lable>
                                <input type="file" name="image"> <br><br>
                                <img src="{{ asset("$doctor->image") }}" value="{{ asset("$doctor->image") }}" alt="doctorImg" style="width:70px; height:70px;">
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
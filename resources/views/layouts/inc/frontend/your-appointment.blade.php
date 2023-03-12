@extends('layouts.admin')

@section('content')


<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">

    <div class="section-title my-3">
        <h2>Your Appointment Details</h2>
        @php $sno=1; @endphp
        @forelse($appointments as $appointment)
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4> Appointment No. <b style="color:blue;"> {{$sno}} </b> </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            
                                <tr class="text-center">
                                    <div class="row">
                                        <div class="col-md-4 form-group mt-3 mt-md-0">
                                            <th>Name</th>
                                        </div>
                                        <div class="col-md-4 form-group mt-3 mt-md-0">
                                            <th>Email</th>
                                        </div>
                                        <div class="col-md-4 form-group mt-3 mt-md-0">
                                            <th>Phone</th>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-4 form-group mt-3 mt-md-0">
                                        <th>Date</th>
                                    </div>
                                    <div class="col-md-4 form-group mt-3 mt-md-0">
                                        <th>Doctor</th>
                                    </div>
                                    <div class="col-md-4 form-group mt-3 mt-md-0">
                                        <th>Department</th>
                                    </div>
                                </div>
                           
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->email}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->date}}</td>
                                <td>{{$appointment->doctor->name}}</td>
                                <td>{{$appointment->department->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><span class="float-start mx-2">
                        <label><b> Message :- </b></label>
                        <td>{{$appointment->message}}</td>
                        </span>

                    </div>
                </div>
                @php $sno++; @endphp
            </div>
            <br><br>
            @empty
            <div class="col-md-12">
                <h3 style="color:red">No Appointment Booked</h3>
            </div>
            @endforelse

        </div>
    </div>
</section><!-- End Appointment Section -->

@endsection

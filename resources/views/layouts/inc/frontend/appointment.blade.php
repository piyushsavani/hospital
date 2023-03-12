<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Make a list of what you want to discuss. For example, do you have a new symptom you want to ask the doctor about? If you have more than a few items to discuss, put them in order and ask about the most important ones first</p>
        </div>

        @if($appointment)
        <div style="color:blue;" class="text-center mb-3"><h3> <a href="{{ url('your-appointment') }}">See Your Appointment</a></h3></div>
        @endif
        <form action="{{ url('appointment')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach                
              </select>
            </div>

            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                @endforeach
              </select>
            </div>

          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
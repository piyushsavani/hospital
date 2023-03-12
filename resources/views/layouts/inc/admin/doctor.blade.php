<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>We have all Department wise Doctors available as per their schedule.</p>
        </div>

        <div class="row">
          @forelse($doctors as $doctor)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset("$doctor->image")}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$doctor->name}}</h4>
                <span>{{$doctor->speciality}}</span>
              </div>
            </div>
          </div>
          @empty
          <div>
            <h3>No Doctors Found</h3>
          </div>
          @endforelse

        </div>

      </div>
</section>
    
    <!-- End Doctors Section -->
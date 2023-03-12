 <!-- ======= Departments Section ======= -->
 <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Following Department Exists</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>All kind of doctors are mostly available here everyday</p>
                </a>
              </li>
              @php $srno = 2; @endphp
              @forelse($departments as $department)
              @if($department->name !== 'Cardiology')
              <li class="nav-item mt-2">                
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-{{$srno}}">
                  <h4>{{$department->name}}</h4>
                  <p>{{$department->description}}</p>
                </a>
                @php $srno++; @endphp
              </li>
              @endif
              @empty
              <li>
                <h3>No Departments Found </h3>
              </li>
              @endforelse              
              
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>Cardio exercise, which is sometimes referred to as aerobic exercise, is any rhythmic activity that raises your heart rate into your target heart rate zone. This is the zone where you burn the most fat and calories. Some of the most common examples of cardio include walking, cycling, and swimming</p>
              </div>
              @php $sno=2; @endphp
              @foreach($departments as $department) 
              @if($department->name !== 'Cardiology')             
              <div class="tab-pane" id="tab-{{$sno}}">
                <h3>{{$department->name}}</h3>
                <p class="fst-italic">{{$department->description}}</p>
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>{{$department->details}}/p>
              </div>
              @php $sno++; @endphp
              @endif
              @endforeach
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
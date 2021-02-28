@extends('layout')
@section('content')

<section id="about" class="about">
<!-- section-->
    <section class="d-flex align-items-center">
    </section>

    <section id="why-us" class="why-us">

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Results for</h2>
            <h1>Results for Restaurants: </h1>
         </div>

        <div class="row">
          <div class="col-lg-12">
            @foreach ($restaurants as $key => $restaurant)
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <h3 style="color: black">{{ ++$i }}</h3>
                <h3 style="color: black">{{ $restaurant->restaurant_name }}</h3>
                <h3 style="color: black">{{ $restaurant->email }}</h3>
                <p>Döner, Turkse pizza, Italiaanse Pizza, Kapsalon</p>
                </div>
                @endforeach
          </div>
        </div>
      </div>

        <div class="container" data-aos="fade-up">

            <div class="row">
              <div class="col-lg-12">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span>01</span>
                    <h4>Hungry Hippo</h4>
                    <h5>about restaurant</h5>
                    <p>Döner, Turkse pizza, Italiaanse Pizza, Kapsalon</p>
                    </div>
              </div>
            </div>
          </div>

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Hungry Hippo</h4>
                        <h5>about restaurant</h5>
                        <p>Döner, Turkse pizza, Italiaanse Pizza, Kapsalon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </section>
@endsection

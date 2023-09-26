
@extends('./front.master')
      @section('content')

<section class="gallery">


        <div class="container">
            <h2 class="text-center">Gallery</h2>
            <div class="row justify-content-center   ">


            @foreach($services as $service)

            @if($loop->even && $loop->iteration % 3 != 0)
                <div class="col-lg-4">
                  <div class="img w-100">
                    <img src="{{asset($service::PATH.$service->image)}}" alt="" class="w-100">

                    <div class="description">
                        <h3>{{$service->name}}</h3>
                        <p>{{$service->description}}</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-7">
                    <div class="img w-100">
                      <img src="{{asset('front/assets/images/gallery-img2.png')}}" alt="" class="w-100">
  
                      <div class="description">
                          <h3>Sadia</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                            ex.consectetur adipisicing elit. Voluptatibus, ex.</p>
                      </div>
                    </div>
                  </div>



@elseif($loop->odd && $loop->iteration % 3 != 0)
                  <div class="col-lg-7">
                    <div class="img w-100">
                      <img src="{{asset($service::PATH.$service->image)}}" alt="" class="w-100">
  
                      <div class="description">
                          <h3>{{$service->name}}</h3>
                          <p>{{$service->description}}</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-lg-4">
                      <div class="img w-100">
                        <img src="{{asset('front/assets/images/gallery-img-4.png')}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>Sadia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                              ex.consectetur adipisicing elit. Voluptatibus, ex.</p>
                        </div>
                      </div>
                    </div>
@else
                    <div class="col-lg-4">
                      <div class="img w-100">
                        <img src="{{asset($service::PATH.$service->image)}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>{{$service->name}}</h3>
                            <p>{{$service->description}}.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="img w-100">
                        <img src="{{asset('front/assets/images/gallery-img-6.png')}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>Sadia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                              ex.consectetur adipisicing elit. Voluptatibus, ex.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="img w-100">
                        <img src="{{asset('front/assets/images/gallery-img7.png')}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>Sadia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                         .</p>
                        </div>
                      </div>
                    </div>
@endif
                  


                    @endforeach
            </div>
        </div>
    </section>

      @endsection('content')
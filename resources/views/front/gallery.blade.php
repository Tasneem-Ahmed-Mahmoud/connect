
@extends('./front.master')
      @section('content')

<section class="gallery">


        <div class="container">
            <h2 class="text-center">Gallery</h2>
            <div class="row justify-content-center   ">


            @foreach($services as $service)

           
                <div class="col-lg-4 col-md-6">
                  <div class="img w-100 ">
                    <img src="{{asset($service::PATH.$service->image)}}" alt="" class="w-100">

                    <div class="description">
                        <h3>{{$service->name}}</h3>
                        <p>{{$service->description}}</p>
                    </div>
                  </div>
                </div>

               


                    @endforeach
            </div>
        </div>
    </section>

      @endsection('content')
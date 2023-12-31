@extends('./dashboard.master')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Add Partener</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.partners.store')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name" >
                                  @error('name')
                                    <small class="text-danger">{{$mesage}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="logo"> Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" >
                                  @error('logo')
                                    <small class="text-danger">{{$mesage}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="service"> Service</label>
                                <select class="form-control" id="service" name="service_id" >
                                    <option disabled selected>Select Service</option>
                                    @foreach ( $services as $service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    
                                    @endforeach
                                      @error('service_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </select>
                            </div>
                            <button type="submit" class="btn ">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')
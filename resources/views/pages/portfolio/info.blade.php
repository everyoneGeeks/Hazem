@extends('layout.app',['title'=>'portfolio'] )
@section('content')

@component('components.panel',['subTitle'=>' portfolio '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <div class="text-center">
                @foreach($portfolio->images as $image)
                  <img class="profile-user-img img-fluid " src="{{asset($image->image)}}" alt="User profile picture">
                @endforeach  
                </div>


<video controls autoplay wight="300px" height="300px">
  <source src="{{$portfolio->video}}" type="video/mp4">
</video>
              

                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$portfolio->name}}</span> <b class="float-right"> project name    </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$portfolio->client}}</span> <b class="float-right">client name    </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$portfolio->description}}</span> <b class="float-right">description  </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$portfolio->url}}</span> <b class="float-right">link  </b>
                  </li>


                  <li class="list-group-item">
                    <span>{{$portfolio->date}}</span> <b class="float-right">date  </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$portfolio->services->name}}</span> <b class="float-right">services  </b>
                  </li>

                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      @endcomponent


 @endsection
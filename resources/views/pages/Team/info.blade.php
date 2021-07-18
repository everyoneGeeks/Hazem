
@extends('layout.app',['title'=>'team'] )
@section('content')

@component('components.panel',['subTitle'=>' team '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset($Team->image)}}" alt="User profile picture">
                </div>




                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$Team->name}}</span> <b class="float-right">name </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$Team->position}}</span> <b class="float-right">position </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$Team->facebook}}</span> <b class="float-right">facebook </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$Team->linkedin}}</span> <b class="float-right">linkedin </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$Team->twiter}}</span> <b class="float-right">twiter </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$Team->instgram}}</span> <b class="float-right">instgram </b>
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
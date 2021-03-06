@extends('layout.app',['title'=>'aboutUsBox'] )
@section('content')

@component('components.panel',['subTitle'=>' aboutUsBox'])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">


                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$aboutUsBox->name}}</span> <b class="float-left">name en   </b>
                  </li>


                  <li class="list-group-item">
                    <span>{{$aboutUsBox->name_ar}}</span> <b class="float-left">name  ar   </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$aboutUsBox->description}}</span> <b class="float-left">  description en </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$aboutUsBox->description_ar}}</span> <b class="float-left">  description ar </b>
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
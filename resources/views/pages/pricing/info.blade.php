
@extends('layout.app',['title'=>'pricing'] )
@section('content')

@component('components.panel',['subTitle'=>' pricing'])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">


            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">


                <ul class="list-group list-group-unbordered mb-3">

                     <li class="list-group-item">
                    <span>{{$pricing->name}}</span> <b class="float-left">name    </b>
                  </li>



                  <li class="list-group-item">
                    <span>{{$pricing->price}}</span> <b class="float-left">price    </b>
                  </li>


                  <li class="list-group-item">
                    <span>{{$pricing->service->name}}</span> <b class="float-left">services    </b>
                  </li>



                  <li class="list-group-item">
                    <span>{{$pricing->date}}</span> <b class="float-left">date    </b>
                  </li>




                  <li class="list-group-item">
                    <span>{{$pricing->list}}</span> <b class="float-left">list    </b>
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
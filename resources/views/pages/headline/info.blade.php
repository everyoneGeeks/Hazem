
@extends('layout.app',['title'=>'settings'] )
@section('content')

@component('components.panel',['subTitle'=>'  settings '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

          {{$setting->name}} 
                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">

                  <li class="list-group-item">
                    <span>{{$setting->value}}</span> <b class="float-left">  en  </b>
                  </li>


                  <li class="list-group-item">
                    <span>{{$setting->value_ar}}</span> <b class="float-left">  ar  </b>
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
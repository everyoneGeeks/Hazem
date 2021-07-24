@extends('layout.app',['title'=>'aboutUsBoxs '] )
@section('content')

@component('components.panel',['subTitle'=>'     aboutUsBoxs  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
<div class="text-center">

<img src="{{asset($aboutUsBox->image)}}" width=150px>
</div>
          <form role="form" action="{{route('aboutUsBox.edit.submit',$aboutUsBox->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name en </label>
                    <input type="text" class="form-control" id="InputNameAr" value=" {{$aboutUsBox->name}}" name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameAr"> name ar </label>
                    <input type="text" class="form-control" id="InputNameAr" value=" {{$aboutUsBox->name_ar}}" name="name_ar">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> description en </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$aboutUsBox->description}}" name="description">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> description ar </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$aboutUsBox->description_ar}}" name="description_ar">
                  </div>

                 <div class="form-group">
                    <label for="InputNameEn"> icon </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$aboutUsBox->image}}" name="image">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>
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
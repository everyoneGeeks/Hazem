
@extends('layout.app',['title'=>'Testimonials '] )
@section('content')

@component('components.panel',['subTitle'=>'   edit  Testimonials  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
<div class="text-center">

<img src="{{asset($Testimonials->image)}}" width=150px>
</div>
          <form role="form" action="{{route('testimonial.edit.submit',$Testimonials->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="InputNameAr"> name  </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$Testimonials->name}}" name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameAr"> client type </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$Testimonials->clientType}}" name="client">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> description  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$Testimonials->description}}" name="description">
                  </div>



                  <div class="form-group">

                    <label for="InputFile"> image Testimonials </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile" name="image">
                        <label class="custom-file-label" for="InputFile"> </label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">send</button>
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
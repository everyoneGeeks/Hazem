
@extends('layout.app',['title'=>'team '] )
@section('content')

@component('components.panel',['subTitle'=>'   edit  team  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
<div class="text-center">

<img src="{{asset($Team->image)}}" width=150px>
</div>
          <form role="form" action="{{route('team.edit.submit',$Team->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="InputNameAr"> name  </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$Team->name}}" name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameAr">  position </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$Team->position}}" name="position">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> facebook  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$Team->facebook}}" name="facebook">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> linkedin  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$Team->linkedin}}" name="linkedin">
                  </div>


                  <div class="form-group">
                    <label for="InputNameEn"> twiter  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$Team->twiter}}" name="twiter">
                  </div>


                  <div class="form-group">
                    <label for="InputNameEn"> instgram  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$Team->instgram}}" name="instgram">
                  </div>



                  <div class="form-group">

                    <label for="InputFile"> image team </label>
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
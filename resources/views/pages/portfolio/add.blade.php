@extends('layout.app',['title'=>'portfolio '] )
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>'   add  portfolio  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('portfolio.add.submit')}}" method="post" enctype="multipart/form-data" >
          @csrf
                     <div class="card-body">

                      <div class="form-group">
                        <label for="InputNameAr"> project name  </label>
                        <input type="text" class="form-control" id="InputNameAr"  name="name">
                      </div>

                      <div class="form-group">
                      <label for="InputNameAr"> client name  </label>
                        <input type="text" class="form-control" id="InputNameAr"  name="client">
                      </div>

                      <div class="form-group">
                        <label for="InputNameAr"> date</label>
                        <input type="date" class="form-control" id="InputNameAr"  name="date">
                      </div>

                      <div class="form-group">
                        <label for="InputNameEn"> description  </label>
                        <input type="text" class="form-control" id="InputNameEn"  name="description">
                      </div>


                      <div class="form-group">
                        <label for="InputNameEn"> url </label>
                        <input type="url" class="form-control" id="InputNameEn"  name="url">
                      </div>

                      <div class="form-group">
                        <label for="InputNameEn"> services  </label>
              
                        <select class="form-control" id="InputNameEn" name="services">

                        @foreach($services as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                        @endforeach

                        </select>
                      </div>                     

                      <div class="form-group">

                        <label for="InputFile"> image services </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="InputFile" name="images[]" multiple>
                            <label class="custom-file-label" for="InputFile"> </label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                 
                     
                     
                     
                      <div class="form-group">

                        <label for="InputFile"> video services </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="InputFile" name="video">
                            <label class="custom-file-label" for="InputFile"> </label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                     
                     
                     
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">add</button>
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
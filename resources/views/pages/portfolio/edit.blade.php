@extends('layout.app',['title'=>'portfolio '] )
@section('content')

@component('components.panel',['subTitle'=>'   edit  portfolio  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('portfolio.edit.submit',$portfolio->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="InputNameAr"> project name  </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$portfolio->name}}" name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameAr"> cluent name  </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$portfolio->client}}" name="client">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> description  </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$portfolio->description}}" name="description">
                  </div>


                  <div class="form-group">
                    <label for="InputNameEn"> link  </label>
                    <input type="url" class="form-control" id="InputNameEn" value="{{$portfolio->url}}" name="url">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> date  </label>
                    <input type="date" class="form-control" id="InputNameEn" value="{{$portfolio->date}}" name="date">
                  </div>
                
                
                
                @if($portfolio->services->name == 'Videography' )
                           <video controls autoplay width="300px" height="300px">
           <source src="{{$portfolio->video}}" type="video/mp4">
           </video>
         <div class="form-group">               

           <label for="InputNameEn"> video  </label>
           <input type="file" class="form-control" id="InputNameEn"  name="video">
          </div>
                
                @endif
                

                  <div class="form-group">
                        <label for="InputNameEn"> services  </label>
              
                        <select class="form-control" id="InputNameEn" name="services">

                        @foreach($services as $service)
                        @if($portfolio->services_id == $service->id)
                        <option value="{{$service->id}}" selected>{{$service->name}}</option>

                        @else 
                        <option value="{{$service->id}}">{{$service->name}}</option>

                        @endif
                        @endforeach

                        </select>
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

      @endcomponent


@if(!$portfolio->services->name == 'Videography')
      @component('components.panel',['subTitle'=>'   صور المنتج'])

<div class="row">
@foreach($portfolio->images as $image)
<div class="col-lg-3 text-center">
<div class="img" style="margin-bottom: 30px;">
<img src="{{asset($image->image)}}" width="100%" height="150px">
</div>
<a href="{{route('portfolio.delete.image',$image->id)}}" class="btn btn-danger">حذف</a>
</div>
@endforeach
</div>


@slot('footer')
<div class="col-lg-12">
<form action="{{route('portfolio.add.image',$portfolio->id)}}" method="post" 
enctype="multipart/form-data">
@csrf
<label for="img_ch" class="img_ch_lable">اضف صورة جديدة</label> 

<div class="form-group row col-md-12">
<div class="input-group mb-3 pro-input-image">
  <span class="up-title">
      <i class="fa fa-upload"></i>
  </span>
   <img id="pro-upload" class="pro_changeImage" src="{{asset('images/brand.jpg')}}" alt="صورة المنتج الرائيسية">
  <div class="custom-file">
      <input name="image" placeholder="اضف صورة" accept="image/*" onchange="prevImage(event)" type="file" class="custom-file-input pro-image" id="img_ch">
      <label class="custom-file-label" for="img_ch">اختر صورة</label>
  </div>
</div>
</div>


<button type="submit" class="btn btn-block btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> اضافة الصورة   </a>
</form>
</div>
@endslot

@endcomponent


@endif




 @endsection
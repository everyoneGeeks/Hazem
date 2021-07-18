
@extends('layout.app',['title'=>'Testimonials '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'  Testimonials '])
@if($Testimonials->isEmpty())

@component('components.empty',['section'=>' Testimonials ']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>name  </th>
            <th>client type </th>
            <th> image</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>  
@foreach($Testimonials as $Testimonial)
        <tr>
<th> <a href="/admin/testimonial/info/{{$Testimonial->id}}">{{$Testimonial->name}}</a></th>
<th> <a href="/admin/testimonial/info/{{$Testimonial->id}}"> {{$Testimonial->clientType}}</a></th>
<th> <img src="{{asset($Testimonial->image)}}" width=50px > </th>
<th> <a href="/admin/testimonial/edit/{{$Testimonial->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
        </tr>

        @endforeach  
        </tbody>

        </table>

@endif

@slot('footer')
<div class="col-lg-4">

<a  href="/admin/testimonial/add" class="btn btn-block btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> add Testimonials  </a>
</div>
@endslot

@endcomponent
 @endsection     

 @section('javascript')
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- page script -->
<script>
  $(function () {

    $('#example2').DataTable({
      "info" : true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "autoWidth": false
    });
  });
</script>

 @endsection
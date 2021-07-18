
@extends('layout.app',['title'=>'portfolio'])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>' portfolio '])
@if($portfolioList->isEmpty())

@component('components.empty',['section'=>' portfolio']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>project name </th>
            <th>description en </th>
            <th>client name</th>
            <th>services </th>
            <th> date</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>  
@foreach($portfolioList as $portfolio)

        <tr>
<th> <a href="/admin/portfolio/info/{{$portfolio->id}}">{{$portfolio->name}}</a></th>
<th> <a href="/admin/portfolio/info/{{$portfolio->id}}"> {{str_limit($portfolio->description,50,'...')}}</a></th>
<th> {{$portfolio->client}} </th>
<th> {{$portfolio->services->name}} </th>
<th> {{$portfolio->date}} </th>
<th>
 <a href="/admin/portfolio/edit/{{$portfolio->id}}" class="btn btn-block btn-info btn-flat"> edit </a>
 <a href="/admin/portfolio/delete/{{$portfolio->id}}" class="btn btn-block btn-danger btn-flat"> delete </a>
</th>
        </tr>

        @endforeach  
        </tbody>

        </table>

@endif

@slot('footer')
<div class="col-lg-4">

<a  href="/admin/portfolio/add" class="btn btn-block btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> add portfolio </a>
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
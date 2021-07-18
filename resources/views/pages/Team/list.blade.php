
@extends('layout.app',['title'=>'team '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'  team '])
@if($Teams->isEmpty())

@component('components.empty',['section'=>' team ']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>name  </th>
            <th>position</th>
            <th> image</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>  
@foreach($Teams as $team)
        <tr>
<th> <a href="/admin/team/info/{{$team->id}}">{{$team->name}}</a></th>
<th> <a href="/admin/team/info/{{$team->id}}"> {{$team->position}}</a></th>
<th> <img src="{{asset($team->image)}}" width=50px > </th>
<th> <a href="/admin/team/edit/{{$team->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
        </tr>

        @endforeach  
        </tbody>

        </table>

@endif

@slot('footer')
<div class="col-lg-4">

<a  href="/admin/team/add" class="btn btn-block btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> add team  </a>
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
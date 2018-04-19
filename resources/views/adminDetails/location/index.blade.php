
@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="fa fa-map-marker"> Location Management</h1>
@stop

@section('content')

<div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                         <a href="{{ route('location.create') }}" class="btn btn-success">Add Location </a>
                        </div>
                     @if (Session::has('message'))
                        <div id="alert" class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pre-scrollable">
                            <table width="100%" class="table table-bordered table-striped table-hover table-responsive" id="table">
                                <thead>
                                   
                                    <tr>
                                        <th>#</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> 
                               <tbody>
                             
                                <?php $i=1; foreach ($admin_locations as  $value) { ?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                        <td><?= $value->locationName; ?></td>
                                        <?php if($value->status){ ?>
                                         <td>Active</td>
                                         <?php } else { ?>
                                          <td>Deactive</td>
                                        <?php } ?>
                                        <td><a class="fa fa-pencil btn btn-success" href="{{url('/locations/location-edit')}}/<?= $value->id; ?>"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash btn btn-danger" href="{{url('/locations/venue-delete/')}}/<?= $value->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            </a>
                                            <a  class="fa fa-eye btn btn-primary" href="{{url('/locations/venue-detail')}}/<?= $value->id; ?>"> View Venue</a>&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                <?php } ?>

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    
        @stop
        

 <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
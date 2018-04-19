
@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="fa fa-map-marker"> Venue Management</h1>
@stop

@section('content')

<div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                         <a href="{{ url('admin/venue/datashow') }}/<?php echo $id;?>" class="btn btn-success btn-lg fa fa-plus"> Add New Venue </a>
                         <a href="{{ route('location.index') }}" class="btn btn-success btn-lg fa fa-eye">    View Location </a>
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
                                        <th>Venue</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> 
                               <tbody>
                             
                                <?php if($id){ $i=1; 
                                    foreach($venue_loc as $venue) {
                                   
                                    ?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                        <td><?= $venue->sub_location ?></td>
                                         <td><?=  $venue->location_name ?></td>
                                         <?php if($venue->v_status){?>
                                          <td>Active</td>
                                        <?php } else{?>
                                        <td>Deactive</td>
                                        <?php }?>
                                        <td><!-- a class="fa fa-pencil btn btn-success" href="{{url('/locations/venue-edit')}}/<?= $venue->id; ?>"></a> --><a class="fa fa-trash btn btn-danger" href="{{url('/locations/venue-delete')}}/<?= $venue->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            </a>
                                           
                                        </td>
                                    </tr>
                                    <?php } } else { echo "Data not founds!"; } ?>
                                </tbody>
                               
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
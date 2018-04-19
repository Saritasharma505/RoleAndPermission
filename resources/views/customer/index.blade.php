
@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <a href="{{URl('index')}}"><button type="button" class="btn btn-primary">ADD </button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Members List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Membership ID</th>
                                        <th>User Name</th>
                                        <th>Email Id</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Member Name</th>
                                       
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php $i=1; foreach ($user as $key => $value) {
                                    if($i%2==0){
                                   ?>
                                    <tr>
                                       <td><?php echo $i++  ;?></td>
                                        <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         
                                        <td width="130"><a class="fa fa-eye btn btn-primary" href="<?php echo url('admin/customer-view-message');?>/<?php echo $value->memberShipid;?>"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-envelope-open btn btn-danger" href="<?php echo url('admin/customer-view-message-show');?>/<?php echo $value->memberShipid;?>"></a></td>
                                    </tr>
                                    <?php }else { ?>
                                     <tr class="success">
                                       <td><?php echo $i++  ;?></td>
                                        <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->memberShipid;?></td>
                                         
                                        <td width="130"><a class="fa fa-eye btn btn-primary" href="<?php echo url('admin/customer-view-message');?>/<?php echo $value->memberShipid;?>"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-envelope-open btn btn-danger" href="<?php echo url('admin/customer-view-message-show');?>/<?php echo $value->memberShipid;?>"></a></td>
                                    </tr>

                                       <?php } } ?>
                                    
                                </tbody>

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                    
            <!-- /.row -->
        </div>
        @stop
        <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="fa fa-users"> Admin Management</h1>
@stop

@section('content')

<div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                         <a href="{{ route('admin.create') }}" class="btn btn-success">Add </a>
                        </div>
                     @if (Session::has('message'))
                        <div id="alert" class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pre-scrollable">
                            <table width="100%" class="table table-bordered table-striped table-hover table-responsive" id="table">
                                <thead>
                                    <?php $i=1; ?>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Location</th>
                                        <th>Action</th>

                                        
                                    </tr>
                                </thead> 
                               <tbody>
                                <?php $i=1; foreach($admins as $admin){?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                        <td><?= $admin->name;?></td>
                                         <td><?= $admin->email;?></td>
                                         <td><?= $admin->phone;?></td>
                                        <?php foreach($role as $rol){
                                            if($rol->id== $admin->role){?>
                                         <td><?= $rol->name;?></td>
                                         <?php }?>
                                         <?php }?>
                                    <?php foreach($location as $loc){
                                         if($loc->id == $admin->location) { ?>
                                         <td><?= $loc->sub_location;?></td>
                                        <?php  } ?>

                                        <?php } ?>

                                        <td><a  class="fa fa-pencil btn btn-success" href="{{ route('admin.edit',$admin->id) }}"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash btn btn-danger" href="{{ route('admin.destroy',$admin->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
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
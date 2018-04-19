@extends('adminlte::page')

@section('content_header')
    <h1 class="fa fa-users"> Admin Management</h1>
@stop

@section('content')
<link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
     
        
          <div class="row justify-content-center">
            <div class="col-md-7">
             <div class="container">
                <div class="panel panel-default">
                    <div class="panel-header"><a class="btn btn-success" href="{{ route('admin.index') }}">Back</a></div>
                    <div class="panel-body">
                    <div class="col-md-8 offset-2">
                    <?php foreach($admin_edit as $edit_ad)?>
                        <form role="form" method="post" action="{{ route('admin.update') }}">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input value="<?= $edit_ad->name?>" type="text" class="form-control" name="name" id="dsa_name" placeholder="Enter DSA Name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input type="email" value="<?= $edit_ad->email?>" class="form-control" name="email" id="dsa_email" placeholder="Enter Email-Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="dsa_pass" placeholder="Password" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" value="<?= $edit_ad->phone?>" name="phone" id="dsa_phone" placeholder="Enter Phone" required>
                                        </div>
                                       <div class="form-group">
                                            <label>Role</label>
                                            <select name="role"  class="form-control">
                                               
                                                <?php foreach($roles as $role){ ?>
                                                <option value="<?php echo $role->id;?>"><?php echo $role->name;?></option>
                                                <?php }?>
                                            </select>
                                          </div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="location" id="location" placeholder="Enter text">
                                               
                                                <?php foreach($locations as $location){ ?>
                                                <option value="<?php echo $location->id;?>"><?php echo $location->sub_location;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                     <input type="hidden" name="id" value="<?= $edit_ad->id ?>">
                                      <center>  <button type="submit" class="btn btn-info" name="submit">Update</button></center>
                                       
                                </form>
                            </div>
                         </div>   
                  </div>
              </div>
          </div>
           
      
    <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>
    
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop
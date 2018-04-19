@extends('adminlte::page')

@section('content_header')
    <h1 class="fa fa-map-marker"> Venue Management</h1>
@stop

@section('content')
<link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
     
        
          <div class="row justify-content-center">
            <div class="col-md-7">
             <div class="container">
                <div class="panel panel-default">
                    <div class="panel-header"><a class="btn btn-success" href="{{ route('location.index') }}">Back</a></div>
                    <div class="panel-body">
                    <div class="col-md-8 offset-2">
                   
                         <form  method="post" action="{{route('venue.store')}}">
                                        <?php echo csrf_field();?>
                                        <?php foreach($edit_venue as $edit){?>
                                       <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="locationName" id="locationName" placeholder="Enter text">
                                                <option selected><?php echo $edit->locationName;?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Venue Name</label>
                                            <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Venue Name" value="<?= $edit->parent_id?>" required>
                                        </div>
                                          <div class="form-group">
                                            <label>Status</label>&nbsp;&nbsp;&nbsp;
                                             <?php if($edit->status==1){?>
                                            <label class="radio-inline">
                                                
                                                <input name="status" checked id="active" value="<?php echo $edit->status;?>"  type="radio">Active
                                            </label>
                                            <?php }else { ?>
                                            <label class="radio-inline">
                                                 
                                                <input name="status" id="Deactive" value="1" type="radio">Active
                                            </label>
                                            <?php } if($edit->status==0) { ?>
                                            <label class="radio-inline">
                                                 
                                                <input name="status" id="Deactive" checked value="<?php echo $edit->status?>" type="radio">Deactive
                                            </label>
                                              <?php } else{ ?>
                                            <label class="radio-inline">
                                                 
                                                <input name="status" id="Deactive" value="0" type="radio">Deactive
                                            </label>
                                            <?php } ?>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $edit->id; ?>">
                                     <div class="form-group">
                                   <center>  <button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                                </div>
                          <?php }?>
                                </form>
                                <div class="row">
                                  </div>
                                 
                            </div>
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
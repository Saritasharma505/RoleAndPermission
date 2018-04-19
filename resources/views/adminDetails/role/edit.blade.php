@extends('adminlte::page')

@section('content_header')
    <h1 class="fa fa-users"> Roles Management</h1>
@stop

@section('content')

     <div id="page-wrapper">
        
          <div class="row justify-content-center">
            <div class="col-lg-12">
             <div class="container">
                <div class="panel panel-default">
                    <div class="panel-header"><a class="btn btn-success" href="{{ route('role.index') }}">Back</a></div>
                    <div class="panel-body">
                    <div class="col-md-8 offset-2">
                   
                         <form  method="post" action="{{ route('role.update') }}">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>Role Name</label>
                                            <input type="text" class="form-control" value="<?= $role_edit->name;?>" name="name" id="name" placeholder="Role Name" required>
                                        </div>
                 <div class="form-group {{ $errors->has('permissions') ? 'has-error' : ''}}">
                {!! Form::label('permissions', 'Permissions') !!}        
                {!! Form::select('permissions[]',$permissions, old('permissions')??$role_edit->permissions->pluck('name','name'), ('' == 'required') ? ['class' => 'form-control', 'required' => 'required','multiple'] : ['class' => 'form-control','multiple']) !!}
                     {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                  
                </div>
                                      <input type="hidden" name="id" value="">
                                     <div class="form-group">
                                   <center>  <button type="submit" class="btn btn-info" >Update</button></center>
                                </div>
                          
                                </form>
                                
                                 
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
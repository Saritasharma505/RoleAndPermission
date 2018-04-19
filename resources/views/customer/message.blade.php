@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($messages as $msg){ 
              if($msg->user_id==0){ ?>
            <div class="col-md-2 col-md-offset-2">Subject: <?php echo $msg->subject;?></div>
            <div class="col-md-2 col-md-offset-5"><?php echo $msg->message;?></div>
           <?php } else { ?>
           <div class="col-md-2 col-md-offset-2">Subject: <?php echo $msg->subject;?></div>
            <div class="col-md-2 col-md-offset-5"><?php echo $msg->message;?></div>
           <?php } }?>
            </div>

          </div>
          <!-- /. box -->
    </div> 
    <div class="col-md-6 col-md-offset-3">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Send Message</h3>
              @if(Session::has('status'))
                  <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('status') !!}</em></div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="post" action="{{ url('admin/send-message-user-admin-member')}}">
             
              <?php echo csrf_field();?>
              
              <div class="form-group">
                <input name="subject" class="form-control" placeholder="Subject:" required>
                <input name="member_id" class="form-control" type="hidden" value="<?php echo $messages[0]->member_id;?>">
                <input name="user_id" class="form-control" type="hidden" value="1">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 100px" required placeholder="Message">
                    </textarea>
              </div>
               <div class="box-footer">
              <div class="pull-right">
            
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
             
            </div>
             </form>
            </div>

            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
    </div>        
</div>


@stop
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>




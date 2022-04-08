@extends('admin.layout')
@section('heading')Profile @endsection
@section('title')Profile @endsection
@section('profile_css_link')<link rel="stylesheet" href="{{ asset('css/profile.css') }}">@endsection

@section('content')
      <div class="home-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="overview-boxes">
                <div class="box2">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle admin_picture" src="{{ asset('profile-image.png') }}" alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center admin_name">{{-- {{Auth::user()->name}} --}}{{ $LoginUserInfo['name'] }}</h3>
  
                  <p class="text-muted text-center"></p>

                  <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
                  <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn" style="font-weight:500;">Change picture</a>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            </div>
            <!-- /.col -->
            
            <div class="col-md-9 overview-boxes2">
              <div class="">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab" >Personal Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>
                  </ul>
                </div><!-- /.card-header -->

                
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                      <form class="form-horizontal" id="AdminInfoForm">
                        <input type="hidden" name="profile_id" id="profile_id">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ $LoginUserInfo['name'] }}" name="name">

                            <span class="text-danger error-text name_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{ $LoginUserInfo['email'] }}" name="email">
                            <span class="text-danger error-text email_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="change_password">
                        <form class="form-horizontal" id="changePasswordAdminForm">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                              <div class="input-row" style="margin-left:50px;"><input type="password" class="form-control" id="oldpasword" placeholder="Enter current password" name="oldpassword" style="width:500px">
                              </div><span class="text-danger error-text oldpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <div class="input-row" style="margin-left:50px;"> <input type="password" class="form-control" id="newpassword" placeholder="Enter new password" name="newpassword" style="width:500px">
                                </div><span class="text-danger error-text newpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="cnewpassword" class="col-sm-2 col-form-label"><div style="min-width:150px;">Confirm Password</div></label>
                            <div class="col-sm-10">
                                <div class="input-row" style="margin-left:50px;"><input type="password" class="form-control" id="cnewpassword" placeholder="Confirm password" name="cnewpassword" style="width:500px">
                                </div><span class="text-danger error-text cnewpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Update Password</button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(function(){
    $('#AdminInfoForm').on('submit',function(e){
      e.preventDefault();
      // alert('hi');
      $.ajax({
        data: $('#AdminInfoForm').serialize(),
        url: "{{ route('admin.details') }}",
        type: "POST",
        dataType: 'json',
        success: function (data) {
          // table.draw();
          $('#AdminInfoForm').ajax.reload(); 
            
        }
      });
    });
  });

</script>
    

@endsection

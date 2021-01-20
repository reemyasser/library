<div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div class="fpassword">
                <a href="#" onclick="$('#loginbox').hide(); $('#forgetpass').show()">Forgot password?</a>
            </div>
        </div>
        <div style="padding-top:30px" class="panel-body">
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
           
            <form id="loginform" class="form-horizontal" action="{{route('sign.in')}}" method="post">
               @csrf
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                   
                    <input id="login-username" value="{{old('email')}}" type="text" class="form-control" name="email" value="" placeholder="email" >
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input id="login-password" type="password" class="form-control" name="userpass" placeholder="password" >
                    @error('userpass')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                    </div>
                </div>
                @if (Session()->has('invalid'))
                    <span class="text-danger">
                        {{Session()->get('invalid')}}
                    </span>
                    @endif
                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                        <button id="btn-login" type="submit" class="btn btn-success">Login </button>
                       </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                            Don't have an account!
                            <a href="#signupbox"   onClick="$('#loginbox').hide(); $('#signupbox').show();  ">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
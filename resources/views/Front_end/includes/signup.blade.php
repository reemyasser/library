<div id="signupbox"  style="display:none; margin-top:50px" class="mainbox loginbox">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
            </div>
        </div>
        <div class="panel-body">
            <form id="signupform" class="form-horizontal" action="{{route('signup')}}" method="post">
               @csrf
                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input value="{{old('email')}}" type="email" class="form-control" name="email" placeholder="Email Address" required="pleas enter your email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-3 control-label"> Name</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" name="name" placeholder=" Name" required="">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-3 control-label"> User Name</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" name="username" placeholder="user Name" required="">
                        @error('username')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Password</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="password" id="pass" class="form-control" name='userpass' placeholder="Password" required="">
                        @error('userpass')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Confirm Password</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="password" id="confirmpass" class="form-control" name='confirmpass' placeholder="Password" required="">
                        @error('userpass')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div  id='result'></div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="signup-btn">
                        <button id="btn-signup" type="submit" class="btn btn-info">
                            <i class="icon-hand-right"></i> &nbsp; Sign Up</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
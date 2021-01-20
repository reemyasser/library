<div id="forgetpass"  style="display:none; margin-top:50px" class="mainbox loginbox">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">forget password</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                <a id="signinlink" href="#" onclick="$('#forgetpass').hide(); $('#loginbox').show()">Sign In</a>
            </div>
        </div>
        <div class="panel-body">
            <form id="signupform" class="form-horizontal" action="{{route('send.forgetpass')}}" method="post">
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
                    <!-- Button -->
                    <div class="signup-btn">
                        <button id="btn-signup" type="submit" class="btn btn-info">
                            <i class="icon-hand-right"></i> &nbsp; confirm</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
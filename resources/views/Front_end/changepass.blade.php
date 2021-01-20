<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

@include('Front_end.includes.header')


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
       @include('Front_end.includes.navbar')
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                        world of reading
                    </h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.html">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="login.html">sign in & sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- signin and signup form -->
        <div class="login-form section text-center">
            <div class="container">
               
              
                <h4 class="rad-txt">
                    <span class="abtxt1">Sign in</span>
                    <span class="abtext">sign up</span>
                </h4>
             
             
                <div id="forgetpass"  style=" margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">change password</div>
                           
                        </div>
                        <div class="panel-body">
                            @if (Session()->has('passmatch'))
                            <div class="alert alert-danger">
                                {{
                                    Session()->get('passmatch')
                                }}
                            </div>
                                
                            @endif
                            <form id="signupform" class="form-horizontal" action="{{route('save.pass',$id)}}" method="post">
                               @csrf
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input id="pass" type="password" class="form-control" name="password" placeholder="password" required="pleas enter your password">
                                       
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">comfirm password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input id="confirmpass" type="password" class="form-control" name="confirmpass" placeholder="confirmpassword" required="pleas enter your email">
                                       
                                    </div>
                                    
                                </div>
                                <div id="result" ></div>
                              
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
            </div>
        </div>
    </div>
    <!--//signin and signup form ends here-->
   
     <!-- footer -->
     @section('scripts')
      <script> 
       $(document).ready(function(){
       
      
      
        $('#confirmpass').keyup(function(){
            var vpass= $('#pass').val();
            if(vpass==$(this).val())
            {

                $('#result').html('matching');
                $("#result").css('color','green');
                
            }
            else{
                $('#result').html('not matching')
                $("#result").css('color','red');
            }
        });



       });
    </script>


<script>


    
</script>
   @endsection
   @include('Front_end.includes.footer')
   
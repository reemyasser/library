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
                @if (Session()->has('success'))

                <div class="alert alert-success">
                    {{Session()->get('success')}}</div>    
                @endif
                @if (Session()->has('log'))
                <div class="alert alert-danger">
                    {{Session()->get('log')}}</div>    
                @endif
                @if (Session()->has('created'))
                <div class="alert alert-success">
                    {{Session()->get('created')}}</div>    
                    
                @endif
                @if (Session()->has('checkmail'))
                <div class="alert alert-success">
                    {{Session()->get('checkmail')}}</div>    
                    
                @endif
              
                <h4 class="rad-txt">
                    <span class="abtxt1">Sign in</span>
                    <span class="abtext">sign up</span>
                </h4>
             
               @if (!Session()->has('failed'))
                   
              
               @include('Front_end.includes.login')
               @include('Front_end.includes.signup')
               
               @else

               @include('Front_end.includes.signup')
               @include('Front_end.includes.login')
             
               
                @endif
                @include('Front_end.includes.forgetpass')
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
   
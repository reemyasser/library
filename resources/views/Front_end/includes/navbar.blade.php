<nav class="navbar navbar-default navbar-fixed-top">
    <div class="main-nav">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Maktabty</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1>
                    <a class="navbar-brand" href="{{route('index')}}">Maktabty</a>
                </h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                <ul class="nav navbar-nav navbar-left cl-effect-15">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                   
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                   
                    
                   
                    <li>
                        <a href="{{route('contact')}}">Contact us</a>
                    </li>
                    @if (Session()->has('name'))
                    <li>
                        <a href="{{route('index')}}">
                            {{Session()->get('name')}}
                       </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Log out</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('login')}}" title="SignIn & SignUp">
                            <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                        </a>
                    </li>
                    @endif
                    

                </ul>
              
                <!-- shopping cart -->
               
                <!-- //shopping cart ends here -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </div>
        <!-- /.container -->
    </div>
</nav>
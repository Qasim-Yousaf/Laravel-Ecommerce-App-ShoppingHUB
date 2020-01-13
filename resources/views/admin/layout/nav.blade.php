 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span style="color:black;font-weight: bolder;">Shopping</span><i class="fa fa-shopping-cart" tyle="color:black;font-weight: bolder;"></i><span style="color: red;font-weight: bolder;">HUB</span> | <span style="color: blue;font-weight:bolder;">Dashboard</span></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"  style="color:black;"></i> <i class="fa fa-caret-down" style="color:black;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw" style="color: black;"></i><span  style="color:black;"> User Profile</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw" style="color: black;"></i><span  style="color:black;"> Settings</span></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('userhome')}}"><i class="fa fa-sign-out fa-fw" style="color:black;"></i><span  style="color:black;">logout</span></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                 </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ url(route('dashboard')) }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                        <a href="{{ url(route('banner')) }}"><i class="fa fa-sliders fa-fw"></i> Banner</a>
                        </li>
                        <li>
                            <a href="{{ url(route('product')) }}"><i class="fa fa-product-hunt fa-fw"></i> Product</a>
                        </li>
                        <li>
                            <a href="{{ url(route('category')) }}"><i class="fa fa-list-alt fa-fw"></i> Category</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Orders</a>
                        </li>
                        <li>
                            <a href="{{route('showAdminuser')}}"><i class="fa fa-user fa-fw"></i> User</a>
                        </li>
                         <li>
                            <a href="{{url(route('Admin_mass'))}}"><i class="fa fa-envelope fa-fw"></i> Massages</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Extra</a>
                        </li>
                        


                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!--  glyphicon-shopping-cart   -->
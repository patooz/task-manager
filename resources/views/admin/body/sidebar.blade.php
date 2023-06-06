<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ Auth::user()->profile_photo_url }}" alt="user-img" class="img-circle"><span class="hide-menu">{{ Auth::user()->name }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('profile.show') }}"><i class="ti-user"></i> My Profile</a></li>
                                
                                
                                
                                <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('/dashboard')}}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
      
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-blackboard"></i><span class="hide-menu">Projects</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('viewProject')}}">All Project</a></li>
                                <li><a href="{{route('addProject')}}">Add Project</a></li>
                                
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-notepad"></i><span class="hide-menu">Tasks</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('viewTask')}}">All Task</a></li>
                                <li><a href="{{route('addTask')}}">Add Task</a></li>
                                
                            </ul>
                        </li>
           
       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
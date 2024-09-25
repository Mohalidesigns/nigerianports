<div class="left-sidenav">
            <!-- LOGO -->
            <br>
            <div class="brand">
                <a href="#l" class="logo">
                <img src="https://cdn-degco.nitrocdn.com/ghmGkkkWhQfXFDltOjZCywtZqVmemXOg/assets/images/optimized/rev-cd4fe92/wp-content/uploads/2019/11/npa2.png" style="max-height:68px;height:auto;" alt="">

                </a>
            </div>
            <!--end logo-->
            <br><br>
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')"> <i data-feather="home" class="align-self-center menu-icon"></i><span> {{ __('Dashboard') }}</span></a>
                    </li>

                    <li>
                        <a href="{{route('npas.create')}}"><i data-feather="grid" class="align-self-center menu-icon"></i><span>New Registration</span></a>
                    </li>

                    <li>
                        <a href="{{route('npas.index')}}"><i data-feather="user" class="align-self-center menu-icon"></i><span>Registered Truck</span></a>
                    </li>
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Roles &amp; Permissions</li>
                    <li><a href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')"><i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a></li>
                    <li><a href="{{route('permission.index')}}" :active="request()->routeIs('permission.index')"><i data-feather="settings" class="align-self-center menu-icon"></i><span>Permission</span></a></li>
                    <li><a href="{{route('role.index')}}" :active="request()->routeIs('role.index')"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Roles</span></a></li>
                    <li><a href="{{route('user.index')}}" :active="request()->routeIs('user.index')"><i data-feather="user-plus" class="align-self-center menu-icon"></i><span>Users</span></a></li>

                    <li class="menu-label my-2">Truck Inspection Requirement</li>
                    <li><a href="{{ route('truck.index') }}"><i data-feather="home" class="align-self-center menu-icon"></i><span>View</span></a></li>

                 </ul>
            </div>
        </div>

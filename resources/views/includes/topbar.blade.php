<div class="topbar">
                <!-- Navbar -->
                <nav class="navbar-custom">
                    <ul class="list-unstyled topbar-nav float-end mb-0">


                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">{{ Auth::user()->name }}</span>
                                <img src="{{asset('admin/images/users/user-5.jpg')}}" alt="profile-user" class="rounded-circle thumb-xs" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">

                                <a class="dropdown-item" href="{{route('admin.profile.info')}}" :active="request()->routeIs('admin.account.info')"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i>  {{ __('My Account') }}</a>
                                <div class="dropdown-divider mb-0"></div>


                             <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i>
                            {{ __('Log Out') }}
                            </a>
                        </form>



                            </div>
                        </li>
                    </ul><!--end topbar-nav-->

                    <ul class="list-unstyled topbar-nav mb-0">
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li>
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
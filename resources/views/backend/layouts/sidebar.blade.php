
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        {{-- <img src="{{ asset('logo-light.png')}}" alt="user-img" title="avatar" class="avatar-md"> --}}
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">{{ auth()->user()->name ?? 'Not Found' }}</a>
                        </div>
                        <p class="text-muted">{{ strtoupper(auth()->user()->role) ?? 'Tidak Ada' }}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}" class="text-muted">
                                    <i class="mdi mdi-18px mdi-home"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#"
                                onclick="logout()"
                                >
                                    <i class="mdi mdi-18px mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ route('manage.candidate.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-book-open-page-variant"></i>
                                    <span> Manage Candidate </span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <script>
                function logout(){
                    if (confirm('Apakah anda ingin logout ?')) {                 
                        document.getElementById('logout-form').submit();   
                    }
                }
            </script>
            <!-- Left Sidebar End -->
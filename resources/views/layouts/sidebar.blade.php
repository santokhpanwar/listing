<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav p-2">
                            <div class="menu">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                    <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                    Dashboard
                                </a>
                            </div>
                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-columns-gap"></i></div>
                                    Business
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.listings.index') }}"><i class="bi bi-dash-lg me-2" ></i> All Businesses</a>
                                        <a class="nav-link" href="{{ route('admin.listings.create') }}"> <i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                           </div>

                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecategory" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    Categories
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsecategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="bi bi-dash-lg me-2"></i> All Categories</a>
                                        <a class="nav-link" href="{{ route('admin.categories.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                           </div>

                            <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseuser" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    Users
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseuser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="bi bi-dash-lg me-2"></i> All Users</a>
                                        <!-- <a class="nav-link" href="{{ route('admin.users.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a> -->
                                    </nav>
                                </div>
                            </div>

                            <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefaq" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    FAQ
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsefaq" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.faq.index') }}"><i class="bi bi-dash-lg me-2"></i> All FAQ</a>
                                        <a class="nav-link" href="{{ route('admin.faq.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                            </div>


                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="bi bi-file-earmark"></i></div>
                                    Pages
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a href="#" class="nav-link"><i class="bi bi-dash-lg me-2"></i> About</a>
                                    </nav>
                                </div>  
                           </div>                          
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <span>{{ Auth::user()->name }}</span></div>
                        <!-- Biznessbuzzer -->
                    </div>
                </nav>
            </div>
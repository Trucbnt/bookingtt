@php
    $segment = request()->segment(2);
    // dd($segment)
@endphp
<!--start startbar-menu-->
<div class="startbar-menu">
    <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
        <div class="d-flex align-items-start flex-column w-100">
            <!-- Navigation -->
            <ul class="navbar-nav mb-auto w-100">
                <li class="menu-label pt-0 mt-0">
                    <span>Main Menu</span>
                </li>

                <!-- Admin Dashboard -->
                <li class="nav-item {{ set_active(['dashboard', 'admin']) }}">
                    <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                        <i class="fa fa-tachometer menu-icon"></i>
                        <span>{{ __('messages.system.menu.adminDashboard') }}</span>
                    </a>
                </li>

                {{-- Account Management --}}
                <li class="nav-item">
                    <a class="nav-link {{ set_active(['user', 'staff', 'admin', 'role', 'permission'], 'active', 'admin') }}"
                        href="#sidebarAccountManagement" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="sidebarAccountManagement">
                        <i class="fa fa-users menu-icon"></i>
                        <span>Account Management</span>
                    </a>
                    <div class="collapse {{ set_active(['user', 'staff', 'admin', 'role', 'permission'], 'show', 'admin') }}"
                        id="sidebarAccountManagement">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['user'], 'active', 'admin') }}"
                                    href="{{ route('admin.user.index') }}">
                                    <i class="fa fa-user menu-icon"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['staff'], 'active', 'admin') }}"
                                    href="{{ route('admin.staff.index') }}">
                                    <i class="fas fa-user-friends menu-icon"></i>
                                    <span>Staffs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['admin'], 'active', 'admin') }}"
                                    href="{{ route('admin.admin.index') }}">
                                    <i class="fa fa-user-tie menu-icon"></i>
                                    <span>Admins</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['role'], 'active', 'admin') }}"
                                    href="{{ route('admin.role.index') }}">
                                    <i class="fas fa-key menu-icon"></i>
                                    <span>Roles</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['permission'], 'active', 'admin') }}"
                                    href="{{ route('admin.permission.index') }}">
                                    <i class="fas fa-lock menu-icon"></i>
                                    <span>Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- System -->
                <li class="nav-item">
                    <a class="nav-link {{ set_active(['menu'], 'active', 'admin') }}" href="#sidebarFoodManagement"
                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="sidebarFoodManagement">
                        <i class="fa fa-utensils menu-icon"></i> <!-- Icon thực phẩm -->
                        <span>Food</span>
                    </a>
                    <div class="collapse {{ set_active(['category'], 'show', 'admin') }}" id="sidebarFoodManagement">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['category'], 'active', 'admin') }}"
                                    href="{{ route('admin.category.index') }}">
                                    <i class="fa fa-list menu-icon"></i>
                                    <span>Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['Menu'], 'active', 'admin') }}"
                                    href="{{ route('admin.menu.index') }}">
                                    <i class="fa fa-utensils menu-icon"></i>
                                    <span>Menu</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link {{ set_active(['menu'], 'active', 'menu') }}"
                                    href="{{ route('admin.menu.index') }}">
                                    <i class="fa fa-utensils menu-icon"></i> <!-- Thay đổi icon ở đây -->
                                    <span>Menus</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ set_active(['blog']) }}">
                    <a class="nav-link" href="{{ route('admin.blog.index') }}">
                        <i class="fa fa-newspaper menu-icon"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <!-- System -->
                <li class="nav-item">
                    <a class="nav-link {{ set_active(['notification'], 'active', 'admin') }}"
                        href="#sidebarSystemManagement" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="sidebarSystemManagement">
                        <i class="fa fa-cogs menu-icon"></i>
                        <span>System</span>
                    </a>
                    <div class="collapse {{ set_active(['notification'], 'show', 'admin') }}"
                        id="sidebarSystemManagement">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ set_active(['notification'], 'active', 'admin') }}"
                                    href="{{ route('admin.notification.index') }}">
                                    <i class="fa fa-bell menu-icon"></i>
                                    <span>Notification</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end navbar-nav-->
        </div>
        <!--end d-flex-->
    </div>
    <!--end startbar-collapse-->
</div>
<!--end startbar-menu-->
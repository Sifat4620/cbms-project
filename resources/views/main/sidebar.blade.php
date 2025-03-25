<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <!-- User Information -->
        <div class="nav-user">
            <img src="../../assets/images/users/1.jpg" alt="" class="rounded-circle">
            <h5>John Doe</h5>
            <p>UI Developer</p>
            <div class="nav-user-option">
                <div class="setting-option">
                    <div data-toggle="dropdown">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    <div class="dropdown-menu animated flipInX">
                        <a class="dropdown-item" href="#">Account</a>
                        <a class="dropdown-item" href="#">Lock</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
                <!-- Notification Dropdown -->
                <div class="notification-option">
                    <div data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                    </div>
                    <div class="dropdown-menu animated flipInX">
                        <a class="dropdown-item" href="#">Email
                            <span class="badge badge-primary pull-right m-t-3">05</span>
                        </a>
                        <a class="dropdown-item" href="#">Feedback
                            <span class="badge badge-danger pull-right m-t-3">02</span>
                        </a>
                        <a class="dropdown-item" href="#">Reports
                            <span class="badge badge-warning pull-right m-t-3">02</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="metismenu" id="menu">
            <li class="nav-label">Main</li>

            <!-- Dashboard Menu -->
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                    <span class="badge badge-danger nav-badge">10</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('dashboard.index') }}">Dashboard Overview</a></li>
                </ul>
            </li>

            <!-- Product & Order Management -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="mdi mdi-cart"></i>
                    <span class="nav-text">Products & Orders</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('orders.index') }}">Orders</a></li>
                </ul>
            </li>

            <!-- Invoice & Payment Management -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="mdi mdi-file-document-box"></i>
                    <span class="nav-text">Invoices & Payments</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('invoices.index') }}">Invoices</a></li>
                    <li><a href="{{ route('payments.index') }}">Payments</a></li>
                </ul>
            </li>

            <!-- Support & Ticket Management -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="mdi mdi-help-circle"></i>
                    <span class="nav-text">Support & Tickets</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
                    <li><a href="{{ route('tickets.history') }}">Ticket History</a></li>
                </ul>
            </li>

            <!-- Financial Reports -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">Reports</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('reports.profit_loss') }}">Profit & Loss</a></li>
                    <li><a href="{{ route('reports.expenses') }}">Expenses</a></li>
                </ul>
            </li>

            <!-- Profile Management -->
            @can('manage_profile-view')
                <li><a href="{{ route('profile.index') }}"><i class="mdi mdi-account-circle"></i> <span class="nav-text">Profile</span></a></li>
            @endcan

            <!-- Admin Settings -->
            @role('admin')
                <li><a href="{{ route('settings.index') }}"><i class="mdi mdi-settings"></i> <span class="nav-text">System Settings</span></a></li>
                <li><a href="{{ route('backup.index') }}"><i class="mdi mdi-database"></i> <span class="nav-text">Database Backup</span></a></li>
            @endrole

            <!-- Future Additions Placeholder (Leave space for adding new sections) -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="mdi mdi-plus-circle"></i>
                    <span class="nav-text">Future Sections</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="#">Coming Soon</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>

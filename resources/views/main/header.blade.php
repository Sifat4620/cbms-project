<div class="header">
    <div class="nav-header">
        <div class="nav-control">
            <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span></div>
        </div>
    </div>
    <div class="header-content">
        <div class="header-left">
            <ul>
                <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                    <div class="drop-down animated bounceInDown">
                        <div class="dropdown-content-body">
                            <div class="header-search" id="header-search">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Move the account icon to the right -->
        <div class="header-right ml-auto"> <!-- ml-auto will push the element to the right -->
            <ul>
                <!-- Bell Notification (Email/SMS) -->
                <li class="icons">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-bell f-s-18" aria-hidden="true"></i>
                        <div class="pulse-css"></div>
                    </a>
                    <div class="drop-down animated bounceInDown">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <!-- Email Notification -->
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-email f-s-16"></i> 
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">New Email</div>
                                            <div class="notification-text">You have received a new email from support.</div>
                                        </div>
                                    </a>
                                </li>
                                
                                <!-- SMS Notification -->
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-message-text f-s-16"></i>
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:35 PM</small>
                                            <div class="notification-heading">New SMS</div>
                                            <div class="notification-text">You have a new SMS from your service provider.</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="text-center">
                                    <a href="#" class="more-link">See All Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- Account Profile Section -->
                <li class="icons">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-account f-s-20" aria-hidden="true"></i>
                    </a>
                    <div class="drop-down dropdown-profile animated bounceInDown">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                                            <i class="icon-power"></i> <span>Logout</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

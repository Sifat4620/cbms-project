@extends('main.master')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>Hello, <span>Welcome back!</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <!-- Clock Display Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Current Time: <span id="clock" class="text-primary"></span></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Metrics Section -->
        <div class="row">
            <!-- Product & Order Management -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Products <span class="pull-right"><i class="ion-android-cart f-s-30 text-primary"></i></span></h4>
                        <h6 class="m-t-20 f-s-14">{{ $totalProducts }} Products Available</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-info wow animated progress-animated w-{{ $productsPercentage }}pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Orders <span class="pull-right"><i class="ion-android-cart f-s-30 text-success"></i></span></h4>
                        <h6 class="m-t-20 f-s-14">{{ $totalOrders }} Orders</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-warning wow animated progress-animated w-{{ $ordersPercentage }}pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice & Payment Overview -->
        <div class="row">
            <!-- Total Invoices -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Invoices <span class="pull-right"><i class="ion-clipboard f-s-30 text-danger"></i></span></h4>
                        <h6 class="m-t-20 f-s-14">{{ $totalInvoices }} Invoices</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-danger wow animated progress-animated w-{{ $invoicesPercentage }}pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Payments <span class="pull-right"><i class="ion-cash f-s-30 text-success"></i></span></h4>
                        <h6 class="m-t-20 f-s-14">{{ $totalPayments }} Payments</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-{{ $paymentsPercentage }}pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Tickets Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Support Tickets <span class="pull-right"><i class="ion-help-circled f-s-30 text-info"></i></span></h4>
                        <h6 class="m-t-20 f-s-14">{{ $totalTickets }} Tickets</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-info wow animated progress-animated w-{{ $ticketsPercentage }}pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to update the clock every second
    function updateClock() {
        const clockElement = document.getElementById("clock");
        const currentTime = new Date();
        const hours = currentTime.getHours().toString().padStart(2, '0');
        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
        const seconds = currentTime.getSeconds().toString().padStart(2, '0');
        const timeString = `${hours}:${minutes}:${seconds}`;
        
        clockElement.textContent = timeString;
    }

    // Update the clock immediately and then every second
    updateClock();
    setInterval(updateClock, 1000);
</script>

@endsection

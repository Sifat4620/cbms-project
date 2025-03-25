<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BackupController;


// Login
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// User Management
Route::resource('users', UserController::class)->middleware('can:manage_users-view');
Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->middleware('role:admin');

// Product & Order Management
Route::resource('products', ProductController::class)->middleware('can:manage_products-view');
Route::resource('orders', OrderController::class)->middleware('can:manage_orders-view');
Route::get('client/orders', [OrderController::class, 'clientOrders'])->name('client.orders')->middleware('can:manage_client_orders-view');

// Invoice & Payment Management
Route::resource('invoices', InvoiceController::class)->middleware('can:view_invoices-view');
Route::resource('payments', PaymentController::class)->middleware('can:view_payments-view');

// Support & Ticket Management
Route::resource('tickets', TicketController::class)->middleware('can:manage_tickets-view');
Route::get('tickets/history', [TicketController::class, 'history'])->name('tickets.history')->middleware('can:view_ticket_history-view');

// Financial Reports
Route::get('reports/profit_loss', [ReportController::class, 'profitLoss'])->name('reports.profit_loss')->middleware('can:view_reports-view');
Route::get('reports/expenses', [ReportController::class, 'expenses'])->name('reports.expenses')->middleware('can:view_reports-view');

// Profile Management
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('can:manage_profile-view');

// Admin-specific Routes
Route::get('settings', [SettingsController::class, 'index'])->name('settings.index')->middleware('role:admin');
Route::get('backup', [BackupController::class, 'index'])->name('backup.index')->middleware('role:admin');

<?php

use App\Livewire\BlogDetail;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}', ShowService::class)->name('servicePage');
Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/blog', ShowBlog::class)->name('blog');
Route::get('/blog/{id}', BlogDetail::class)->name('blogdetail');
Route::get('/faqs', ShowFaqPage::class)->name('faqs');
Route::get('/contact', ShowContactPage::class)->name('contact');
Route::get('/page/{id}', ShowPage::class)->name('page');



Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

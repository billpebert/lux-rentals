<?php

use Illuminate\Support\Facades\Route;

// Single file livewire component
Route::livewire('/', 'pages::public.homepage')->name('home');
Route::livewire('/blog', 'pages::public.blog.index')->name('blog');
Route::livewire('/contact-us', 'pages::public.contact-us')->name('contact-us');
Route::livewire('/our-fleet', 'pages::public.our-fleet')->name('our-fleet');

// Car Hire
Route::livewire('/car-hire', 'pages::public.car-hire.index')->name('car-hire');
Route::livewire('/car-hire/{slug}', 'pages::public.car-hire.booking')->name('car-hire.booking');

// Static pages
Route::view('/about-us', 'pages.public.about-us')->name('about-us');
Route::view('/wedding-car-hire', 'pages.public.services.wedding-car-hire')->name('wedding-car-hire');
Route::view('/events-car-hire', 'pages.public.services.events-car-hire')->name('events-car-hire');
Route::view('/chauffeur-service', 'pages.public.services.chauffeur-service')->name('chauffeur-service');
Route::view('/corporate-car-hire', 'pages.public.services.corporate-car-hire')->name('corporate-car-hire');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

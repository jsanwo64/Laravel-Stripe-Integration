<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stripe-payment', [App\Http\Controllers\StripeController::class, 'index'])->name('stripe.payment');

Route::post('/stripe-payment', [App\Http\Controllers\StripeController::class, 'createCheckoutSession'])->name('stripe.payment.create');

Route::get('/stripe-payment/success', [App\Http\Controllers\StripeController::class, 'success'])->name('stripe.payment.success');

Route::get('/stripe-payment/cancel', [App\Http\Controllers\StripeController::class, 'cancel'])->name('stripe.payment.cancel');
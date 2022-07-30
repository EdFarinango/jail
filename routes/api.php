<?php

use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\AvatarController;
use Illuminate\Support\Facades\Route;





Route::prefix('v1')->group(function ()
{

    require __DIR__ . '/auth.php';

    Route::middleware(['auth:sanctum'])->group(function ()
    {

        Route::prefix('profile')->group(function ()
        {
            Route::controller(ProfileController::class)->group(function ()
            {
                Route::get('/', 'show')->name('profile');
                Route::post('/', 'store')->name('profile.store');
            });
            Route::post('/avatar', [AvatarController::class, 'store'])->name('profile.avatar');


        });
    });
});





<?php

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| These Routes are common routes
|
 */

/*
 * Temporary dummy route for testing SPA.
 */

Route::prefix('web-user')->namespace ('User')->group(function () {

    Route::get('login', 'WebUserControllerController@viewLogin');


});

 Route::any('pay-with-moyasar', 'MoyasarController@payWithMoyasar')->name('moyasar.payment');
  Route::any('payment-user', 'MoyasarController@paymentUser');
 Route::any('payment-process', 'MoyasarController@addMoneyToWallet')->name('moyasar.process.payment');
 Route::get('moyasar-success', 'MoyasarController@success');
 Route::get('moyasar-failed', 'MoyasarController@failed');





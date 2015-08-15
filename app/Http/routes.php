<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/', 'Auth\AuthController@Authenticate');

Route::get('/', 'TradeController@Bitcoin');


Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/profile', 'UserController@Info');

Route::post('/profile', 'UserController@UpdateInfo');

Route::get('/password', 'UserController@ChangePassword');

Route::post('/password', 'UserController@UpdatePassword');

Route::get('/fund', 'UserController@fund');

Route::get('/fund/history', 'UserController@fundHistoryShow');

Route::post('/fund/history', 'UserController@fundHistory');

Route::get('/fund/deposit/btc', 'UserController@depositBitcoinShow');

Route::post('/fund/deposit/btc', 'UserController@depositBitcoin');

Route::get('/fund/withdraw/btc', 'UserController@withdrawBitcoinShow');

Route::post('/fund/withdraw/btc', 'UserController@withdrawBitcoin');

Route::get('/fund/deposit/irr', 'UserController@depositRialShow');

Route::post('/fund/deposit/irr', 'UserController@depositRial');

Route::get('/fund/withdraw/irr', 'UserController@withdrawRialShow');

Route::post('/fund/withdraw/irr', 'UserController@withdrawRial');


Route::get('/bank/irr', 'UserController@bankIrr');

Route::post('/bank/irr', 'UserController@addBankIrr');

Route::get('/bank/irr/delete{id}', 'UserController@deleteBankIrr');

Route::get('/bank/btc', 'UserController@addressBtc');

Route::post('/bank/btc', 'UserController@addAddressBtc');

Route::get('/bank/btc/delete{id}', 'UserController@deleteAddressBtc');


Route::post('/user/update/balance', 'UserController@updateBalance');


Route::get('/trade/webmoney', 'TradeController@Webmoney');

Route::get('/trade/bitcoin', 'TradeController@Bitcoin');

Route::post('/trade/bitcoin/sell', 'TradeController@sellBitcoin');

Route::post('/trade/bitcoin/buy', 'TradeController@buyBitcoin');

Route::post('/trade/bitcoin/bitcoin-list', 'TradeController@getBitcoinTable');

Route::post('/trade/bitcoin/active-trades', 'TradeController@getBitcoinActiveTrades');

Route::get('/trade/perfectmoney', 'TradeController@Perfectmoney');

Route::get('/trades/active', 'UserController@activeTradesShow');

Route::post('/trades/active', 'UserController@activeTrades');

Route::get('/trades/history', 'UserController@tradeHistoryShow');

Route::post('/trades/history', 'UserController@tradeHistory');

Route::post('/trade/update/cancel', 'TradeController@cancelTrade');


Route::get('/admin/dashboard', 'AdminController@dashboard');
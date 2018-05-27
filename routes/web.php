<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/', 'AdminsController@index')->middleware('auth');

Route::get('admin', 'AdminsController@index')->middleware('auth');

Route::get('admin_admins', 'AdminsController@admins')->middleware('auth');

Route::get('admin_groups', 'GroupsController@index')->middleware('auth');

Route::get('admin_group_new', 'GroupsController@newGroup')->middleware('auth');

Route::get('admin_group_edit/{id}', 'GroupsController@editGroup')->middleware('auth');

Route::get('admin_group_posts/{id}', 'GroupsController@groupPosts')->middleware('auth');

Route::post('admin_group_post_store', 'GroupsController@postStore')->middleware('auth');

Route::post('admin_group_store', 'GroupsController@store')->middleware('auth');

Route::post('admin_group_update', 'GroupsController@update')->middleware('auth');

Route::post('admin_upload_group_gallery', 'GroupsController@upload')->middleware('auth');


Route::get('admin_events', 'EventsController@index')->middleware('auth');

Route::get('admin_event_new', 'EventsController@newEvent')->middleware('auth');

Route::get('admin_event_edit/{id}', 'EventsController@editEvent')->middleware('auth');

Route::post('admin_event_store', 'EventsController@store')->middleware('auth');

Route::post('admin_event_update', 'EventsController@update')->middleware('auth');

Route::post('admin_upload_event_gallery', 'EventsController@upload')->middleware('auth');

Route::get('admin_bespoke_product_categories', 'BespokeProductCategoriesController@index')->middleware('auth');

Route::get('admin_bespoke_product_category_new', 'BespokeProductCategoriesController@newBespokeProductCategory')->middleware('auth');

Route::get('admin_bespoke_product_category_edit/{id}', 'BespokeProductCategoriesController@editBespokeProductCategory')->middleware('auth');

Route::post('admin_bespoke_product_category_store', 'BespokeProductCategoriesController@store')->middleware('auth');

Route::post('admin_bespoke_product_category_update', 'BespokeProductCategoriesController@update')->middleware('auth');


Route::get('admin_waitlisted_product_categories', 'WaitlistedProductCategoriesController@index')->middleware('auth');

Route::get('admin_waitlisted_product_category_new', 'WaitlistedProductCategoriesController@newWaitlistedProductCategory')->middleware('auth');

Route::get('admin_waitlisted_product_category_edit/{id}', 'WaitlistedProductCategoriesController@editWaitlistedProductCategory')->middleware('auth');

Route::post('admin_waitlisted_product_category_store', 'WaitlistedProductCategoriesController@store')->middleware('auth');

Route::post('admin_waitlisted_product_category_update', 'WaitlistedProductCategoriesController@update')->middleware('auth');



Route::get('admin_bespoke_products', 'BespokeProductsController@index')->middleware('auth');

Route::get('admin_bespoke_product_new', 'BespokeProductsController@newBespokeProduct')->middleware('auth');

Route::get('admin_bespoke_product_edit/{id}', 'BespokeProductsController@editBespokeProduct')->middleware('auth');

Route::post('admin_bespoke_product_store', 'BespokeProductsController@store')->middleware('auth');

Route::post('admin_bespoke_product_update', 'BespokeProductsController@update')->middleware('auth');

Route::post('admin_upload_bespoke_product_gallery', 'BespokeProductsController@upload')->middleware('auth');


Route::get('admin_waitlisted_products', 'WaitlistedProductsController@index')->middleware('auth');

Route::get('admin_waitlisted_product_new', 'WaitlistedProductsController@newWaitlistedProduct')->middleware('auth');

Route::get('admin_waitlisted_product_edit/{id}', 'WaitlistedProductsController@editWaitlistedProduct')->middleware('auth');

Route::post('admin_waitlisted_product_store', 'WaitlistedProductsController@store')->middleware('auth');

Route::post('admin_waitlisted_product_update', 'WaitlistedProductsController@update')->middleware('auth');

Route::post('admin_upload_waitlisted_product_gallery', 'WaitlistedProductsController@upload')->middleware('auth');



Route::get('admin_waitlisted_product_requests', 'WaitlistedProductsController@requests')->middleware('auth');

Route::post('admin_waitlisted_product_request_update_admin', 'WaitlistedProductsController@updateAdmin')->middleware('auth');

Route::post('admin_waitlisted_product_request_update_status', 'WaitlistedProductsController@updateStatus')->middleware('auth');

Route::get('admin_bespoke_product_requests', 'BespokeProductsController@requests')->middleware('auth');

Route::post('admin_bespoke_product_request_update_admin', 'BespokeProductsController@updateAdmin')->middleware('auth');

Route::post('admin_bespoke_product_request_update_status', 'BespokeProductsController@updateStatus')->middleware('auth');


Route::get('admin_vpas', 'VpasController@index')->middleware('auth');

Route::post('admin_vpa_update_admin', 'VpasController@updateAdmin')->middleware('auth');

Route::post('admin_vpa_update_status', 'VpasController@updateStatus')->middleware('auth');

Route::get('admin_airport_concierge', 'AirportConciergeController@index')->middleware('auth');

Route::post('admin_airport_concierge_update_admin', 'AirportConciergeController@updateAdmin')->middleware('auth');

Route::post('admin_airport_concierge_update_status', 'AirportConciergeController@updateStatus')->middleware('auth');

Route::get('admin_bespoke_travel', 'BespokeTravelsController@index')->middleware('auth');

Route::post('admin_bespoke_travel_update_admin', 'BespokeTravelsController@updateAdmin')->middleware('auth');

Route::post('admin_bespoke_travel_update_status', 'BespokeTravelsController@updateStatus')->middleware('auth');

Route::get('admin_personal_shoppings', 'PersonalShoppingsController@index')->middleware('auth');

Route::post('admin_personal_shopping_update_admin', 'PersonalShoppingsController@updateAdmin')->middleware('auth');

Route::post('admin_personal_shopping_update_status', 'PersonalShoppingsController@updateStatus')->middleware('auth');


Route::get('admin_wardrobe_stylings', 'WardrobeStylingsController@index')->middleware('auth');

Route::post('admin_wardrobe_styling_update_admin', 'WardrobeStylingsController@updateAdmin')->middleware('auth');

Route::post('admin_wardrobe_styling_update_status', 'WardrobeStylingsController@updateStatus')->middleware('auth');



Route::get('admin_experiences', 'ExperiencesController@index')->middleware('auth');

Route::get('admin_experience_new', 'ExperiencesController@newExperiences')->middleware('auth');

Route::get('admin_experience_edit/{id}', 'ExperiencesController@editExperiences')->middleware('auth');

Route::post('admin_experience_store', 'ExperiencesController@store')->middleware('auth');

Route::post('admin_experience_update', 'ExperiencesController@update')->middleware('auth');

Route::post('admin_upload_experience_gallery', 'ExperiencesController@upload')->middleware('auth');

Route::post('get_state', 'LocationsController@getState')->middleware('auth');


Route::get('admin_customers', 'CustomersController@activeCustomers')->middleware('auth');

Route::get('admin_guests', 'CustomersController@guestCustomers')->middleware('auth');

Route::get('admin_merchant_category_new', 'MerchantCategoriesController@newMerchantCategory')->middleware('auth');

Route::get('admin_merchant_categories', 'MerchantCategoriesController@index')->middleware('auth');

Route::post('admin_merchant_categories_store', 'MerchantCategoriesController@store')->middleware('auth');

Route::get('admin_merchants', 'MerchantsController@index')->middleware('auth');

Route::get('admin_subscriptions', 'SubscriptionsController@index')->middleware('auth');

Route::get('admin_merchants_offers', 'MerchantOffersController@index')->middleware('auth');

Route::get('admin_merchant_new', 'MerchantsController@newMerchant')->middleware('auth');

Route::get('admin_offer_new/{merchant_id}', 'MerchantOffersController@newOffer')->middleware('auth');

Route::post('admin_offer_store', 'MerchantOffersController@store')->middleware('auth');

Route::get('admin_offer_edit/{id}', 'MerchantOffersController@edit')->middleware('auth');

Route::post('admin_offer_update', 'MerchantOffersController@update')->middleware('auth');

Route::post('admin_merchant_store', 'MerchantsController@store')->middleware('auth');

Route::get('admin_merchant_edit/{id}', 'MerchantsController@edit')->middleware('auth');

Route::post('admin_merchant_update', 'MerchantsController@update')->middleware('auth');

Route::post('admin_upload_merchant_gallery', 'MerchantsController@upload')->middleware('auth');

Route::get('admin_activate_account/{id}', 'AdminsController@activateAccount')->middleware('auth');

Route::get('admin_deactivate_account/{id}', 'AdminsController@deactivateAccount')->middleware('auth');

Route::get('admin_admin_new', 'AdminsController@newAdmin')->middleware('auth');

Route::post('admin_admin_store', 'AdminsController@store')->middleware('auth');

Route::post('admin_login', 'UsersController@adminAuthenticate');

Route::get('logout', 'UsersController@logout');




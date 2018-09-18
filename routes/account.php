<?php

Route::prefix('project')->group(function()
{
    Route::get('/', 'ProjectController@index');

});

Route::prefix('theory')->group(function ()
{
    Route::get('/', 'TheoryController@index');
});

Route::prefix('forms')->group(function ()
{
    Route::get('/', 'FormsController@index');
});

Route::prefix('design')->group(function()
{
    Route::get('/', 'DesignController@index');
});

Route::prefix('company_identity')->group(function()
{
    Route::get('/', 'CompanyIdentityController@index');
});

Route::prefix('budget')->group(function()
{
    Route::get('/', 'BudgetController@index');
});

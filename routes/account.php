<?php

Route::prefix('project')->group(function()
{
    Route::get('/', 'ProjectController@index');
    Route::get('/food', 'ProjectController@food');
    Route::get('/transport', 'ProjectController@transport');
    Route::get('/technology', 'ProjectController@technology');
    Route::get('/health', 'ProjectController@health');
    Route::get('/agroindustry', 'ProjectController@agroindustry');
    Route::get('/esthetic', 'ProjectController@esthetic');

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
    Route::get('/logo', 'DesignController@logo');
    Route::get('/color', 'DesignController@color');
    Route::get('/typography', 'DesignController@typography');
    Route::get('/infographic', 'DesignController@infographic');
});

Route::prefix('company_identity')->group(function()
{
    Route::get('/', 'CompanyIdentityController@index');
    Route::get('/mission', 'CompanyIdentityController@mission');
    Route::get('/vision', 'CompanyIdentityController@vision');
    Route::get('/quality-policy', 'CompanyIdentityController@qualityPolicy');
    Route::get('/organizational-structure', 'CompanyIdentityController@organizationalStructure');
});

Route::prefix('budget')->group(function()
{
    Route::get('/', 'BudgetController@index');
});

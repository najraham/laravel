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

Route::get('/', 'FrontendPagesController@show_index')->name('showIndex');

Route::get('/about', 'FrontendPagesController@show_about')->name('showAbout');

Route::get('/work', 'FrontendPagesController@show_work')->name('showWork');

Route::get('/contact' , 'FrontendPagesController@show_contact')->name('show_contact');

Route::get('/blogs' , 'FrontendPagesController@show_blogs')->name('show_blogs');

Route::get('/blog/id={id}' , 'FrontendPagesController@show_single_blog')->name('show_single_blog');

Route::get('/newblog' , 'FrontendPagesController@new_blog')->name('show_new_blog_page');

// MESSAGE

Route::post('/sendMessage' , 'MessageController@send_message')->name('send_message');

// BLOG

Route::get('/delete_blog/id={id}' , 'BlogsController@delete_blog')->name('delete_blog');

Route::post('/add_blog' , 'BlogsController@add_blog')->name('add_blog');

// DASHBOARD

Route::get('/dashboard' , 'DashboardController@show_dashboard_index')->name('show_dashboard_index');

Route::get('/newUser' , 'DashboardController@add_user')->name('show_add_user_page');

Route::get('/blog' , 'DashboardController@blogs')->name('show_blog');


    // index

    Route::get('/showIndex' , 'DashboardController@show_index')->name('show_index');

    Route::get('/editIndex/id={id}' , 'DashboardController@show_edit_index')->name('show_edit_index');

    Route::post('/editIndexDone' , 'DashboardController@edit_index')->name('edit_index');

    // work

    Route::get('/showWork' , 'DashboardController@show_work')->name('show_work');

    Route::get('/editWork/id={id}' , 'DashboardController@show_edit_work')->name('show_edit_work');

    Route::post('/editWorkDone' , 'DashboardController@edit_work')->name('edit_work');

    // about

    Route::get('/showAbout' , 'DashboardController@show_about')->name('show_about');

    Route::get('/editAbout/id={id}' , 'DashboardController@show_edit_about')->name('show_edit_about');

    Route::post('/editAboutDone' , 'DashboardController@edit_about')->name('edit_about');

    // projects

    Route::get('/showProjects' , 'DashboardController@projects')->name('show_projects');

    Route::get('/editProjects/id={id}' , 'DashboardController@show_edit_project')->name('show_edit_project');

    Route::post('/editProject' , 'DashboardController@edit_project')->name('edit_project');

    Route::get('/deleteProjects/id={id}' , 'DashboardController@delete_project')->name('delete_project');

    Route::get('/addProject' , 'DashboardController@add_project')->name('add_project');

    Route::post('/addNewProject' , 'DashboardController@add_new_project')->name('add_new_project');

    // skills

    Route::get('/showSkill' , 'DashboardController@skill')->name('show_skill');

    Route::get('/editSkill/id={id}' , 'DashboardController@show_edit_skill')->name('show_edit_skill');

    Route::post('/editSkill' , 'DashboardController@edit_skill')->name('edit_skill');

    Route::get('/deleteSkill/id={id}' , 'DashboardController@delete_skill')->name('delete_skill');

    Route::get('/addSkill' , 'DashboardController@add_skill')->name('add_skill');

    Route::post('/addNewSkill' , 'DashboardController@add_new_skill')->name('add_new_skill');

// AUTH

Auth::routes();

// Route::get('/home', 'DashboardController@show_dashboard_index')->name('home');

// USER

Route::post('/newUserAdded' , 'UserController@add_user')->name('add_new_user');

Route::get('/deleteUser/id={id}' , 'UserController@delete_user')->name('delete_user');

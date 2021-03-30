<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('yeneta/registrar')->group(function(){
    Route::get('/login', 'Auth\RegistrarLoginController@showLoginForm')->name('registrar.login');
    Route::post('/login', 'Auth\RegistrarLoginController@login')->name('registrar.login.submit');

    Route::get('/', 'RegistrarController@index')->name('index'); 
    Route::get('/register', 'RegistrarController@registerStudent')->name('register');
    Route::get('/students', 'RegistrarController@listStudents')->name('students');
    Route::get('/grades', 'RegistrarController@viewGrades')->name('grades');
    Route::get('/payment', 'RegistrarController@payment')->name('payment');
    Route::get('/announcement', 'RegistrarController@announcement')->name('announcement');
});

Route::prefix('yeneta/instructor')->group(function(){
    Route::get('/login', 'Auth\InstructorLoginController@showLoginForm')->name('instructor.login');
    Route::post('/login', 'Auth\InstructorLoginController@login')->name('instructor.login.submit');

    Route::get('/', 'InstructorController@index')->name('index');
    Route::get('/courses', 'InstructorController@viewCourses')->name('courses');
    Route::get('/students', 'InstructorController@viewStudents')->name('students');
    Route::get('/grades', 'InstructorController@fillGrades')->name('grades');
    Route::get('/announcement', 'InstructorController@announcement')->name('announcement');
});

Route::prefix('yeneta/student')->group(function(){
    Route::get('/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Auth\StudentLoginController@login')->name('student.login.submit');

    Route::get('/', 'StudentController@index')->name('student');
});

Route::prefix('yeneta/dean')->group(function(){
    Route::get('/login', 'Auth\DeanLoginController@showLoginForm')->name('dean.login');
    Route::post('/login', 'Auth\DeanLoginController@login')->name('dean.login.submit');

    Route::get('/', 'DeanController@index')->name('index');
    Route::get('/statistics', 'DeanController@viewStats')->name('statistics');
    Route::get('/studentsGrades', 'DeanController@viewGrades')->name('grades');
    Route::get('/payments', 'DeanController@viewPayment')->name('payments');
});

Route::prefix('yeneta/finance')->group(function(){
    Route::get('/login', 'Auth\FinanceLoginController@showLoginForm')->name('finance.login');
    Route::post('/login', 'Auth\FinanceLoginController@login')->name('finance.login.submit');

    Route::get('/', 'FinanceController@index')->name('finance');
});


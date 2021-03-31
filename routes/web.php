<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('yeneta/registrar')->group(function(){
    Route::get('/login', 'Auth\RegistrarLoginController@showLoginForm')->name('registrar.login');
    Route::post('/login', 'Auth\RegistrarLoginController@login')->name('registrar.login.submit');
<<<<<<< HEAD
=======
    
    Route::get('/', 'RegistrarController@index')->name('registrar');
>>>>>>> 73f16e7a1380d1793a67422ac7d52bca25118af5

    Route::post('/create/todo','TodoController@store')->name('registrar.store.todo');
    Route::get('/delete/todo/{id}','TodoController@destroy')->name('registrar.delete.todo');
    Route::post('/update/todo/{id}','TodoController@update')->name('registrar.update.todo');
    Route::get('/completed/todo/{id}','TodoController@completed')->name('registrar.completed.todo');

    Route::get('/', 'RegistrarController@index')->name('registrar'); 
    Route::get('/register', 'RegistrarController@registerStudent')->name('register');
    Route::post('/register', 'RegistrarController@registerStudentStore')->name('register.store');
    Route::get('/students', 'RegistrarController@listStudents')->name('studentsList');
    Route::get('/grades', 'RegistrarController@viewGrades')->name('grades');
    Route::get('/payment', 'RegistrarController@payment')->name('payment');
    Route::get('/announcement', 'RegistrarController@announcement')->name('announcements');

});

Route::prefix('yeneta/instructor')->group(function(){
    Route::get('/login', 'Auth\InstructorLoginController@showLoginForm')->name('instructor.login');
    Route::post('/login', 'Auth\InstructorLoginController@login')->name('instructor.login.submit');

    Route::get('/', 'InstructorController@index')->name('instructor');
    Route::get('/courses', 'InstructorController@viewCourses')->name('courses');
    Route::get('/students', 'InstructorController@viewStudents')->name('students');
    Route::get('/studentsGrades', 'InstructorController@fillGrades')->name('studentsGrades');
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
    Route::get('/statistics', 'FinanceController@stats')->name('statisticsF');
    Route::get('/payemts', 'FinanceController@payments')->name('paymentsF');
});


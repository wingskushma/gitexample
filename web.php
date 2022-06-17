
//example of view
Route::get('/contact', function(){
    return view("contactform", ["name" =>"Bear pear", "email" =>"example@email.com"]);
});

//example of calling view from controller
Route::get('/contactform','App\Http\Controllers\ContactFormController@display');


//example of calling view from controller using with() to pass data
Route::get('/contactform/{name}','App\Http\Controllers\ContactFormController@contact');


//example of calling view from controller using compact() to pass data
Route::get('/contactform/{name}/{email}/{message?}','App\Http\Controllers\ContactFormController@sampleform');


//templating example view
Route::view('/dashboard','dashboard');

Route::get('/registration', 
'App\Http\Controllers\RegistrationController@index');
Route::get('/registration/reference',
 [RegistrationController::class, 'index']);

 Route::get('/contactus',function()  
 {  
   return view('contactus');  
 });


Route::resource('/register', 'App\Http\Controllers\ContactFormController');

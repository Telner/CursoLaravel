<?php




Route::get('/',function(){
    return view('Layouts/LayoutFull');
});


Route::resource('/client', 'Clients\ClientController');

 
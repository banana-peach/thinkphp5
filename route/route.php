<?php

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
Route::get('getone', 'index/getone');
Route::get('getbooks', 'index/getbooks');
Route::get('/', function(){
    return "ok";
});

return [

];

<?php

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('/', 'index/getView');
Route::any('checksummit', 'index/checkSummit');
Route::get('/t', function(){
    return "It works!";
});

return [

];

<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function getone(){
        $data = Db::table('testbooks')->find(2);
        return json($data,200);
    }
    public function getbooks(){
        $data = Db::table('books_detail')->paginate(10);
        return json($data,200);
    }
}



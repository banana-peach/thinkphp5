<?php
namespace app\index\controller;

use think\Db;

use app\model\User as User;

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
    public function getView(){
        return View("index",["name"=>"1234"]);
    }
    public function checkSummit(){
        $name = input("name");
        $password = input("password");
        $isExist = User::where("username",$name)->where("password",$password)->count();
        if($isExist == 1){
            return view("info",["message"=>"1234567890"]);
        }else {
            echo "账号或者密码不正确";
        }
    }
}



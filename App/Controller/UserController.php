<?php

namespace Gondr\Controller;
use Gondr\DB;

class UserController extends MasterController {

    public function loginPage() {
        $this->render("user/login");
    }

    public function loginProcess() {
        $userId = $_POST['userid'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE id = ? AND password = PASSWORD(?)";

        $user = DB::fetch($sql, [$userId, $password]);

        if($user == null) {
            $_SESSION['flash_msg'] = ['msg'=>'로그인 실패, 이이디와 비밀번호를 확인'];
            header("Location: /login");
        }else {
            $_SESSION['flash_msg'] = ['msg'=>'로그인 성공'];
            $_SESSION['user'] = $user;
            header("Location: /");
        }
    }

    public function logout() {
        unset($_SESSION['user']);
        $_SESSION['flash_msg'] = ['msg' => "로그아웃 되었습니다."];
        header("Location: /");
    }

}
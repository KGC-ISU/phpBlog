@extends('layout/master')

@section('maincontent')
<div class="login-wrap">
    <div class="login">
        <div class="login-title">
            <h1>Log in</h1>
            <p>블로그 개발자 로그인</p>
        </div>
        <div class="login-form">
            <form action="/login" method="post" class="login-form">
                <input type="text" name="userid" placeholder="아이디를 입력해주세요">
                <input type="password" name="password" placeholder="비밀번호를 입력해주세요">
                <p>비밀번호를 잊으셨나요?</p>
                <input class="login-btn" type="submit" value="LOG IN">
            </form>
        </div>
    </div>
</div>

@endsection
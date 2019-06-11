<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if( isset($_SESSION['flash_msg']))
        <script>
            let msg = "{{$_SESSION['flash_msg']['msg']}}";
        </script>
        @php 
            unset ($_SESSION['flash_msg']);
        @endphp
    @endif
    <script src="/js/app.js"></script>
    @yield('scriptsection')
    <title>My Blog</title>
</head>
<body>
    <aside id="submenu">
        <h2 class="my-3 text-center">서브메뉴</h2>
        <hr>
        @if( isset($_SESSION['user']))
            <a href="/logout" class="sub-login"><i class="fas fa-sign-out-alt"></i><p>로그아웃</p></a>
            <a href="/post" class="sub-login"><i class="fas fa-edit"></i><p>포스팅</p></a>
        @else
            <a href="/login" class="sub-login"><i class="fas fa-sign-in-alt"></i><p>로그인</p></a>
            <a href="#" class="sub-login"><i class="far fa-clipboard"></i><p>게시글 보기</p></a>
        @endif
    </aside>

    <div id="toastList">
        
    </div>

    <header>
        <div class="nav-wrap">
            <div class="top">
                <div class="sns">
                    <ul>
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-facebook-messenger"></i></li>
                        <li><i class="far fa-envelope"></i></li>
                    </ul>
                </div>
                <div class="title">
                    <a href="/">이상한 나라의 블로그</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><i class="fas fa-search"></i></li>
                        <li><span id="btnSub"><i class="fas fa-bars"></i></span></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <ul>
                    <li><a href="/">메인페이지</a></li>
                    <li><a href="/">게시글</a></li>
                    <li><a href="/">footer</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yieLd('maincontent')
     
    <footer>
        <div class="foot-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </footer>

</body>
</html>
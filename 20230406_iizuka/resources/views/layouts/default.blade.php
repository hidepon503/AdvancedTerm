<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--リセットcssはサニタイズCSSを利用&css-->
  <link  href="{{url('https://unpkg.com/sanitize.css')}}" rel="stylesheet"/>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <!--下記はbreeze作成時の物-->
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        <script src="{{ url('js/app.js') }}" defer></script>
  <title>Rese</title>
</head>
<style>
  body{
    font:46px;
    background-color:#EEEEEE;
  }
  header{
    position:fixed;
    width:100%;
    height:15vh;
    background-color:#EEEEEE;
    display:flex;
    padding:0 5vw 0 5vw;
    justify-content:space-between;
    align-items:center;
  }
  .header_title{
    width:30%;
    height:15vh;
    display:flex;
    align-items:center;
  }

  .title_logo{
    position: fixed;
    top: 2%;
    left: 14%;
    font-size:3rem;
    display:inline-block;
    color:#455df3;
  }
  .index_header_search{
    width:60%;
    height:15vh;
    display:flex;
    justify-content:flex-end;
    align-items:center;
  }
  .container{
    width:100%;
    display:flex;
    padding:15vh 5vw 0 5vw;
    justify-content:center;
    align-items:center;
  }

.menu-btn {
    position: fixed;
    top: 2.3%;
    left: 5%;
    display: flex;
    height: 60px;
    width: 60px;
    justify-content: center;
    align-items: center;
    z-index: 90;
    /*ボタンの背景色*/
    background-color: #455df3;
    border-radius:10px;
}
.menu-btn span,
.menu-btn span:before,
.menu-btn span:after {
    content: '';
    display: block;
    height: 3px;
    width: 25px;
    border-radius: 3px;
    /*ボタンの線の色*/
    background-color: #FFFFFF;
    position: absolute;
    transition: all 300ms 0s ease;
}
.menu-btn span:before {
    bottom: 8px;
}
.menu-btn span:after {
    top: 8px;
}

#menu-btn-check {
    display: none;
}
#menu-btn-check:checked ~ .menu-btn span {
    background-color: rgba(255, 255, 255, 0);/*メニューオープン時は真ん中の線を透明にする*/
    transition: all 300ms 0s ease;
}
#menu-btn-check:checked ~ .menu-btn span::before {
    bottom: 0;
    transform: rotate(45deg);
    background-color: #ccc;
    transition: all 300ms 0s ease;
}
#menu-btn-check:checked ~ .menu-btn span::after {
    top: 0;
    transform: rotate(-45deg);
    background-color: #ccc;
    transition: all 300ms 0s ease;
}

.menu-content {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    top: -100%;
    left:5px;
    z-index: 80;
    background-color: white;
    color: #222;
    transition: all 500ms 0s ease;
}

#menu-btn-check:checked ~ .menu-content {
    top: 0;/*メニューを画面内へ*/
    left:5px;
}

.menu-content ul {
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  padding-top:30vh;
  color:#455df3;
}
.menu-content ul li {

}
.menu-content  ul li a {
    display: block;
    width: 100%;
    font-size: 36px;
    box-sizing: border-box;
    text-decoration: none;
    padding: 9px 15px 10px 0;
    position: relative;
}
.logout{
    width: 100%;
    font-size: 36px;
    margin-top:15px;
    box-sizing: border-box;
    text-decoration: none;
    padding: 9px 15px 10px 0;

}
.menu-content ul li a::before {
    content: "";
    width: 7px;
    height: 7px;
    transform: rotate(45deg);
    position: absolute;
    right: 11px;
    top: 16px;
}

</style>
<body>
  <header>
    <div class="header_title">

    <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--ここからメニュー-->
        <!--未ログイン時-->
        <div class="menu-content">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/register">Registration</a>
                </li>
                <li>
                    <a href="/login">Login</a>
                </li>
            </ul>
        </div>
        <!--ログイン時-->
        @if(Auth::check())
          <div class="menu-content">
              <ul>
                  <li>
                      <a href="/">Home</a>
                  </li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf 
                      <input type="submit" method="post" value="Logout" class="logout">
                    </form>
                  </li>
                  <li>
                      <a href="/mypage">Mypage</a>
                  </li>
              </ul>
          </div>-->
        @endif
    </div>
        <div><a href="/"><h1 class="title_logo">Rese</h1></a></div>
    </div>
    <div class="index_header_search">
      @yield('search')
    </div>
  </header>
  <div class="container">
    @yield('container')
  </div>  
</body>
</html>
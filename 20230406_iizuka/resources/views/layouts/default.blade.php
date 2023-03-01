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
  .humburger_menu{
    width:4rem;
    height:4rem;
    margin-top:-2%;
    color:#FFFFFF;
    background-color:#455df3;
    border-radius:5px;
  }
  .title_logo{
    margin-left:1rem;
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
    padding:1rem 5vw 0 5vw;
    justify-content:center;
    align-items:center;
  }
</style>
<body>
  <header>
    <div class="header_title">
        <div class="humburger_menu">三</div>
        <div><h1 class="title_logo">Rese</h1></div>
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
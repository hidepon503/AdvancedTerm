@extends('layouts.default')
<style>
  .index_header_search{
    width:100%;
    padding:0 1rem 0 2rem;
  }
  .index_header_search-form{
    width:100%;
  }
  .search_select_area{
    width:15%;
    height:4rem;
  }
  .search_select_genre{
    width:15%;
    height:4rem;
  }
  .search_keyword{
    width:65%;
    height:4rem;
  }
  .wrapper{
    width:100%;
    height:100%;
    border:solid 10px blue;
    display:flex;
    flex-wrap:wrap;
    align-content:;
  }
  .shop_card{
    width:25rem;
    height:22rem;
    border:solid 5px red;
    border-radius:15px;
  }
  .card_img{
    width:100%;
    height:55%;
    border:5px solid green;
  }
  .card_about{
    width:100%;
    height:45%;
    border:5px solid pink;
    padding:1rem 2rem 1rem 1rem;
  }
  .card_button{
    width:100%;
    border:solid 3px yellow;
    margin:auto 0 0 0;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }
  .about_box{
    border:green solid 3px;
    display:flex;
    height:2.5rem;

  }
  .about_button{
    border:blue solid 3px;
    width:7rem;
    height:2.5rem;

  }
  .favorits-button{
    border:blue solid 3px;

  }

</style>
@section('search')
  <form action="search" method="get" class="index_header_search-form">
    <select name="area" id="" class="search_select_area"></select>
    <select name="genre" id="" class="search_select_genre"></select>
    <input type="text" name="keyword" class="search_keyword" >
  </form>
@endsection
@section('container')   
  <div class="wrapper">
    <div class="shop_card">
      <div class="card_img"></div>
      <div class="card_about">
        <h2>仙人</h2>
        <p><span>#東京都</span> <span>#寿司</span></p>
        <div class=card_button>
          <div class="about_box">
            <form action="" method="get" class="card_about_form" ><!--アクション未定義-->
              @csrf
              <input type="submit" name="restaurants_id" class="about_button" value="詳しくみる">
            </form>
          </div>
          <button>♡</button>
        </div>
      </div>
    </div>
  </div>
@endsection
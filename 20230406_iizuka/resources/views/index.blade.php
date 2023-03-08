@extends('layouts.default')
<style>
  .index_header_search-form{
    width:100%;
    height:100%;
    display:flex;
    justify-content:flex-end;
    align-items:center;
  }
  .search_select_area{
    width:15%;
    height:4rem;
    margin-right:1rem;
  }
  .search_select_genre{
    width:15%;
    height:4rem;
    margin-right:1rem;
  }
  .search_keyword{
    width:50%;
    height:4rem;
  }
  .wrapper{
    width:110%;
    display:flex;
    flex-wrap:wrap;
    justify-content:;
    align-content:flex-start;
  }
  .shop_card{
    width:18rem;
    height:18rem;
    margin:0 2rem 2rem 0;
  }
  .card_item{
    border-radius:15px 15px 0 0;
  }
  .card_item_img{
    width:100%;
    height:50%;
    size:cover;
    border-radius:15px 15px 0 0;
  }
  .card_about{
    width:100%;
    height:45%;
    background-color:#FFFFFF;
    border-radius:0 0 15px 15px;
    padding:0rem 2rem 2rem 1rem;
  }
  .card_button{
    width:100%;
    margin:0.5rem 0 0.5rem 0;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }
  .about_box{
    width:7rem;
    height:2.5rem;
    background-color:#455df3;
    border-radius:10px;
  }
  .about_button{
    width:100%;
    height:100%;
    border-radius:15px;
    text-align:center;
    color:#FFFFFF;
  }
  .favorits-button{
    font-size:46px;
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
    @foreach($restaurants as $restaurant)
      <div class="shop_card">
        <div class="card_item">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="イメージ画像" class="card_item_img">
          <!--imageテーブルにurlカラムを作成し、restaurantテーブル内のカラムとforeignキーにして{{$restaurant->url}}で写真のパスを代入しよう-->
        </div>
        <div class="card_about">
          <h2>{{$restaurant->name}}</h2>
          <p><span>#{{$restaurant->area}}</span> <span>#{{$restaurant->genre}}</span></p>
          <div class=card_button>
            <div class="about_box">
              <form action="/detail" method="get" class="card_about_form" >
                <!--アクション未定義-->
                @csrf
                <input type="hidden" name="id" class="about_button" value="{{$restaurant->id}}">
                <button class="about_button">詳しく見る</button>
              </form>
            </div>
            <button>♡</button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
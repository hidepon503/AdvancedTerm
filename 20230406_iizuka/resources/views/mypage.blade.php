<style>
  .wrapper{
    width:100%;
    border:solid red 3px;
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
  }

  .reserve_block{
    width:40%;
    border:solid blue 3px;
    display:flex;
    flex-direction:column;
    margin:0 3rem 1rem 0;
    padding:0 1rem 0 1rem;
  }
  .reserve_block_title{}
  .reserve_block_list{
    width:100%;
    border:green solid  5px;
    display:flex;
    flex-direction:column;
  }
  .reserve_block_board{
    width:100%;
    height:35vh;
    margin-top:1rem;
    padding:1.5rem 1.5rem;
    background-color:#455df3;
    border-radius:15px;
    font-size:1.3rem;
    color:#FFFFFF;
  }
  .board_header{
    width:100%;
    height:20%;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }
  .board_header_box{
    display:flex;
    align-items:center;
  }
  .board_header_img{
    height:5vh;
    margin-right:2rem;
  }
  .board_header_delete-button{
    width:2rem;
    height:2rem;
    margin-top:1.3rem;
    border:#FFFFFF solid 3px;
    border-radius:50px;
    font-weight:bold;
  }
  table {
    width:100%;
    color:#FFFFFF;
    text-align:left;
    margin: 1rem 0 0 0 ;
  }
  th{
    height:2rem;
  }
  td{
    width:70%; 
  }
  
  .favorits_block{
    width:50%; 
    border:solid blue 2px;   
  }
  .favorits_block_user_name{
    margin-bottom:1rem;
  }
  .favorits_block_shop-list{
    margin-bottom:1rem;
  }
  .favorits_block_shop_box{
    width:100%;
    border:solid blue 2px;  
    display:flex;
    flex-wrap:wrap;
    align-content:flex-start;
  }
  .favorits_block_shop_card{
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
    border-radius:15px 15px 0;
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

@extends('layouts.default')
@section('container') 
<div class="wrapper">

  <div class="reserve_block">
    <h2 class="reserve_block_title">予約状況</h2>
    <div class="reserve_block_list">  

      <div class="reserve_block_board">
        <div class="board_header">
          <div class="board_header_box">
            <img src="{{asset('/img/icon/clock.png')}}" alt="アイコン" class="board_header_img">
            <p class="board_header_title">予約1</p>
          </div>
          <form action="delete" method="post">
            <input type="submit" name="reserve_id" class="board_header_delete-button" value="✕">
          </form>
        </div>
          <table class="reserve_block_table">
            <tr>
              <th>Shop</th>
              <td>仙人</td>
            </tr>
            <tr>
              <th>Date</th>
              <td>2021-04-01</td>
            </tr>
            <tr>
              <th>Time</th>
              <td>17:00</td>
            </tr>
            <tr>
              <th>Number</th>
              <td>1人</td>
            </tr>                
          </table>
      </div>
  
      <div class="reserve_block_board">
        <div class="board_header">
          <div class="board_header_box">
            <img src="{{asset('/img/icon/clock.png')}}" alt="アイコン" class="board_header_img">
            <p class="board_header_title">予約1</p>
          </div>
          <form action="delete" method="post">
            <input type="submit" name="reserve_id" class="board_header_delete-button" value="✕">
          </form>
        </div>
          <table class="reserve_block_table">
            <tr>
              <th>Shop</th>
              <td>仙人</td>
            </tr>
            <tr>
              <th>Date</th>
              <td>2021-04-01</td>
            </tr>
            <tr>
              <th>Time</th>
              <td>17:00</td>
            </tr>
            <tr>
              <th>Number</th>
              <td>1人</td>
            </tr>                
          </table>
      </div>
      
    </div>
  </div>
  
  <div class="favorits_block">
    <h2 class="favorits_block_user_name">tetsuさん</h2>
    <h2 class="favorits_block_shop-list">お気に入り店舗</h2>

    <div class="favorits_block_shop_box">
      <div class="favorits_block_shop_card">
        <div class="card_item">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="イメージ画像" class="card_item_img">
        </div>
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

      <div class="favorits_block_shop_card">
        <div class="card_item">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="イメージ画像" class="card_item_img">
        </div>
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

      <div class="favorits_block_shop_card">
        <div class="card_item">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="イメージ画像" class="card_item_img">
        </div>
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
  </div>
</div> 
@endsection
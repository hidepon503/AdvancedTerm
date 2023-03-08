<style>
 .detail_block{
  width:40%;
  height:70vh;
  margin-right:5rem;
  padding:0 1rem 0 1rem;
 }
 .detail_block_header{
  width:100%;
  height:10%;
  display:flex;
  align-items:center;
 }
 .detail_block_back-button{
  width:2rem;
  height:2rem;
  background-color:#FFFFFF;
  border-radius:5px;
 }
 .detail_block_title{
  margin-left:1rem;
 }
 .detail_block_item{
  width:100%;
  height:auto%;
 }
 .detail_block_tag{
  width:100%;
  margin-top:0.5rem;
 }
 .detail_block_opinion{
  width:100%;
  height:15%;
  margin-top:0.5rem;
 }
 .reserve_block{
  width:40%;
  height:80vh;
  margin-top:-5rem;
  padding:0 1rem 0 1rem;  
  background-color:#455df3;  
  border-radius:15px;
 }
 .reserve_block_header{
  width:100%;
  height:15%;
  display:flex;
  align-items:center;
  color:#FFFFFF;
 }
 .reserve_block_form{
  width:100%;
  height:70%;
  padding-top:1rem;
  display:flex;
  flex-direction:column;
 }
 .reserve_block_form_date{
  width:40%;
  margin-bottom:1rem;
  border-radius:10px;
  background-color:#FFFFFF;
 }
 .reserve_block_form_time{
  width:90%;
  margin-bottom:1rem;
  background-color:#FFFFFF;
  border-radius:5px;
 }
  .reserve_block_form_number{
  width:90%;
  margin-bottom:1rem;
  background-color:#FFFFFF;
  border-radius:5px;
 }
 .reserve_block_footer{
  width:100%;
  height:15%;
 }
 table {
  color:#FFFFFF;
  text-align:left;
  margin: 0 1rem 0 ;
 }
 th{
  height:2rem;
 }
 td{
  width:70%;
 }
.reserve_block_footer{
  display:flex;
  justify-content:center;
  align-items:center;
}
.reserve_block_footer_submit{
  color:#FFFFFF;
}
 
</style>

@extends('layouts.default')
@section('container')  
<div class="detail_block">
  <div class="detail_block_header">
    <a href="/"><button class="detail_block_back-button"><</button></a>
    <h2 class="detail_block_title">仙人</h2>
  </div>
  <div class="detail_block_item">
    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="イメージ画像" class="detail_block_item_img">
  </div>
  <p class="detail_block_tag"><span>#東京都</span> <span>#寿司</span></p>
  <p class="detail_block_opinion">料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
</div>
<div class="reserve_block">
  <div class="reserve_block_header">
    <h2>予約</h2>
  </div>
  <form action="reserve" method="post">
    <div class="reserve_block_form">
      <input type="date" name="date" class="reserve_block_form_date">
      <select name="time" id="" class="reserve_block_form_time"></select>
      <select name="number" id="" class="reserve_block_form_number"></select>
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
    <div class="reserve_block_footer">
      <input type="submit" value="予約する" class="reserve_block_footer_submit">
    </div>
  </form>
</div>
@endsection
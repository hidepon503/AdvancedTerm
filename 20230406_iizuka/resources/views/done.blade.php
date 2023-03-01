<style>
.done_card{
  width:700px;
  height:45vh;
  background-color:#FFFFFF;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  border-radius:10px;

}
.done_card_message{
  font-size:3rem;
  margin-bottom:5vh;
}
.done_card_back-button{
  width:5rem;
  height:3rem;
  background-color:#455df3;
  font-size:1.2rem;
  color:#FFFFFF;
  border-radius:10px;
}
</style>

@extends('layouts.default')
@section('container')  
  <div class="done_card">
    <h2 class="done_card_message">ご予約ありがとうございます</h2>
      <a href="/index">
        <button class="done_card_back-button">戻る</button>
      </a>
  </div>
@endsection
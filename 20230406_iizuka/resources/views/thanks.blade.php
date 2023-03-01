<style>
.thanks_card{
  width:700px;
  height:45vh;
  background-color:#FFFFFF;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  border-radius:10px;
}
.thanks_card_message{
  font-size:3rem;
  margin-bottom:5vh;
}
.thanks_card_login-button{
  width:8rem;
  height:3rem;
  background-color:#455df3;
  font-size:1.2rem;
  color:#FFFFFF;
  border-radius:10px;
}
</style>

@extends('layouts.default')
@section('container')  
  <div class="thanks_card">
    <h2 class="thanks_card_message">会員登録ありがとうございます</h2>
      <a href="/login">
        <button class="thanks_card_login-button">ログインする</button>
      </a>
  </div>
@endsection
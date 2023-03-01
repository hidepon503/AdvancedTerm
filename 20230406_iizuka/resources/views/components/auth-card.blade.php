<style>
.register_card{
    width:30%;
    margin-top:20vh;
    height:auto;
    display:flex;
    border-radius:15px;
    flex-direction:column;
    justify-content:center;
    background-color:#FFFFFF;

}
.card_header{
    width:100%;
    height:10vh;
    padding:0 20px 0 20px;
    background-color:#465DF3;
    display:flex;
    align-items:center;
    border-radius:15px 15px 0 0;
}
.register_card_contents{
    width:100%;
    padding:1rem 2rem 1rem 2rem ;
}

</style>

<div class="register_card"> 
    <div class="card_header">
      {{ $logo }}
    </div>
    <div class="register_card_contents">
      {{ $slot }}
    </div>
</div>

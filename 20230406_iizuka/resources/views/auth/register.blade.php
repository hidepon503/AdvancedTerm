<style>
.register_card_item{
    width:100%;
    height:3rem;
    display:flex;
    align-items:center;
}
.register_card_item_img{
    width:2.5rem;

}
.register_card_item_form{
    width:100%;
}
.card_headder_title{
    font-size:26px;
    color:#FFFFFF;
}

</style>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
                <p class="card_headder_title">Registration</p>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="register_card_item">
                <img src="{{asset('/img/icon/username.png')}}" alt="" class="register_card_item_img">
                <x-input class="register_card_item_form" type="text" name="name" :value="old('name')" placeholder="Username" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="register_card_item">
                <img src="{{asset('/img/icon/email.png')}}" alt="" class="register_card_item_img">
                <x-input id="email" class="register_card_item_form" type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <!-- Password -->
            <div class="register_card_item">
                <img src="{{asset('/img/icon/password.png')}}" alt="" class="register_card_item_img">
                <x-input id="password" class="register_card_item_form" 
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>-->

            <div class="flex items-center justify-end mt-4">
                <!--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>-->

                <x-button class="ml-4">
                    {{ __('登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Reserve;
use App\Models\Image;
use App\Models\Favorite;
use App\Models\Evaluation;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ReserveRequest;

class ReseController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('index',['restaurants' => $restaurant]);
    }
    
}

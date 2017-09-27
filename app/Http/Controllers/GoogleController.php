<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class GoogleController extends Controller
{

   
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        
        // Verificamos si hay sesión activa
        if (\Auth::check())
        {
            // Si tenemos sesión activa mostrará la página 
            return view('auth.comments');
        }
        // Si no hay sesión activa mostramos el formulario
        return Socialite::driver('google')->redirect();        
        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        //dd($user);
        //echo $user->getName();
        return redirect('/comments');
        
        // $user->token;
    }

    public function logOut()
    {
        // Cerramos la sesión
        \Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return redirect('/login');
    }

    public function index()
    {
        return view('auth.comments');
    }

}
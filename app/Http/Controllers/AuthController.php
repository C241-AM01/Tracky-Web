<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

    public function showSignupForm()
    {
        return view('auth.signup');
    }
    public function signup(Request $request)
    {
        $response = Http::post('https://api-tracky-44mt6jvn3a-as.a.run.app/auth/signup', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ]);

        return response()->json($response->json(), $response->status());
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post('https://api-tracky-44mt6jvn3a-as.a.run.app/auth/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // Check if login was successful
        if ($response->successful()) {
            // Assuming the API returns a token or any other indicator of successful login
            // You may need to adjust this based on your API response structure
            $token = $response->json()['token']; // Adjust this based on your API response

            // Store token in session or anywhere you need to persist the login state
            session(['token' => $token]);

            // Redirect to index.blade.php or any other route
            return redirect()->route('index');
        } else {
            // If login was unsuccessful, return JSON response as before
            return response()->json($response->json(), $response->status());
        }
    }

    public function logout(Request $request)
    {
        $response = Http::post('https://api-tracky-44mt6jvn3a-as.a.run.app/auth/logout', [
            'token' => $request->input('token'),
        ]);

        return response()->json($response->json(), $response->status());
    }
}

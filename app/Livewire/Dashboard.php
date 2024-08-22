<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // public function render()
    // {
    //     return view('livewire.dashboard')
    //         ->layout('components.layouts.app', ['title' => 'Dashboard']);
    // }

    public function render()
    {
        return view('dashboard');
    }
}

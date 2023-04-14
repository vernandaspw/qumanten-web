<?php

namespace App\Http\Livewire\Private\User;

use Livewire\Component;

class  UserIndex extends Component
{
    public function render()
    {
        return view('livewire.private.user.user-index')->extends('layouts.dashboard')->section('main');
    }
}
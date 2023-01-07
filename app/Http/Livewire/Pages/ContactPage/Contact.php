<?php

namespace App\Http\Livewire\Pages\ContactPage;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-page.contact')
            ->extends('app')
            ->section('content');
    }
}

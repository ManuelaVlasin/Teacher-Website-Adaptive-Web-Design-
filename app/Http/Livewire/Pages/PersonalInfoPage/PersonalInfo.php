<?php

namespace App\Http\Livewire\Pages\PersonalInfoPage;

use Livewire\Component;

class PersonalInfo extends Component
{
    public function render()
    {
        return view('livewire.pages.personal-info-page.personal-info')
            ->extends('app')
            ->section('content');
    }
}

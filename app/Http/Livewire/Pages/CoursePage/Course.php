<?php

namespace App\Http\Livewire\Pages\CoursePage;

use Livewire\Component;

class Course extends Component
{
    public $courseId;
    public $selectedTab = 'overview';

    public function mount($courseId){
        $this->courseId = $courseId;
    }

    public function selectTab($tabName){
        $this->selectedTab = $tabName;
    }

    public function render()
    {
        return view('livewire.pages.course-page.course')
            ->extends('app')
            ->section('content');
    }
}

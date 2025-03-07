<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Faq;
use Livewire\Component;

class ShowHome extends Component
{
    
    public function render()
    {
        $faqs = Faq::all();
        $services = Service::orderBy('title','ASC')->get();
        return view('livewire.show-home', compact('services','faqs'));
        // return view('livewire.show-home');
    }
}

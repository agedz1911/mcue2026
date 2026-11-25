<?php

namespace App\Livewire\Pages;

use App\Models\Committee as ModelsCommittee;
use Livewire\Attributes\Title;
use Livewire\Component;


<<<<<<< HEAD
#[Title('MCUE - Organizing Committee')]
=======
#[Title('Organizing Committee - MCUE 2027')]
>>>>>>> 4e48335 (feat: redesign for mcue 2027)

class Committee extends Component
{
    public function render()
    {
        $committees = ModelsCommittee::orderBy('no_urut', 'asc')->where('is_active', true)->get();
        $uniqueCategories = $committees->pluck('category')->unique();
        return view('livewire.pages.committee', ['committees' => $committees, 'uniqueCategories' => $uniqueCategories]);
    }
}

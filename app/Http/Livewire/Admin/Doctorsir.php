<?php

namespace App\Http\Livewire\Admin;

use Livewire\Request;
use App\Models\Doctor;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Doctorsir extends Component
{
    public $name, $phone, $image, $speciality, $doctors;

    public function mount($doctors)
    {
        $this->doctors = $doctor;

    }
            
    public function render()
    {
        return view('livewire.admin.doctorsir', [
            'doctors' => $this->doctors
        ]);
    }
}

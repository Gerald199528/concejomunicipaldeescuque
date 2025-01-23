<?php

namespace App\Livewire;

use App\Models\Imagens;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Imagen extends Component
{
    public $imagens;

    public function mount()
    {
        // Recupera las imágenes del usuario autenticado
        $this->imagens = Imagens::where('id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.imagen');
    }
}

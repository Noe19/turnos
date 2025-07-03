<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public $showList = false;
   
  //   public $showList = false;
    protected $listeners = ['volverAUsers'];

    public function mostrarLista()
    {
        $this->showList = true;
    }

    public function volverAUsers()
    {
        $this->showList = false;
    }

    public function render()
    {
        return view('livewire.user');
    }

    public function irALaLista()
    {
        // Redirige a la ruta llamada 'list'
        return redirect()->route('list-user');

    }

    
    
}

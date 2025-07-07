<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Nette\Utils\Arrays;

class User extends Component
{
    public $showList = false;
    public $user_1;
    public $formato;
    public $users = [];

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

    // separa % lo nombre
    public function textoEnviado()
    {
        $formateado = '';
        $this->formato = '';
        $this->validate([
            'user_1' => 'required|string|min:3',
        ]);
        $user_1 = $this->user_1;
        $formateado = '%' . str_replace(' ', '%', $user_1) . '%';
        $this->formato = $formateado;
        //return  redirect()->route('list-user',['nombre' => $this->user_1]);
    }

    public function mount()
    {
        $this->users = [
            ['id' => 1, 'name' => 'Juan Pérez01'],
            ['id' => 2, 'name' => 'María López'],
            ['id' => 3, 'name' => 'Carlos García'],
        ];
        json_encode($this->users);
    }
}

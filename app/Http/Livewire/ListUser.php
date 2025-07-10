<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListUser extends Component
{
  public $users = [];
  public $name;
  public $usersOriginales = [];


  public function render()
  {
    return view('livewire.list-user');
  }
  public function mount($users)
  {
    // $this->users = $users;
    // $this->users = collect($users); // 
    // $this->name = $this->users[0]['name'];

    // Para filtrar
    $this->users = [
      ['name' => 'Juan', 'email' => 'juan@example.com', 'role' => 'admin'],
      ['name' => 'María', 'email' => 'maria@example.com', 'role' => 'user'],
      ['name' => 'Pedro', 'email' => 'pedro@example.com', 'role' => 'admin'],
      ['name' => 'Luis', 'email' => 'luis@example.com', 'role' => 'user'],
    ];
    $this->usersOriginales = $this->users;
    $this->applyFilter();
  }
  public $search = '';
  public $perPage = 2;

  public function updatedSearch()
  { //Un campo
    /* $this->users = collect($this->usersOriginales)
        ->filter(fn($user) =>
            str_contains(strtolower($user['name']), strtolower($this->search))
        )
        ->values()
        ->all(); */

    // todos los campos
    /*
    $this->users = collect($this->usersOriginales)
      ->filter(function ($user) {
        // Convertimos todo el array del usuario a una cadena
        $searchable = implode(' ', array_map('strtolower', $user));
        return str_contains($searchable, strtolower($this->search));
      })
      ->values()
      ->all();*/

    // solo 20 dstos 

    $this->applyFilter();
  }

  public function applyFilter()
  {
    $filtered = collect($this->usersOriginales)
      ->filter(function ($user) {
        $searchable = implode(' ', array_map('strtolower', $user));
        return str_contains($searchable, strtolower($this->search));
      })
      ->values();

    // Mostrar solo los primeros N resultados
    $this->users = $filtered->take($this->perPage)->all();
    //alert
     if ($filtered->isEmpty()) {
        $this->dispatchBrowserEvent('no-result-found');
    }
  }
}

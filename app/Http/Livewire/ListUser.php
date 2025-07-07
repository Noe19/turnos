<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListUser extends Component
{  public $users = [];
    public $name ;

    
    public function render()
    {
        return view('livewire.list-user');
    }
  public function mount($users)
    {
        $this->users = $users;
      // $this->users = collect($users); // 
         $this->name = $this->users[0]['name'];
    }
  
}

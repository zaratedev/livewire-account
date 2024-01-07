<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user;
    public $name;
    public $email;

    public $toggleName = false;

    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required|between:2,255',
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    /**
     * Enable input for edit name.
     */
    public function editName()
    {
        $this->toggleName = true;
        $this->dispatch('name');
    }

    /**
     * Update user.
     */
    public function updateName()
    {
        $this->validateOnly('name');

        $this->user->update([
            'name' => $this->name,
        ]);

        $this->reset('toggleName');

        session()->flash('message', 'Has been updated name successfull.');

        $this->dispatch('update-name', name: $this->name);
    }

    public function render()
    {
        return view('livewire.update-user');
    }
}

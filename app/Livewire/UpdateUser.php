<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user;
    public $name;
    public $email;
    public $phone;
    public $birthday;
    public $city;

    public $toggleName = false;
    public $togglePhone = false;
    public $toggleBirthday = false;

    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required|between:2,255',
        'phone' => 'digits:10',
        'birthday' => 'nullable|date',
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->birthday = optional($user->birthday)->format('Y-m-d');
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
     * Enable input for edit phone.
     */
    public function editPhone()
    {
        $this->togglePhone = true;
        $this->dispatch('phone');
    }

    /**
     * Enable input for edit phone.
     */
    public function editBirthday()
    {
        $this->toggleBirthday = true;
        $this->dispatch('birthday');
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

    public function updatePhone()
    {
        $this->validateOnly('phone');

        $this->user->update(['phone' => $this->phone]);

        $this->reset('togglePhone');

        session()->flash('message', 'Has been updated phone successfull.');
    }

    public function updateBirthday()
    {
        $this->validateOnly('birthday');

        $this->user->update([
            'birthday' => $this->birthday ?: null,
        ]);

        $this->reset('toggleBirthday');

        session()->flash('message', 'Has been updated phone successfull.');
    }

    public function render()
    {
        return view('livewire.update-user');
    }
}

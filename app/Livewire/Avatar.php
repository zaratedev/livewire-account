<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Avatar extends Component
{
    use WithFileUploads;

    public $avatar;

    public $tempUrl;

    /**
     * @var array
     */
    protected $rules = [
        'avatar' => 'image|max:1024',
    ];

    /**
     * Validate avatar.
     */
    public function updatedAvatar()
    {
        $this->validateOnly('avatar');

        try {
            $this->tempUrl = $this->avatar->temporaryUrl();
        } catch (\Exception $e) {
            $this->tempUrl = '';
        }
    }

    /**
     * Save avatar.
     */
    public function updateAvatar()
    {
        $this->validateOnly('avatar');

        auth()->user()->updateProfilePhoto($this->avatar);

        $this->dispatch('refresh-avatar', avatar: $this->tempUrl);

        $this->reset(['avatar', 'tempUrl']);
    }

    public function render()
    {
        return view('livewire.avatar');
    }
}

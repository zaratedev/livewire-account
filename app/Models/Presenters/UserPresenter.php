<?php

namespace App\Models\Presenters;

use Illuminate\Support\Facades\Storage;
use TheHiveTeam\Presentable\Presenter;

class UserPresenter extends Presenter
{
    public function avatar($size = 100): string
    {
        if (is_null($this->model->avatar)) {
            return 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)))."?s={$size}&d=mm";
        }

        return Storage::url($this->model->avatar);
    }
}

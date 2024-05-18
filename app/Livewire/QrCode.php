<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class QrCode extends ModalComponent
{
    public $url;

    public function mount($url)
    {
        $this->url = $url;
    }

    public function render()
    {
        return view('livewire.qr-code');
    }
}

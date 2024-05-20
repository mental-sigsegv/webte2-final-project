<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class QrCode extends ModalComponent
{
    public $url;
    public $code;

    public function mount($url, $code)
    {
        $this->url = $url;
        $this->code = $code;
    }

    public function render()
    {
        return view('livewire.qr-code');
    }
}

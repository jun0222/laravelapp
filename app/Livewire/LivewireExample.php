<?php

namespace App\Livewire;

use Livewire\Component;

class LivewireExample extends Component {
    public $message = 'Hello, Livewire!';

    public function render() {
        $ob = ['msg' => 'レンダリングで値を渡す'];
        return view('livewire.livewire-example', $ob);
    }
}

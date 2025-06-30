<?php

namespace App\Livewire;

use Livewire\Component;

class GoodAfternoonComponent extends Component {
    public $message = 'こんにちは！';
    public $name = '';

    public function mount() {
        // コンポーネント初期化時に実行されるメソッド
        $currentHour = date('H');
        if ($currentHour < 12) {
            $this->message = 'おはようございます！';
        } elseif ($currentHour < 18) {
            $this->message = 'こんにちは！';
        } else {
            $this->message = 'こんばんは！';
        }
    }

    public function greet() {
        // ボタンクリック時などに実行されるメソッド
        if (!empty($this->name)) {
            $this->message = $this->message . ' ' . $this->name . 'さん！';
        }
    }

    public function render() {
        return view('livewire.good-afternoon-component');
    }
}

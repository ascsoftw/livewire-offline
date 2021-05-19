<?php

namespace Ascsoftw\LivewireOffline\Http\Livewire;

use Livewire\Component;

class Offline extends Component
{
    public $useTailwind;
    public $offlineText;
    public $inlineStyles = [];
    public $tailwindClasses;

    public function mount()
    {
        $this->offlineText = config('livewire-offline.offline_text');
        $this->useTailwind = config('livewire-offline.use_tailwind') ?? false;
        if (!$this->useTailwind) {
            $this->inlineStyles['background_color'] = config('livewire-offline.background_color');
            $this->inlineStyles['text_color'] = config('livewire-offline.text_color');
        } else {
            $this->tailwindClasses = config('livewire-offline.text_class');
            $this->tailwindClasses .=  ' ' . config('livewire-offline.background_class');
        }
    }

    public function render()
    {
        return view('livewire-offline::livewire.offline');
    }
}

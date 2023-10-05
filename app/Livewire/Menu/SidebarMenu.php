<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class SidebarMenu extends Component
{
    public function render()
    {
        return view('livewire.menu.sidebar-menu');
    }

    public function Compose()
	{

		return redirect()->route('permohonan');
	}



}

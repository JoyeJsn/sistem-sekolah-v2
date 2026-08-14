<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $status;
    public string $badgeClass;

    public function __construct(string $status = 'Aktif')
    {
        $this->status = $status;

        if (strtolower($status) === 'aktif') {
            // Hijau untuk status Aktif
            $this->badgeClass = 'bg-green-50 text-green-700 border-green-200';
        } else {
            $this->badgeClass = 'bg-red-50 text-red-700 border-red-200';
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}
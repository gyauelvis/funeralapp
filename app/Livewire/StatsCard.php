<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Payment;
use Livewire\Component;
use App\Models\Contributor;

class StatsCard extends Component
{

    public $date_sort;

    public $card_donations ;

    public function get_date_payments(){
        return Payment::
    }

    public function render()
    {
        return view('livewire.stats-card', [
            'contributions' => Payment::where('payment_type', 'CONTRIBUTION')->get(),
            'donations' => Payment::where('payment_type', 'DONATION')->orderBy('created_at', 'desc')->get(),
            'members' => Contributor::where('is_member', '=', 1)->orderBy('created_at', 'desc')->get(),
            'users' => User::get()
        ]);
    }
}

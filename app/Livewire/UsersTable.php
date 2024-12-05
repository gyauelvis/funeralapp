<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDirection = 'DESC';
    #[Url(history: true)]
    public $per_page = 5;
    #[Url(history: true)]
    public $search = '';
    #[Url(history: true)]
    public $role = '';

    public function setSortBy($sortByColumn)
    {
        if ($this->sortBy === $sortByColumn) {
            $this->sortDirection = ($this->sortDirection == "ASC") ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $sortByColumn;

        $this->sortDirection = 'DESC';
    }

    public function delete(User $user)
    {
        $user->delete();
    }

    public function render()
    {
        return view('livewire.users-table', ['users' => User::search($this->search)->when($this->role !== '', function ($query) {
            $query->where('role', $this->role);
        })->orderBy($this->sortBy, $this->sortDirection)->paginate($this->per_page)->withQueryString()]);
    }
}

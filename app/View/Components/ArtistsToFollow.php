<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ArtistsToFollow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if(Auth::check()){
            $profiles = Auth::user()->profile;

            $query = Profile::whereDoesntHave('followers', fn($q) => $q->where('follower_profile_id', $profiles->id))
            ->where('id', '!=', $profiles->id);

        }else{
            $query = Profile::query();
        }
        $profiles = $query->inRandomOrder()
                ->limit(4)
                ->get();

        return view('components.artists-to-follow', compact('profiles'));
    }
}

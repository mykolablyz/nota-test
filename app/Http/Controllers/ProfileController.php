<?php

namespace App\Http\Controllers;

use App\Models\CollectionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{

    public function showByHandle(User $user)
    {

        $collectionItem = CollectionItem::query()
            ->find(4);

        return Inertia::render('Space/Welcome', [
            'collectionItem' => $collectionItem,
        ]);
    }

}

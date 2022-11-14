<?php

namespace App\Http\Controllers;

use App\Models\CollectionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{

    public function showByHandle($handle)
    {
        $user = User::query()
            ->where('handle', $handle)
            ->firstOrFail();

        $collectionItem = CollectionItem::query()
            ->find(3);

        return Inertia::render('Space/Welcome', [
            'collectionItem' => $collectionItem,
        ]);
    }

}

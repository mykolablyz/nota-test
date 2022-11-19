<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class CollectionItem extends Model
{
    use HasFactory, HasFlexible;

    protected $casts = [
//        'content' => 'json'
//        'content' => FlexibleCast::class
    ];

    public function content()
    {
        return new Attribute(
            get: fn($value) => $this->flexible('content'),
        );
    }
}

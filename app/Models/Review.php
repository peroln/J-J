<?php

namespace App\Models;

use App\Http\Requests\StoreReviewRequest;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
        'alt',
        'publish',
    ];

    public static function saveAndUpdateImage(Review $review, StoreReviewRequest $request): bool
    {
        $path = Storage::putFile('reviews', $request->file('file'));
        $old_image = $review?->src;
        $review->src = $path;
        if ($review->save()) {
            return $old_image ? self::deleteImage($old_image): false;
        }
        return false;

    }

    public static function deleteImage(string $url): bool
    {
        if (Storage::exists($url)) {
            return Storage::delete($url);
        } else {
            return false;
        }
    }
}

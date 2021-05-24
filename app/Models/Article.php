<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Article
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property Carbon $published_at
 * @property Category $category
 * @method static Article create(array $data)
 */
class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['published_at'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

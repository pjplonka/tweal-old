<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @method static Category create(array $data)
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}

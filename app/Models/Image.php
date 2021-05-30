<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Models
 * @property int $id
 * @property string $extension Eg. png, jpg
 * @property string $filename Name of the file without extension
 * @property string $full_name Filename with extension
 * @property int $width
 * @property int $height
 * @property int $size Image size in bytes
 * @property string $content Image source as a blob
 * @method static Image create(array $data)
 */
class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function renderPath(): string
    {
        return 'data:image/' . $this->extension . ';base64,' . base64_encode($this->content);
    }
}

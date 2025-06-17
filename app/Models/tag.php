<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keytype = 'string';
    protected $table = 'tag';
    protected $fillable = ['title'];
    protected $guarded = ['id'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}

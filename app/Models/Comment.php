<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keytype = 'string';
    protected $table = 'comments';
    protected $fillable = ['author','content' , 'post_id'];
    protected $guarded = ['id'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}

<?php

namespace nghia23d\cms\Models;

class Category extends BaseModel
{
    protected $table = 'category';

    protected $fillable = [
        'id',
        'title',
        'slug_title',
        'status',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function getCategoryWithSlugTitle($slug_title)
    {
        return $this->active()->where('slug_title', $slug_title)->firstOrFail();
    }
}

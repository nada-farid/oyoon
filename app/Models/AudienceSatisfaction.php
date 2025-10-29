<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudienceSatisfaction extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'audience_satisfactions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'published',
        'sort_order',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function items()
    {
        return $this->hasMany(AudienceSatisfactionItem::class, 'audience_satisfaction_id')->orderBy('sort_order');
    }

    public function publishedItems()
    {
        return $this->hasMany(AudienceSatisfactionItem::class, 'audience_satisfaction_id')
            ->where('published', true)
            ->orderBy('sort_order');
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}


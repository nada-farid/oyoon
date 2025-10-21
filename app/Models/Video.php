<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Video extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    public $table = 'videos';

    protected $appends = [
        'thumbnail',
        'video_file_url',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'youtube_url',
        'video_file',
        'category_id',
        'published',
        'views_count',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 300, 200);
        $this->addMediaConversion('preview')->fit('crop', 600, 400);
    }

    public function getThumbnailAttribute()
    {
        $file = $this->getMedia('thumbnail')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getVideoFileUrlAttribute()
    {
        $file = $this->getMedia('video_file')->last();
        if ($file) {
            return $file->getUrl();
        }

        return null;
    }

    public function category()
    {
        return $this->belongsTo(VideoCategory::class, 'category_id');
    }

    public function getYoutubeEmbedUrlAttribute()
    {
        if ($this->youtube_url) {
            // Extract video ID from YouTube URL
            preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $this->youtube_url, $matches);
            if (isset($matches[1])) {
                return 'https://www.youtube.com/embed/' . $matches[1];
            }
        }
        return null;
    }
}

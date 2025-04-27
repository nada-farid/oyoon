<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    public $table = 'settings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'about_photo',
        'inner_image',
        'logo',
        'logo_white',
        'chairman_image',
        'signature_image',
        'about_inner_photo',
    ];

    protected $fillable = [
        'site_name',
        'phone',
        'address',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'youtubte',
        'instagram',
        'snap_chat',
        'pinterest',
        'short_descrption',
        'description',
        'about_description',
        'donation_url',
        'chairman_description',
        'counter_1_text',
        'counter_1_value',
        'counter_2_text',
        'counter_2_value',
        'counter_3_text',
        'counter_3_value',
        'vision',
        'mission',
        'values',
        'initiative',
        'support_text',
        'membership_conditions',
        'loss_membership',
        'commitments_membership',
        'scope',
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
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getAboutPhotoAttribute()
    {
        $file = $this->getMedia('about_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getInnerImageAttribute()
    {
        $file = $this->getMedia('inner_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getLogoWhiteAttribute()
    {
        $file = $this->getMedia('logo_white')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getChairmanImageAttribute()
    {
        $file = $this->getMedia('chairman_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getSignatureImageAttribute()
    {
        $file = $this->getMedia('signature_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAboutInnerPhotoAttribute()
    {
        $file = $this->getMedia('about_inner_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Member extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $table = 'members';

    protected $dates = [
        'identity_date',
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'job',
        'employer',
        'phone_number',
        'email',
        'identity_number',
        'identity_date',
        'type_id',
        'date_of_birth',
        'residence',
        'neighborhood',
        'address',
        'agreement',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getIdentityDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setIdentityDateAttribute($value)
    {
        $this->attributes['identity_date'] = $value ? Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d') : null;
    }

    public function type()
    {
        return $this->belongsTo(MembershipType::class, 'type_id');
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d') : null;
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }
}

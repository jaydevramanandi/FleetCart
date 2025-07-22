<?php

namespace Modules\Testimonial\Entities;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Carbon;
use Modules\Media\Entities\File;
use Illuminate\Http\JsonResponse;
use Modules\Testimonial\Admin\TestimonialTable;
use Modules\Support\Eloquent\Model;
use Modules\Media\Eloquent\HasMedia;
use Illuminate\Support\Facades\Cache;
use Modules\Product\Entities\Product;
use Modules\Meta\Eloquent\HasMetaData;
use Spatie\Sitemap\Contracts\Sitemapable;
use Modules\Support\Eloquent\Translatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Testimonial extends Model implements Sitemapable
{
    use Translatable, HasMedia, HasMetaData;

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = [];
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'designation', 'message', 'is_active'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get Testimonial list.
     *
     * @return Collection
     */
    public static function list()
    {
        return Cache::tags('testimonials')->rememberForever(md5('testimonials.list:' . locale()), function () {
            return self::all()->sortBy('name')->pluck('name', 'id');
        });
    }


    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addActiveGlobalScope();
    }


    /**
     * Get public url for the testimonial.
     *
     * @return string
     */
    public function url()
    {
        return route('testimonials.products.index', ['id' => $this->id]);
    }


    /**
     * Get the testimonial's logo.
     *
     * @return File
     */
    public function getLogoAttribute()
    {
        return $this->files->where('pivot.zone', 'logo')->first() ?: new File;
    }


    /**
     * Get the testimonial's banner.
     *
     * @return File
     */
    public function getBannerAttribute()
    {
        return $this->files->where('pivot.zone', 'banner')->first() ?: new File;
    }


    /**
     * Get related products.
     *
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /**
     * Get table data for the resource
     *
     * @return JsonResponse
     */
    public function table()
    {
        return new TestimonialTable($this->newQuery()->withoutGlobalScope('active'));
    }


    public function toSitemapTag(): Url|string|array
    {
        return Url::create($this->url())
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }
}

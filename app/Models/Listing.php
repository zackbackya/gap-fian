<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Listing extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title','slug','address','categoryListing_id','bedroom','bathroom','building_width','area_width','type','garage','price','description','photo_path','agent_id','owner_name','owner_phone','status','buyer_agent_id','status','buyer_agent_id'];
    use HasFactory;

    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

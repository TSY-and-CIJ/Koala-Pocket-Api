<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    protected $dateFormat = 'U';
    protected $fillable = ['name', 'icon_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function subCategories()
    {
        return $this->hasMany('App\Models\SubCategory', 'main_category_id', 'id');
    }
}

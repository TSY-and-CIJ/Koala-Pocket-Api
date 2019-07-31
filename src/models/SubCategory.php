<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;

    protected $table = 'sub_category';
    protected $dateFormat = 'U';
    protected $fillable = ['name', 'icon_id', 'main_category_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function mainCategory()
    {
        return $this->belongsTo('App\Models\Category');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SubCategoryModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=['subcategoryname'];

    protected $table='subcategories';
}

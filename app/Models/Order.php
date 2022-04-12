<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tborder';
    protected $primaryKey = 'id';
    protected $fillable = ['contact_name','contact_phone','start_rent_day','end_rent_day','total_rent_day','driver','bus'];

}

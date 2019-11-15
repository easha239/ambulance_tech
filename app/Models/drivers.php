<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class drivers extends Model
{
    protected $table = 'drivers';
    protected $fillable = [
        'name',
        'nid',
        'license_no',
        'phone'
    ];
}
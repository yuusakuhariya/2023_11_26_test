<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];

    // 検索機能実装
    // public function scopeFullnameSearch($query, $fullname)
    // {
    //     if(!empty($fullname)) {
    //         $query->where('fullname', $fullname);
    //     }
    // }

    // public function scopeContactSearch($query, $keyword)
    // {
    //     if(!empty($keyword)) {
    //         $query->where('fullname', 'like', '%' , $keyword, '%');
    //     }
    // }


    public function scopeFullnameSearch($query, $fullname)
    {
        if(!empty($fullname)) {
            $query->where('fullname', 'like', '%' . $fullname . '%');
        }
    }

// public function scopeContactSearch($query, $keyword)
// {
//     if (!empty($keyword)) {
//         $query->where('content', 'like', '%' . $keyword . '%');
//     }
// }

}

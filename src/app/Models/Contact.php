<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // $fillableで変更可能にする
    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];

    // 検索機能（名前検索）
    public function scopeFullnameSearch($query, $fullname)
    {
        if(!empty($fullname)) {
            $query->where('fullname', 'like', '%' . $fullname . '%');
        }
    }

    // 検索機能（メールアドレス）
    public function scopeemailSearch($query, $email)
    {
        if(!empty($email)) {
            $query->where('email', 'like', '%'. $email.'%');
        }
    }

    // 検索機能（日付範囲検索）
    public function scopeDateSearch($query, $from, $until)
    {
        if(!empty($from && $until)) {
            $query->whereBetween('created_at', [$from, $until]);
        }
        
    }

    // 検索機能（性別）
    public function scopeGenderSearch($query, $gender)
    {
        if(!empty($gender)) {
            $query->where('gender', $gender);
        }
    }


}

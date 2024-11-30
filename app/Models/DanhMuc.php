<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DanhMuc
 * 
 * @property int $danh_muc_id
 * @property string $ten_danh_muc
 * @property int|null $danh_muc_cha_id
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property DanhMuc|null $danh_muc
 * @property Collection|DanhMuc[] $danh_mucs
 * @property Collection|SanPham[] $san_phams
 *
 * @package App\Models
 */
class DanhMuc extends Model
{
	protected $table = 'danh_muc';
	protected $primaryKey = 'danh_muc_id';
	public $timestamps = false;

	protected $casts = [
		'danh_muc_cha_id' => 'int',
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'ten_danh_muc',
		'danh_muc_cha_id',
		'ngay_tao',
		'ngay_cap_nhat'
	];

	public function danh_muc()
	{
		return $this->belongsTo(DanhMuc::class, 'danh_muc_cha_id');
	}

	public function danh_mucs()
	{
		return $this->hasMany(DanhMuc::class, 'danh_muc_cha_id');
	}

	public function san_phams()
	{
		return $this->hasMany(SanPham::class);
	}

	public function danhMucCon()
{
    return $this->hasMany(DanhMuc::class, 'danh_muc_cha_id');
}
}

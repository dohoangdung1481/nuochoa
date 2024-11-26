<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SanPham
 * 
 * @property int $san_pham_id
 * @property string $ten_san_pham
 * @property string|null $mo_ta
 * @property float $gia
 * @property int|null $ton_kho
 * @property int|null $danh_muc_id
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property DanhMuc|null $danh_muc
 * @property Collection|DanhGium[] $danh_gia
 * @property Collection|DonHang[] $don_hangs
 * @property Collection|GioHang[] $gio_hangs
 *
 * @package App\Models
 */
class SanPham extends Model
{
	protected $table = 'san_pham';
	protected $primaryKey = 'san_pham_id';
	public $timestamps = false;

	protected $casts = [
		'gia' => 'float',
		'ton_kho' => 'int',
		'danh_muc_id' => 'int',
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'ten_san_pham',
		'mo_ta',
		'gia',
		'ton_kho',
		'danh_muc_id',
		'ngay_tao',
		'ngay_cap_nhat'
	];

	public function danh_muc()
	{
		return $this->belongsTo(DanhMuc::class);
	}

	public function danh_gia()
	{
		return $this->hasMany(DanhGium::class);
	}

	public function don_hangs()
	{
		return $this->belongsToMany(DonHang::class)
					->withPivot('don_hang_san_pham_id', 'so_luong', 'gia');
	}

	public function gio_hangs()
	{
		return $this->belongsToMany(GioHang::class)
					->withPivot('gio_hang_san_pham_id', 'so_luong', 'ngay_tao', 'ngay_cap_nhat');
	}
}

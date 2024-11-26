<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DonHang
 * 
 * @property int $don_hang_id
 * @property int|null $nguoi_dung_id
 * @property float $tong_tien
 * @property string|null $trang_thai
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property NguoiDung|null $nguoi_dung
 * @property Collection|SanPham[] $san_phams
 * @property Collection|HoaDon[] $hoa_dons
 *
 * @package App\Models
 */
class DonHang extends Model
{
	protected $table = 'don_hang';
	protected $primaryKey = 'don_hang_id';
	public $timestamps = false;

	protected $casts = [
		'nguoi_dung_id' => 'int',
		'tong_tien' => 'float',
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'nguoi_dung_id',
		'tong_tien',
		'trang_thai',
		'ngay_tao',
		'ngay_cap_nhat'
	];

	public function nguoi_dung()
	{
		return $this->belongsTo(NguoiDung::class);
	}

	public function san_phams()
	{
		return $this->belongsToMany(SanPham::class)
					->withPivot('don_hang_san_pham_id', 'so_luong', 'gia');
	}

	public function hoa_dons()
	{
		return $this->hasMany(HoaDon::class);
	}
}

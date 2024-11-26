<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GioHangSanPham
 * 
 * @property int $gio_hang_san_pham_id
 * @property int|null $gio_hang_id
 * @property int|null $san_pham_id
 * @property int $so_luong
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property GioHang|null $gio_hang
 * @property SanPham|null $san_pham
 *
 * @package App\Models
 */
class GioHangSanPham extends Model
{
	protected $table = 'gio_hang_san_pham';
	protected $primaryKey = 'gio_hang_san_pham_id';
	public $timestamps = false;

	protected $casts = [
		'gio_hang_id' => 'int',
		'san_pham_id' => 'int',
		'so_luong' => 'int',
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'gio_hang_id',
		'san_pham_id',
		'so_luong',
		'ngay_tao',
		'ngay_cap_nhat'
	];

	public function gio_hang()
	{
		return $this->belongsTo(GioHang::class);
	}

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class);
	}
}

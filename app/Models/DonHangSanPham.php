<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DonHangSanPham
 * 
 * @property int $don_hang_san_pham_id
 * @property int|null $don_hang_id
 * @property int|null $san_pham_id
 * @property int $so_luong
 * @property float $gia
 * 
 * @property DonHang|null $don_hang
 * @property SanPham|null $san_pham
 *
 * @package App\Models
 */
class DonHangSanPham extends Model
{
	protected $table = 'don_hang_san_pham';
	protected $primaryKey = 'don_hang_san_pham_id';
	public $timestamps = false;

	protected $casts = [
		'don_hang_id' => 'int',
		'san_pham_id' => 'int',
		'so_luong' => 'int',
		'gia' => 'float'
	];

	protected $fillable = [
		'don_hang_id',
		'san_pham_id',
		'so_luong',
		'gia'
	];

	public function don_hang()
	{
		return $this->belongsTo(DonHang::class);
	}

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class);
	}
}

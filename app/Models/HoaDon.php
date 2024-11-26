<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HoaDon
 * 
 * @property int $hoa_don_id
 * @property int|null $don_hang_id
 * @property Carbon|null $ngay_xuat_hoa_don
 * @property float $tong_tien
 * @property string|null $trang_thai
 * 
 * @property DonHang|null $don_hang
 *
 * @package App\Models
 */
class HoaDon extends Model
{
	protected $table = 'hoa_don';
	protected $primaryKey = 'hoa_don_id';
	public $timestamps = false;

	protected $casts = [
		'don_hang_id' => 'int',
		'ngay_xuat_hoa_don' => 'datetime',
		'tong_tien' => 'float'
	];

	protected $fillable = [
		'don_hang_id',
		'ngay_xuat_hoa_don',
		'tong_tien',
		'trang_thai'
	];

	public function don_hang()
	{
		return $this->belongsTo(DonHang::class);
	}
}

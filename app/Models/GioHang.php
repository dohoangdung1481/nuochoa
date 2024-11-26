<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GioHang
 * 
 * @property int $gio_hang_id
 * @property int|null $nguoi_dung_id
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property NguoiDung|null $nguoi_dung
 * @property Collection|SanPham[] $san_phams
 *
 * @package App\Models
 */
class GioHang extends Model
{
	protected $table = 'gio_hang';
	protected $primaryKey = 'gio_hang_id';
	public $timestamps = false;

	protected $casts = [
		'nguoi_dung_id' => 'int',
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'nguoi_dung_id',
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
					->withPivot('gio_hang_san_pham_id', 'so_luong', 'ngay_tao', 'ngay_cap_nhat');
	}
}

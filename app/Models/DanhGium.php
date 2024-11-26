<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DanhGium
 * 
 * @property int $danh_gia_id
 * @property int|null $san_pham_id
 * @property int|null $nguoi_dung_id
 * @property int|null $danh_gia
 * @property string|null $binh_luan
 * @property Carbon|null $ngay_tao
 * 
 * @property SanPham|null $san_pham
 * @property NguoiDung|null $nguoi_dung
 *
 * @package App\Models
 */
class DanhGium extends Model
{
	protected $table = 'danh_gia';
	protected $primaryKey = 'danh_gia_id';
	public $timestamps = false;

	protected $casts = [
		'san_pham_id' => 'int',
		'nguoi_dung_id' => 'int',
		'danh_gia' => 'int',
		'ngay_tao' => 'datetime'
	];

	protected $fillable = [
		'san_pham_id',
		'nguoi_dung_id',
		'danh_gia',
		'binh_luan',
		'ngay_tao'
	];

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class);
	}

	public function nguoi_dung()
	{
		return $this->belongsTo(NguoiDung::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NguoiDung
 * 
 * @property int $nguoi_dung_id
 * @property string $ten_dang_nhap
 * @property string $mat_khau
 * @property string $email
 * @property string|null $ho_ten
 * @property string|null $dia_chi
 * @property string|null $so_dien_thoai
 * @property Carbon|null $ngay_tao
 * @property Carbon|null $ngay_cap_nhat
 * 
 * @property Collection|DanhGium[] $danh_gia
 * @property Collection|DonHang[] $don_hangs
 * @property Collection|GioHang[] $gio_hangs
 * @property Collection|ThongBao[] $thong_baos
 *
 * @package App\Models
 */
class NguoiDung extends Model
{
	protected $table = 'nguoi_dung';
	protected $primaryKey = 'nguoi_dung_id';
	public $timestamps = false;

	protected $casts = [
		'ngay_tao' => 'datetime',
		'ngay_cap_nhat' => 'datetime'
	];

	protected $fillable = [
		'ten_dang_nhap',
		'mat_khau',
		'email',
		'ho_ten',
		'dia_chi',
		'so_dien_thoai',
		'ngay_tao',
		'ngay_cap_nhat'
	];

	public function danh_gia()
	{
		return $this->hasMany(DanhGium::class);
	}

	public function don_hangs()
	{
		return $this->hasMany(DonHang::class);
	}

	public function gio_hangs()
	{
		return $this->hasMany(GioHang::class);
	}

	public function thong_baos()
	{
		return $this->hasMany(ThongBao::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ThongBao
 * 
 * @property int $thong_bao_id
 * @property int|null $nguoi_dung_id
 * @property string|null $thong_diep
 * @property bool|null $da_doc
 * @property Carbon|null $ngay_tao
 * 
 * @property NguoiDung|null $nguoi_dung
 *
 * @package App\Models
 */
class ThongBao extends Model
{
	protected $table = 'thong_bao';
	protected $primaryKey = 'thong_bao_id';
	public $timestamps = false;

	protected $casts = [
		'nguoi_dung_id' => 'int',
		'da_doc' => 'bool',
		'ngay_tao' => 'datetime'
	];

	protected $fillable = [
		'nguoi_dung_id',
		'thong_diep',
		'da_doc',
		'ngay_tao'
	];

	public function nguoi_dung()
	{
		return $this->belongsTo(NguoiDung::class);
	}
}

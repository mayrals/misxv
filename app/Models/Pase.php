<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pase
 * 
 * @property int $idpases
 * @property string|null $nombre_familia
 * @property int|null $total_pases
 * @property string|null $telefono
 * @property int|null $pases_usados
 *
 * @package App\Models
 */
class Pase extends Model
{
	protected $table = 'pases';
	protected $primaryKey = 'idpases';
	public $timestamps = false;

	protected $casts = [
		'total_pases' => 'int',
		'pases_usados' => 'int'
	];

	protected $fillable = [
		'nombre_familia',
		'total_pases',
		'telefono',
		'pases_usados'
	];
}

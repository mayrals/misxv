<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $iduser
 * @property string|null $nombre
 * @property string|null $contraseña
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'iduser';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'contraseña'
	];
}

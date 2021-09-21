<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';
    protected $fillable = ['nama', 'ip', 'merk', 'serialnumber', 'model', 'type'];

	public function clean()
	{
		return $this->belongsToMany(Clean::class)->withPivot(['ss_sebelum', 'ss_setelah', 'sebelum', 'setelah', 'waktu'])->withTimeStamps();
	}

	public function incident()
	{
		return $this->belongsToMany(Incident::class)->withPivot(['ss_sebelum', 'ss_setelah', 'sebelum', 'setelah', 'waktu'])->withTimeStamps();
	}

}

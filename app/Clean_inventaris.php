<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clean_inventaris extends Model
{

    protected $table = 'clean_inventaris';
    protected $fillable = ['CCTV'];

	public function inventaris()
	{
		return $this->belongsToMany(Inventaris::class)->withPivot(['ss_sebelum', 'ss_setelah', 'sebelum', 'setelah', 'waktu'])->withTimeStamps();
	}

}

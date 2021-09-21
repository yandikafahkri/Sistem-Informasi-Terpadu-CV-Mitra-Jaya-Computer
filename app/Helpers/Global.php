<?php



use App\Inventaris;
use App\Karyawan;
use App\Clean_inventaris;



function totalInventaris()
{
    return Inventaris::count();
}

function totalClean()
{
    return Clean_inventaris::count();
}


function totalProyek()
{
    return Proyek::count();
}

function totalKaryawan()
{
    return Karyawan::count();
}
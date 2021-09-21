<?php

namespace App\Exports;

use App\Inventaris;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventarisExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inventaris::all();
    }

    public function map($inventaris): array
    {
        return [
            $inventaris->lokasi,
            $inventaris->nama,
            $inventaris->ip,
            $inventaris->merk,
            $inventaris->resolusi,
            $inventaris->ket,
            $inventaris->macaddress,
            $inventaris->serialnumber,
            $inventaris->model,
            $inventaris->type,
            $inventaris->password
            
            
        ];
    }

    public function headings(): array
    {
        return [
            'LOKASI',
            'NAMA',
            'IP',
            'MERK',
            'RESOLUSI',
            'KETERANGAN',
            'MAC ADDRESS',
            'SERIAL NUMBER',
            'MODEL',
            'TYPE',
            'PASSWORD'
            
        ];
    }

}

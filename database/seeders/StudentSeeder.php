<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $csv = Reader::createFromPath(
            storage_path('app/diem_thi_thpt_2024.csv'),
            'r'
        );

        $csv->setHeaderOffset('0');

        foreach($csv as $row) {
            Student::create([
                'sbd' => $row['sbd'],
                'toan' => $row['toan'] ?: null,
                'ngu_van' => $row['ngu_van'] ?: null,
                'ngoai_ngu' => $row['ngoai_ngu'] ?: null,
                'vat_li' => $row['vat_li'] ?: null,
                'hoa_hoc' => $row['hoa_hoc'] ?: null,
                'sinh_hoc' => $row['sinh_hoc'] ?: null,
                'lich_su' => $row['lich_su'] ?: null,
                'dia_li' => $row['dia_li'] ?: null,
                'gdcd' => $row['gdcd'] ?: null,
                'ma_ngoai_ngu' => $row['ma_ngoai_ngu'],
            ]);
        }
    }
}

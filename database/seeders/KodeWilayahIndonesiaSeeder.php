<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use DB;

class KodeWilayahIndonesiaSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = base_path() . '/database/seeders/csv/kode_wilayah.csv';
        $this->tablename = config('satusehatintegration.kode_wilayah_indonesia_table_name');
        $this->delimiter = ',';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        parent::run();
    }
}

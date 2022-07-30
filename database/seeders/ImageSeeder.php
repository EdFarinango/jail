<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = Report::all();

        $reports->each(function ($report)
        {
            $report->image()->create(['path' => "https://picsum.photos/id/$report->id/200/300"]);
        });


    }
}

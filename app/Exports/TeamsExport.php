<?php

namespace App\Exports;

use App\Enum\TeamStatusEnum;
use App\Models\Team;
use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class TeamsExport implements WithMultipleSheets
{

    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     $data = array();
    //     $events = Event::all();
    //     foreach ($events as $event) {
    //         $data = [
    //             $event->name =>
    //         ];
    //     }
    //     return $data;
    // }

    public function sheets(): array
    {
        $sheets = array();
        $events = Event::all();
        // dd($events);
        foreach ($events as $event) {
           $sheets[] = new TeamExportSheet($event);
        }
        // dd($sheets);
        return $sheets;
    }


}

<?php

namespace App\Exports;

use App\Models\Team;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class TeamExportSheet implements FromCollection, WithTitle, WithMapping, WithHeadings
{
    protected $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $team =  Team::with('members')->where('event_id', $this->event->id)->select([
            'team_id',
            'email',
            'name',
            'whatsapp_number',
            'institution_name',
            'year_section',
            'status'
        ])->get();

        return $team;
    }

    public function map($team): array
    {
        return [
            $team->team_id,
            $team->email,
            $team->name,
            $team->whatsapp_number,
            $team->institution_name,
            $team->year_section,
            $this->formatStatus($team->status),
        ];
    }


    protected function formatStatus($status)
    {
        // dd($status);
        $status = match ($status) {
            '0' => 'Registered',
            '1' => 'Paid'
        };

        return $status;
    }

    public function headings(): array
    {
        return [
            'team_id',
            'email',
            'name',
            'whatsapp_number',
            'institution_name',
            'year_section',
            'status'
        ];
    }


    public function title(): string
    {
        return $this->event->name;
    }
}

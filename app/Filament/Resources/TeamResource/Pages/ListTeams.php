<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\ButtonAction;
use App\Exports\TeamsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Team;
use DateTime;
use DateTimeZone;
use Filament\Forms;

class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            ButtonAction::make('export')->action('export'),
        ]);
    }

    public function export()
    {
        $utc = now();
        $dt = new DateTime($utc);
        $tz = new DateTimeZone('Asia/Kolkata');
        $dt->setTimezone($tz);
        $file_name = 'quintessence_teams_list_' . $dt->format('Y_m_d_H_i_s');

        return Excel::download(new TeamsExport, $file_name . '.xlsx');
    }
}

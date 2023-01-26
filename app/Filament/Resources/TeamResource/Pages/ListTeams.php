<?php
namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\ButtonAction;
use App\Exports\TeamsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Team;
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
        return Excel::download(new TeamsExport, 'teams.xlsx');
    }
}

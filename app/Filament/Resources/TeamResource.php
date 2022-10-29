<?php

namespace App\Filament\Resources;

use App\Enum\TeamStatusEnum;
use App\Filament\Resources\TeamResource\RelationManagers\MembersRelationManager;
use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Team Lead Name')
                ->description(function( $record) {
                    return $record->email;
                }),
                TextColumn::make('event.creative_name'),
                TextColumn::make('institution_name'),
                TextColumn::make('year_section'),
                BadgeColumn::make('status')
                ->description('Registered, Payment Completed , Payment Failed')
                ->enum(TeamStatusEnum::values(inverse: true))
                ->colors([
                    'warning' => '0',
                    'success' => '1',
                    'danger' => '2',
                ]),
                TextColumn::make('created_at')
                ->label('Registered On')
                ->dateTime('d M, y')


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('View')
                ->icon('heroicon-o-eye'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            MembersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}

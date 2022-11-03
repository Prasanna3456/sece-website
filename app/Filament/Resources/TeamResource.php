<?php

namespace App\Filament\Resources;

use App\Enum\TeamStatusEnum;
use App\Filament\Resources\TeamResource\RelationManagers\MembersRelationManager;
use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use App\Forms\Components\ImageViewer; 

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Team Lead Name')
                                    ->disabled(),
                                TextInput::make('email')
                                    ->label('Team Lead Email')
                                    ->disabled(),
                            ]),
                        Grid::make()
                            ->schema([
                                TextInput::make('whatsapp_number')
                                    ->label('Whatsapp Number')
                                    ->disabled(),
                                TextInput::make('institution_name')
                                    ->label('Institution Name')
                                    ->disabled(),
                                TextInput::make('course')
                                    ->label('Course')
                                    ->disabled(),
                                TextInput::make('department')
                                    ->label('Course')
                                    ->disabled(),
                                TextInput::make('year_section')
                                    ->label('Year and section')
                                    ->disabled(),
                            ]),

                        TextInput::make('project_title')
                            ->label('Project Title')
                            ->disabled()
                            ->hidden(fn (Closure $get) => $get('project_based_event') == 0),
                        Textarea::make('project_abstract')
                            ->label('Project Abstract')
                            ->disabled()
                            ->hidden(fn (Closure $get) => $get('project_based_event') == 0),

                        Toggle::make('team_present')
                            ->label('Team Present ?')
                            ->required(),
                    ]),
                    Card::make()
                    ->schema([
                            ImageViewer::make('college_id_card')
                            ->visibleOn('edit')
                        ])
                        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Team Lead Name')
                    ->description(function ($record) {
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
                BadgeColumn::make('team_present')
                    ->enum([
                        '0' => 'Absent',
                        '1' => 'Present',
                    ]),
                TextColumn::make('created_at')
                    ->label('Registered On')
                    ->dateTime('d M, y'),



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

<?php

namespace App\Filament\Resources;

use App\Enum\TeamStatusEnum;
use App\Filament\Resources\TeamResource\RelationManagers\MembersRelationManager;
use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use App\Models\Event;
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
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;


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
                                    ->required(),
                                TextInput::make('email')
                                    ->label('Team Lead Email')
                                    ->required(),
                            ]),
                        Grid::make()
                            ->schema([
                                Select::make('event_id')
                                ->label('Event')
                                ->options(Event::all()->pluck('name', 'id'))
                                ->searchable(),
                                TextInput::make('whatsapp_number')
                                    ->label('Whatsapp Number')
                                    ->required(),
                                TextInput::make('institution_name')
                                    ->label('Institution Name')
                                    ->required(),
                                TextInput::make('course')
                                    ->label('Course')
                                    ->required(),
                                TextInput::make('department')
                                    ->label('Course')
                                    ->required(),
                                TextInput::make('year_section')
                                    ->label('Year and section')
                                    ->required(),
                                    Select::make('status')
                                        ->options([
                                            '0' => 'Registered',
                                            '1' => 'Payment Successfull',
                                            '2' => 'Payment Failed',
                                        ])
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
                        // FileUpload::make('college_id_card')
                    ]),
                    Card::make()
                    ->schema([
                            ImageViewer::make('college_id_card')
                            ->visibleOn('edit')
                        ])->columns(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                  TextColumn::make('team_id')
                    ->label('Team Reg ID')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Team Lead Name')
                    ->description(function ($record) {
                        return $record->email;
                    })->searchable(),
                TextColumn::make('event.creative_name')->searchable(),
                TextColumn::make('institution_name')->searchable(),
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
                SelectFilter::make('status')
                    ->options([
                        '0' => 'Registered',
                        '1' => 'Payment successfull',
                        '2' => 'Payment Failed',
                    ]),
                SelectFilter::make('team_present')
                    ->options([
                        '0' => 'Absent',
                        '1' => 'Present',
                    ]),
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

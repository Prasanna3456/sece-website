<?php

namespace App\Filament\Resources;

use App\Enum\EventCategoryEnum;
use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;


class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('creative_name')
                                    ->required()
                                    ->label('Event Creative Name')
                                    ->reactive()
                                    ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' || 'edit' ? $set('slug', Str::slug($state)) : null),
                                TextInput::make('name')
                                    ->label('Event Name')
                                    ->required(),
                            ]),
                        Hidden::make('slug'),
                        Grid::make()
                            ->schema([
                                Select::make('category')
                                    ->label('Event Category')
                                    ->required()
                                    ->options([
                                        '0' => 'Technical',
                                        '1' => 'Non-Technical',
                                        '2' => 'Online',
                                    ])->reactive(),
                                TextInput::make('entry_fee')
                                    ->label('Entry Fee')
                                    ->numeric()
                                    ->required(),
                                TextInput::make('max_team_members')
                                    ->label('Max Team members')
                                    ->hint('Excluding Team Leader')
                                    ->numeric()
                                    ->required(),

                            ])->columns(3),
                        Toggle::make('project_based_event')
                            ->hidden(fn (Closure $get) => $get('category') != 0)
                            ->label('Project/Paper Presentation Based Event')
                            ->required(),
                        Toggle::make('fifa_event')
                            ->hidden(fn (Closure $get) => $get('category') != 1 )
                            ->label('FIFA Event ?')
                            ->required(),

                        Tabs::make('Event Details')
                            ->tabs([
                                Tabs\Tab::make('Event Description')
                                    ->schema([
                                        RichEditor::make('description')
                                            ->label('Event Description')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Rules')
                                    ->schema([
                                        RichEditor::make('rules')
                                            ->label('Event Rules')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Contact Details')
                                    ->schema([
                                        RichEditor::make('contact')
                                            ->label('Contact Details')
                                            ->hint('Contact Details of the Event heads')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Event Poster')
                                    ->schema([
                                        FileUpload::make('poster')
                                            ->label('Event Poster')
                                            ->required()
                                            ->hint('Upload the event poster here'),
                                    ]),
                            ]),
                         Select::make('status')
                                    ->label('Event Status')
                                    ->required()
                                    ->options([
                                        '0' => 'Event enabled',
                                        '1' => 'Registration Closed ',
                                        '2' => 'Online registration Closed , on spot available',
                                    ])->reactive()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('creative_name'),
                TextColumn::make('name')
                    ->label('Event Type'),
                TextColumn::make('category')
                    ->label('Event Category')
                    ->enum(EventCategoryEnum::getCategoryTypes()),
                TextColumn::make('entry_fee'),
                IconColumn::make('status')
                    ->label('Registration Disabled ? ')
                     ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle'),
                          SelectColumn::make('status')
                            ->options([
                                '0' => 'Event Enabled',
                                '1' => 'Registration Closed',
                                '2' => 'On spot available',
                            ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}

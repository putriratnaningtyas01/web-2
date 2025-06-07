<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('nim')->searchable(),
                TextColumn::make('jurusan')->searchable(),
                TextColumn::make('jenis_kelamin')->searchable(),
                TextColumn::make('agama')->searchable(),
                TextColumn::make('status')->searchable()
            ])
            ->filters([
                //nama
                SelectFilter::make('nama')
                    ->options([
                        'Budi Santoso' => 'Budi Santoso',
                        'Siti Aminah' => 'Siti Aminah',
                        'Andi Wijaya' => 'Andi Wijaya',
                    ]),

                //nim
                SelectFilter::make('nim')
                    ->options([
                        '1234567890' => '1234567890',
                        '0987654321' => '0987654321',
                        '1122334455' => '1122334455',
                    ]),

                //jurusan
                SelectFilter::make('jurusan')
                    ->options([
                        'Teknik Informatika' => 'Teknik Informatika',
                        'Sistem Informasi' => 'Sistem Informasi',
                        'Teknik Elektro' => 'Teknik Elektro',
                    ]),
                    
                //jenis_kelamin
                SelectFilter::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-Laki',
                        'P' => 'Perempuan',
                    ]),

                //agama
                SelectFilter::make('agama')
                    ->options([
                        'Islam' => 'Islam',
                        'Kristen' => 'Kristen',
                        'Hindu' => 'Hindu',
                    ]),
                
                //status
                SelectFilter::make('status')
                    ->options([
                        'aktif' => 'aktif',
                        'tidak aktif' => 'tidak aktif',
                    ])

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}

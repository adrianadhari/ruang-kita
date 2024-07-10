<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama_lengkap' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'nama_lengkap' => 'Frila Cahya Wardani',
            'npm' => '212310014',
            'email' => 'frila@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        Room::insert([
            [
                'nama_ruangan'  => "R-310",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '07:30',
                'selesai' => '10:00',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-305",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-308",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '07:30',
                'selesai' => '10:00',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-306",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-307",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-301",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-308",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-310",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-305",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-307",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-309",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-309",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-304",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-304",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-308",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-301",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-306",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '20:30',
                'selesai' => '22:00',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-305",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-309",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '07:30',
                'selesai' => '10:00',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-309",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-304",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-307",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-303",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-304",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '20:30',
                'selesai' => '22:00',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-301",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-303",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-310",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-302",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '10:15',
                'selesai' => '12:45',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-307",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '07:30',
                'selesai' => '10:00',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-302",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tidak Tersedia'
            ], [
                'nama_ruangan'  => "R-306",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '13:00',
                'selesai' => '15:30',
                'status' => 'Tersedia'
            ], [
                'nama_ruangan'  => "R-310",
                'lantai' => 3,
                'tanggal' => '2024-07-15',
                'mulai' => '18:30',
                'selesai' => '20:30',
                'status' => 'Tersedia'
            ]
        ]);
    }
}

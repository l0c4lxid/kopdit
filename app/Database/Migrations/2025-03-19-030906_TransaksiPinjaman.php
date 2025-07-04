<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiPinjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pinjaman' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_anggota' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'tanggal_pinjaman' => [
                'type' => 'DATE'
            ],
            'jumlah_pinjaman' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'jangka_waktu' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'jaminan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['aktif', 'lunas'],
                'default' => 'aktif'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id_pinjaman', true);
        $this->forge->addForeignKey('id_anggota', 'anggota', 'id_anggota', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transaksi_pinjaman');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_pinjaman');
    }
}

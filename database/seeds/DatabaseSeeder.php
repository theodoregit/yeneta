<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegistrarAuthsTableSeeder::class);
        $this->call(DeanAuthsTableSeeder::class);
        $this->call(FinanceAuthsTableSeeder::class);
        $this->call(InstructorAuthsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(StudentAuthsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ComputerScienceTableSeeder::class);
        $this->call(AccountingTableSeeder::class);
        $this->call(ManagementTableSeeder::class);
        $this->call(InstructorTableSeeder::class);
    }
}

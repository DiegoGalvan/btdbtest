<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            NewslettersTableSeeder::class,
            IssuesTableSeeder::class,
            StoriesTableSeeder::class,
            Issue_StoriesTableSeeder::class,
            SubscriptionsTableSeeder::class,
            BusinessesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
            StatusesTableSeeder::class,
            RolesTableSeeder::class,
            FilesTableSeeder::class,
            Fin_CapsTableSeeder::class,
            Fin_ChartsTableSeeder::class,
            System_VariablesTableSeeder::class,
        ]);
    }
}

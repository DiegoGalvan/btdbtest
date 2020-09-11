<?php

use App\models\IssueStory;
use Illuminate\Database\Seeder;

class Issue_StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        IssueStory::create([
            'order' => '2',
            //'newsletter_id' => '1',
            'issue_id' => '7',
            'story_id' => '1',
        ]);
        IssueStory::create([
            'order' => '3',
            //'newsletter_id' => '1',
            'issue_id' => '7',
            'story_id' => '2',
        ]);
        IssueStory::create([
            'order' => '1',
            //'newsletter_id' => '1',
            'issue_id' => '7',
            'story_id' => '3',
        ]);
    }
}

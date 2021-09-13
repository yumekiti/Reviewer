<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $messages = ['メッセージテスト１', 'メッセージテスト２', 'メッセージテスト３'];

        foreach ($messages as $index => $message) {
            DB::table('comments')->insert([
                'message' => $message,
                'star' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'user_id' => 1,
                'thread_id' => 1,
            ]);
        }
    }
}
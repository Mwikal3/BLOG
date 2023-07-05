<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();//truncate deletes specific records in a db


        Post::factory()->count(5)->create();
    

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user=User::create([
        //     'id'=>3,
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
/////////////////////////////////////////////////////////////////////////////////////////////
        
        // $user=User::factory()->create();

        // $personal=Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // $family=Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);

        
        // $work=Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$personal->id,
        //     'title'=>'My Personal Post',
        //     'slug'=>'my-personal-post',
        //     'excerpt'=>'This is the first excerpt post',
        //     'body'=>'This is the body'

        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'This is the work excerpt post',
        //     'body'=>'This is the body'

        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My family Post',
        //     'slug'=>'my-family-post',
        //     'excerpt'=>'This is the family excerpt post',
        //     'body'=>'This is the body'

        // ]);
    }
}

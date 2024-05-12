<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rifqi Raehan',
            'username' => 'rifqiraehan',
            'email' => 'rifqiraehan86@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Aria Alvan',
            'username' => 'ariaalvan',
            'email' => 'ariaalvan@gmail.com',
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Seviola Indah',
            'username' => 'seviolaindah',
            'email' => 'seviolaindah@gmail.com',
            'password' => bcrypt('secret')
        ]);

        // Category Factory
        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'anime',
        ]);

        // Category::create([
        //     'name' => 'Elektronics',
        //     'slug' => 'elektronics',
        // ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit eum maiores cum explicabo inventore vero recusandae animi error fugit. Nemo aliquid accusamus architecto incidunt sint. Omnis error odit dicta!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dolores rerum expedita deleniti animi eveniet sint, magni eaque, voluptates consequuntur tempore repudiandae illo fugit architecto fuga ut accusamus magnam velit quam at earum iste itaque sit. Sequi, molestiae explicabo amet voluptatibus fugiat facilis officia vero magni. Ut minus animi eveniet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, nesciunt sequi rerum asperiores tempora modi sunt corporis perferendis? Dolor qui aliquid sequi ipsam repellendus facere aperiam doloremque deleniti quis iusto nisi commodi obcaecati nostrum, omnis, ex eos quo amet cumque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit eum maiores cum explicabo inventore vero recusandae animi error fugit. Nemo aliquid accusamus architecto incidunt sint. Omnis error odit dicta!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dolores rerum expedita deleniti animi eveniet sint, magni eaque, voluptates consequuntur tempore repudiandae illo fugit architecto fuga ut accusamus magnam velit quam at earum iste itaque sit. Sequi, molestiae explicabo amet voluptatibus fugiat facilis officia vero magni. Ut minus animi eveniet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, nesciunt sequi rerum asperiores tempora modi sunt corporis perferendis? Dolor qui aliquid sequi ipsam repellendus facere aperiam doloremque deleniti quis iusto nisi commodi obcaecati nostrum, omnis, ex eos quo amet cumque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit eum maiores cum explicabo inventore vero recusandae animi error fugit. Nemo aliquid accusamus architecto incidunt sint. Omnis error odit dicta!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dolores rerum expedita deleniti animi eveniet sint, magni eaque, voluptates consequuntur tempore repudiandae illo fugit architecto fuga ut accusamus magnam velit quam at earum iste itaque sit. Sequi, molestiae explicabo amet voluptatibus fugiat facilis officia vero magni. Ut minus animi eveniet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, nesciunt sequi rerum asperiores tempora modi sunt corporis perferendis? Dolor qui aliquid sequi ipsam repellendus facere aperiam doloremque deleniti quis iusto nisi commodi obcaecati nostrum, omnis, ex eos quo amet cumque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit eum maiores cum explicabo inventore vero recusandae animi error fugit. Nemo aliquid accusamus architecto incidunt sint. Omnis error odit dicta!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas dolores rerum expedita deleniti animi eveniet sint, magni eaque, voluptates consequuntur tempore repudiandae illo fugit architecto fuga ut accusamus magnam velit quam at earum iste itaque sit. Sequi, molestiae explicabo amet voluptatibus fugiat facilis officia vero magni. Ut minus animi eveniet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, nesciunt sequi rerum asperiores tempora modi sunt corporis perferendis? Dolor qui aliquid sequi ipsam repellendus facere aperiam doloremque deleniti quis iusto nisi commodi obcaecati nostrum, omnis, ex eos quo amet cumque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 3,
        // ]);


    }
}

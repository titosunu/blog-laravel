<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Pratito Sunu',
            'username' => 'pratitosunu',
            'email' => 'titosunu2001@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Sudden Festival Music',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'sudden-festival-music',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iusto provident culpa labore, totam iste animi id aliquam nisi nesciunt quod accusantium magni consequuntur magnam. Possimus incidunt praesentium molestias voluptatem iure culpa sint soluta laboriosam quo quae itaque accusantium, aperiam corrupti qui et, beatae numquam, ad alias exercitationem minima omnis.</p><p>Vitae sed sequi eligendi. Eveniet possimus quis aperiam sint sapiente saepe tempore temporibus hic illo exercitationem amet porro dolorem id nulla nostrum odit molestiae dolores labore maiores iusto blanditiis, animi ullam. Vel ab aliquid culpa numquam veniam dolores at ipsam! Quae consectetur veniam dignissimos autem ad itaque similique ipsa, voluptas quia sed dicta temporibus sunt, incidunt sequi doloribus ipsam eos nostrum! Totam laborum consectetur reprehenderit omnis veritatis eaque iste sequi, dolor dolore et sapiente nobis veniam maiores sit culpa eveniet magni maxime enim perspiciatis quod.</p><p>Quibusdam laudantium, odit excepturi ipsum possimus minus debitis eaque explicabo laborum accusamus inventore veritatis sed vitae animi natus commodi itaque ipsa modi tempore. Voluptas qui eum hic fugiat, quam eveniet laboriosam quae magnam similique assumenda molestias. Veniam inventore ipsam eos ex.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Delight Nature',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'delight-nature',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iusto provident culpa labore, totam iste animi id aliquam nisi nesciunt quod accusantium magni consequuntur magnam. Possimus incidunt praesentium molestias voluptatem iure culpa sint soluta laboriosam quo quae itaque accusantium, aperiam corrupti qui et, beatae numquam, ad alias exercitationem minima omnis.</p><p>Vitae sed sequi eligendi. Eveniet possimus quis aperiam sint sapiente saepe tempore temporibus hic illo exercitationem amet porro dolorem id nulla nostrum odit molestiae dolores labore maiores iusto blanditiis, animi ullam. Vel ab aliquid culpa numquam veniam dolores at ipsam! Quae consectetur veniam dignissimos autem ad itaque similique ipsa, voluptas quia sed dicta temporibus sunt, incidunt sequi doloribus ipsam eos nostrum! Totam laborum consectetur reprehenderit omnis veritatis eaque iste sequi, dolor dolore et sapiente nobis veniam maiores sit culpa eveniet magni maxime enim perspiciatis quod.</p><p>Quibusdam laudantium, odit excepturi ipsum possimus minus debitis eaque explicabo laborum accusamus inventore veritatis sed vitae animi natus commodi itaque ipsa modi tempore. Voluptas qui eum hic fugiat, quam eveniet laboriosam quae magnam similique assumenda molestias. Veniam inventore ipsam eos ex.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Apple Watch',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'apple-watch',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iusto provident culpa labore, totam iste animi id aliquam nisi nesciunt quod accusantium magni consequuntur magnam. Possimus incidunt praesentium molestias voluptatem iure culpa sint soluta laboriosam quo quae itaque accusantium, aperiam corrupti qui et, beatae numquam, ad alias exercitationem minima omnis.</p><p>Vitae sed sequi eligendi. Eveniet possimus quis aperiam sint sapiente saepe tempore temporibus hic illo exercitationem amet porro dolorem id nulla nostrum odit molestiae dolores labore maiores iusto blanditiis, animi ullam. Vel ab aliquid culpa numquam veniam dolores at ipsam! Quae consectetur veniam dignissimos autem ad itaque similique ipsa, voluptas quia sed dicta temporibus sunt, incidunt sequi doloribus ipsam eos nostrum! Totam laborum consectetur reprehenderit omnis veritatis eaque iste sequi, dolor dolore et sapiente nobis veniam maiores sit culpa eveniet magni maxime enim perspiciatis quod.</p><p>Quibusdam laudantium, odit excepturi ipsum possimus minus debitis eaque explicabo laborum accusamus inventore veritatis sed vitae animi natus commodi itaque ipsa modi tempore. Voluptas qui eum hic fugiat, quam eveniet laboriosam quae magnam similique assumenda molestias. Veniam inventore ipsam eos ex.</p>'
        // ]);
    }
}

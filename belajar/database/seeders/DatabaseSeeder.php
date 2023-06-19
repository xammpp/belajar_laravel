<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

       // User::create([
        //    'name' => 'Bagus Daffa Firmasyah',
          //  'email' => 'bagusdaffaf01@gmail.com',
            //'password' => bcrypt('12345')
        //]);

        //User::create([
          //  'name' => 'Daffa Firmansyah',
            //'email' => 'nikenfirmansyah21@gmail.com',
            //'password' => bcrypt('12345')
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        /*Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'pertama',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nobis excepturi ab quod velit voluptatibus fugiat ratione perspiciatis voluptates aut praesentium dolor officiis corporis iusto veritatis modi reiciendis mollitia totam delectus enim fuga! Praesentium nulla mollitia repellendus? Alias esse autem impedit, sunt blanditiis consequatur error, illo vero, fugit corrupti quae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'kedua',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nobis excepturi ab quod velit voluptatibus fugiat ratione perspiciatis voluptates aut praesentium dolor officiis corporis iusto veritatis modi reiciendis mollitia totam delectus enim fuga! Praesentium nulla mollitia repellendus? Alias esse autem impedit, sunt blanditiis consequatur error, illo vero, fugit corrupti quae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'ketiga',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nobis excepturi ab quod velit voluptatibus fugiat ratione perspiciatis voluptates aut praesentium dolor officiis corporis iusto veritatis modi reiciendis mollitia totam delectus enim fuga! Praesentium nulla mollitia repellendus? Alias esse autem impedit, sunt blanditiis consequatur error, illo vero, fugit corrupti quae.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'keempat',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nobis excepturi ab quod velit voluptatibus fugiat ratione perspiciatis voluptates aut praesentium dolor officiis corporis iusto veritatis modi reiciendis mollitia totam delectus enim fuga! Praesentium nulla mollitia repellendus? Alias esse autem impedit, sunt blanditiis consequatur error, illo vero, fugit corrupti quae.',
            'category_id' => 2,
            'user_id' => 2
        ]);*/
    }
}

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
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // seeding user
        // User::create([
        //     'name' => 'Dheris Permadi',
        //     'email' => 'dheris@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dodi Hermansyah',
        //     'email' => 'doddy@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Java',
        //     'slug' => 'java',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.</p> <p>Iure temporibus fugit enim repudiandae delectus magni quasi. Corporis, culpa! Magnam praesentium sapiente perspiciatis reiciendis corporis corrupti perferendis quia sit ullam vero quo obcaecati aspernatur, tempora accusantium cum deleniti officia dolore autem porro, maiores totam temporibus. Rem optio placeat magni reiciendis quisquam ipsam porro vero, dolor error neque quibusdam quas. Excepturi incidunt rem possimus fugiat repellendus nihil facere odit unde aperiam. Incidunt consequuntur aliquid tempora harum minima excepturi iste sequi, quasi repudiandae tenetur.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'How to Solve Errors',
        //     'slug' => 'how-to-solve-errors',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.</b></p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Ruby',
        //     'slug' => 'ruby',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.</p> <p>Iure temporibus fugit enim repudiandae delectus magni quasi. Corporis, culpa! Magnam praesentium sapiente perspiciatis reiciendis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Java v2',
        //     'slug' => 'java-v2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.</p> <p>Iure temporibus fugit enim repudiandae delectus magni quasi. Corporis, culpa! Magnam praesentium sapiente perspiciatis reiciendis corporis corrupti perferendis quia sit ullam vero quo obcaecati aspernatur, tempora accusantium cum deleniti officia dolore autem porro, maiores totam temporibus. Rem optio placeat magni reiciendis quisquam ipsam porro vero, dolor error neque quibusdam quas. Excepturi incidunt rem possimus fugiat repellendus nihil facere odit unde aperiam. Incidunt consequuntur aliquid tempora harum minima excepturi iste sequi, quasi repudiandae tenetur.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'How to Prepare Code',
        //     'slug' => 'how-to-prepare-code',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrums.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat impedit incidunt autem eius quod facere esse nostrum officia sequi labore tempore libero, itaque beatae nam molestias.</p> <p>Iure temporibus fugit enim repudiandae delectus magni quasi. Corporis, culpa! Magnam praesentium sapiente perspiciatis reiciendis corporis corrupti perferendis quia sit ullam vero quo obcaecati aspernatur.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

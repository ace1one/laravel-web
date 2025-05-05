<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // delete tags for all blogs
        DB::table('taggable_taggables')->where('taggable_type', 'App\Models\Blog')->delete();
        // then delete everything else related to blogs
        BlogCategory::truncate();
        BlogComment::truncate();
        Blog::truncate();
        $faker = Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));


        //blog categories
        $categories = [
            'AI & Machine Learning',
            'Cybersecurity',
            'Software Development',
            'Cloud & DevOps',
            'Tech Trends & Innovation',
        ];
        foreach ($categories as $category) {
            BlogCategory::create([
                'title' => $category,
            ]);
        }

        // blog tags
        $tags = [
            'Artificial Intelligence',
            'Machine Learning',
            'Cybersecurity',
            'Cloud Computing',
            'Blockchain',
            'Internet of Things',
            'Data Science',
            'Software Development',
            'DevOps',
            'Augmented Reality',
        ];

        // blog titles 15
        $titles = [
            'The Future of AI in Healthcare',
            'How Blockchain is Changing the Game in Supply Chain',
            'The Role of AI in Cybersecurity',
            'Data Science: The New Frontier in Business Intelligence',
            'The Role of Augmented Reality in the Future of Remote Collaboration',
            'How AI is Revolutionizing the Financial Industry',
            'The Impact of Cloud Computing on Business Operations',
            'DevOps: The Future of Software Development',
            'How IoT is Transforming the Manufacturing Industry',
            'The Role of AI in Automating Business Processes',
            'How Machine Learning is Powering Predictive Analytics',
            'AI vs. Machine Learning: Understanding the Key Differences',
            'Top 10 Cybersecurity Threats for 2024 and How to Prevent Them',
            'The Evolution of Ransomware and How Businesses Can Stay Safe',
            'Best Practices for Data Privacy in the Age of Cyber Attacks',
        ];

        //create blogs
        for ($i = 0; $i < 15; $i++) {
            $content = implode("\n", [
                    "<p>" . $faker->text(500) . "</p>",
                    "<h4>" . $faker->sentence(5) . "</h4>",
                    "<p>" . $faker->text(500) . "</p>",
                    "<h4>" . $faker->sentence(5) . "</h4>",
                    "<p>" . $faker->text(500) . "</p>"
            ]);

            $blog = Blog::create([
                'blog_category_id'  => rand(1, 5),
                'user_id'   => 1,
                'title' => $titles[$i],
                'content'   => $content,
                // comment out below line if you are in windows or not generating images
                'image' => $faker->image('public/uploads/blog/', 640, 480, false, false),
            ]);
            // generate 3 random numbers from 1 to
            shuffle($tags);
            $blog->tag(array_slice($tags, 0, 3));

            // write 3 comments
            for ($j = 0; $j < 3; $j++) {
                BlogComment::create([
                    'blog_id' => $blog->id,
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'comment' => $faker->text(100),
                ]);
            }
        }
        // TODO: add tags and add them to blog posts
        $this->command->info('Dummy blog categories and posts have been created!');
    }
}

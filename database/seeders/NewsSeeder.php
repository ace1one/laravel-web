<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        News::truncate();
        $faker = Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));


        $categories = ['business', 'popular', 'hotnews', 'lifestyle', 'world', 'world', 'sports'];



        // below are 5 titles for each category
        $titles = [
            "Tech Giants Report Record Profits Amid Global Expansion",
            "Small Businesses Struggle to Recover After Pandemic",
            "New Trade Agreements Set to Boost Global Commerce",
            "Cryptocurrency Markets Face Increased Regulation Pressure",
            "Real Estate Prices Surge as Demand Outpaces Supply",
            "Top 10 Streaming Shows You Can't Miss This Fall",
            "New Social Media App Gains Millions of Users Overnight",
            "Celebrities Spark Viral Fashion Trend on the Red Carpet",
            "Pop Icon Releases Surprise Album, Breaking Streaming Records",
            "Global Music Festival Returns with Star-Studded Lineup",
            "Breaking: Major Earthquake Strikes Off the Coast of Indonesia",
            "Government Announces Emergency Measures in Response to Rising Inflation",
            "Wildfire Rages Across Western States, Thousands Evacuated",
            "High-Profile Data Breach Exposes Millions of Personal Records",
            "Massive Protests Erupt Across Europe Amid Energy Crisis",
            "The Rise of Minimalism: How to Declutter and Simplify Your Life",
            "Top Wellness Trends to Watch in 2024",
            "How Sustainable Fashion is Changing the Way We Shop",
            "Travel Hacks: How to See the World on a Budget",
            "The Future of Food: Plant-Based Diets and Alternative Proteins",
            "Global Leaders Meet to Address Climate Crisis at COP29",
            "Tensions Rise Between Rival Nations in Eastern Europe",
            "Humanitarian Aid Arrives in War-Torn Region After Ceasefire",
            "Historic Peace Talks Begin Between Long-Standing Adversaries",
            "UN Urges Immediate Action on Global Refugee Crisis",
            "Massive International Relief Effort Underway After Typhoon",
            "Global Economic Forum Focuses on Solutions for Inequality",
            "Escalating Conflict Forces Thousands to Flee Across Borders",
            "International Sanctions Imposed Amid Alleged Human Rights Violations",
            "Breakthrough Diplomatic Talks Ease Long-Standing Regional Tensions",
            "Underdog Team Shocks the World with Championship Victory",
            "Olympic Games to Feature New Sports in Upcoming Edition",
            "Top Athletes Gear Up for the Next Major Global Tournament",
            "Football Star Sets New Record in Historic Match",
            "New Technology is Revolutionizing the Way Sports are Played and Viewed"
        ];


        // generate 5 news items for each category
        for ($i = 0; $i < count($categories); $i++) {
            for ($j = 0; $j < 5; $j++) {
                $content = implode("\n", [
                    "<p>" . $faker->text(500) . "</p>",
                    "<h4>" . $faker->sentence(5) . "</h4>",
                    "<p>" . $faker->text(500) . "</p>",
                    "<h4>" . $faker->sentence(5) . "</h4>",
                    "<p>" . $faker->text(500) . "</p>"
                ]);

                News::create([
                    'title' => $titles[$i*5 + $j],
                    'content' => $content,
                    'category' => $categories[$i],
                    // comment out below line if you are in windows or not generating images
                    'image' => $faker->image('public/uploads/news/', 640, 480, false, false),
                ]);
            }
        }

        $this->command->info('Dummy news entered into database');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // category
         $categoriesData = [

                // 1 Parent Category: Blogging Tips
                ["id" => 1, "title" => "Blogging Tips", "slug" => "blogging-tips", "image_id" => "demo/blogging_tips.png", "is_featured" => 1,
                "child" => [
                    ["id" => 2, "title" => "Content Creation", "slug" => "content-creation"],
                    ["id" => 3, "title" => "SEO Strategies", "slug" => "seo-strategies"],
                    ["id" => 4, "title" => "Monetization", "slug" => "monetization"],
                ]],

                // 2 Parent Category: Writing & Editing
                ["id" => 5, "title" => "Writing & Editing", "slug" => "writing-editing", "image_id" => "demo/writing_editing.png", "is_featured" => 1,
                "child" => [
                    ["id" => 6, "title" => "Grammar & Style", "slug" => "grammar-style"],
                    ["id" => 7, "title" => "Editing Tools", "slug" => "editing-tools"],
                    ["id" => 8, "title" => "Storytelling", "slug" => "storytelling"],
                ]],

                // 3 Parent Category: Digital Marketing
                ["id" => 9, "title" => "Digital Marketing", "slug" => "digital-marketing", "image_id" => "demo/digital_marketing.png", "is_featured" => 1,
                "child" => [
                    ["id" => 10, "title" => "Social Media", "slug" => "social-media"],
                    ["id" => 11, "title" => "Email Marketing", "slug" => "email-marketing"],
                    ["id" => 12, "title" => "Affiliate Marketing", "slug" => "affiliate-marketing"],
                ]],

                // 4 Parent Category: Blogging Platforms
                ["id" => 13, "title" => "Blogging Platforms", "slug" => "blogging-platforms", "image_id" => "demo/blogging_platforms.png", "is_featured" => 1,
                "child" => [
                    ["id" => 14, "title" => "WordPress", "slug" => "wordpress"],
                    ["id" => 15, "title" => "Blogger", "slug" => "blogger"],
                    ["id" => 16, "title" => "Medium", "slug" => "medium"],
                ]],

                // 5 Parent Category: Blogging Tools
                ["id" => 17, "title" => "Blogging Tools", "slug" => "blogging-tools", "image_id" => "demo/blogging_tools.png", "is_featured" => 1,
                "child" => [
                    ["id" => 18, "title" => "Content Management Tools", "slug" => "content-management-tools"],
                    ["id" => 19, "title" => "Analytics Tools", "slug" => "analytics-tools"],
                    ["id" => 20, "title" => "Graphic Design Tools", "slug" => "graphic-design-tools"],
                ]],
            ];

        

        // Insert categories data
        foreach ($categoriesData as $categoryData) {

            Category::create([
                "id" => $categoryData['id'], 
                "title" => $categoryData['title'], 
                "slug" => $categoryData['slug'], 
                "image_id" => $categoryData['image_id'], 
                "is_featured" => $categoryData['is_featured'], 
                "parent_id" => NULL, 
                "is_enable" => 1
            ]);

            foreach ($categoryData['child'] as $child) {
                Category::create([
                    "id" => $child['id'], 
                    "title" => $child['title'], 
                    "slug" => $child['slug'], 
                    "parent_id" => $categoryData['id'], 
                    "is_enable" => 1
                ]);
            }


        }

    }
}

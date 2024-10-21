<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Menu::select('*')->delete();

        $menusData = [
            [
                'title' => 'Main Menu',
                'slug' => 'main-menu',
                'menuItem'=>[
                    [
                        'title' => 'Home',
                        'link' => '/',
                    ],
                    [
                        'title' => 'About Us',
                        'link' => '/pages/about',
                        'child' => [
                            ['title' => 'Who We Are', 'link' => '/pages/who-we-are'],
                            ['title' => 'Our Mission', 'link' => '/pages/mission'],
                            ['title' => 'Team', 'link' => '/pages/team'],
                        ],
                    ],
                    [
                        'title' => 'Services',
                        'link' => '/pages/services',
                        'child' => [
                            ['title' => 'Service 1', 'link' => '/pages/service1'],
                            ['title' => 'Service 2', 'link' => '/pages/service2'],
                            ['title' => 'Service 3', 'link' => '/pages/service3'],
                        ],
                    ],
                    [
                        'title' => 'Contact Us',
                        'link' => 'pages/contact-us',
                    ],
                    [
                        'title' => 'Frequently Ask Question',
                        'link' => 'pages/faq',
                    ],

                ]
            ],
            [
                'title' => 'Footer Menu 1',
                'slug' => 'footer-menu-1',
                'menuItem'=>[
                    [
                        'title' => 'About Us',
                        'link' => '/pages/about-us',
                    ],
                    [
                        'title' => 'Order Tracking',
                        'link' => '/order-tracking',
                    ],
                    [
                        'title' => 'FAQs',
                        'link' => '/pages/faq',
                    ],
                    [
                        'title' => 'Contact Us',
                        'link' => '/pages/contact-us',
                    ],
                    // [
                    //     'title' => 'Order Process',
                    //     'link' => '/pages/order-process',
                    // ],
                ]
            ],
            [
                'title' => 'Footer Menu 2',
                'slug' => 'footer-menu-2',
                'menuItem'=>[
                    [
                        'title' => 'Shipping Policy',
                        'link' => '/pages/shipping-policy',
                    ],
                    [
                        'title' => 'Returns & Exchange',
                        'link' => '/pages/exchange-and-return-policy',
                    ],
                    [
                        'title' => 'Privacy Policy',
                        'link' => '/pages/privacy-policy',
                    ],
                    [
                        'title' => 'Terms & condition',
                        'link' => '/pages/terms-conditions',
                    ],
                ]
            ],
        ];

        foreach ($menusData as $menu) {
            $newMenu = Menu::create([
                'title' => $menu['title'],
                'slug' => $menu['slug'],
                'is_enable' => 1,
            ]);

            foreach ($menu['menuItem'] as $menuItem) {
                $newMenuItem = MenuItem::create([
                    'title' => $menuItem['title'],
                    'link' => $menuItem['link'],
                    'level' => 1,
                    'parent_id' => null,
                    'menu_id' => $newMenu->id,
                    'is_enable' => 1,
                ]);

                if (isset($menuItem['child'])) {
                    foreach ($menuItem['child'] as $submenu) {
                        MenuItem::create([
                            'title' => $submenu['title'],
                            'link' => $submenu['link'],
                            'level' => 2,
                            'parent_id' => $newMenuItem->id,
                            'menu_id' => $newMenu->id,
                            'is_enable' => 1,
                        ]);
                    }
                }
            }
        }
    }
}

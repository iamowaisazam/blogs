<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::select('*')->delete();



        $pagesData=[
            [
                'title'=>'Home',
                'slug'=>'home',
                'longdetails'=>'
                
                <h2>Get in Touch with Us</h2>
                <p>We’re here to help and answer any questions you might have. We look forward to hearing from you!</p>
                <h2>Contact Information</h2>
                <p><b>Email:</b> [your.email@example.com] </p>
                <p><b>Phone:</b> [Your Phone Number] </p>
                <p><b>Address:</b> [Your Physical Address, if applicable </p>
                <h2>Business Hours </h2>
                <p> Monday - Friday: 9:00 AM - 6:00 PM </p>
                <p>Saturday: 10:00 AM - 4:00 PM </p>
                <p>Sunday: Closed </p>

                ',
            ],
            [
                'title'=>'Contact Us',
                'slug'=>'contact-us',
                'longdetails'=>'
                <h2>Get in Touch with Us</h2>
                <p>We’re here to help and answer any questions you might have. We look forward to hearing from you!</p>
                <h2>Contact Information</h2>
                <p><b>Email:</b> [your.email@example.com] </p>
                <p><b>Phone:</b> [Your Phone Number] </p>
                <p><b>Address:</b> [Your Physical Address, if applicable </p>
                <h2>Business Hours </h2>
                <p> Monday - Friday: 9:00 AM - 6:00 PM </p>
                <p>Saturday: 10:00 AM - 4:00 PM </p>
                <p>Sunday: Closed </p>

                ',
            ],
            [
                'title'=>'Terms & Conditions',
                'slug'=>'terms-conditions',
                'longdetails'=>'
                  <h2> TERMS </h2>
                   <p> By accessing the website at http://www.mstore.com/, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>'
            ],
            [
                'title'=>'Frequently Asked Questions',
                'slug'=>'faq',
                'longdetails'=>"
                <h2> HOW DO I PLACE AN ORDER? </h2>
                <p> Ordering at mantra.com.pk is easy. Just select the items you want to shop, enter your shipping address and payment information, and you can place your order. If you need any assistance, give us a call at +92311-1111111 Monday to Saturday. </p>

                <h2> HOW WILL I KNOW IF ORDER IS PLACED SUCCESSFULLY? </h2>
                <p> Once your Order is successfully placed, you will receive a confirmation call, email, and text message from mantra.com.pk. This mail will have all the details related to your order. Order details can also be viewed at My Account -> My Orders if you have placed the order on your own online. </p>",
             ],
             [
                'title'=>'Shipping Policy',
                'slug'=>'shipping-policy',
                'longdetails'=>"
                <h2>Shipping Policy</h2>
                <p>Thank you for shopping at MSTORE. Below are the terms and conditions 
                that constitute our Shipping Policy.</p>",
            ],
            [
                'title'=>'EXCHANGE AND RETURN POLICY',
                'slug'=>'exchange-and-return-policy',
                'longdetails'=>"
                 <h2>Exchange and Return Policy</h2>
                    <p>At MSTORE, we strive to ensure our customers are completely satisfied with their purchases. If you are not satisfied with your purchase, we are here to help.</p>
                    
                    <h2>Return Eligibility</h2>
                    <p>To be eligible for a return, please make sure that:</p>
                    <ul>
                        <li>The product was purchased in the last [X] days</li>
                        <li>The product is in its original packaging</li>
                        <li>The product isn't used or damaged</li>
                        <li>You have the receipt or proof of purchase</li>
                    </ul>
                    <p>Products that do not meet these criteria will not be considered for return.</p>

                    <h2>Exchanges</h2>
                    <p>We only replace items if they are defective or damaged. If you need to exchange an item for the same product, please contact us at [your.email@example.com] with the details of the product and the issue.</p>

                ",
            ],
            [
                'title'=>'About us',
                'slug'=>'about',
                'longdetails'=>"
                <h2>Welcome To MSTORE</h2>
                <p>MSTORE is fully customizable and appearing to your customers in accordance with what 
                they need and what they search Be a star of your own dream.Start your own ecommerce business 
                right now!</p>

                <h2>Our Story</h2>
                <p>MSTORE started when [founder's name or 'we'] realized that [describe the problem you set out to solve]. Since then, we have grown from a small [type of business, e.g., family-run business] to a [describe current state, e.g., thriving e-commerce platform] 
                that serves customers worldwide.</p>

                <h2>Our Mission and Values </h2>
                <p> Our mission is to [your mission statement]. We believe in [core values, e.g., quality, sustainability, customer satisfaction], and these principles guide everything we do.</p>

                <h2>Join Our Community</h2>
                <p>We invite you to join our community of satisfied customers. [Call to action, e.g., Browse our latest collection,Sign up for our newsletter, Follow us on social media]. </p>
                
                <p>Feel free to contact us at [contact information] if you have any questions or need assistance. We are here to help!
                </p",
            ],
            [
                'title'=>'Privacy Policy',
                'slug'=>'privacy-policy',
                'longdetails'=>"
                 <h2>Privacy Policy</h2>
                <p>Welcome to MSTORE</p>
                <p>We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us at [your.email@example.com].</p>
                <p>When you visit our website [Your Website URL], and use our services, you trust us with your personal information. We take your privacy very seriously. In this privacy policy, we seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy policy that you do not agree with, please discontinue use of our Sites and our services.</p>

                <h2>Information We Collect</h2>
                <p>We collect personal information that you voluntarily provide to us when registering at the [Website Name], expressing an interest in obtaining information about us or our products and services, when participating in activities on the [Website Name] (such as posting messages in our online forums or entering competitions, contests or giveaways) or otherwise contacting us.</p>",
            ],
        ];
        foreach($pagesData as $data){
            Page::create([
                'title'=>$data['title'],
                'slug'=>$data['slug'],
                'longdetails'=>$data['longdetails'],
                'shortdetails'=>' ',

            ]);
        }
    }
}

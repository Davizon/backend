<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
               'product_code' => '5396916',
                'product_name' => 'Sleeveless Slim Leg Asymmetrical Jumpsuit',
                'short_description' => "<ul><li>Back zip closure</li><li>Surplice neck</li><li>Sleeveless</li><li>Partially lined</li> <li>100% polyester</li> <li>Dry clean</li><li>Imported</li><li>Dresses</li></ul>",
                'full_description' => 'Envelope tailoring builds modern, flattering dimension for this slim-leg jumpsuit cropped to versatile, flat-friendly length.',
                'price' => '138.00',
                'special_price' => '138.00',
                'meta_keyword' => 'Shopmundo Shopmundo nordstroms mundo shop shoping fasion desinger',
                'meta_description' => 'Free shipping and returns on Ali & Jay Sleeveless Slim Leg Asymmetrical Jumpsuit at Nordstrom.com. <p>Envelope tailoring builds modern, flattering dimension for this slim-leg jumpsuit cropped to versatile, flat-friendly length.</p>',
                'page_title' => 'Sleeveless Slim Leg Asymmetrical Jumpsuit',
                'main_image' => 'https://n.nordstrommedia.com/id/sr3/78c2ba3e-8b9a-4427-8bc7-11861ecddf29.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=1660&h=2546',
                'note' => 'n/a',
                'state_id' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
           ],
            [
                'product_code' => '5973482',
                'product_name' => 'Livia Fit & Flare Dress',
                'short_description' => "<ul><li>Hidden back-zip closure</li><li>Bateau neck</li><li>Cap sleeves</li><li>Scoop back</li><li>Side-seam pockets</li><li>Lined</li><li>97% polyester, 3% spandex</li></ul>",
                'full_description' => 'Price varies with currency exchange rates and may be different than in store.<br />The signature drape of sleek crepe fabric is the raison d\'être of this elegant fit & flare dress with always-welcome pockets.',
                'price' => '198.00',
                'special_price' => '198.00',
                'meta_keyword' => 'Shopmundo Shopmundo nordstroms mundo shop shoping fasion desinger',
                'meta_description' => 'Free shipping and returns on Ali & Jay Sleeveless Slim Leg Asymmetrical Jumpsuit at Nordstrom.com. <p>Envelope tailoring builds modern, flattering dimension for this slim-leg jumpsuit cropped to versatile, flat-friendly length.</p>',
                'page_title' => 'Livia Fit & Flare Dress',
                'main_image' => 'https://n.nordstrommedia.com/id/sr3/64bd13db-9cfa-4597-9796-a158acb1e73a.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=1660&h=2546',
                'note' => 'n/a',
                'state_id' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_code' => '5973482',
                'product_name' => 'Silvia Bustier Midi Dress',
                'short_description' => "<ul><li>Hidden back-zip closure</li><li>Bateau neck</li><li>Cap sleeves</li><li>Scoop back</li><li>Side-seam pockets</li><li>Lined</li><li>97% polyester, 3% spandex</li></ul>",
                'full_description' => 'Price varies with currency exchange rates and may be different than in store. When given the choice, go for stunning with this cocktail dress topped by a sequined bustier bodice and finished with a pencil skirt.',
                'price' => '268.00',
                'special_price' => '268.00',
                'meta_keyword' => 'Shopmundo Shopmundo nordstroms mundo shop shoping fasion desinger',
                'meta_description' => 'Free shipping and returns on Ali & Jay Sleeveless Slim Leg Asymmetrical Jumpsuit at Nordstrom.com. <p>Envelope tailoring builds modern, flattering dimension for this slim-leg jumpsuit cropped to versatile, flat-friendly length.</p>',
                'page_title' => 'Silvia Bustier Midi Dress',
                'main_image' => 'https://n.nordstrommedia.com/id/sr3/56322d87-0a68-4818-8262-a60c991a0bdc.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=1660&h=2546',
                'note' => 'n/a',
                'state_id' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_code' => '5849130',
                'product_name' => 'Feather Cocktail Dress',
                'short_description' => "<ul><li>Back zip closure</li><li>V-neck</li><li>Sleeveless</li><li>Get the perfect fit&mdash;<u><a href=\"https://shop.nordstrom.com/c/alterations\" data-cke-saved-href=\"/c/alterations\">book an appointment&nbsp;</a></u>with one of our alterations experts</li><li>Lined</li><li>94% polyester, 6% elastane</li></ul>",
                'full_description' => 'Price varies with currency exchange rates and may be different than in store. Plush feathers add a fanciful touch to the hem of this scene-stealing sheath.',
                'price' => '188.00',
                'special_price' => '188.00',
                'meta_keyword' => 'Shopmundo Shopmundo nordstroms mundo shop shoping fasion desinger',
                'meta_description' => 'Free shipping and returns on Ali & Jay Sleeveless Slim Leg Asymmetrical Jumpsuit at Nordstrom.com. <p>Envelope tailoring builds modern, flattering dimension for this slim-leg jumpsuit cropped to versatile, flat-friendly length.</p>',
                'page_title' => 'Feather Cocktail Dress',
                'main_image' => 'https://n.nordstrommedia.com/id/sr3/20d297a5-c84c-4e14-969e-ce3cc69f0bc6.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=1660&h=2546',
                'note' => 'n/a',
                'state_id' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}

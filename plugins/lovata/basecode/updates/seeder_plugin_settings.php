<?php namespace Lovata\BaseCode\Updates;

use Seeder;
use Lovata\Shopaholic\Models\Settings;
use System\Classes\PluginManager;

/**
 * Class SeederPluginSettings
 * @package Lovata\BaseCode\Updates
 */
class SeederPluginSettings extends Seeder
{
    public function run()
    {
        if(!PluginManager::instance()->hasPlugin('Lovata.Shopaholic')) {
            return;
        }

        Settings::set('check_offer_active', true);
        Settings::set('decimals', 2);
        Settings::set('dec_point', 'dot');
        Settings::set('thousands_sep', 'space');
        Settings::set('currency', '$');

        //Order and cart settings
        Settings::set('cart_cookie_lifetime', 60);
        Settings::set('check_offer_quantity', true);
        Settings::set('decrement_offer_quantity', false);
        Settings::set('create_new_user', true);
        Settings::set('generate_fake_email', false);

        Settings::set('popularity_open_product', 1);
        Settings::set('popularity_cart_add', 3);
        Settings::set('popularity_order_create', 10);

        Settings::set('rating_from', 1);
        Settings::set('rating_to', 5);
        Settings::set('review_activation', true);
    }
}
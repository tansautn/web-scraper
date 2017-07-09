<?php
/*
         M""""""""`M            dP                     
         Mmmmmm   .M            88                     
         MMMMP  .MMM  dP    dP  88  .dP   .d8888b.     
         MMP  .MMMMM  88    88  88888"    88'  `88     
         M' .MMMMMMM  88.  .88  88  `8b.  88.  .88     
         M         M  `88888P'  dP   `YP  `88888P'     
         MMMMMMMMMMM  [    -*- Magebay.com -*-   ]      
                                                       
         * * * * * * * * * * * * * * * * * * * * *     
         * -    - -    M.A.G.E.B.A.Y    - -    - *     
         * -  Copyright © 2010 - 2017 Magebay  - *     
         *    -  -  All Rights Reserved  -  -    *     
         * * * * * * * * * * * * * * * * * * * * *     
                                                     
*//**
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
 * @PROJECT    : Z - Angular Material
 * @AUTHOR     : Zuko
 * @COPYRIGHT  : © 2017 Magebay - Magento Ext Provider
 * @LINK       : https://www.magebay.com/
 * @FILE       : WebScraperServiceProvider.php
 * @CREATED    : 7:44 PM , 08/Jul/2017
 * @DETAIL     :
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
**/


namespace Zuko\WebScraper;


use Illuminate\Support\ServiceProvider;

/**
 * Class WebScraperServiceProvider
 * @package Zuko\WebScraper
 */
class WebScraperServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
                             __DIR__.'/config' => base_path('config/'),
                         ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
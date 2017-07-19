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
 * @FILE       : CurlHelper.php
 * @CREATED    : 11:40 PM , 08/Jul/2017
 * @DETAIL     :
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
**/


namespace Zuko\WebScraper\Helper;


use Curl\Curl;

/**
 * Class CurlHelper
 * @package Zuko\WebScraper\Helper
 */
class CurlHelper {
    /** @var  \Curl\Curl */
    private $_curl;

    private function setDefaultCurlOpts()
    {
        $opts = config('webscraper.curlDefaultOpt');
        $this->getCurl()->setOpts($opts);
    }

    public function __construct(Curl $curl)
    {
        $this->_curl = $curl;
        $this->setDefaultCurlOpts();
    }

    /**
     * @return \Curl\Curl
     */
    public function getCurl()
    {
        return $this->_curl;
    }


}
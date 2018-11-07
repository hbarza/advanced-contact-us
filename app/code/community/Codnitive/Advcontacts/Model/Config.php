<?php
/**
 * CODNITIVE
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE_EULA.html.
 * It is also available through the world-wide-web at this URL:
 * http://www.codnitive.com/en/terms-of-service-softwares/
 * http://www.codnitive.com/fa/terms-of-service-softwares/
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade to newer
 * versions in the future.
 *
 * @category   Codnitive
 * @package    Codnitive_Advcontacts
 * @author     Hassan Barza <support@codnitive.com>
 * @copyright  Copyright (c) 2012 CODNITIVE Co. (http://www.codnitive.com)
 * @license    http://www.codnitive.com/en/terms-of-service-softwares/ End User License Agreement (EULA 1.0)
 */

class Codnitive_Advcontacts_Model_Config
{
    
    const PATH_NAMESPACE      = 'codnitivegeneral';
    const EXTENSION_NAMESPACE = 'advcontacts';
    
    const EXTENSION_NAME    = 'Advanced Contact Us';
    const EXTENSION_VERSION = '1.0.00';
    const EXTENSION_EDITION = 'Basic';

    public static function getNamespace()
    {
        return self::PATH_NAMESPACE . '/' . self::EXTENSION_NAMESPACE . '/';
    }
    
    public function getExtensionName()
    {
        return self::EXTENSION_NAME;
    }
    
    public function getExtensionVersion()
    {
        return self::EXTENSION_VERSION;
    }
    
    public function getExtensionEdition()
    {
        return self::EXTENSION_EDITION;
    }

    public function isActive()
    {
        return Mage::getStoreConfigFlag(self::getNamespace() . 'active');
    }
    
}

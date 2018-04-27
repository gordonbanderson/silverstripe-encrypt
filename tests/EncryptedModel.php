<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 27/4/2561
 * Time: 9:36 น.
 */

namespace LeKoala\SilverStripeEncrypt\Tests;

use LeKoala\SilverStripeEncrypt\DBEncryptedHTMLText;
use LeKoala\SilverStripeEncrypt\DBEncryptedText;
use SilverStripe\ORM\DataObject;

class EncryptedModel extends DataObject implements TestOnly
{
    private static $db = [
        "EncryptedText" => DBEncryptedText::class,
        "EncryptedHTMLText" => DBEncryptedHTMLText::class,
    ];
}

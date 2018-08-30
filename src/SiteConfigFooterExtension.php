<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 31/08/2018
 * Time: 11:24 AM
 */

namespace Twohill\Footer;


use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;

class SiteConfigFooterExtension extends DataExtension
{
    private static $db = [
        'Contact' => 'HTMLText',
        'Copyright' => 'HTMLText',
    ];

    /**
     * @param FieldList $fields
     *
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Footer', [
           HTMLEditorField::create('Contact', 'Footer contact details'),
           HTMLEditorField::create('Copyright', 'Copyright details'),
        ]);
        return $fields;
    }
}

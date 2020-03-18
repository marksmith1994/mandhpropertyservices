<?php

namespace Application\Block\AdvertBlock;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btTable = "btAdvertBlock";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Advertising Work Block');
    }

    public function validate($data)
    {
        $e = Core::make('error');
        if (!$data['title']) {
            $e->add(t('You must put something in the title.'));
        }
        return $e;
    }

    public function getBlockTypeDescription()
    {
        return t('A simple starting block for developers');
    }

    public function save($data)
    {
        $data['booleanfield'] = intval($data['booleanfield']);
        parent::save($data);
    }
}

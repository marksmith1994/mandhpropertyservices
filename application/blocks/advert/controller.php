<?php
    namespace Application\Block\Advert;
    use Concrete\Core\Block\BlockController;    
    use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btTable = "btAdvert";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Advert Block');
    }

    public function getBlockTypeDescription()
    {
        return t('An description block for work.');
    }
    
}
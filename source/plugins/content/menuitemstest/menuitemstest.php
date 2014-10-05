<?php
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgContentMenuitemstest extends JPlugin
{
    public function onContentBeforeSave($context, $data, $isNew)
    {
        if($context != 'com_menus.item') {
            return false;
        }

        $this->log('onContentBeforeSave for Menu Item triggered');
        return true;
    }

    public function onContentAfterSave($context, $data, $isNew)
    {
        if($context != 'com_menus.item') {
            return false;
        }

        $this->log('onContentAfterSave for Menu Item triggered');
        return true;
    }

    public function log($string)
    {
        jimport('joomla.log.log');
        JLog::addLogger(array('text_file' => 'menuitemstest.php'), JLog::ALL, array('menuitemstest'));
        JLog::add($string, JLog::NOTICE, 'menuitemstest');
    }
}

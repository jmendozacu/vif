<?php
/**
 * News List Admin edit form tabs block
 *
 * @author Magento
 */
class Magentostudy_News_Block_adminhtml_News_Edit_Tabs extends
    Mage_adminhtml_Block_Widget_Tabs
{
    /**
     * Initialize tabs and define tabs block settings
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('page_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('magentostudy_news')->__('News Item Info'));
    }
}
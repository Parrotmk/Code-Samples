<?php
/**
 * @category   PMinifyJsCss
 * @package    PMinifyJsCss_Minify
 * @author     PMinifyJsCss
 * @copyright  Copyright (c) 2015 PMinifyJsCss (http://www.PMinifyJsCss.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class PMinifyJsCss_Minify_Block_Adminhtml_Button_Minify extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Import static blocks
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
    	
    	$elementOriginalData = $element->getOriginalData();
    	
    	if (isset($elementOriginalData['label'])) {
    		$buttonLabel = $elementOriginalData['label'];
   		} else {
   			return '<div>Button label was not specified</div>';
   		}
    	
   		$url = Mage::helper('adminhtml')->getUrl(
   				'adminhtml/PMinifyJsCss_minify/process');
   		
    	$html = $this->getLayout()->createBlock('adminhtml/widget_button')
	    	->setType('button')
	    	->setClass('PMinifyJsCss-minify-admin-button-minify')
	    	->setLabel($buttonLabel)
	    	->setOnClick("setLocation('$url')")
	    	->toHtml();
	    	
    	return $html;
    	
    }
}

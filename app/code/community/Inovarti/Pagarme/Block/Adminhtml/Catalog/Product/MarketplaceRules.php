<?php

class Inovarti_Pagarme_Block_Adminhtml_Catalog_Product_MarketplaceRules
	extends Mage_Adminhtml_Block_Template
	implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
	public function _construct()
	{
		parent::_construct();
		$this->setTemplate('pagarme/catalog/product/marketplacerules.phtml');
	}

	/**
	 * @return string
	 */
	public function getTabLabel()
	{
		return $this->__('Pagar.me - Product Split Rules');
	}

	/**
	 * @return string
	 */
	public function getTabTitle()
	{
		return $this->__('Pagar.me - Product Split Rules');
	}

	/**
	 * @return bool
	 */
	public function canShowTab()
	{
		return true;
	}

	/**
	 * @return bool
	 */
	public function isHidden()
	{
		return false;
	}

	/**
	 *      * @return mixed
	 *           */
	public function getProduct()
	{
		return Mage::registry('current_product');
	}
}

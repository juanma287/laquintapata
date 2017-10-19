<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_ . 'an_staticblocks/classes/AnStaticBlocks.php');

class an_staticblocks extends Module
{
	const PREFIX = 'an_st_';

    public function __construct()
    {
        $this->name = 'an_staticblocks';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Apply Novation';
        $this->need_instance = 0;
		$this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Apply Novation Theme Static Blocks');
        $this->description = $this->l('Apply Novation Theme Static Blocks');
    }

	public static function getHooks()
	{
		$_hooks = Hook::getHooks();
		foreach ($_hooks as $key => $_hook) {
			if (Tools::substr($_hook['name'], 0, 6) == 'action') {
				unset($_hooks[$key]);
			}
		}
		
		return $_hooks;
	}

    public function install()
    {
        $install = parent::install();

        $sql = array();
        $languages = Language::getLanguages();

        $sql[] =
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'an_staticblocks` (
              `id_an_staticblocks` int(10) unsigned NOT NULL auto_increment,
              `status` int(1) NOT NULL default "1",
              `use_in_hooks` int(1) NOT NULL default "1",
              `block_identifier` varchar(255) NOT NULL,
              `hook_ids` text,
              `position` int(10) NOT NULL default "0",
              `date_add` datetime NOT NULL,
              `date_upd` datetime NOT NULL,
              PRIMARY KEY  (`id_an_staticblocks`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

        $sql[] =
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'an_staticblocks_shop` (
              `id_an_staticblocks` int(10) unsigned NOT NULL auto_increment,
              `id_shop` int(10) unsigned NOT NULL,
              PRIMARY KEY (`id_an_staticblocks`, `id_shop`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

        $sql[] =
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'an_staticblocks_lang` (
              `id_an_staticblocks` int(10) unsigned NOT NULL,
              `id_lang` int(10) unsigned NOT NULL,
              `title` varchar(255) NOT NULL,
			  `link` varchar(255) NOT NULL,
			  `image` varchar(255) NOT NULL,
              `content` text,
              PRIMARY KEY (`id_an_staticblocks`,`id_lang`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

		$this->_theme_path = __PS_BASE_URI__;
		$this->context->smarty->assign('theme_path', $this->_theme_path);

		$blocks = glob(_PS_MODULE_DIR_ . 'an_staticblocks/blocks/*.tpl');
		foreach ($blocks as $block) {
			$name = explode('.', basename($block));
			if (isset($name[1]) && $name[1] == 'tpl') {
				$blockID = (int)$name[0];
				$blockName = explode('_', $name[0]);
				if (count($blockName) > 1) {
					unset($blockName[0]);
					$blockIdentifier = implode('_', $blockName);

					$sql[] =
						"INSERT INTO `" . _DB_PREFIX_ . "an_staticblocks` VALUES 
						('".$blockID."','1','1','".pSQL($blockIdentifier)."','','0','2015-08-01 01:35:05','2014-12-27 01:58:10')";

					foreach ($languages as $language) {
						$sql[] = 
							"INSERT INTO `" . _DB_PREFIX_ . "an_staticblocks_lang` VALUES 			
							('".$blockID."','".(int)$language['id_lang']."','Block ".$blockID."','#','".$blockID."','".pSQL($this->display($this->name, 'blocks/' . basename($block)), true)."')";
					}
				}
			}
		}

        foreach ($sql as $_sql) {
            Db::getInstance()->Execute($_sql);
        }
		
		$new_tab = new Tab();
		$new_tab->class_name = 'AdminStaticBlocks';
		
		if (version_compare(_PS_VERSION_, '1.7.0.0', '<') == 1) {
			$new_tab->id_parent = Tab::getCurrentParentId();
			$new_tab->module = $this->name;
		} else {
			//	1.7
			$new_tab->id_parent = Tab::getIdFromClassName('IMPROVE');
			$new_tab->module = $this->name;
			$new_tab->active = 1;
		}
		
		foreach ($languages as $language) {
			$new_tab->name[$language['id_lang']] = 'Theme Static Blocks';
		}
		$new_tab->add();


        foreach (self::getHooks() as $hook) {
	        $this->registerHook($hook['name']);
        }

        return $install;
    }

    public function uninstall()
    {
        $sql = array();

        $sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'an_staticblocks`';
        $sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'an_staticblocks_shop`';
        $sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'an_staticblocks_lang`';

        foreach ($sql as $_sql) {
            Db::getInstance()->Execute($_sql);
        }

        $idTab = Tab::getIdFromClassName('AdminStaticBlocks');
        if ($idTab) {
            $tab = new Tab($idTab);
            $tab->delete();
        }

        foreach (self::getHooks() as $hook) {
	        $this->unregisterHook($hook['name']);
        }

        return parent::uninstall();
    }

	public function __call($function, $args)
	{
		$html = '';
		$hookName = str_replace('hook', '', $function);
		$blocks = AnStaticBlocks::getBlocksByHookName($hookName);
		foreach ($blocks as $block) {
			$html .= self::getBlockContent($block->block_identifier);
		}

		/**
		 * PS 1.7.0 - What is the "\PrestaShopBundle\Service\Hook\HookFinder::find" method?
		 * It brakes product page when a module tries to use the "displayProductExtraContent" hook.
		 * Why should it return Array type instead of String?
		**/
		if ($hookName == 'displayProductExtraContent') {
			return [];
		}

		return $html;
	}

	//{Module::getInstanceByName('an_staticblocks')->getBlockContent('block_identifier')}
	public static function getBlockContent($block_identifier)
	{
		return self::getBlockObject($block_identifier)->content;
	}

	//{Module::getInstanceByName('an_staticblocks')->getBlockObject('block_identifier')->title}
	public static function getBlockObject($block_identifier)
	{
		return AnStaticBlocks::getBlockObject($block_identifier);
	}

	//{Module::getInstanceByName('an_staticblocks')->getBlock('block_identifier')}
	public function getBlock($block_identifier, $template = 'default.tpl')
	{
		$block = AnStaticBlocks::getBlockObject($block_identifier);
		$this->context->smarty->assign('an_staticblock', $block);

		return $this->display($this->name, $template);
	}

	//
	public static function isEnabledBlock($block_identifier)
	{
		return (bool)AnStaticBlocks::getEnabledBlockByIdentifier($block_identifier);
	}


	public function getConfigureUrl($conf = false)
	{
		return $this->context->link->getAdminLink('AdminModules')
			.'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name
			.($conf ? '&conf=4' : '');
	}

	protected function _postProcess()
	{
		$top_id = Tools::getValue('top_id');
		$ids = Tools::getValue('block_ids');

		foreach ($ids as $key => $title) {
			$id = self::PREFIX . 'block_ids_' . $key;
			Configuration::updateValue($id, pSQL($title));
		}

		foreach ($top_id as $key => $title) {
			$id = self::PREFIX . 'top_id_' . $key;
			Configuration::updateValue($id, pSQL($title));
		}

		Tools::redirectAdmin($this->getConfigureUrl(true));
	}

	public function getContent()
	{
		if (Tools::getIsset($this->name)) {
			$this->_postProcess();
		}

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->title = $this->displayName;
        $helper->submit_action = $this->name;

        $this->fields_form[0]['form'] = array(
            'legend' => array('title' => $this->l('Homepage Top Banner')),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Product ID #1:'),
                    'name' => 'top_id[1]',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Product ID #2:'),
                    'name' => 'top_id[2]',
                ),
            ),
			'submit' => array(
				'title' => $this->l('Save'),
			),
        );

        $this->fields_form[1]['form'] = array(
            'legend' => array('title' => $this->l('Homepage Products Block #1')),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Products IDs:'),
                    'name' => 'block_ids[1]',
                ),
            ),
			'submit' => array(
				'title' => $this->l('Save'),
			),
        );

        $this->fields_form[2]['form'] = array(
            'legend' => array('title' => $this->l('Homepage Products Block #2')),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Products IDs:'),
                    'name' => 'block_ids[2]',
                ),
            ),
			'submit' => array(
				'title' => $this->l('Save'),
			),
        );

        $this->fields_form[3]['form'] = array(
            'legend' => array('title' => $this->l('Homepage Products Block #3')),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Products IDs:'),
                    'name' => 'block_ids[3]',
                ),
            ),
			'submit' => array(
				'title' => $this->l('Save'),
			),
        );

		$helper->fields_value['top_id[1]'] = Configuration::get(self::PREFIX . 'top_id_1');
		$helper->fields_value['top_id[2]'] = Configuration::get(self::PREFIX . 'top_id_2');
		$helper->fields_value['block_ids[1]'] = Configuration::get(self::PREFIX . 'block_ids_1');
		$helper->fields_value['block_ids[2]'] = Configuration::get(self::PREFIX . 'block_ids_2');
		$helper->fields_value['block_ids[3]'] = Configuration::get(self::PREFIX . 'block_ids_3');

        return $helper->generateForm($this->fields_form);
	}

	protected function getProductsByIds($ids)
	{
		$context = $this->context;
		$id_lang = $context->language->id;
        $nb_days_new_product = Configuration::get('PS_NB_DAYS_NEW_PRODUCT');
        if (!Validate::isUnsignedInt($nb_days_new_product)) {
            $nb_days_new_product = 20;
        }

        $sql = 'SELECT DISTINCT p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) AS quantity'.(Combination::isFeatureActive() ? ', IFNULL(product_attribute_shop.id_product_attribute, 0) AS id_product_attribute,
					product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity' : '').', pl.`description`, pl.`description_short`, pl.`available_now`,
					pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, image_shop.`id_image` id_image,
					il.`legend` as legend, m.`name` AS manufacturer_name, cl.`name` AS category_default,
			DATEDIFF(product_shop.`date_add`, DATE_SUB("'.date('Y-m-d').' 00:00:00",
			INTERVAL '.(int)$nb_days_new_product.' DAY)) > 0 AS new, product_shop.price AS orderprice
		FROM `'._DB_PREFIX_.'category_product` cp
		LEFT JOIN `'._DB_PREFIX_.'product` p
			ON p.`id_product` = cp.`id_product`
		'.Shop::addSqlAssociation('product', 'p').
        (Combination::isFeatureActive() ? ' LEFT JOIN `'._DB_PREFIX_.'product_attribute_shop` product_attribute_shop
		ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int)$context->shop->id.')':'').'
		'.Product::sqlStock('p', 0).'
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
			ON (product_shop.`id_category_default` = cl.`id_category`
			AND cl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('cl').')
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
			ON (p.`id_product` = pl.`id_product`
			AND pl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl').')
		LEFT JOIN `'._DB_PREFIX_.'image_shop` image_shop
			ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int)$context->shop->id.')
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il
			ON (image_shop.`id_image` = il.`id_image`
			AND il.`id_lang` = '.(int)$id_lang.')
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m
			ON m.`id_manufacturer` = p.`id_manufacturer`
		WHERE product_shop.`id_shop` = '.(int)$context->shop->id.'
			AND p.`id_product` IN ('.pSQL(implode(', ', $ids)).')'
            .' AND product_shop.`active` = 1';

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql, true, false);

		return Product::getProductsProperties($id_lang, $result);
	}

	public function getProductsBlock($id)
	{
		$title = Configuration::get(self::PREFIX . 'block_title_' . $id);
		$ids = Configuration::get(self::PREFIX . 'block_ids_' . $id);
		
		$ids = explode(',', $ids);
		$ids = array_map('trim', $ids);
		$ids = array_map('intval', $ids);
		$ids = array_filter($ids);

		if (!count($ids)) {
			 $ids = array(1, 2, 3, 4, 5, 6);
		}

		return array(
			'title' => $title,
			'products' => $this->getProductsByIds($ids),
		);
	}

	public function getTopProductBlock()
	{
		$ids = array();
		$ids[] = Configuration::get(self::PREFIX . 'top_id_1');
		$ids[] = Configuration::get(self::PREFIX . 'top_id_2');

		$ids = array_map('trim', $ids);
		$ids = array_map('intval', $ids);
		$ids = array_filter($ids);

		if (!count($ids)) {
			 return null;
		}

		$products = $this->getProductsByIds($ids);
		$this->context->smarty->assign('an_top_products', $products);

		return $this->display($this->name, 'top_products.tpl');
	}

	public function hookDisplayHeader()
	{
		$this->context->controller->addJS($this->_path.'/jquery.countdown.min.js');
	}
}

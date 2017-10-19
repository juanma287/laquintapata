<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class an_themeinstaller extends Module
{
	const BCV = 'an_bcv'; //BEFORE CONFIGURATION VALUE

	protected $_hooks = array();

	protected $_configurations = array(
		'HOMESLIDER_WIDTH' => 1980,
		'PS_JPEG_QUALITY' => 100,
	);

    public function __construct()
    {
        $this->name = 'an_themeinstaller';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Apply Novation';
        $this->need_instance = 0;
        $this->module_key = '';

        parent::__construct();

        $this->displayName = $this->l('Apply Novation Theme Installer');
        $this->description = $this->l('Apply Novation Theme Installer');
    }

    public function install()
    {
        $install = parent::install();

        //homeslider:
		$this->_slidesInstallation();
	    //end homeslider.

		$sql = array();

        foreach ($sql as $_sql) {
            Db::getInstance()->Execute($_sql);
        }

        foreach ($this->_hooks as $hook) {
	        $this->registerHook($hook);
        }

		foreach ($this->_configurations as $configuration => $value) {
			Configuration::updateValue(self::BCV . $configuration, Configuration::get($configuration));
			Configuration::updateValue($configuration, $value);
		}

        return $install;
    }

    public function uninstall()
    {
        $sql = array();
        foreach ($sql as $_sql) {
            Db::getInstance()->Execute($_sql);
        }

        foreach ($this->_hooks as $hook) {
	        $this->unregisterHook($hook);
        }

		foreach (array_keys($this->_configurations) as $configuration) {
			Configuration::updateValue($configuration, Configuration::get(self::BCV . $configuration));
		}

        return parent::uninstall();
    }

	protected function _slidesInstallation()
	{
        $images = (array)glob(_PS_MODULE_DIR_ . $this->name . '/homeslider/*');
        $images = array_filter($images);

		if (count($images) > 1) {
			$addedIds = array();
			$shops = Shop::getContextListShopID();
			$langs = Language::getLanguages(false);
			$i = 0;
	        foreach ($images as $image) {
		        if (Tools::strtolower(Tools::substr($image, -3)) == 'php') {
			        continue;
		        }

		        $toPath = _PS_MODULE_DIR_ . 'homeslider/images/' . basename($image);
		        if (!file_exists($toPath)) {
			        if (copy($image, $toPath)) {
				        Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'homeslider_slides` VALUES (NULL, ' . $i++ . ', 1)');
				        $id = Db::getInstance()->Insert_ID();
				        if ($id) {
				        	$addedIds[] = $id;
					        foreach ($shops as $shop) {
						         Db::getInstance()->Execute('
						         	INSERT INTO `' . _DB_PREFIX_ . 'homeslider` VALUES (' . (int)$id . ', ' . (int)$shop . ')
						         ');
					        }

					        foreach ($langs as $lang) {
						         Db::getInstance()->Execute('
						         	INSERT INTO `' . _DB_PREFIX_ . 'homeslider_slides_lang` VALUES (
						         	' . (int)$id . ', 
						         	' . (int)$lang['id_lang'] . ', 
						         	"AN ' . $i . '", 
						         	"'.pSQL($this->display($this->name, 'slide.tpl'), true).'",
						         	"an", 
						         	"#",
						         	"' . pSQL(basename($image)) . '"
						         	)
						         ');
					        }
				        }
			        }
		        }
	        }

	        if (count($addedIds)) {
		        Db::getInstance()->Execute('
		        	UPDATE `' . _DB_PREFIX_ . 'homeslider_slides` SET `active` = 0
		        	WHERE `id_homeslider_slides` NOT IN (' . implode(', ', $addedIds) . ')
		        ');
	        }
	    }
	}
}

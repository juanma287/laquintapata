<?php

class AnStaticBlocks extends ObjectModel {

    public $id;

    /** @var integer block ID */
    public $id_an_staticblocks;

    /** @var string Title */
    public $title;

    /** @var string Identifier */
    public $block_identifier;

    /** @var boolean Status for display */
    public $status = 1;
    
    public $use_in_hooks = 1;

    public $hook_ids;
    
    public $position;

    /** @var string Content */
    public $content;

    /** @var string Object creation date */
    public $date_add;

    /** @var string Object last modification date */
    public $date_upd;

    public $link;

    public $image;

    public static $definition = array(
        'table' => 'an_staticblocks',
        'primary' => 'id_an_staticblocks',
        'multilang' => TRUE,
        'fields' => array(
            'block_identifier' =>     	array('type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'required' => TRUE, 'size' => 50),
            'status' =>             	array('type' => self::TYPE_INT),
            'use_in_hooks' =>           array('type' => self::TYPE_INT),
            'position' =>           	array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'date_add' =>             	array('type' => self::TYPE_DATE),
            'date_upd' =>             	array('type' => self::TYPE_DATE),
            'hook_ids' => 				array('type' => self::TYPE_STRING),

            // Lang fields
            'title' =>                 	array('type' => self::TYPE_STRING, 'lang' => TRUE, 'validate' => 'isCatalogName', 'required' => TRUE, 'size' => 128),
            'content' =>             	array('type' => self::TYPE_HTML, 'lang' => TRUE, 'validate' => 'isString', 'size' => 3999999999999, 'required' => TRUE),
            'image' =>             	array('type' => self::TYPE_STRING, 'lang' => TRUE, 'validate' => 'isString', 'size' => 3999999999999),
            'link' =>             	array('type' => self::TYPE_STRING, 'lang' => TRUE, 'validate' => 'isString', 'size' => 3999999999999),
        ),
    );

	public function useDataAsArray($field, array $data = array())
	{
		if (empty($data)) {
			return explode(',', $this->$field);
		}

		$this->$field = implode(',', $data);
	}

    public static function getBlockByIdentifier($block_identifier)
    {
        $sql = '
        SELECT `id_an_staticblocks`
        FROM `' . _DB_PREFIX_ . 'an_staticblocks`
        WHERE `block_identifier` = "' . pSQL($block_identifier) . '";';

        $block_id = (int)Db::getInstance()->getValue($sql);
        $_block = new self((int)$block_id);

        if ($_block->id) {
            return $_block;
        }
		
       return FALSE;
    }
	
	//	 
    public static function getEnabledBlockByIdentifier($block_identifier)
    {
        $sql = '
        SELECT `id_an_staticblocks`
        FROM `' . _DB_PREFIX_ . 'an_staticblocks`
        WHERE `status`=1 AND `block_identifier` = "' . pSQL($block_identifier) . '";';

        $block_id = (int)Db::getInstance()->getValue($sql);
        $_block = new self((int)$block_id);
		
        if ($_block->id) {
            return $_block;
        } else {
			return FALSE;
		}
    }

	public static function getBlocksByHookName($hookName)
	{
		$hooks = array();
		if ($hookName) {
			$hooks = new Collection(__CLASS__);
			$hooks->where('use_in_hooks', '=', 1);
			$hooks->where('status', '=', 1);
			$hooks->where('hook_ids', 'like', '%' . pSQL($hookName) . '%');
			$hooks->orderBy('position');
		}

		return $hooks;
	}

    public static function getBlockObject($block_identifier)
    {
        if (Module::isEnabled('an_staticblocks')) {
	        $sql = '
	        SELECT `id_an_staticblocks`
	        FROM `' . _DB_PREFIX_ . 'an_staticblocks`
	        WHERE `block_identifier` = "' . pSQL($block_identifier) . '" AND `status` = "1"';
	
	        if (Shop::isFeatureActive()) {
	            $sql .= ' AND `id_an_staticblocks` IN (
	                SELECT sa.`id_an_staticblocks`
	                FROM `' . _DB_PREFIX_ . 'an_staticblocks_shop` sa
	                WHERE sa.id_shop IN (' . implode(', ', Shop::getContextListShopID()) . ')
	            )';
	        }
	
	        $block_id = (int)Db::getInstance()->getValue($sql);
	
	        if ($block_id) {
	            $block = new self($block_id, Context::getContext()->cookie->id_lang);
	            return $block;
	        }
        }

        return new self;
    }

	public static function getImagesPath()
	{
		return _PS_MODULE_DIR_ . 'an_staticblocks/images/';
	}

	public function getImage()
	{
		return self::getImagesPath().$this->id.'.jpg';
	}

	public function getImageLink()
	{
		return __PS_BASE_URI__.'modules/an_staticblocks/images/'.$this->id.'.jpg';
	}

	public function deleteImage($force_delete = false)
    {
		$this->image_dir = AnStaticBlocks::getImagesPath();
		$this->image_format = 'jpg';
		return parent::deleteImage(true);
	}
}

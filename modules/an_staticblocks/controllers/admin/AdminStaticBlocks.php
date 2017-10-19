<?php

class AdminStaticBlocksController extends ModuleAdminController {

    protected $position_identifier = 'id_an_staticblocks';

    protected $_js = '
        <script>
            $(".multishop_toolbar").hide();
            $("#desc-an_staticblocks-save").click(function(){
                $("#block_identifier").val($.trim($("#block_identifier").val()));
                $(".translatable input[type=\'text\']").each(function(){
                    $(this).val($.trim($(this).val()));
                });
            });
        </script>
    ';

	public $fieldImageSettings = array(
		'name' => 'image',
		'dir' => ''
	);

    public function __construct()
    {
    	$this->bootstrap = true;
        $this->table = 'an_staticblocks';
        $this->identifier = 'id_an_staticblocks';
        $this->className = 'AnStaticBlocks';
        $this->lang = TRUE;
        $this->addRowAction('edit');
        $this->addRowAction('delete');
		
		parent::__construct();


        $this->fields_list = array(
            'id_an_staticblocks' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'width' => 30
            ),
            'title' => array(
                'title' => $this->l('Block Title'),
                'width' => 300
            ),
            'block_identifier' => array(
                'title' => $this->l('Identifier'),
                'width' => 300
            ),
            'block_identifier' => array(
                'title' => $this->l('Position'),
                'width' => 30
            ),
            'status' => array(
                'title' => $this->l('Status'),
                'width' => 40,
                'active' => 'update',
                'align' => 'center',
                'type' => 'bool',
                'orderby' => FALSE
            ),
            'use_in_hooks' => array(
                'title' => $this->l('Use in hooks'),
                'width' => 40,
                'active' => 'update',
                'align' => 'center',
                'type' => 'bool',
                'orderby' => FALSE
            ),
            'date_add' => array(
                'title' => $this->l('Date Created'),
                'width' => 150,
                'type' => 'date',
                'align' => 'right'
            ),
            'date_upd' => array(
                'title' => $this->l('Last Modified'),
                'width' => 150,
                'type' => 'date',
                'align' => 'right'
            )
        );

        if (Shop::isFeatureActive() && Shop::getContext() != Shop::CONTEXT_ALL) {
            $this->_where .= ' AND a.' . $this->identifier . ' IN (
                SELECT sa.' . $this->identifier . '
                FROM `' . _DB_PREFIX_ . $this->table . '_shop` sa
                WHERE sa.id_shop IN (' . implode(', ', Shop::getContextListShopID()) . ')
            )';
        }

        $this->identifiersDnd = array('id_an_staticblocks' => 'id_sslide_to_move');
    }

    public function renderForm()
    {
        $this->display = 'edit';
        $this->initToolbar();
        if (!$obj = $this->loadObject(TRUE)) {
            return;
        }

		$image = $obj->getImage();
		$image_url = false;
		$thumb_size = false;
		if (file_exists($image)) {
			$image_url = '<img src="../modules/an_staticblocks/images/' . $obj->id . '.jpg?rand='.rand(1, 1000).'" alt="" class="imgm img-thumbnail" />';
			$thumb_size = filesize($image) / 1000;
		}

        $this->fields_form = array(
            'tinymce' => TRUE,
            'legend' => array(
                'title' => $this->l('Static Block'),
                'image' => '../img/admin/add.gif'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Identifier:'),
                    'name' => 'block_identifier',
                    'id' => 'block_identifier',
                    'required' => TRUE,
                    'hint' => $this->l('Allowed characters:') . ' a-z, A-Z, 0-9, _',
                    'size' => 50,
                    'maxlength' => 50,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Position:'),
                    'name' => 'position',
                    'id' => 'position',
                    'size' => 50,
                    'maxlength' => 10,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enabled:'),
                    'name' => 'status',
                    'class' => 't',
                    'is_bool' => TRUE,
                    'values' => array(array(
		                'id' => 'is_enabled_on',
		                'value' => 1), array(
		                'id' => 'is_enabled_off',
		                'value' => 0)
		            )
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Use in hooks:'),
                    'name' => 'use_in_hooks',
                    'class' => 't',
                    'is_bool' => TRUE,
                    'values' => array(array(
		                'id' => 'use_in_hooks_on',
		                'value' => 1), array(
		                'id' => 'use_in_hooks_off',
		                'value' => 0)
		            )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Hooks:'),
                    'name' => 'hook_ids[]',
                    'index' => 'hook_ids[]',
                    'multiple' => TRUE,
                    'size' => 10,
                    'style' => 'width:100px;',
                    'class' => 'fixed-width-xxl',
                    'options' => array(
                        'query' => an_staticblocks::getHooks(),
                        'id' => 'name',
                        'name' => 'title',
                    )
                    
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Title:'),
                    'name' => 'title',
                    'id' => 'title',
                    'lang' => TRUE,
                    'required' => TRUE,
                    'size' => 50,
                    'maxlength' => 50,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Link:'),
                    'name' => 'link',
                    'id' => 'link',
                    'lang' => TRUE,
                ),
                array(
                   'type' => 'file',
                   'label' => $this->l('Image'),
                   'name' => 'image',
                   'display_image' => true,
                   'image' => $image_url,
                   'size' => $thumb_size,
                   'format' => ImageType::getFormatedName('medium'),
				   'delete_url' => self::$currentIndex.'&'.$this->identifier.'='.$obj->id.'&token='.$this->token.'&deleteImage=1',
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Text:'),
                    'name' => 'content',
                    'required' => TRUE,
                    'autoload_rte' => TRUE,
                    'lang' => TRUE,
                    'rows' => 5,
                    'cols' => 40,
                ),
            ),
            'submit' => array(
                'title' => $this->l('   Save   '),
				'name' => 'submitAdd'
            )
        );
        
        $this->fields_value['hook_ids[]'] = $this->object->useDataAsArray('hook_ids');

        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->l('Shop association:'),
                'name' => 'checkBoxShopAsso',
            );
        }

        $this->tpl_form_vars = array(
            'status' => $this->object->status
        );

        return parent::renderForm() . $this->_js;
    }

    protected function updateAssoShop($id_object)
    {
        if (!Shop::isFeatureActive()) {
            return;
        }

        $assos_data = $this->getSelectedAssoShop($this->table, $id_object);

        $exclude_ids = $assos_data;
        foreach (Db::getInstance()->executeS('SELECT id_shop FROM ' . _DB_PREFIX_ . 'shop') as $row) {
            if (!$this->context->employee->hasAuthOnShop($row['id_shop'])) {
                $exclude_ids[] = $row['id_shop'];
            }
        }

        Db::getInstance()->delete($this->table . '_shop', '`' . $this->identifier . '` = ' . (int) $id_object . ($exclude_ids ? ' AND id_shop NOT IN (' . implode(', ', $exclude_ids) . ')' : ''));

        $insert = array();
        foreach ($assos_data as $id_shop) {
            $insert[] = array(
                $this->identifier => $id_object,
                'id_shop' => (int) $id_shop,
            );
        }

        return Db::getInstance()->insert($this->table . '_shop', $insert, FALSE, TRUE, Db::INSERT_IGNORE);
    }

    protected function getSelectedAssoShop($table)
    {
        if (!Shop::isFeatureActive()) {
            return array();
        }

        $shops = Shop::getShops(TRUE, NULL, TRUE);
        if (count($shops) == 1 && isset($shops[0])) {
            return array($shops[0], 'shop');
        }

        $assos = array();
        if (Tools::isSubmit('checkBoxShopAsso_' . $table)) {
            foreach (Tools::getValue('checkBoxShopAsso_' . $table) as $id_shop => $value) {
                $assos[] = (int) $id_shop;
            }
        } else if (Shop::getTotalShops(FALSE) == 1) {
            // if we do not have the checkBox multishop, we can have an admin with only one shop and being in multishop
            $assos[] = (int) Shop::getContextShopID();
        }

        return $assos;
    }

    public function processSave()
    {
        $id = Tools::getValue('block_identifier');
        if (Validate::isModuleName($id)) {
            return parent::processSave();
        }

        $this->errors[] = Tools::displayError('The field "block_identifier" is invalid. Allowed characters:') . ' a-z, A-Z, 0-9, _';
        $this->display = 'edit';
        return FALSE;
    }

    public function processAdd()
    {
        $id = Tools::getValue('block_identifier');
        $block = AnStaticBlocks::getBlockByIdentifier($id);
        if ($block === FALSE) {
            return parent::processAdd();
        }

        $this->errors[] = Tools::displayError('Duplicate field "block_identifier".');
        $this->display = 'edit';
        return FALSE;
    }

    public function processUpdate()
    {
        $id = Tools::getValue('block_identifier');
        $block = AnStaticBlocks::getBlockByIdentifier($id);
        if ($block === FALSE || $block->id == Tools::getValue($this->identifier)) {
            return parent::processUpdate();
        }

        $this->errors[] = Tools::displayError('Duplicate field "block_identifier".');
        $this->display = 'edit';
        return FALSE;
    }

	protected function copyFromPost(&$object, $table)
	{
		parent::copyFromPost($object, $table);
    	$object->useDataAsArray('hook_ids', Tools::getValue('hook_ids', array()));
	}

	protected function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
    {
        if (isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name'])) {
            // Delete old image
            if (Validate::isLoadedObject($object = $this->loadObject())) {
                $object->deleteImage();
            } else {
                return false;
            }

            // Check image validity
            $max_size = isset($this->max_image_size) ? $this->max_image_size : 0;
            if ($error = ImageManager::validateUpload($_FILES[$name], Tools::getMaxUploadSize($max_size))) {
                $this->errors[] = $error;
            }

            $tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
            if (!$tmp_name) {
                return false;
            }

            if (!move_uploaded_file($_FILES[$name]['tmp_name'], $tmp_name)) {
                return false;
            }

            // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
            if (!ImageManager::checkImageMemoryLimit($tmp_name)) {
                $this->errors[] = Tools::displayError('Due to memory limit restrictions, this image cannot be loaded. Please increase your memory_limit value via your server\'s configuration settings. ');
            }

            // Copy new image
            if (empty($this->errors) && !ImageManager::resize($tmp_name, AnStaticBlocks::getImagesPath().$id.'.'.$this->imageType, (int)$width, (int)$height, ($ext ? $ext : $this->imageType))) {
                $this->errors[] = Tools::displayError('An error occurred while uploading the image.');
            }

            if (count($this->errors)) {
                return false;
            }
            if ($this->afterImageUpload()) {
                unlink($tmp_name);
                return true;
            }
            return false;
        }
        return true;
    }
}
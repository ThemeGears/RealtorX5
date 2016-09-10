<?php

class RealtorX5OfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'RealtorX5Item';
    public $classKey = 'RealtorX5Item';
    public $languageTopics = array('realtorx5');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('realtorx5_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('realtorx5_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'RealtorX5OfficeItemCreateProcessor';
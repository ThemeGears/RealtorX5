<?php

class RealtorX5ItemGetProcessor extends modObjectGetProcessor
{
    public $objectType = 'RealtorX5Item';
    public $classKey = 'RealtorX5Item';
    public $languageTopics = array('realtorx5:default');
    //public $permission = 'view';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }

}

return 'RealtorX5ItemGetProcessor';
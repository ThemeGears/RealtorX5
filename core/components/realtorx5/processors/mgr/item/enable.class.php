<?php

class RealtorX5ItemEnableProcessor extends modObjectProcessor
{
    public $objectType = 'RealtorX5Item';
    public $classKey = 'RealtorX5Item';
    public $languageTopics = array('realtorx5');
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('realtorx5_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var RealtorX5Item $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('realtorx5_item_err_nf'));
            }

            $object->set('active', true);
            $object->save();
        }

        return $this->success();
    }

}

return 'RealtorX5ItemEnableProcessor';

<?php

/**
 * The home manager controller for RealtorX5.
 *
 */
class RealtorX5HomeManagerController extends modExtraManagerController
{
    /** @var RealtorX5 $RealtorX5 */
    public $RealtorX5;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('realtorx5_core_path', null,
                $this->modx->getOption('core_path') . 'components/realtorx5/') . 'model/realtorx5/';
        $this->RealtorX5 = $this->modx->getService('realtorx5', 'RealtorX5', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('realtorx5:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('realtorx5');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->RealtorX5->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->RealtorX5->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/realtorx5.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->RealtorX5->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        RealtorX5.config = ' . json_encode($this->RealtorX5->config) . ';
        RealtorX5.config.connector_url = "' . $this->RealtorX5->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "realtorx5-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->RealtorX5->config['templatesPath'] . 'home.tpl';
    }
}
RealtorX5.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'realtorx5-panel-home',
            renderTo: 'realtorx5-panel-home-div'
        }]
    });
    RealtorX5.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(RealtorX5.page.Home, MODx.Component);
Ext.reg('realtorx5-page-home', RealtorX5.page.Home);
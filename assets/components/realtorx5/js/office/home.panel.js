RealtorX5.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'realtorx5-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('realtorx5_items'),
                layout: 'anchor',
                items: [{
                    html: _('realtorx5_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'realtorx5-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    RealtorX5.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(RealtorX5.panel.Home, MODx.Panel);
Ext.reg('realtorx5-panel-home', RealtorX5.panel.Home);

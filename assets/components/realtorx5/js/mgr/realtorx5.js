var RealtorX5 = function (config) {
    config = config || {};
    RealtorX5.superclass.constructor.call(this, config);
};
Ext.extend(RealtorX5, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('realtorx5', RealtorX5);

RealtorX5 = new RealtorX5();
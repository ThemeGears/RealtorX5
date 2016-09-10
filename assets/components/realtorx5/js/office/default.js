Ext.onReady(function () {
    RealtorX5.config.connector_url = OfficeConfig.actionUrl;

    var grid = new RealtorX5.panel.Home();
    grid.render('office-realtorx5-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});
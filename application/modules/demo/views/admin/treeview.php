<div class="page-header position-relative">
    <h1>Treeview <small><i class="icon-double-angle-right"></i> with selectable items(single &amp; multiple) and custom icons</small></h1>
</div>

<div class="row-fluid">
    <!--PAGE CONTENT BEGINS HERE-->

    <div class="widget-box span6">
        <div class="widget-header header-color-blue2">
            <h4 class="lighter smaller">Choose Categories</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-8">
                <div id="tree1" class="tree"></div>
            </div>
        </div>
    </div>

    <div class="widget-box span6">
        <div class="widget-header header-color-green2">
            <h4 class="lighter smaller">Browse Files</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-8">
                <div id="tree2" class="tree"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var $assets = "themes/admin/media/images";//this will be used in fuelux.tree-sampledata.js
    </script>
    <script type="text/javascript" src="themes/admin/media/js/fuelux.tree-sampledata.js"></script>

    <!--PAGE CONTENT ENDS HERE-->
</div><!--/row-->

<script type="text/javascript">
$(function(){

    $('#tree1').ace_tree({
        dataSource: treeDataSource ,
        multiSelect:true,
        loadingHTML:'<div class="offset1"><i class="icon-refresh icon-spin blue"></i></div>',
        'open-icon' : 'icon-minus',
        'close-icon' : 'icon-plus',
        'selectable' : true,
        'selected-icon' : 'icon-ok',
        'unselected-icon' : 'icon-remove'
    });
    
    $('#tree2').ace_tree({
        dataSource: treeDataSource2 ,
        loadingHTML:'<div class="offset1"><i class="icon-refresh icon-spin blue"></i></div>',
        'open-icon' : 'icon-folder-open',
        'close-icon' : 'icon-folder-close',
        'selectable' : false,
        'selected-icon' : null,
        'unselected-icon' : null
    });
    
    /**
    $('#tree1').on('loaded', function (evt, data) {
    });
    
    $('#tree1').on('opened', function (evt, data) {
    });
    
    $('#tree1').on('closed', function (evt, data) {
    });
    
    $('#tree1').on('selected', function (evt, data) {
    });
    */
});
</script>


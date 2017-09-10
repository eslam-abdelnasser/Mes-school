<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
        <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
        <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->
<nav class="quick-nav">
    <a class="quick-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                <span>Customer Reviews</span>
                <i class="icon-users"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/showcast/" target="_blank">
                <span>Showcase</span>
                <i class="icon-user"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                <span>Changelog</span>
                <i class="icon-graph"></i>
            </a>
        </li>
    </ul>
    <span aria-hidden="true" class="quick-nav-bg"></span>
</nav>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<!--<script src="../assets/global/plugins/respond.min.js"></script>-->
{{ Html::script('admin-panel/assets/global/plugins/respond.min.js')}}
{{--<script src="../assets/global/plugins/excanvas.min.js"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/excanvas.min.js')}}
{{--<script src="../assets/global/plugins/ie8.fix.min.js"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/ie8.fix.min.js')}}
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
{{--<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/jquery.min.js')}}
{{--<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}
{{--<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/js.cookie.min.js')}}
{{--<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
{{--<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/jquery.blockui.min.js')}}
{{--<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ Html::script('admin-panel/assets/global/plugins/moment.min.js')}}
{{ Html::script('admin-panel/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}
{{ Html::script('admin-panel/assets/global/plugins/morris/morris.min.js')}}

{{ Html::script('admin-panel/assets/global/plugins/morris/raphael-min.js')}}


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{{--<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/global/scripts/app.min.js')}}
<!-- END THEME GLOBAL SCRIPTS -->
@yield('js')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--<script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/pages/scripts/dashboard.min.js')}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
{{--<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/layouts/layout/scripts/layout.min.js')}}
{{--<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/layouts/layout/scripts/demo.min.js')}}
{{--<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/layouts/global/scripts/quick-sidebar.min.js')}}
{{--<script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>--}}
{{ Html::script('admin-panel/assets/layouts/global/scripts/quick-nav.min.js')}}
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>
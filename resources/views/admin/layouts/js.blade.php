<!-- JQUERY JS -->
<script src="{{ asset('app-assets-admin/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('app-assets-admin/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- FORM WIZARD JS-->
<script src="{{ asset('app-assets-admin/plugins/formwizard/jquery.smartWizard.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/formwizard/fromwizard.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('app-assets-admin/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('app-assets-admin/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('app-assets-admin/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('app-assets-admin/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('app-assets-admin/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('app-assets-admin/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('app-assets-admin/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('app-assets-admin/plugins/select2/select2.full.min.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('app-assets-admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('app-assets-admin/js/apexcharts.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/apexchart/irregular-data-series.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('app-assets-admin/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/flot/dashboard.sampledata.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('app-assets-admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('app-assets-admin/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('app-assets-admin/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('app-assets-admin/js/typehead.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('app-assets-admin/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('app-assets-admin/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('app-assets-admin/js/custom.js') }}"></script>

<!-- Custom-switcher -->
<script src="{{ asset('app-assets-admin/js/custom-swicher.js') }}"></script>

<!-- Switcher js -->
<script src="{{ asset('app-assets-admin/switcher/js/switcher.js') }}"></script>

<!-- DATA TABLE JS-->
<script src="{{ asset('app-assets-admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('app-assets-admin/js/table-data.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(session()->has('success'))
    toastr.options = {
        "closeButton": true
    }
    toastr.success("{{ session()->get('success') }}")
    @endif
</script>
<script>
    @if(session()->has('error'))
    toastr.options = {
        "closeButton": true
    }
    toastr.error("{{ session()->get('error') }}")
    @endif
</script>
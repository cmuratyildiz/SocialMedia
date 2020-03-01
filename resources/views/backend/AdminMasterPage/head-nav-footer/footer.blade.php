<script src="js/admin-js/js/excanvas.min.js"></script>
<script src="js/admin-js/js/jquery.min.js"></script>
<script src="js/admin-js/js/jquery.ui.custom.js"></script>
<script src="js/admin-js/js/bootstrap.min.js"></script>
<script src="js/admin-js/js/jquery.flot.min.js"></script>
<script src="js/admin-js/js/jquery.flot.resize.min.js"></script>
<script src="js/admin-js/js/jquery.peity.min.js"></script>
<script src="js/admin-js/js/fullcalendar.min.js"></script>
<script src="js/admin-js/js/matrix.js"></script>
<script src="js/admin-js/js/matrix.dashboard.js"></script>
<script src="js/admin-js/js/jquery.gritter.min.js"></script>
<script src="js/admin-js/js/matrix.interface.js"></script>
<script src="js/admin-js/js/matrix.chat.js"></script>
<script src="js/admin-js/js/jquery.validate.js"></script>
<script src="js/admin-js/js/matrix.form_validation.js"></script>
<script src="js/admin-js/js/jquery.wizard.js"></script>
<script src="js/admin-js/js/jquery.uniform.js"></script>
<script src="js/admin-js/js/select2.min.js"></script>
<script src="js/admin-js/js/matrix.popover.js"></script>
<script src="js/admin-js/js/jquery.dataTables.min.js"></script>
<script src="js/admin-js/js/matrix.tables.js"></script>

<script type="text/javascript">
    function goPage (newURL) {
        if (newURL != "") {
            if (newURL == "-" ) {
                resetMenu();
            }
            else {
                document.location.href = newURL;
            }
        }
    }

    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
<!-- BEGIN: Vendor JS-->
<script src="public/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('public/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{url('public/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{url('public/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('public/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{url('public/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('public/app-assets/js/scripts/forms/form-wizard.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
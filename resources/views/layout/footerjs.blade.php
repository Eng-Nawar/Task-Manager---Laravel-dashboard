<!--ALL THIRD PART JAVASCRIPTS-->
<script src="{{ asset('vendor/js/vendor.footer.js') }}"></script>

<!--nextloop.core.js-->
<script src="{{ asset('js/core/ajax.js') }}"></script>

<!--MAIN JS - AT END-->
<script src="{{ asset('js/core/boot.js') }}"></script>

<!--EVENTS-->
<script src="{{ asset('js/core/events.js') }}"></script>

<!--CORE-->
<script src="{{ asset('js/core/app.js') }}"></script>

<!--BILLING-->
<script src="{{ asset('js/core/billing.js') }}"></script>

<!--project page charts-->
@if(@config('visibility.projects_d3_vendor'))
<script src="{{ asset('vendor/js/d3/d3.min.js') }}"></script>
<script src="{{ asset('vendor/js/c3-master/c3.min.js') }}"></script>
@endif

<!--form builder-->
@if(@config('visibility.web_form_builder'))
<script src="{{ asset('vendor/js/formbuilder/form-builder.min.js') }}"></script>
<script src="{{ asset('js/webforms/webforms.js') }}"></script>
@endif
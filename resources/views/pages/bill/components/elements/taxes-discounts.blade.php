<div class="bill-taxes-discounts-container col-12 text-right p-t-20 p-b-20">
    <!--adjustment-->
    <button class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0" id="billing-adjustment-popover-button"
        data-placement="top" data-title="{{ cleanLang(__('lang.adjustments')) }}"
        data-popover-content="{{ $elements['adjustments_popover'] }}">
        {{ cleanLang(__('lang.adjustments')) }}
    </button>
    <!--tax rates-->
    <button class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0" id="billing-tax-popover-button"
        data-placement="top" data-popover-content="{{ $elements['tax_popover'] }}"
        data-title="{{ cleanLang(__('lang.tax_rates')) }}">
        {{ cleanLang(__('lang.tax_rates')) }}
    </button>
    <!--discounts-->
    <button class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0" id="billing-discounts-popover-button"
        data-placement="top" data-title="{{ cleanLang(__('lang.discount')) }}"
        data-popover-content="{{ $elements['discount_popover'] }}">
        {{ cleanLang(__('lang.discounts')) }}
    </button>
</div>
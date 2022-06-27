<div class="invoice-item-actions">

    <!--add blank line-->
    <button type="button" id="billing-item-actions-blank"
        class="btn btn-secondary btn-rounded btn-sm btn-rounded-icon"><i
            class="mdi mdi-plus-circle-outline text-themecontrast"></i>
        <span>{{ cleanLang(__('lang.new_blank_line')) }}</span></button>

    

    

    <!--[invoices] add expense-->
    @if($bill->bill_type == 'invoice')
    <button type="button"
        class="btn btn-secondary btn-rounded btn-sm btn-rounded-icon actions-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#expensesModal" data-modal-title="{{ cleanLang(__('lang.change_category')) }}"
        data-reset-loading-target="true"
        data-url="{{ url('/expenses?action=search&itemresource_type=invoice&expense_billable=billable&expense_billing_status=not_invoiced&dom_reset=skip&filter_expense_projectid='.$bill->bill_projectid) }}"
        data-loading-target="expenses-table-wrapper"><i class="mdi mdi-cash-usd text-themecontrast"></i>
        <span>{{ cleanLang(__('lang.expense')) }}</span></button>

    @endif

</div>
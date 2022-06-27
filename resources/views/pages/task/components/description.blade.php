<div class="card-description" id="card-description">
    <div class="x-heading"><i class="mdi mdi-file-document-box"></i>{{ cleanLang(__('lang.description')) }}</div>
    
    <div class="p-t-10">
        {!! _clean($task->task_description) !!}
    </div>
    @if($task->permission_edit_task)
    <!--buttons: edit-->
    <div id="card-description-edit">
        <div class="x-action" id="card-description-button-edit"><a href="javaScript:void(0);">{{ cleanLang(__('lang.edit_description')) }}</a>
        </div>
        <input type="hidden" name="task_description" id="card-description-input" value="">
    </div>
    <!--button: subit & cancel-->
    <div id="card-description-submit" class="p-t-10 hidden text-right">
        <div class="x-notes-editor">
            <div class="form-group row">
                <div >
                    <textarea  name="task_description"
                        id="task_description">{!! _clean($task->task_description ?? '') !!}</textarea>
                </div>
            </div>
        </div>
        <button type="button" class="btn waves-effect waves-light btn-xs btn-default"
            id="card-description-button-cancel">{{ cleanLang(__('lang.cancel')) }}</button>
        <button type="button" class="btn waves-effect waves-light btn-xs btn-danger js-description-save"
            data-url="{{ urlResource('/tasks/'.$task->task_id.'/update-description') }}" data-progress-bar='hidden'
            data-type="form" data-form-id="card-description-submit" data-ajax-type="post"
            id="card-description-button-save">{{ cleanLang(__('lang.save')) }}</button>
    </div>
    @endif
</div>
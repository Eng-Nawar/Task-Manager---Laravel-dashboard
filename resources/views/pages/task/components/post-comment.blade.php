@if($task->permission_participate)
<!--complete commenting form-->
<div class="post-comment" id="post-card-comment-form">
  
        <!--tinymce editor-->
        <textarea 
            name="comment_text" id="comment_text" style="visibility: visible; display: inline" ></textarea>
        <!--close button-->
        <div class="x-button p-t-10 p-b-10 text-right">
            <button type="button" class="btn btn-default btn-sm" id="card-comment-close-button">
                {{ cleanLang(__('lang.close')) }}
            </button>
            <!--submit button-->
            <button type="button" class="btn btn-danger btn-sm x-submit-button" id="card-comment-post-button"
                data-url="{{ urlResource('/tasks/'.$task->task_id.'/post-comment') }}" data-type="form" data-ajax-type="post"
                data-form-id="post-card-comment-form" data-loading-target="card-coment-placeholder-input-container">
                {{ cleanLang(__('lang.post')) }}
            </button>
        </div>
   
</div>
<!--/#complete commenting form-->
@endif
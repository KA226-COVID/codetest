{% set question = newQuestion %}
    <div id="newQuestionNumber">{{ newQuestionNumber }}.</div>
    <div class="flx-grow-all question-text">
        <form id="questionTextForm-1" action="actions/AddOrEditQuestion.php" method="post">
            <input type="hidden" name="question[question_id]" value="-1">
            <label for="questionTextInput-1" class="sr-only">Question Text</label>
            <textarea class="form-control ckeditor" id="questionTextInput-1" name="question[question_txt]" rows="2" required></textarea>
            {{ include (CFG.CT_Types.formsPath ~ main.getTypeProperty('instructorForm')) }}
            <label for="questionMust-1">Must contain (separated by lines)</label>
            <textarea class="form-control" id="questionMust-1" name="question[question_must]" rows="2"></textarea>
            <label for="questionMusnt-1">Shouldn't contain</label>
            <textarea class="form-control" id="questionMusnt-1" name="question[question_musnt]" rows="2"></textarea>
        </form>
    </div>
    <a id="questionSaveAction-1" href="javascript:void(0);">
        <span aria-hidden="true" class="fa fa-fw fa-save"></span>
        <span class="sr-only">Save Question</span>
    </a>
    <a id="questionCancelAction-1" href="javascript:void(0);">
        <span aria-hidden="true" class="fa fa-fw fa-times"></span>
        <span class="sr-only">Cancel Question</span>
    </a>

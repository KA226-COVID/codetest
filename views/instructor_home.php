{% extends "mainTemplate.php" %}
{% block pageTitle %}
{{ include('main/mainTitle.php') }}
{% endblock %}
{% block content %}
<section id="theQuestions">
    {% for question in questions %}
        {{ include('question/instructorQuestion.php') }}
    {% endfor %}
    {{ include('question/newQuestionForm.php') }}
</section>
<section id="addQuestions">
    {{ include('question/addQuestion.php') }}
</section>

{{ include('question/import/importModal.php') }}
{% endblock %}
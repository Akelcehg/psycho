/**
 * Created by Akel on 3/10/2016.
 */
$(document).ready(function () {

    var quizGenerateButton = $('#createQuizQuestionsButton');
    var quizQuestionsNumber = $('#questionsNumberInput');
    var questionsDiv = $('#questionsDiv');
    var questionAnswersDiv = $('.questionAnswersDiv');
    var createQuizAnswersButton = $('.createQuizAnswersButton');

    quizGenerateButton.click(function () {

        if (!quizQuestionsNumber.val()) {
            return alert("Введи кол-во вопросов");
        }

        for (var i = 0; i < quizQuestionsNumber.val(); i++) {
            questionsDiv.append("<div class='form-group required'>" +
                "<label style='width: 100%;'> Введи сам вопрос<input type='text' class='form-control' name='question[]' maxlength='50'></label>" +
                "<label>Кол-во ответов" +
                "<input type='text' class='form-control answersNumberInput'>" +
                "<input class='btn btn-info createQuizAnswersButton' type='button' value='Создать ответы'></label></div>" +
                "<div class='questionAnswersDiv'></div>");
        }

    });

    $('.quiz-form').on('click', '.createQuizAnswersButton', function () {

        //alert($(this).prev('.answersNumberInput').val());
        if (!$(this).prev('.answersNumberInput').val()) {
            return alert("Введи кол-во ответов для вопроса");
        }
        for (var i = 0; i < $(this).prev('.answersNumberInput').val(); i++) {
            $(this).parent().first('.questionAnswersDiv').append("<div class='form-group required'>" +
                "<label>Введи текст ответа для вопроса " + (i + 1) +
                "<input type='text' class='form-control'>" +
                "</label>" +
                "</div><div class='form-group required'>" +
                "<label>Введи кол-во балов за ответ на вопрос " + (i + 1) +
                "<input type='text' class='form-control'>" +
                "</label>" +
                "</div>");
        }
    });

});

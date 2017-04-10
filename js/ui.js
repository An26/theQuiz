var quizData = [

    {
        "question": "In your group you are the...",
        "image": "<?=$url;?>/images/quiz/",
        "option1": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Fun one"
        },
        "option2": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Crazy One"
        },
        "option3": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Awkward one"
        },
        "option4": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Stable one"
        }
    },
    {
        "question": "Which of these faces do you relate the most with?",
        "image": "<?=$url;?>/images/quiz/",
        "option1": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Khalisi"
        },
        "option2": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Tina Fey"
        },
        "option3": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Rachel Green"
        },
        "option4": {
            "image": "<?=$url;?>/images/quiz/",
            "answer": "Tina Belcher"
        }
    }

];

console.log(quizData[0].option1.answer);
$(document).ready(function() {

    // create all the question divs dynamically first... 
    for (i = 0; i < quizData.length; i++) {
        var answer1 = $('<a href="answer1" class="answer">').html(quizData[i].option1.answer).append(answer1Img);
        var answer1Img = $('<img src="' + quizData[i].option1.image + '">').attr("data-weight", "0").attr("alt", "");

        var answer2 = $('<a href="answer2" class="answer">').html(quizData[i].option2.answer).append(answer2Img);
        var answer2Img = $('<img src="' + quizData[i].option2.image + '">').attr("data-weight", "1").attr("alt", "");

        var answer3 = $('<a href="answer3" class="answer">').html(quizData[i].option3.answer).append(answer3Img);
        var answer3Img = $('<img src="' + quizData[i].option1.image + '">').attr("data-weight", "2").attr("alt", "");

        var answer4 = $('<a href="answer4" class="answer">').html(quizData[i].option4.answer).append(answer4Img);
        var answer4Img = $('<img src="' + quizData[i].option1.image + '">').attr("data-weight", "3").attr("alt", "");

        var clearLine = $('<div class="clear">');

        var questionTitle = $('<h1>').html(quizData[i].question);
        var questionImg = $('<img src = "' + quizData[i].image + '" alt="Question ' + (i + 1) + '">');


        var questionDiv = $('<div class="question">').append(questionTitle).append(questionImg).append(answer1).append(answer2).append(answer3).append(answer4).append(clearLine);

        $('#questions').append(questionDiv);

        $('#questions div:first').addClass("active");
        // $('#questions').html('hello');
    }

    "use strict";

    // ---------- External Links ----------
    $('a[rel=external]').attr('target', '_blank').click(function() {
        $(this).blur();
    });

    // ---------- Content Skip ----------
    $("a#skip").click(function() {
        $("a#focus").show().focus();
        return false;
    });

    $("a#focus").blur(function() {
        $(this).hide();
    });

    $("a#focus").click(function() {
        return false;
    });

    // ---------- Quiz ----------
    // var questions = $("#questions .question").length;
    var questions = quizData.length;
    var active = 1;
    var step = 0;
    var score = 0;
    var weight = 0;

    function quiz(weight) {
        active = 0;
        score += weight;
        step += 1;
        if (step > 1 && step <= questions) {
            $("#step").html(step + " of " + questions);
            $("#indicator").stop().animate({
                width: Math.round((step / questions) * 100) + "%"
            }, 500);
            $(".question.active").stop().animate({
                left: "-100%"
            }, 500, function() {
                $(this).remove();
            });
            $(".question.active").next(".question").show().stop().animate({
                left: "0%"
            }, 500, function() {
                $(".question").removeClass("active");
                $(this).addClass("active");
                active = 1;
            });
        } else if (step > questions) {
            $(".question.active").stop().animate({
                left: "-100%"
            }, 500);
            $("#results p").html("Score:" + score);
            $("#results").stop().animate({
                left: "0%"
            }, 500, function() {
                $("#questions").remove();
            });
        } else {
            $("#indicator").stop().animate({
                width: Math.round((step / questions) * 100) + "%"
            }, 500);
            active = 1;
        }
    }

    // Initialize
    quiz(0);

    $(".answer").click(function() {
        if (active === 1) {
            weight = $(this).children("img").data("weight");
            quiz(weight);
        }
        return false;
    });

});
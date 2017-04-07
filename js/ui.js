$(document).ready(function() {
	
 	"use strict";
	
	// ---------- External Links ----------
	$('a[rel=external]').attr('target', '_blank').click(function(){
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
	var questions = $("#questions .question").length;
	var active = 1;
	var step = 0;
	var score = 0;
	var weight = 0;
	
	function quiz(weight) {
		active = 0;
		score+=weight;
		step+=1;
		if(step > 1 && step <= questions) {
			$("#step").html(step + " of " + questions);
			$("#indicator").stop().animate({
				width: Math.round((step/questions)*100) + "%"
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
				width: Math.round((step/questions)*100) + "%"
			}, 500);
			active = 1;
		}
	}
	
	// Initialize
	quiz(0);
	
	$(".answer").click(function() {
		if(active === 1) {
			weight = $(this).children("img").data("weight");
			quiz(weight);
		}
		return false;
	});
	
});
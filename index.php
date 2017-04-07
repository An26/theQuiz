<?php

$title = "Home";
$title_es = "";
$name = "home";
$section = "general";

include('includes/header.php');

?>

<section id="quiz">

	<h1>Quiz Header</h1>
	
	<div id="progress">
	
		<div id="indicator"></div><!--indicator-->
		
		<div id="step">1 of 5</div>
	
	</div><!--progress-->
	
	<div id="questions">
	
		<div class="question active">
		
			<img src="<?=$url;?>/images/quiz/" alt="Question 1" />
			
			<a href="answer1" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="0" alt="" />
				Answer 1
			</a>
			
			<a href="answer2" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="1" alt="" />
				Answer 2
			</a>
			
			<a href="answer3" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="3" alt="" />
				Answer 3
			</a>
			
			<a href="answer4" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="2" alt="" />
				Answer 4
			</a>
		
			<div class="clear"></div><!--clear-->
		
		</div><!--question-->
	
		<div class="question">
		
			<img src="<?=$url;?>/images/quiz/" alt="Question 2" />
			
			<a href="answer1" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="0" alt="" />
				Answer 1
			</a>
			
			<a href="answer2" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="1" alt="" />
				Answer 2
			</a>
			
			<a href="answer3" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="3" alt="" />
				Answer 3
			</a>
			
			<a href="answer4" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="2" alt="" />
				Answer 4
			</a>
		
			<div class="clear"></div><!--clear-->
		
		</div><!--question-->
	
		<div class="question">
		
			<img src="<?=$url;?>/images/quiz/" alt="Question 3" />
			
			<a href="answer1" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="0" alt="" />
				Answer 1
			</a>
			
			<a href="answer2" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="1" alt="" />
				Answer 2
			</a>
			
			<a href="answer3" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="3" alt="" />
				Answer 3
			</a>
			
			<a href="answer4" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="2" alt="" />
				Answer 4
			</a>
		
			<div class="clear"></div><!--clear-->
		
		</div><!--question-->
	
		<div class="question">
		
			<img src="<?=$url;?>/images/quiz/" alt="Question 4" />
			
			<a href="answer1" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="0" alt="" />
				Answer 1
			</a>
			
			<a href="answer2" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="1" alt="" />
				Answer 2
			</a>
			
			<a href="answer3" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="3" alt="" />
				Answer 3
			</a>
			
			<a href="answer4" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="2" alt="" />
				Answer 4
			</a>
		
			<div class="clear"></div><!--clear-->
		
		</div><!--question-->
	
		<div class="question">
		
			<img src="<?=$url;?>/images/quiz/" alt="Question 5" />
			
			<a href="answer1" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="0" alt="" />
				Answer 1
			</a>
			
			<a href="answer2" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="1" alt="" />
				Answer 2
			</a>
			
			<a href="answer3" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="3" alt="" />
				Answer 3
			</a>
			
			<a href="answer4" class="answer">
				<img src="<?=$url;?>/images/quiz/" data-weight="2" alt="" />
				Answer 4
			</a>
			
			<div class="clear"></div><!--clear-->
		
		<div class="clear"></div><!--clear-->
		
		</div><!--question-->
	
	</div><!--questions-->
	
	<div id="results">
	
		<h3>Results headline</h3>
		
		<p>Results copy</p>
	
	</div><!--results-->

</section><!--quiz-->

<?php include('includes/footer.php'); ?>
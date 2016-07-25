<!--contacts-->
<?php
/*
Template Name: Contact
*/
?>
<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Пожалуйста, введите ваше имя.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Пожалуйста, введите ваш email адрес.';
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$emailError = 'Вы ввели неправильный email адрес.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Пожалуйста, введите текст сообщения.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<!--
<div id="container">
<div id="content">
-->
<section class="grid contact_us">
<div class="push-3-16 col-10-16 t-push-4-16 tab-col-8-16 mobile-col-16-16">
<h3>НАПИШИТЕ НАМ</h3> <a href="mailto:info@trendico.ru">info@trendico.ru</a> <a href="tel:+79602828445">+7 (960) 282-84-45</a>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry-content">
<?php if(isset($emailSent) && $emailSent == true) { ?>
<div class="thanks">

<p>Спасибо, ваш сообщение успешно отправлено.</p>
</div>
<?php } else { ?>
<?php if(isset($hasError) || isset($captchaError)) { ?>
<p class="error">Извините, произошла ошибка.<p>
<?php } ?>





<form class="form" role="form" action="<?php the_permalink(); ?>" id="contactForm" method="post">
<!--
<ul class="contactform">
<li>
-->
<div class="grid">
  <div class="col-8-16 coll-pading">
<input type="text" placeholder="Как вас зовут?" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField form-control" />
</div>
<?php if($nameError != '') { ?>
<span class="error"><?=$nameError;?></span>
<?php } ?>

<div class="col-8-16">
<input type="phone" placeholder="Телефон" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email form-control col-8-16" />
</div>
</div>
<?php if($emailError != '') { ?>
<span class="error"><?=$emailError;?></span>
<?php } ?>
<div class="grid"><div class="col-16-16">
<textarea name="comments" id="commentsText" rows="5" cols="30" class="form-control required requiredField" placeholder="Опишите свой проект">

<?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>

</textarea>
</div></div>
<?php if($commentError != '') { ?>
<span class="error"><?=$commentError;?></span>
<?php } ?>

<button type="submit" class="btn btn-default">Отправить
</button>

<input type="hidden" name="submitted" id="submitted" value="true" />
</form>
  </div>
</section>
<?php } ?>
<!--</div> .entry-content -->
<!--</div> .post -->
<?php endwhile; endif; ?>
<!--</div> #content -->
<!--</div> #container -->
<!--contacts-->
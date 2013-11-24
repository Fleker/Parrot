<?php get_header(); ?>

<div class="wrap">
	<form name="input" action="<?php echo get_submitLink(); ?>" method="post">
		<div class="menu" align="right">
			<select name="category">
				<?php while(have_category()) : thecategory() ?>
					<option value="<?php echo cat_title(); ?>"><?php echo cat_title(); ?></option>
				<?php endwhile; ?>
			</select>
			<input value="Submit" type="submit" class="submit"/>
			<!-- log in / out button-->
			<a href="<?php echo session_link(); ?>"><button><?php echo session_text(); ?></button></a>
		</div>
		<input placeholder="Title" name="title" class="boxsizingBorder" required autocomplete="off" autofocus/>
		<textarea rows="10" placeholder="Your thoughts..." name="content" class="boxsizingBorder" required></textarea>
	</form>
</div>

<?php get_footer(); ?>
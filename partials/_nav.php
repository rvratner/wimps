<?php
function getCurPage($page, $pageName) 
{
    if ($pageName == $page) { 
    	print 'class="current_page"'; 
	} 
}
?>

<!-- <form id="sendEmails" method="POST" action="https://docs.google.com/forms/d/1yOprC9CnSbX13Le6B_zJ5yYKy3w8RkF7X_HV0SXGIOc/formResponse">
<input id="email" type="text" name="entry.811768935" placeholder="Wimps Mailing List"/><input type="submit">
</form> -->
<h1><img class="logo" src="img/logo1.png" alt="wimps logo"/></h1>
<nav>
	<ul>
		<li><a <?php getCurPage('shows', $pageName); ?> href="index.php">Shows</a></li>
		<li><a <?php getCurPage('tunes', $pageName); ?> href="tunes.php">Tunes</a></li> 
<!-- 		<li><a <?php getCurPage('tunes', $pageName); ?> href="records.php">Records</a></li> 
 -->		<li><a <?php getCurPage('videos', $pageName); ?> href="videos.php">Videos</a></li>
		<li><a <?php getCurPage('contact', $pageName); ?> href="contact.php">Contact/Photos</a></li>
	</ul>
</nav>

<div id="<?php echo $pageName ?>" class="page">

<?php
	$t_sub_title = "Development";
	include( "top.php" );
?>


<h4>MantisBT Development</h4>
<div class="spotlight">
	<p>
	MantisBT is free software. We encourage <b>you</b> to dive into the source 
	and help on new features and bugfixes. That is the way free sofware works.
	</p>
</div>

<p>
	Here are some important pointers for MantisBT-Development:
</p>

<h5>The source code</h5>

<p>
	MantisBT sourcecode is hosted in <a href="http://git.or.cz">the GIT SCM</a>.
	Use <a href="http://git.mantisbt.org">gitweb</a> to browse the source.

	Detailed information on how to use git with MantisBT can be found in the 
	<a href="http://www.mantisforge.org/dev/manual/en/developers/">Mantis Bug Tracker 
	Developers Guide</a>
</p>
<p>
	<a href="http://www.mantisforge.org/dev/gitstats/">GitStats</a> for the MantisBT GIT-Repository 
	are available at <a href="http://www.mantisforge.org">Mantisforge.org</a>.
</p>

<h5>Documentation</h5>
	<ul>
		<li>
			<a href="http://www.mantisforge.org/dev/manual/en/developers/">Mantis Bug Tracker Developers Guide</a>
		</li>
		<li>
			<a href="http://www.mantisforge.org/dev/phpdoc/">PHPDoc documentation for Mantis</a>
		</li>
		<li>
			<a href="http://www.mantisforge.org/dev/phpxref/">phpxref documentation for mantisbt-core</a>
		</li>
		<li>
			<a href="/guidelines.php">MantisBT Coding Conventions</a>
		</li>
		<li>
			<a href="/general_development.php">General development information</a>
		</li>
	</ul>

<div class="clearBoth"></div>

<?php
	$t_footer_sponsored_links = '';
	include( "bot.php" ); 
?>
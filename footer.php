			<footer class="footer" role="contentinfo">

	<div class="footer-widgets row">			

			<!-- footer widgets -->
				<div class="five columns footer-widget " id="footer-widget-left">
					<?php
						the_widget('WP_Widget_Text', 'title=Contact Us&text=<ul class="contact">
<li class="address"><span class="smalltext">Our mailing address is:</span><br>
<a href="http://www.mla.org">Modern Language Association</a><br>
26 Broadway, 3rd floor<br>
New York, NY 10004<br>
</li>
<li class="email"><a class="email" href="mailto:commons@mla.org">commons@mla.org</a></li>
<li class="address"><span class="smalltext">On the Web:</span> <a href="http://www.mla.org">mla.org</a></li>
<li class="phone">646 576-5000</li>
</ul>', 'before_title=<h4>&after_title=</h4>');
					?>
				</div>
	
	
				<div class="five columns footer-widget" id="footer-widget-middle">
					<?php
						the_widget('WP_Widget_RSS', 'url=http://faq.commons.mla.org/&title=FAQ&items=5', 'before_title=<h4>&after_title=</h4>');
					?>
				</div>
	

				<div class="six columns footer-widget " id="footer-widget-right">
					<?php
						the_widget('WP_Widget_Text', 'title=Get Help&text=<ul>
<li>Learn more <a href="http://cather.mlacommons.org/about/">About <em>MLA Commons</em></a>.</li>
<li>See <a href="http://cather.mlacommons.org/docs/getting-started/">Getting Started</a>.</li>
<li>Join the <a href="http://cather.mlacommons.org/groups/welcome-group/">Help and How-To Group</a>.</li>
<li>E-mail us at <a href="mailto:commons@mla.org" class="email">commons@mla.org</a>.</li></ul>', 'before_title=<h4>&after_title=</h4>');
					?>
				</div>

	</div>

<div style="clear:both;"></div>

					<p class="source-org copyright">Copyright &copy; 2012–2015 MLA. Powered by <a href="http://commonsinabox.org">Commons In A Box</a>. Based on a design by <a href="http://communitystructure.com">Community Structure</a>.<br/><a href="http://commons.mla.org/terms/">Terms of Service</a> • <a href="http://commons.mla.org/privacy/">Privacy Policy</a> • <a href="http://commons.mla.org/guidelines/">Guidelines for Participation</a></p>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->

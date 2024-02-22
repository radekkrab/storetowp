<!-- Футер -->
<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
                <?php 
                    wp_nav_menu( [
                        'theme_location' => 'bottom',
                        'container' => '',
                        'item_wrap' => '%3$s'
                    ] ); 
                    ?>
				    <span class="accent-color">&copy; </span> <?= bloginfo('name'); ?>, 2022-<?= date('Y'); ?>
              
				</div>
			</div>
		</div>
	</div>
   <?php wp_footer(); ?>
</body>

</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>
	</div><!-- .site-content -->
</main><!-- .site-main -->	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://www.sumedia.nl', 'cleantheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cleantheme' ), 'Sumedia & WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>

            <footer id="footer">
            	<div class="container">
            		<div class="cr-box col-md-8 col-sm-6">
            			<?php
            				if ( date('Y') != '2016' )
            					$date_range = '-' . date('Y');
            			?>
            			<p>© COPYRIGHT 2016<?php echo $date_range; ?>. Delas TODOS OS DIREITOS RESERVADOS.</p>
            			<div class="support-div"></div>
            		</div>
            		<div class="dev-container col-md-4 col-sm-5">
            			<p>Desenvolvido por:</p>
            			<div class="dev-box">
            				<a href="https://github.com/hugocica/" target="_blank">
            					<i class="fa fa-github" aria-hidden="true"></i>
            					<span>Hugo Cicarelli</span>
            				</a>
            			</div>
            			<div class="support-div"></div>
            		</div>
            	</div>
            </footer>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>

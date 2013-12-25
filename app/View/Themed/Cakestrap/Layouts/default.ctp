<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Rent My Ride');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap');
			echo $this->Html->css('main');
			echo $this->Html->css('carousel');
			echo $this->Html->css('fullcalendar');
			// echo $this->Html->css('datepicker');

			echo $this->fetch('css');
			
			echo $this->Html->script('libs/jquery-1.10.2.min');
			echo $this->Html->script('libs/bootstrap.min');
			echo $this->Html->script('fullcalendar.min');
			// echo $this->Html->script('bootstrap-datepicker');
			
			echo $this->fetch('script');

		?>
		<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>

	</head>

	<body>

		<div id="main-container">
		
			<div id="header" class="container">
				<?php echo $this->element('menu/top_menu'); ?>
			</div><!-- /#header .container -->
			
			<div id="content" class="container">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div><!-- /#content .container -->
			
			<div id="footer" class="container">
				<footer>
				  <p class="pull-right"><a href="#">Back to top</a></p>
				  <p>&copy; <?php echo date('Y'); ?> Rent My Ride, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
				</footer>
			</div><!-- /#footer .container -->
			
		</div><!-- /#main-container -->

		<?php echo $this->Html->script('holder'); ?>
		
	<!--
 		<div class="container">
			<div class="well well-sm">
				<small>
					<?php // echo $this->element('sql_dump'); ?>
				</small>
			</div><!-- /.well well-sm 
		</div><!-- /.container 
	-->
		
	</body>

</html>
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Jeff and Wah Yan\'s Wedding');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

        echo $this->Html->css('cake.wedding.min');
        echo $this->Html->css('jbclock.min');
        echo $this->Html->css('jquery-ui-1.10.3.custom.min');

        /* Set start and end dates here */
        $startDate  = strtotime("22 February 2013 12:00:00");
        $endDate    = strtotime("18 August 2013 12:00:00");
        /* /Set start and end dates here */
    ?>
</head>
<body>
	<div id="container">
	    <div id="sidebar_wrapper">
            <div id="left_sidebar"></div>
            <div id="sidebar">
                <?php
                    echo $this->Html->link(
                        $this->Html->image('doublehappiness.png',
                            array('title' => 'Home - This Means Double Happiness :)', 'alt' => 'Home - This Means Double Happiness :)')
                        ),
                        array('controller' => 'pages', 'action' => 'home'),
                        array('escape' => false));

                ?>
                <div class="image_wrapper">
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array(  'controller' => 'pages', 'action' => 'home'),
                                                        array(  'class' => $controller == 'pages' ? 'active' : '',
                                                                'title' => 'Where and When', 'alt' => 'Where and When', 'id' => 'when_where_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'rsvps', 'action' => $rsvp_done != true ? 'add' : 'view/'.$rsvp_id),
                                                        array(  'class' => $controller == 'rsvps' ? 'active' : '',
                                                                'title' => 'RSVP', 'alt' => 'RSVP', 'id' => 'rsvp_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'menus', 'action' => 'index'),
                                                        array(  'class' => $controller == 'menus' ? 'active' : '',
                                                                'title' => 'Banquet Menu', 'alt' => 'Banquet Menu', 'id' => 'banquet_menu_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                            array('controller' => 'directions', 'action' => 'index'),
                                                array(  'class' => $controller == 'directions' ? 'active' : '',
                                                        'title' => 'Directions', 'alt' => 'Directions', 'id' => 'directions_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'hotels', 'action' => 'index'),
                                                        array(  'class' => $controller == 'hotels' ? 'active' : '',
                                                                'title' => 'Hotels', 'alt' => 'Hotels', 'id' => 'hotels_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'songs', 'action' => 'add'),
                                                        array(  'class' => $controller == 'songs' ? 'active' : '',
                                                                'title' => 'Request A Song', 'alt' => 'Request A Song', 'id' => 'request_song_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'messages', 'action' => 'add'),
                                                        array(  'class' => $controller == 'messages' ? 'active' : '',
                                                                'title' => 'Leave Us A Note', 'alt' => 'Leave Us A Note', 'id' => 'note_link'));
                            ?>
                    </div>
                    <div class="image">
                            <?php
                                echo $this->Html->link('',
                                                    array('controller' => 'gifts', 'action' => 'index'),
                                                        array(  'class' => $controller == 'gifts' ? 'active' : '',
                                                                'title' => 'Gifts', 'alt' => 'Gifts', 'id' => 'gifts_style', 'id' => 'gifts_link'));
                            ?>
                    </div>
                    <?php
                        if ($this->Session->check('Auth.User') == true){
                            echo "<div class=\"image\">".
                                $this->Html->link('',
                                                    array('controller' => 'users', 'action' => 'logout'),
                                                        array(  'class' => $controller == 'users' ? 'active' : '',
                                                                'title' => 'Logout', 'alt' => 'Logout', 'id' => 'logout_style', 'id' => 'logout_link'));
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
            <div id="right_sidebar"></div>
        </div>
		<div id="content">
		    <div id="header">
                <h1>JEFF + WAH YAN ARE GETTING MARRIED IN:</h1>
            </div>
            <div class="wrapper">
                <div class="clock">
                    <div class="clock_days">
                        <div class="bgLayer">
                            <canvas id="canvas_days" width="122" height="122">
                                Your browser does not support the HTML5 canvas tag.
                            </canvas>
                            <p class="val">0</p>
                            <p class="type_days">Days</p>
                        </div>
                    </div>
                    <div class="clock_hours">
                        <div class="bgLayer">
                            <canvas id="canvas_hours" width="122" height="122">
                                Your browser does not support the HTML5 canvas tag.
                            </canvas>

                            <p class="val">0</p>
                            <p class="type_hours">Hours</p>
                        </div>
                    </div>
                    <div class="clock_minutes">
                        <div class="bgLayer">
                            <canvas id="canvas_minutes" width="122" height="122">
                                Your browser does not support the HTML5 canvas tag.
                            </canvas>
                            <div class="text">
                                <p class="val">0</p>
                                <p class="type_minutes">Minutes</p>
                            </div>
                        </div>
                    </div>
                    <div class="clock_seconds">
                        <div class="bgLayer">
                            <canvas id="canvas_seconds" width="122" height="122">
                                Your browser does not support the HTML5 canvas tag.
                            </canvas>
                            <p class="val">0</p>
                            <p class="type_seconds">Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

</body>
<?php
        echo $this->Html->script('jquery-1.8.0.min');
        echo $this->Html->script('jquery-ui-1.10.3.custom.min');
        echo $this->Html->script('jbclock.min');

 		
 		echo $this->fetch('script');
?>
<script type="text/javascript">
        $(document).ready(function(){
            JBCountDown({
                secondsColor : "#FFF",
                minutesColor : "#FFF",
                hoursColor   : "#FFF",
                daysColor    : "#FFF",

                startDate   : "<?php echo $startDate; ?>",
                endDate     : "<?php echo $endDate; ?>",
                now         : "<?php echo strtotime('now'); ?>",
                seconds     : "<?php echo date("s"); ?>"
            });
        });
    </script>
</html>

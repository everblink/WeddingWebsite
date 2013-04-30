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

		echo $this->Html->css('cake.wedding');
        echo $this->Html->css('jbclock');

        echo $this->Html->script('jquery-1.8.0.min');
        echo $this->Html->script('jbclock');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

        /* Set start and end dates here */
        $startDate  = strtotime("22 February 2013 12:00:00");
        $endDate    = strtotime("18 August 2013 12:00:00");
        /* /Set start and end dates here */
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
</head>
<body>
	<div id="container">
		<div id="sidebar">
            <?php
                echo $this->Html->link(
                    $this->Html->image('doublehappiness.png',
                        array('title' => 'Home', 'alt' => '')
                    ),
                    array('controller' => 'pages', 'action' => 'home'),
                    array('escape' => false));
            ?>
            <div class="image_wrapper">
                <div class="image">
                    <h2><span>WHERE & WHEN</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Where and When', 'alt' => ''),
                                                    array('onmouseover' => "Tip('Test');")
                                                ),
                                                array('controller' => 'pages', 'action' => 'home'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>RSVP</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'RSVP', 'alt' => '')
                                                ),
                                                array('controller' => 'rsvps', 'action' => 'add'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>BANQUET MENU</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Banquet Menu', 'alt' => '')
                                                ),
                                                array('controller' => 'menus', 'action' => 'index'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>DIRECTIONS</span></h2>
                        <?php
                            echo $this->Html->link(
                                        $this->Html->image('menu_default_twolines.png',
                                            array('title' => 'Directions', 'alt' => '')
                                        ),
                                        array('controller' => 'directions', 'action' => 'index'),
                                        array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>HOTELS</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Hotels', 'alt' => '')
                                                ),
                                                array('controller' => 'hotels', 'action' => 'index'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>REQUEST A SONG</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Request A Song', 'alt' => '')
                                                ),
                                                array('controller' => 'songs', 'action' => 'index'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>LEAVE US A NOTE</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Leave Us A Note', 'alt' => '')
                                                ),
                                                array('controller' => 'messages', 'action' => 'add'),
                                                array('escape' => false));
                        ?>
                </div>
                <div class="image">
                    <h2><span>GIFTS</span></h2>
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('menu_default_twolines.png',
                                                    array('title' => 'Gifts', 'alt' => '')
                                                ),
                                                array('controller' => 'gifts', 'action' => 'index'),
                                                array('escape' => false));
                        ?>
                </div>
            </div>
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
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

<html><head>
<title>Projecten</title>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Montserrat|Telex' rel='stylesheet' type='text/css'>
<style>
	a.button {
		font-size:30px;
		color:#000;
		text-decoration:none;
		font-family: 'Yanone Kaffeesatz', arial, serif;
		display:block;
		width:280px;
		height:80px;
		padding:10px;
		border:1px solid #EEE;
		text-align:center;

		margin: 10px 10px 10px 10px;

		background: #FFFFFF;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#BBB));
		background: -moz-linear-gradient(0% 90% 90deg, #BBB, #FFF);

		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-o-border-radius: 5px;
		border-radius: 5px;
	}
	a.button:hover {
		color: #222;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#AAA));
		background: -moz-linear-gradient(0% 90% 90deg, #AAA, #EEE);
	}
	.container {
		padding-top: 100px;
	}
	.outer-center {
		float: right;
		right: 50%;
		position: relative;
	}
	.inner-center {
		float: left;
		left: 50%;
		padding: 0px 30px 30px 30px;
		position: relative;
		background-color: #333;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-o-border-radius: 5px;
		border-radius: 5px;
	}
	.clear {
		clear: both;
	}
	.text {
		padding: 20px 0px 10px 20px;
	}
	.head {
		font
		color: #EEE;
		font-size: 2em;
		font-weight: bold;
		font-family: 'Telex', arial, serif;
		text-transform: uppercase;
	}
	.head a {
		text-decoration: none;
		color: #EEE;
		font-weight: bold;
		font-family: 'Telex', arial, serif;
		text-transform: uppercase;
	}
	.head a:hover {
		color: #CCC;
	}
	.small {
		color: #888;
		font-size: 14px;
		font-weight: bold;
		font-family: 'Telex', arial, serif;
		text-transform: uppercase;
	}
	.small a {
		text-decoration: none;
		color: #888;
		font-weight: bold;
		font-family: 'Telex', arial, serif;
		text-transform: uppercase;
	}
	.small a:hover {
		color: #4096EE;
	}

</style>
</head><body bgcolor="#DDD">

	<div class="container">
		<div class="outer-center">
			<div class="product inner-center">
				<div class="text">
					<div class="head"><a href="#">Projecten van</a></div>
					<div class="small"><a href="#">Nathan Burgerhout</a></div>
				</div>
				<table align="center">
				

				<?php

					// Vars
					$project_path = 'projecten/';

					if ($handle = opendir($project_path)) {

						/* loop. */
						$count = 0;
						while (false !== ($entry = readdir($handle))) {
							if ($count == 0) {
								echo '<tr>';
							}
							if ($entry != "." && $entry != "..") {
								echo '<td><a href="'.$project_path.''.$entry.'" class="button">'.$entry.'</a></td>';
								$count++;
							}
							if ($count == 3) {
								$count = 0; $reset = 1;
								echo '</td>';
							}
						}
						if ($count == 0 && $reset == 1) {
							echo '</td>';
						}
						closedir($handle);
					}
				?>

				</table>
			</div>
		</div>
		<div class="clear"></div>
	</div>

</body></html>
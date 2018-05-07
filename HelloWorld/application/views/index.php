<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--

                                                                                                                
        ,--,                                                                                                    
      ,--.'|            ,--,    ,--,                               .---.                     ,--,               
   ,--,  | :          ,--.'|  ,--.'|                              /. ./|                   ,--.'|         ,---, 
,---.'|  : '          |  | :  |  | :     ,---.                .--'.  ' ;   ,---.    __  ,-.|  | :       ,---.'| 
|   | : _' |          :  : '  :  : '    '   ,'\              /__./ \ : |  '   ,'\ ,' ,'/ /|:  : '       |   | : 
:   : |.'  |   ,---.  |  ' |  |  ' |   /   /   |         .--'.  '   \' . /   /   |'  | |' ||  ' |       |   | | 
|   ' '  ; :  /     \ '  | |  '  | |  .   ; ,. :        /___/ \ |    ' '.   ; ,. :|  |   ,''  | |     ,--.__| | 
'   |  .'. | /    /  ||  | :  |  | :  '   | |: :        ;   \  \;      :'   | |: :'  :  /  |  | :    /   ,'   | 
|   | :  | '.    ' / |'  : |__'  : |__'   | .; :         \   ;  `      |'   | .; :|  | '   '  : |__ .   '  /  | 
'   : |  : ;'   ;   /||  | '.'|  | '.'|   :    |          .   \    .\  ;|   :    |;  : |   |  | '.'|'   ; |:  | 
|   | '  ,/ '   |  / |;  :    ;  :    ;\   \  /            \   \   ' \ | \   \  / |  , ;   ;  :    ;|   | '/  ' 
;   : ;--'  |   :    ||  ,   /|  ,   /  `----'              :   '  |--"   `----'   ---'    |  ,   / |   :    :| 
|   ,/       \   \  /  ---`-'  ---`-'                        \   \ ;                        ---`-'   \   \  /   
'---'         `----'                                          '---"                                   `----'    
                                                                                                                

-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hello World</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
		<style type="text/css" media="screen">

body,
html {
	width: 100%;
	height: 100%;
	background: #2C3245;
}

img {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
}

.jumbotron {
	background: none;
	padding: 0;
	margin-top: 300px;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 2;
}

.jumbotron h1 {
	color: #fff;
	text-align: center;
	font-size: 128px;
	cursor: pointer;
	text-shadow: 3px 3px 2px #2C3245;
}

.jumbotron h2 {
	color: #fff;
	text-align: center;
	font-size: 36px;
	cursor: pointer;
	text-shadow: 3px 3px 2px #2C3245;
}

#file {
	display: none;
}

		</style>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1 data-toggle="modal" data-target="#myModal">Hello World</h1>
                <h2><?php echo 'PHP Version: ' . phpversion(); ?></h2>
                <h2><?php echo 'Host: ' . gethostname(); ?></h2>
			</div>
		</div>
		<?php echo $image;?>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Set Background</h4>
					</div>
					<?php echo form_open_multipart('helloworld/save');?> 
						<div class="modal-body">
							<label class="btn btn-default btn-file">
							    Browse&hellip; <input type="file" id="file" name="file" />
							</label>
						</div>
						<div class="modal-footer">
							<?php echo form_submit('mysubmit', 'Save', 'class="btn btn-primary"');?>
						</div>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">

$(document).ready(function() {

	

});

		</script>
	</body>
</html>

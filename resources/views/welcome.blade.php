<!DOCTYPE html>
<html>
<head>
	<title>{{ $name }}</title>
	<style>
		body{
			background: linear-gradient(90deg,#11485c,#2d738d);
		}
		h1,p {
		    left: 0;
		    line-height: 200px;
		    margin-top: -100px;
		    position: absolute;
		    text-align: center;
		    top: 50%;
		    width: 100%;
		    font-family: monospace;
    		color: #b8b8b8;
		}
		h1 > span{
		    background: #ffffff;
    		padding: 5px 15px;
    		border-radius: 4px;
		}
		p > span{
		    font-size: 19px;
		    color: #3188a8;
		}
		a, a:hover, a:focus{
			color: #fff;
			text-decoration: none;
			border-bottom: 1px solid #3188a8;
		}
	</style>
</head>
<body>
<h1>Welcome, <span>{{ $name }}_</span></h1>
<p style="margin-top: -65px;">Made with <span>&#10084;</span> by : <a href="http://github.com/munafio" target="_blank">{{ $madeBy }}</a></p>
</body>
</html>

<!--
Created By Daniyal Beg and Sheema Saleem
-->

<html>
	<head>
		<title>ECG</title>
		
<link href="css1/style3.css" rel="stylesheet" type="text/css"  media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="highcharts.js"></script>
<script src="highcharts-more.js"></script>
<script src="exporting.js"></script>
		 
	</head>
	<body>
	<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.php"><img src="images/logos.gif" title="logo"  width= "340px" height = "130px"/></a>
							</div>
	<br>
	<br>
		<br>
	<br>
		<br>
	<br>
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
				<div class="copy-tight">
				 <img src="images/footer.png" width="132" height="34" align="left"/>
				 		 <img src="images/iqra.png" width="132" height="34" align="right"/>
					<p>&copy; 2015 www.eHealth.com All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp; Powered by Iqra University,Karachi<p>
				</div>
				<!---End-copy-right----->
			</div>
		</div>
		<!---End-footer---->
		<script>

$(function () {
    $(document).ready(function () {
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        $('#container').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.random();
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            title: {
                text: 'Patients ECG'

            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 300
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Random data',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -25; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: Math.random()
                        });
                    }
                    return data;
                }())
            }]
        });
    });
});
 </script>
	</body>
</html>

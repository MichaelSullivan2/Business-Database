<?php
    include 'dbTest1.php';
?>


<html>

<head>
    <style>
        #map {
            height: 300px;
            width: 100%;
        }
        body {
            background-color:  #f3f3f3; 
        }
    
     td 
    {
    text-align: center; 
    vertical-align: middle;
    background-color: #fff;
    
    }
    table {
        border: 1px solid black;
        display: inline-block;
    }
    </style>
    </head>
    <body>
        <h2>Retailer Distribution:</h2>
        <div id='map'>

        </div>

        <script>
            function initMap() {
                
                var location = {lat: 46.876961, lng: -96.784637};
                var	map1	=	{	lat:	41.8632851	,	lng:	20.9095433	}	;
var	map2	=	{	lat:	-8.845	,	lng:	121.6718	}	;
var	map3	=	{	lat:	14.4980456	,	lng:	100.4424658	}	;
var	map4	=	{	lat:	18.9331158	,	lng:	-70.4059336	}	;
var	map5	=	{	lat:	15.9156421	,	lng:	2.396174	}	;
var	map6	=	{	lat:	-5.2368931	,	lng:	-75.6557206	}	;
var	map7	=	{	lat:	-22.817412	,	lng:	47.818038	}	;
var	map8	=	{	lat:	19.4621825	,	lng:	-99.110685	}	;
var	map9	=	{	lat:	59.9336282	,	lng:	30.6609232	}	;
var	map10	=	{	lat:	49.1571976	,	lng:	-123.1152602	}	;
var	map11	=	{	lat:	19.4614133	,	lng:	-99.1186381	}	;
var	map12	=	{	lat:	34.8813447	,	lng:	33.5895956	}	;
var	map13	=	{	lat:	-6.4837208	,	lng:	106.8413372	}	;
var	map14	=	{	lat:	23.027797	,	lng:	114.950182	}	;
var	map15	=	{	lat:	32.9943312	,	lng:	50.4113423	}	;
var	map16	=	{	lat:	55.6833424	,	lng:	12.5616448	}	;
var	map17	=	{	lat:	53.6972399	,	lng:	-7.606287	}	;
var	map18	=	{	lat:	36.2569423	,	lng:	139.381182	}	;
var	map19	=	{	lat:	47.185098	,	lng:	127.287077	}	;
var	map20	=	{	lat:	24.3158024	,	lng:	109.3826264	}	;
var	map21	=	{	lat:	43.4945737	,	lng:	5.8978018	}	;
var	map22	=	{	lat:	38.9	,	lng:	-77.04	}	;
var	map23	=	{	lat:	22.994717	,	lng:	113.608903	}	;
var	map24	=	{	lat:	25.386379	,	lng:	114.922922	}	;
var	map25	=	{	lat:	21.3873563	,	lng:	106.1270717	}	;
var	map26	=	{	lat:	9.3218872	,	lng:	41.4462559	}	;
var	map27	=	{	lat:	36.7821	,	lng:	117.032171	}	;
var	map28	=	{	lat:	32.34977	,	lng:	-80.67895	}	;
var	map29	=	{	lat:	16.503112	,	lng:	107.3375791	}	;
var	map30	=	{	lat:	-13.5338933	,	lng:	-75.314433	}	;
var	map31	=	{	lat:	49.4705944	,	lng:	20.1323725	}	;
var	map32	=	{	lat:	48.6514469	,	lng:	14.4161297	}	;
var	map33	=	{	lat:	17.4161103	,	lng:	99.7790227	}	;
var	map34	=	{	lat:	-10.5219124	,	lng:	-38.9066439	}	;
var	map35	=	{	lat:	23.7247599	,	lng:	108.8076195	}	;
var	map36	=	{	lat:	30.9541295	,	lng:	20.1194129	}	;
var	map37	=	{	lat:	38.042805	,	lng:	114.514893	}	;
var	map38	=	{	lat:	46.1705063	,	lng:	1.8852108	}	;
var	map39	=	{	lat:	32.687733	,	lng:	112.087455	}	;
var	map40	=	{	lat:	40.3802589	,	lng:	50.0918078	}	;
var	map41	=	{	lat:	49.4928119	,	lng:	-117.2948343	}	;
var	map42	=	{	lat:	33.08038	,	lng:	104.64117	}	;
var	map43	=	{	lat:	28.0003221	,	lng:	-82.5889012	}	;
var	map44	=	{	lat:	35.8561719	,	lng:	129.2247477	}	;
var	map45	=	{	lat:	42.280524	,	lng:	118.928688	}	;
var	map46	=	{	lat:	57.5334964	,	lng:	15.9897014	}	;
var	map47	=	{	lat:	35.5383773	,	lng:	129.3113596	}	;
var	map48	=	{	lat:	65.2012319	,	lng:	25.5341339	}	;
var	map49	=	{	lat:	39.9658255	,	lng:	-0.0419877	}	;
var	map50	=	{	lat:	-6.9818839	,	lng:	110.447063	}	;
var	map51	=	{	lat:	25.606486	,	lng:	100.267638	}	;
var	map52	=	{	lat:	19.3387759	,	lng:	-99.1497466	}	;
var	map53	=	{	lat:	34.292397	,	lng:	119.707591	}	;
var	map54	=	{	lat:	1.574278	,	lng:	30.2397336	}	;
var	map55	=	{	lat:	-8.7918	,	lng:	121.5904	}	;
var	map56	=	{	lat:	13.794468	,	lng:	100.327706	}	;
var	map57	=	{	lat:	59.3283422	,	lng:	14.4819447	}	;
var	map58	=	{	lat:	40.7388893	,	lng:	43.9061272	}	;
var	map59	=	{	lat:	50.994689	,	lng:	-0.964804	}	;
var	map60	=	{	lat:	43.9332185	,	lng:	-78.8439268	}	;
var	map61	=	{	lat:	16.1344075	,	lng:	102.2090224	}	;
var	map62	=	{	lat:	23.081903	,	lng:	113.274566	}	;
var	map63	=	{	lat:	44.76324	,	lng:	17.19012	}	;
var	map64	=	{	lat:	31.7975831	,	lng:	14.053676	}	;
var	map65	=	{	lat:	37.615159	,	lng:	114.611433	}	;
var	map66	=	{	lat:	30.169665	,	lng:	121.266579	}	;
var	map67	=	{	lat:	38.9693412	,	lng:	-9.1822048	}	;
var	map68	=	{	lat:	59.9149479	,	lng:	10.7362308	}	;
var	map69	=	{	lat:	27.7772091	,	lng:	-97.4435441	}	;
var	map70	=	{	lat:	10.3036144	,	lng:	-65.9958004	}	;
var	map71	=	{	lat:	40.6335639	,	lng:	20.5885853	}	;
var	map72	=	{	lat:	6.4361438	,	lng:	122.0324423	}	;
var	map73	=	{	lat:	27.171521	,	lng:	119.227978	}	;
var	map74	=	{	lat:	-20.9211015	,	lng:	-64.7480995	}	;
var	map75	=	{	lat:	-30.1090924	,	lng:	-51.3238273	}	;

                var a = {lat: -33.282940, lng: -71.382060};
                var q = {lat: 48.084030, lng: 7.295600};
                var w = {lat: -33.095040, lng: -68.926370};
                var e = {lat: -38.394720, lng: 144.994120};
                var r = {lat: 48.473440, lng: 15.664470 };
                var t = {lat: 44.719300, lng: -0.632200};
                var y = {lat: 47.775970, lng: 3.755090};
                var u = {lat: 38.585490, lng: -122.553830};
                var i = {lat: 49.605540, lng: 6.543260};
                var o = {lat: 36.418180, lng: 25.431150};
                var p = {lat: 44.715580, lng: 8.783720};
                var n = {lat: 46.902830, lng: 5.772530};
                var s = {lat: 42.478940, lng: 3.126400};
                var d = {lat: 47.412048, lng: 0.807320};
                var f = {lat: 38.337292, lng: -122.352013};
                var g = {lat: -41.544170, lng: 173.821830};
                var h = {lat: 46.404210, lng: 11.236820};
                var j = {lat: 45.213920, lng: -123.187390};
                var k = {lat: 41.217530, lng: -8.282190};
                var l = {lat: -34.420770, lng: 19.241700};
                var z = {lat: 38.064070, lng: 13.536820};
                var x = {lat: 38.739150, lng: -8.076850};
                var c = {lat: 44.081330, lng: 4.881140};
                var v = {lat: 42.500280, lng: -8.772840};
                var b = {lat: 47.364240, lng: 2.813670};

                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: location
                });
                
                var marker = new google.maps.Marker({
                    position: a,
                    map: map
                })
                var marker1 = new google.maps.Marker({
                    position: q,
                    map: map
                })
                var marker2 = new google.maps.Marker({
                    position: w,
                    map: map
                })
                var marker3 = new google.maps.Marker({
                    position: e,
                    map: map
                })
                var marker4 = new google.maps.Marker({
                    position: r,
                    map: map
                })
                var marker5 = new google.maps.Marker({
                    position: t,
                    map: map
                })
                var marker6 = new google.maps.Marker({
                    position: y,
                    map: map
                })
                var marker7 = new google.maps.Marker({
                    position: u,
                    map: map
                })
                var marker8 = new google.maps.Marker({
                    position: i,
                    map: map
                })
                var marker9 = new google.maps.Marker({
                    position: o,
                    map: map
                })
                var marker10 = new google.maps.Marker({
                    position: p,
                    map: map
                })
                var marker11 = new google.maps.Marker({
                    position: s,
                    map: map
                })
                var marker12 = new google.maps.Marker({
                    position: d,
                    map: map
                })
                var marker13 = new google.maps.Marker({
                    position: f,
                    map: map
                })
                var marker14 = new google.maps.Marker({
                    position: g,
                    map: map
                })
                var marker15 = new google.maps.Marker({
                    position: h,
                    map: map
                })
                var marker16 = new google.maps.Marker({
                    position: j,
                    map: map
                })
                var marker17 = new google.maps.Marker({
                    position: k,
                    map: map
                })
                var marker18 = new google.maps.Marker({
                    position: l,
                    map: map
                })
                var marker19 = new google.maps.Marker({
                    position: z,
                    map: map
                })
                var marker21 = new google.maps.Marker({
                    position: x,
                    map: map
                })
                var marker22 = new google.maps.Marker({
                    position: c,
                    map: map
                })
                var marker23 = new google.maps.Marker({
                    position: v,
                    map: map
                })
                var marker24 = new google.maps.Marker({
                    position: b,
                    map: map
                })
                var marker25 = new google.maps.Marker({
                    position: n,
                    map: map
                })
                var	marker26	=	new	google.maps.Marker({			position:	map26	,	map: map	})
var	marker27	=	new	google.maps.Marker({			position:	map27	,	map: map	})
var	marker28	=	new	google.maps.Marker({			position:	map28	,	map: map	})
var	marker29	=	new	google.maps.Marker({			position:	map29	,	map: map	})
var	marker30	=	new	google.maps.Marker({			position:	map30	,	map: map	})
var	marker31	=	new	google.maps.Marker({			position:	map31	,	map: map	})
var	marker32	=	new	google.maps.Marker({			position:	map32	,	map: map	})
var	marker33	=	new	google.maps.Marker({			position:	map33	,	map: map	})
var	marker34	=	new	google.maps.Marker({			position:	map34	,	map: map	})
var	marker35	=	new	google.maps.Marker({			position:	map35	,	map: map	})
var	marker36	=	new	google.maps.Marker({			position:	map36	,	map: map	})
var	marker37	=	new	google.maps.Marker({			position:	map37	,	map: map	})
var	marker38	=	new	google.maps.Marker({			position:	map38	,	map: map	})
var	marker39	=	new	google.maps.Marker({			position:	map39	,	map: map	})
var	marker40	=	new	google.maps.Marker({			position:	map40	,	map: map	})
var	marker41	=	new	google.maps.Marker({			position:	map41	,	map: map	})
var	marker42	=	new	google.maps.Marker({			position:	map42	,	map: map	})
var	marker43	=	new	google.maps.Marker({			position:	map43	,	map: map	})
var	marker44	=	new	google.maps.Marker({			position:	map44	,	map: map	})
var	marker45	=	new	google.maps.Marker({			position:	map45	,	map: map	})
var	marker46	=	new	google.maps.Marker({			position:	map46	,	map: map	})
var	marker47	=	new	google.maps.Marker({			position:	map47	,	map: map	})
var	marker48	=	new	google.maps.Marker({			position:	map48	,	map: map	})
var	marker49	=	new	google.maps.Marker({			position:	map49	,	map: map	})
var	marker50	=	new	google.maps.Marker({			position:	map50	,	map: map	})
var	marker51	=	new	google.maps.Marker({			position:	map51	,	map: map	})
var	marker52	=	new	google.maps.Marker({			position:	map52	,	map: map	})
var	marker53	=	new	google.maps.Marker({			position:	map53	,	map: map	})
var	marker54	=	new	google.maps.Marker({			position:	map54	,	map: map	})
var	marker55	=	new	google.maps.Marker({			position:	map55	,	map: map	})
var	marker56	=	new	google.maps.Marker({			position:	map56	,	map: map	})
var	marker57	=	new	google.maps.Marker({			position:	map57	,	map: map	})
var	marker58	=	new	google.maps.Marker({			position:	map58	,	map: map	})
var	marker59	=	new	google.maps.Marker({			position:	map59	,	map: map	})
var	marker60	=	new	google.maps.Marker({			position:	map60	,	map: map	})
var	marker61	=	new	google.maps.Marker({			position:	map61	,	map: map	})
var	marker62	=	new	google.maps.Marker({			position:	map62	,	map: map	})
var	marker63	=	new	google.maps.Marker({			position:	map63	,	map: map	})
var	marker64	=	new	google.maps.Marker({			position:	map64	,	map: map	})
var	marker65	=	new	google.maps.Marker({			position:	map65	,	map: map	})
var	marker66	=	new	google.maps.Marker({			position:	map66	,	map: map	})
var	marker67	=	new	google.maps.Marker({			position:	map67	,	map: map	})
var	marker68	=	new	google.maps.Marker({			position:	map68	,	map: map	})
var	marker69	=	new	google.maps.Marker({			position:	map69	,	map: map	})
var	marker70	=	new	google.maps.Marker({			position:	map70	,	map: map	})
var	marker71	=	new	google.maps.Marker({			position:	map71	,	map: map	})
var	marker72	=	new	google.maps.Marker({			position:	map72	,	map: map	})
var	marker73	=	new	google.maps.Marker({			position:	map73	,	map: map	})
var	marker74	=	new	google.maps.Marker({			position:	map74	,	map: map	})
var	marker75	=	new	google.maps.Marker({			position:	map75	,	map: map	})
var	marker76	=	new	google.maps.Marker({			position:	map76	,	map: map	})
var	marker77	=	new	google.maps.Marker({			position:	map77	,	map: map	})
var	marker78	=	new	google.maps.Marker({			position:	map78	,	map: map	})
var	marker79	=	new	google.maps.Marker({			position:	map79	,	map: map	})
var	marker80	=	new	google.maps.Marker({			position:	map80	,	map: map	})
var	marker81	=	new	google.maps.Marker({			position:	map81	,	map: map	})
var	marker82	=	new	google.maps.Marker({			position:	map82	,	map: map	})
var	marker83	=	new	google.maps.Marker({			position:	map83	,	map: map	})
var	marker84	=	new	google.maps.Marker({			position:	map84	,	map: map	})
var	marker85	=	new	google.maps.Marker({			position:	map85	,	map: map	})
var	marker86	=	new	google.maps.Marker({			position:	map86	,	map: map	})
var	marker87	=	new	google.maps.Marker({			position:	map87	,	map: map	})
var	marker88	=	new	google.maps.Marker({			position:	map88	,	map: map	})
var	marker89	=	new	google.maps.Marker({			position:	map89	,	map: map	})
var	marker90	=	new	google.maps.Marker({			position:	map90	,	map: map	})
var	marker91	=	new	google.maps.Marker({			position:	map91	,	map: map	})
var	marker92	=	new	google.maps.Marker({			position:	map92	,	map: map	})
var	marker93	=	new	google.maps.Marker({			position:	map93	,	map: map	})
var	marker94	=	new	google.maps.Marker({			position:	map94	,	map: map	})
var	marker95	=	new	google.maps.Marker({			position:	map95	,	map: map	})
var	marker96	=	new	google.maps.Marker({			position:	map96	,	map: map	})
var	marker97	=	new	google.maps.Marker({			position:	map97	,	map: map	})
var	marker98	=	new	google.maps.Marker({			position:	map98	,	map: map	})
var	marker99	=	new	google.maps.Marker({			position:	map99	,	map: map	})
var	marker100	=	new	google.maps.Marker({			position:	map100	,	map: map	})


            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl31IhW85NiaWshC459sPIijgooI7kvgE&callback=initMap">

        </script>
    </body>
    
    <p>Search Database</p>
<form action="Psearch.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>

<h1> Business Search Engine </h1>
<h2> All Employees: </h2>

<table cellspacing="0" cellpadding="1" border="1" width="900">
    <tr>
        <td>
        <table cellspacing="0" cellpadding="1" border="1" width="900" >
        <tr style="background-color:grey;color:white">
        <th width="150">Number</th>
        <th width="150">Birth Date</th>
        <th width="150">First Name</th>
        <th width="150">Last Name</th>
        <th width="150">Gender</th>
        <th width="150">Hire Date</th>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
        <td>

    <?php
    $sql = "Select * from employees";
    $result = pg_query($db, $sql);
    $queryResults = pg_num_rows($result);
    ?>
    
    <div style="width:900px; height:300px; overflow:auto;">
    
    <table cellspacing="0" cellpadding="0" border="1" width="900">
    <tr colspan= "6" style="background-color:green;text-align: center; vertical-align: middle">
    
     <?php while($row = pg_fetch_array($result)):?>
       
        <tr>
        
        <td  width="150"><?php echo $row['emp_no'];?></td>
        <td width="150"><?php echo $row['birth_date'];?></td>
        <td width="150"><?php echo $row['first_name'];?></td>
        <td width="150"><?php echo $row['last_name'];?></td>
        <td width="150"><?php echo $row['gender'];?></td>
        <td width="150"><?php echo $row['hire_date'];?></td>
        </tr>
     
        <?php endwhile;?>

</table>

     
    </td>
  </tr>
</table>
<h2>Cost Analysis of Company:</h2> 

<a href="http://students.cs.ndsu.nodak.edu/~michasul/DashEmp.html" target="_blank">Link to Employee Report</a> 
<?php echo "<br>"; ?>
<a href="http://students.cs.ndsu.nodak.edu/~michasul/DashComp.html" target="_blank">Link to Project Report</a> 

</form>
</body>

</html>
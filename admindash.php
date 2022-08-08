<?php
$con = mysqli_connect('localhost','root','','capstone2');

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND  student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND  student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT equipment.equip_name AS equip_name,
					subject.sub_code AS ccode,
					request.date AS date,
					request.stat AS stat,
					semester.sem AS sem,
					student.id_number as uid,
					semester.sy AS sy
					FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
					INNER JOIN semester ON semester.sem_id = request.sem_id 
					INNER JOIN equipment ON equipment.equip_id = request.equip_id
					INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis2 = mysqli_num_rows($qry);


$dataPoints = array(
	array("label"=>"BSIT", "y"=>$bsit),
    array("label"=>"BSCS", "y"=>$bscs),
    array("label"=>"BSIS", "y"=>$bsis),
    array("label"=>"MMA", "y"=>$mma),
    array("label"=>"BLIS", "y"=>$blis),
)


?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRATOR</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/admin.css"/>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row">
			
			<div class="col-md-2 display-table-cell valign-top" id="side-menu">
				<h1 class="hidden-sm hidden-xs">Admin<span>Panel</span></h1>
				<ul>
					<li class="link active">
						<a href="admindash.php">
						<span class="fa fa-dashboard" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Dashboard</span>
						</a>
					</li>
					
					<li class="link">
						<a href="admin.php" data-toggle="collapse" aria-controls="college">
						<span class="fa fa-users" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Students</span>
						</a>
						<ul class="collapse collapseable" id="college">
							<li><a href="#">CCS</a></li>
							<li><a href="#">CBA</a></li>
							<li><a href="#">CAS</a></li>
							<li><a href="#">CHS</a></li>
							<li><a href="#">CEN</a></li>
							<li><a href="#">CED</a></li>
						</ul>
					</li>
					<li class="link">
						<a href="admin_bor.php" data-toggle="collapse" aria-controls="events">
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Borrowing</span>
						</a>
						<ul class="collapse collapseable" id="events">
							<li><a href="#">Sports</a></li>
							<li><a href="#">Academic</a></li>
							<li><a href="#">Socio-Cultural</a></li>
							<li><a href="#">Pageant</a></li>
							<li><a href="#">Pinoygames</a></li>
						</ul>
					</li>
					<li class="link">
						<a href="admin_sub.php">
						<span class="fa fa-book" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Subjects</span>
						</a>
					</li>
                    <li class="link">
						<a href="faculty.php" data-toggle="collapse" aria-controls="college">
						<span class="fa fa-users" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Faculty</span>
						</a>
						<ul class="collapse collapseable" id="college">
							<li><a href="#">CCS</a></li>
							<li><a href="#">CBA</a></li>
							<li><a href="#">CAS</a></li>
							<li><a href="#">CHS</a></li>
							<li><a href="#">CEN</a></li>
							<li><a href="#">CED</a></li>
						</ul>
                        </li>
                        <li class="link">
						<a href="equipment.php" data-toggle="collapse" aria-controls="events">
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Equipments</span>
						</a>
						<ul class="collapse collapseable" id="events">
							<li><a href="#">Sports</a></li>
							<li><a href="#">Academic</a></li>
							<li><a href="#">Socio-Cultural</a></li>
							<li><a href="#">Pageant</a></li>
							<li><a href="#">Pinoygames</a></li>
						</ul>
					</li>
					<li class="link"> 	
						<a href="stat.php">
						<span class="fa fa-puzzle-piece" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Statistical Report</span>
						</a>
					</li>
				</ul>
			</div>
			
			<div class="col-md-10 display-table-cell valign-top box">
				<div class="row">
					<header id="nav-header" class="clearfix">
						<div class="col-md-5 search">
							<a href="">DASHBOARD</a>
						</div>
						<div class="col-md-7">
							<ul class="pull-right">
								<li class="welcome hidden-sm hidden-xs"><strong>Welcome to Administration Area</strong></li>
								<li>
									<a href="#"><span class="fa fa-envelope" aria-hidden="true"></span>
									<span class="label label-warning">0</span></a>
								</li>
								<li>
								<a href="logout.php" class="logout">
								<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
								Logout</a>
								</li>
							</ul>
						</div>
					</header>
				</div>

				<div id="dashboard-con">
					<div class="row">
						<div class="col-md-6 dashboard-left-cell">
							<div class="admin-content-con">
							<header class="clearfix">
							<h5>Statistical Report</h5>
								</header>
								<table class="table table-striped">
                                <table align="center" class='table table-striped'   style="text-align:center;" border='1'>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div> 

<table class='table table-striped'  style="text-align:center;" border='2'>
 <thead>
  
</thead>
<tbody>
    <tr>
        <th id="par" class="span" colspan="6" scope="colgroup"  style="text-align:center;">
            Summary of Laboratory Facilities Utilization
        </th>
    </tr>
    <tr>
        <th id="sy" class="span" colspan="6" scope="colgroup"  style="text-align:center;">
           SY 2018-2019
        </th>
    </tr>
    <tr>
        <th headers="par" id="pbed1">
         
        </th>
        <td headers="par pbed1 stud">
            BSIT
        </td>
        <td headers="par pbed1 apt">
            BSIS
        </td>
        <td headers="par pbed1 chal">
            BSCS
        </td>
        <td headers="par pbed1 chal">
            MMA
        </td>
        <td headers="par pbed1 chal">
            BLIS
        </td>

    </tr>
    <tr>
    <th headers="par" id="pbed2">
           Open Laboratory
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit1?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis1?>
        </td>

    </tr>
    <tr>
        <th headers="par" id="pbed3">
           IT & Network Laboratory
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis?>
        </td>

    </tr>

    <tr>
        <th id="rbed1" headers="rome">
          Printers
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit2?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis2?>
        </td>


    </tr>

</tbody>

</table>
								</table>
								<footer>
									<a href="stat.php" class="pull-right text-link"><span class="fa fa-folder-open"></span> View all Details</a>
								</footer>
								
							</div>
						</div>
						
						<div class="col-md-6 dashboard-right-cell">
							<div class="admin-content-con">
							<header class="clearfix">
							<h5>Calendar</h5>
								</header>
							<?php
//http://keithdevens.com/software/php_calendar
$time = time();
$today = date('j', $time);
$days = array($today => array(null, null,'<div id="today">' . $today . '</div>'));
$pn = array('&laquo;' => date('n', $time) - 1, '&raquo;' => date('n', $time) + 1);
echo generate_calendar(date('Y', $time), date('n', $time), $days, 1, null, 0);

// PHP Calendar (version 2 . 3), written by Keith Devens
// http://keithdevens . com/software/php_calendar
//  see example at http://keithdevens . com/weblog
// License: http://keithdevens . com/software/license

function generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array())
{
    $first_of_month = gmmktime(0, 0, 0, $month, 1, $year);
    // remember that mktime will automatically correct if invalid dates are entered
    // for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
    // this provides a built in "rounding" feature to generate_calendar()

    $day_names = array(); //generate all the day names according to the current locale
    for ($n = 0, $t = (3 + $first_day) * 86400; $n < 7; $n++, $t+=86400) //January 4, 1970 was a Sunday
        $day_names[$n] = ucfirst(gmstrftime('%A', $t)); //%A means full textual day name

    list($month, $year, $month_name, $weekday) = explode(',', gmstrftime('%m, %Y, %B, %w', $first_of_month));
    $weekday = ($weekday + 7 - $first_day) % 7; //adjust for $first_day
    $title   = htmlentities(ucfirst($month_name)) . $year;  //note that some locales don't capitalize month and day names

    //Begin calendar .  Uses a real <caption> .  See http://diveintomark . org/archives/2002/07/03
    @list($p, $pl) = each($pn); @list($n, $nl) = each($pn); //previous and next links, if applicable
    if($p) $p = '<span class="calendar-prev">' . ($pl ? '<a href="' . htmlspecialchars($pl) . '">' . $p . '</a>' : $p) . '</span>&nbsp;';
    if($n) $n = '&nbsp;<span class="calendar-next">' . ($nl ? '<a href="' . htmlspecialchars($nl) . '">' . $n . '</a>' : $n) . '</span>';
    $calendar = "<div class=\"mini_calendar\">\n<table width='300'>" . "\n" . 
        '<caption class="calendar-month">' . $p . ($month_href ? '<a href="' . htmlspecialchars($month_href) . '">' . $title . '</a>' : $title) . $n . "</caption>\n<tr>";

    if($day_name_length)
    {   //if the day names should be shown ($day_name_length > 0)
        //if day_name_length is >3, the full name of the day will be printed
        foreach($day_names as $d)
            $calendar  .= '<th abbr="' . htmlentities($d) . '">' . htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d) . '</th>';
        $calendar  .= "</tr>\n<tr>";
    }

    if($weekday > 0) 
    {
        for ($i = 0; $i < $weekday; $i++) 
        {
            $calendar  .= '<td>&nbsp;</td>'; //initial 'empty' days
        }
    }
    for($day = 1, $days_in_month = gmdate('t',$first_of_month); $day <= $days_in_month; $day++, $weekday++)
    {
        if($weekday == 7)
        {
            $weekday   = 0; //start a new week
            $calendar  .= "</tr>\n<tr>";
        }
        if(isset($days[$day]) and is_array($days[$day]))
        {
            @list($link, $classes, $content) = $days[$day];
            if(is_null($content))  $content  = $day;
            $calendar  .= '<td' . ($classes ? ' class="' . htmlspecialchars($classes) . '">' : '>') . 
                ($link ? '<a href="' . htmlspecialchars($link) . '">' . $content . '</a>' : $content) . '</td>';
        }
        else $calendar  .= "<td>$day</td>";
    }
    if($weekday != 7) $calendar  .= '<td id="emptydays" colspan="' . (7-$weekday) . '">&nbsp;</td>'; //remaining "empty" days

    return $calendar . "</tr>\n</table>\n</div>\n";
}
?>
<br>
<br>
								<header class="clearfix">
								<h5>Admin Borrowing Transaction</h5>
								</header>
								<?php
    $not = "Not Approved";
  
          $con = mysqli_connect('localhost','root','','capstone2');
		$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
		subject.sub_code AS ccode,
		request.date AS date,
		request.stat AS stat,
		semester.sem AS sem,
		student.id_number as uid,
		semester.sy AS sy
		FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
		INNER JOIN semester ON semester.sem_id = request.sem_id 
		INNER JOIN equipment ON equipment.equip_id = request.equip_id
		INNER JOIN student ON student.user_id = request.user_id
		WHERE stat = 'pending' LIMIT 5")or die(mysqli_error($con));

        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){ ?>
            <table width="582" border='2'>
			<thead>
				<th style='text-align: center;'> Student Number</th>
                <th style='text-align: center;'> Equipment Name</th>
                <th style='text-align: center;'> Class Code</th>
                <th style='text-align: center;'> Request Date</th>
                <th style='text-align: center;'> Semester</th>
                <th style='text-align: center;'> School Year</th>
                <th style='text-align: center;'> Status</th>
            </thead>
    <?php   while($row = mysqli_fetch_array($qry)){  ?>
		<tbody>
                    <tr>
                   	    <td><?php echo $row['uid'] ?></td>
                        <td><?php echo $row['equip_name'] ?></td>
                        <td><?php echo $row['ccode'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['sem']?></td>
                        <td><?php echo $row['sy']?></td>
                        <td><?php echo $row['stat']?></td>
                    </tr>
         </tbody>
    <?php   }
        } 
        else {
                echo "NO DATA";
        }                        
?>
</tbody>

</table>
<footer>
									<a href="admin_bor.php" class="pull-right text-link"><span class="fa fa-folder-open"></span> 	View all Details</a>
								</footer>

							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Admin Student Information</h5>
									
								</header>
								<table class='table table-bordered' border='1'>
        <thead>
      			  <th style='text-align: center;'> ID NUMBER</th>
                    <th style='text-align: center;'> GENDER</th>
                    <th style='text-align: center;'> FIRSTNAME</th>
                    <th style='text-align: center;'> MIDDLENAME</th>
                    <th style='text-align: center;'> LASTNAME</th>
                    <th style='text-align: center;'> COURSE</th>
                    <th style='text-align: center;'> YEAR</th>
                    <th style='text-align: center;'> SEMESTER</th>
                    <th style='text-align: center;'> S/Y</th>
        </thead>
        <?php
       $con = mysqli_connect('localhost','root','','capstone2');
        $qry = mysqli_query($con, "SELECT student.stud_id as stud_id,
                            student.id_number AS id,
                            user.user_type AS type,    
                            student.user_id AS userid,
                            student.gender AS gender,
                            student.fname AS fname,
                            student.mname AS mname,
                            student.lname AS lname,
                            student.crs AS crs,
                            student.year AS yr,
                            semester.sem AS sem,
                            semester.sy AS sy
						FROM user INNER JOIN student ON student.user_id = user.user_id
								  INNER JOIN semester ON student.sem_id = semester.sem_id LIMIT 5")or die(mysqli_error($con));
        $num_row = mysqli_num_rows($qry);
        if ($num_row > 0){
            while($row = mysqli_fetch_array($qry)){
				echo "<tbody>";
                echo "<tr>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "<td>".$row[8]."</td>";
                echo "<td>".$row[9]."</td>";
                echo "<td>".$row[10]."</td>";
                echo "<td>".$row[11]."</td>";
                echo "</tr>";
				echo "</tbody>";
        }
    }
        ?>
								</table>
								<footer>
									<a href="admin.php" class="pull-right text-link"><span class="fa fa-folder-open"></span> View all Details</a>
								</footer>
							</div>
						</div>
					</div>
				</div>

				<!--footer-->
				<div class="row hidden-sm hidden-xs">
					<footer id="footer">
						Administration Panel <b>Copyright</b> &copy; 2018</div>
					</footer>
				</div>
			</div>	
		</div>
	</div>
</body>

<script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "IT & Network Laboratory Usage"
	},
	subtitles: [{
		text: "School Year: 2018 - 2019"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

</html>	
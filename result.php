<!DOCTYPE HTML>
<html>
<head>
    <title>Belt conveyor design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

<?php
// form data variables
$discharge = $_POST['discharge'];
$lump_size = $_POST['lump_size'];
$type_of_lump = $_POST['type_of_lump'];
$type_of_material = $_POST['type_of_material'];
$bulk_density = $_POST['bulk_density'];
$fill_factor = $_POST['fill_factor'];
$type_of_belt = $_POST['type_of_belt'];
$troughing_angle = $_POST['troughing_angle'];
$avg_inclin = $_POST['avg_inclin'];
$no_of_section = $_POST['no_of_section'];
$length[1] = $_POST['length1'];
$length[2] = $_POST['length2'];
$length[3] = $_POST['length3'];
$length[4] = $_POST['length4'];
$length[5] = $_POST['length5'];
$length[6] = $_POST['length6'];
$length[7] = $_POST['length7'];
$length[8] = $_POST['length8'];
$length[9] = $_POST['length9'];
$length[10] = $_POST['length10'];
$total_length = $length[1]+$length[2]+$length[3]+$length[4]+$length[5]+$length[6]+$length[7]+$length[8]+$length[9]+$length[10];
$angle[1] = $_POST['angle1'];
$angle[2] = $_POST['angle2'];
$angle[3] = $_POST['angle3'];
$angle[4] = $_POST['angle4'];
$angle[5] = $_POST['angle5'];
$angle[6] = $_POST['angle6'];
$angle[7] = $_POST['angle7'];
$angle[8] = $_POST['angle8'];
$angle[9] = $_POST['angle9'];
$angle[10] = $_POST['angle10'];
$types_of_belt = $_POST['types_of_belt'];
$friction_idler_belt = $_POST['friction_idler_belt'];
$friction_coeff = $_POST['friction_coeff'];
$lap_angle = $_POST['lap_angle'];
$poles_motor = $_POST['poles_motor'];
$combined_efficiency = $_POST['combined_efficiency'];


// width calc
if ($type_of_lump == "unsized")
{
    $width = 2 * $lump_size + 200;
}
elseif ($type_of_lump == "sized")
{
    $width = 3.3 * $lump_size + 200;
}
$width = (round($width/100))* 100;

// speed calc
//bulk density & angle of repose
if($type_of_material == 'lumpy_coal' )
{
  $bulk_density = 1.3; $repose_angle = 30;
}
elseif($type_of_material == 'rock_and_stone_chips' )
{
    $bulk_density = 2.2; $repose_angle = 28;
}
elseif($type_of_material == 'dry_sand' )
{
    $bulk_density = 2; $repose_angle = 22;
}
elseif($type_of_material == 'wet_sand' )
{
    $bulk_density = 3; $repose_angle = 32;
}
elseif($type_of_material == 'others' )
{
    $repose_angle = 30;
}
//angle & area
$troughing_angle = $troughing_angle*3.1415/180;
$repose_angle = $repose_angle*3.1415/180;

if($type_of_belt == 'troughed')
{
    $area = 0.04*($width*$width)*((1+cos($troughing_angle)*(1+cos($troughing_angle)*tan($repose_angle)))+((2+cos($troughing_angle))*sin($troughing_angle)))/1000000;
}
elseif($type_of_belt == 'flat_belt')
{
    $area = (0.16*$width*$width*tan($repose_angle))/1000000;
}
//slipping factor
if($avg_inclin<=-10)
{
   $k=1.04;
}
else if($avg_inclin<=-5)
{
    $k=1.02;
}
else if($avg_inclin<=2)
{
    $k=1;
}
else if($avg_inclin<=4)
{
    $k=0.99;
}
else if($avg_inclin<=8)
{
    $k=0.97;
}
else if($avg_inclin<=10)
{
    $k=0.95;
}
else if($avg_inclin<=12)
{
    $k=0.93;
}
else if($avg_inclin<=14)
{
    $k=0.91;
}
else if($avg_inclin<=16)
{
    $k=89;
}
else if($avg_inclin<=18)
{
    $k=0.85;
}
else if($avg_inclin<=20)
{
    $k=0.81;
}
else if($avg_inclin<=25)
{
    $k=0.76;
}
//speed
$speed = round($discharge/(3600*$area*$bulk_density*$fill_factor*$k),1);

//plies & idler spacing calc
if($width<=300)
{
    $plies = 3;
    if($bulk_density <= 1)
    {$roller_dia = 108;$idler_space=1500;}
    elseif($bulk_density<=2)
    {$roller_dia = 108;$idler_space=1400;}
    elseif($bulk_density>=2)
    {$roller_dia = 108;$idler_space=1300;}
}
elseif($width <= 400)
{
    $plies = 4;
    if($bulk_density <= 1)
    {$roller_dia = 108;$idler_space=1500;}
    elseif($bulk_density<=2)
    {$roller_dia = 108;$idler_space=1400;}
    elseif($bulk_density>=2)
    {$roller_dia = 108;$idler_space=1300;}
}
elseif($width <= 500)
{
    $plies = 5;
    if($bulk_density <= 1)
    {$roller_dia = 108;$idler_space=1500;}
    elseif($bulk_density<=2)
    {$roller_dia = 108;$idler_space=1400;}
    elseif($bulk_density>=2)
    {$roller_dia = 108;$idler_space=1300;}
}
elseif($width <= 650)
{
    $plies = 6;
    if($bulk_density <= 1)
    {$roller_dia = 108;$idler_space=1400;}
    elseif($bulk_density<=2)
    {$roller_dia = 108;$idler_space=1300;}
    elseif($bulk_density>=2)
    {$roller_dia = 108;$idler_space=1200;}
}
elseif($width <= 800)
{
    $plies = 7;
    if($bulk_density <= 1)
    {$roller_dia = 108;$idler_space=1400;}
    elseif($bulk_density<=2)
    {$roller_dia = 108;$idler_space=1300;}
    elseif($bulk_density>=2)
    {$roller_dia = 108;$idler_space=1200;}
}
elseif($width <= 900)
{
    $plies = 8;
    if($bulk_density <= 1)
    {$roller_dia = 159;$idler_space=1300;}
    elseif($bulk_density<=2)
    {$roller_dia = 159;$idler_space=1200;}
    elseif($bulk_density>=2)
    {$roller_dia = 1059;$idler_space=1100;}
}
elseif($width <= 1000)
{
    $plies = 9;
    if($bulk_density <= 1)
    {$roller_dia = 159;$idler_space=1300;}
    elseif($bulk_density<=2)
    {$roller_dia = 159;$idler_space=1200;}
    elseif($bulk_density>=2)
    {$roller_dia = 159;$idler_space=1100;}
}
elseif($width <= 1200)
{
    $plies = 9;
    if($bulk_density <= 1)
    {$roller_dia = 159;$idler_space=1300;}
    elseif($bulk_density<=2)
    {$roller_dia = 159;$idler_space=1200;}
    elseif($bulk_density>=2)
    {$roller_dia = 159;$idler_space=1100;}
}
elseif($width <= 1600)
{
    $plies = 10;
    if($bulk_density <= 1)
    {$roller_dia = 159;$idler_space=1200;}
    elseif($bulk_density<=2)
    {$roller_dia = 159;$idler_space=1100;}
    elseif($bulk_density>=2)
    {$roller_dia = 159;$idler_space=1000;}
}
elseif($width <= 2000)
{
    $plies = 11;
    if($bulk_density <= 1)
    {$roller_dia = 159;$idler_space=1100;}
    elseif($bulk_density<=2)
    {$roller_dia = 198;$idler_space=1000;}
    elseif($bulk_density>=2)
    {$roller_dia = 198;$idler_space=900;}
}
elseif($width >= 2000)
{
    $plies = 12;
    if($bulk_density <= 1)
    {$roller_dia = 198;$idler_space=1100;}
    elseif($bulk_density<=2)
    {$roller_dia = 198;$idler_space=1000;}
    elseif($bulk_density>=2)
    {$roller_dia = 198;$idler_space=900;}
}

$idler_space_return=2*$idler_space;
$idler_space_loaded=$idler_space/2;

//power,tension etc calc
//ultimate tensile stress/cm width/ply
if($types_of_belt == 'ordinary_cotton')
{
   $uts =55;
}
elseif($types_of_belt == 'cotton_duck_fabric')
{
    $uts =119;
}
elseif($types_of_belt == 'synthetic_fabric')
{
    $uts =300;
}
elseif($types_of_belt == 'high_strength')
{
    $uts =119;
}
elseif($types_of_belt == 'steel_cord')
{
    $uts =3500;
}
//tonnage
$a = ($width/1000)*($width/1000)/11;
$t = $a*$bulk_density*$speed;
//power calc
$pe = (60*($width/1000))*($total_length+45)*$friction_idler_belt*9.81*$speed/1000;
$pm = $t*$total_length*$friction_idler_belt*9.81;
for($i=1;$i<11;$i++)
{
    $h = $h + $length[$i]*sin($repose_angle[$i]*3.1415/180);
}
$pr = $h*9.81*$t;
$padd = max((1.7*$pe) , (1.2*($pe+$pm+$pr)));
$total_power = $pe+$pm+$pr+$padd;
$motor_power = round($total_power/$combined_efficiency/100,1);
//others calc
$drum_dia = $plies * 125;
$drum_speed = round(60*$speed*1000/3.1415/$drum_dia);
$motor_speed = round(120*50*0.98/$poles_motor);
$gear_reduction_ratio = round($motor_speed/$drum_speed);
//tension & takeup load calc
$teff = $total_power*1000/$speed;
$tight_tension = round($teff*(1+1/(exp($friction_coeff*$lap_angle)-1)),2);
$slack_tension = round($teff/(exp($friction_coeff*$lap_angle)-1),2);
$takeup_load = round(2*$slack_tension+20,2);
//factor of safety calc
$fs = round((100 * $width * $uts / $tight_tension),1);



//table view ?>
<div class="table-responsive" style="margin: 10px 10px">
    <table class="table table-bordered table-striped table-hover">
        <caption style="text-align: center;font-weight: bold;">Belt Conveyor Design Parameters</caption>
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Width</td>
            <td><?php echo "$width mm" ?></td>
        </tr>
        <tr>
            <td>Speed</td>
            <td><?php echo "$speed m/s" ?></td>
        </tr>
        <tr>
            <td>No. of Plies</td>
            <td><?php echo $plies?></td>
        </tr>
        <tr>
            <td>Idler Diameter</td>
            <td><?php echo "$roller_dia mm" ?></td>
        </tr>
        <tr>
            <td>Idler Spacing at Loaded Side</td>
            <td><?php echo "$idler_space mm" ?></td>
        </tr>
        <tr>
            <td>Idler Spacing at Return Side</td>
            <td><?php echo "$idler_space_return mm" ?></td>
        </tr>
        <tr>
            <td>Idler Spacing at Load Point</td>
            <td><?php echo "$idler_space_loaded mm" ?></td>
        </tr>
        <tr>
            <td>Tension in Tight Side of Belt</td>
            <td><?php echo "$tight_tension Kg" ?></td>
        </tr>
        <tr>
            <td>Tension in Slack Side of Belt</td>
            <td><?php echo "$slack_tension Kg" ?></td>
        </tr>
        <tr>
            <td>Motor Power</td>
            <td><?php echo "$motor_power KW" ?></td>
        </tr>
        <tr>
            <td>Motor Speed</td>
            <td><?php echo "$motor_speed rpm" ?></td>
        </tr>
        <tr>
            <td>Total Gear Reduction Ratio</td>
            <td><?php echo $gear_reduction_ratio?></td>
        </tr>
        <tr>
            <td>Drive Drum Diameter</td>
            <td><?php echo "$drum_dia mm" ?></td>
        </tr>
        <tr>
            <td>Drum Speed</td>
            <td><?php echo "$drum_speed rpm" ?></td>
        </tr>
        <tr>
            <td>Take Up Load</td>
            <td><?php echo "$takeup_load Kg" ?></td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>













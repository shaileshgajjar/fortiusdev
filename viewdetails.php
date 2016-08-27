<?php
require(dirname(__FILE__).'/config/config.new.php');

$computer_id = $request->get('computer_id', 0);
if ( $computer_id == 0 )
{
	echo 'Error while gethering details';
	exit;
}

$tbl = new table('computer_changelog');
$tbl->condition('WHERE', 'computer_id', $computer_id);
$tbl->orderby('id', 'desc');
$rows = $tbl->getList(1, 1);

$services = str_replace("\n", "", str_replace("\r", "", $rows[0]['services']));
preg_match_all('/<item>(.*?)<service>(.*?)<\/service>(.*?)<display>(.*?)<\/display>(.*?)<startname>(.*?)<\/startname>(.*?)<description>(.*?)<\/description>(.*?)<\/item>/', $services, $matches);
$services = array();
for($x=0; $x<count($matches[0]); $x++)
{
	$services[] = array('service' => $matches[2][$x], 'display' => $matches[4][$x], 'startname' => $matches[6][$x], 'description' => $matches[8][$x]);
}

$softwares = str_replace("\n", "", str_replace("\r", "", $rows[0]['softwares']));
preg_match_all('/<item>(.*?)<\/item>/', $softwares, $matches);
$softwares = array();
for($x=0; $x<count($matches[0]); $x++)
{
	$softwares[] = $matches[1][$x];
}

$users = str_replace("\n", "", str_replace("\r", "", $rows[0]['users']));
preg_match_all('/<item>(.*?)<\/item>/', $users, $matches);
$users = array();
for($x=0; $x<count($matches[0]); $x++)
{
	$users[] = $matches[1][$x];
}

$groups = str_replace("\n", "", str_replace("\r", "", $rows[0]['groups']));
preg_match_all('/<item>(.*?)<\/item>/', $groups, $matches);
$groups = array();
for($x=0; $x<count($matches[0]); $x++)
{
	$groups[] = $matches[1][$x];
}
?>
<ul class="nav nav-tabs" role="tablist">
	<li class="active">
		<a href="#users" role="tab" data-toggle="tab">Users <span class="badge badge-success"><?php echo count($users); ?></span></a>
	</li>
	<li class="">
		<a href="#groups" role="tab" data-toggle="tab">Groups <span class="badge badge-success"><?php echo count($groups); ?></span></a>
	</li>
	<li class="">
		<a href="#softwares" role="tab" data-toggle="tab">Softwares <span class="badge badge-success"><?php echo count($softwares); ?></span></a>
	</li>
	<li class="">
		<a href="#services" role="tab" data-toggle="tab">Services <span class="badge badge-success"><?php echo count($services); ?></span></a>
	</li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane fade active in" id="users">
		<ul>
		<?php foreach($users as $user): ?>
			<li><?php echo $user; ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="tab-pane fade" id="groups">
		<ul>
		<?php foreach($groups as $group): ?>
			<li><?php echo $group; ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="tab-pane fade" id="softwares">
		<ul>
		<?php foreach($softwares as $software): ?>
			<li><?php echo $software; ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="tab-pane fade" id="services">
		<ul>
		<?php foreach($services as $service): ?>
			<li>
				<div><?php echo $service['service']; ?></div>
				<div><?php echo $service['display']; ?></div>
				<div><?php echo $service['startname']; ?></div>
				<div><?php echo $service['description']; ?></div>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>

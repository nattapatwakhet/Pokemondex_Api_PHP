<?php
	include 'connected.php';
	header("Access-Control-Allow-Origin: *");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    
    exit;
}
if (!$link->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $link->error);
    exit();
	}
if (isset($_GET)) {
	if ($_GET['isAdd'] == 'true') {
		$id  = $_GET['id'];
		$num = $_GET['num'];
		$name = $_GET['name'];
        $img = $_GET['img'];
		$type0 = $_GET['type0'];
		$type1 = $_GET['type1'];
        $height = $_GET['height'];
        $weight = $_GET['weight'];
        $candy = $_GET['candy'];
        $egg = $_GET['egg'];
        $weaknesses0 = $_GET['weaknesses0'];
        $weaknesses1 = $_GET['weaknesses1'];
        $weaknesses2 = $_GET['weaknesses2'];
        $weaknesses3 = $_GET['weaknesses3'];
        $weaknesses4 = $_GET['weaknesses4'];
        $weaknesses5 = $_GET['weaknesses5'];
        $weaknesses6 = $_GET['weaknesses6'];
        $multipliers0 = $_GET['multipliers0'];
        $multipliers1 = $_GET['multipliers1'];
        $candy_count = $_GET['candy_count'];
        $spawn_chance = $_GET['spawn_chance'];
        $avg_spawns = $_GET['avg_spawns'];
        $spawn_time = $_GET['spawn_time'];
        $next_evolution0num = $_GET['next_evolution0num'];
        $next_evolution0name = $_GET['next_evolution0name'];
        $next_evolution1num = $_GET['next_evolution1num'];
        $next_evolution1name = $_GET['next_evolution1name'];
        $next_evolution2num = $_GET['next_evolution2num'];
        $next_evolution2name = $_GET['next_evolution2name'];
        $prev_evolution0num = $_GET['prev_evolution0num'];
        $prev_evolution0name = $_GET['prev_evolution0name'];
        $prev_evolution1num = $_GET['prev_evolution1num'];
        $prev_evolution1name = $_GET['prev_evolution1name'];
		$sql = "INSERT INTO `pokemon`(`id`, `num`, `name`, `type0`, `type1`, `height`, `weight`, `candy`, `egg`, `weaknesses0`, `weaknesses1`, `weaknesses2`, `weaknesses3`, `weaknesses4`, `weaknesses5`, `weaknesses6`, `multipliers0`, `multipliers1`, `candy_count`, `spawn_chance`, `avg_spawns`, `spawn_time`, `next_evolution0num`, `next_evolution0name`, `next_evolution1num`, `next_evolution1name`, `next_evolution2num`, `next_evolution2name`, `prev_evolution0num`, `prev_evolution0name`, `prev_evolution1num`, `prev_evolution1name`) VALUES ('$id', '$num', '$name', '$type0', '$type1', '$height', '$weight', '$candy', '$egg', '$weaknesses0', '$weaknesses1', '$weaknesses2', '$weaknesses3', '$weaknesses4', '$weaknesses5', '$weaknesses6', '$multipliers0', '$multipliers1', '$candy_count', '$spawn_chance', '$avg_spawns', '$spawn_time', '$next_evolution0num', '$next_evolution0name', '$next_evolution1num', '$next_evolution1name', '$next_evolution2num', '$next_evolution2name', '$prev_evolution0num', '$prev_evolution0name', '$prev_evolution1num', '$prev_evolution1name')";
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "true";
		} else {
			echo "false";
		}
	} else echo "OK Api";
}
	mysqli_close($link);
?>
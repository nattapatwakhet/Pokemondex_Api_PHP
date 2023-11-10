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
    $connect = mysqli_connect("192.168.1.2", "master", "0864379152", "pokemondex");
    // $connect1 = mysqli_connect("192.168.1.2", "master", "0864379152", "pokemondex");
    // $connect2 = mysqli_connect("192.168.1.2", "master", "0864379152", "pokemondex");
    $query = '';
    // $query1 = '';
    // $query2 = '';
    // $query3 = '';
    $table_data = '';
    $filename = "pokemon.json";
    $data = file_get_contents($filename);
    $array = json_decode($data, true);
    // $i = 0;
    foreach($array as $row ){
        // $type = null;
        $type0 = $row['type'][0];
        if (isset($row['type'][1])) {
            $type1 = $row['type'][1];
        } else {
            $type1 = Null;
        }
        if (isset($row['multipliers'][0])) {
            $multipliers0 = $row['multipliers'][0];
        } else {
            $multipliers0 = Null;
        }
        if (isset($row['multipliers'][1])) {
            $multipliers1 = $row['multipliers'][1];
        } else {
            $multipliers1 = Null;
        }
        $weaknesses0 = $row['weaknesses'][0];
        if (isset($row['weaknesses'][1])) {
            $weaknesses1 = $row['weaknesses'][1];
        } else {
            $weaknesses1 = Null;
        }
        if (isset($row['weaknesses'][2])) {
            $weaknesses2 = $row['weaknesses'][2];
        } else {
            $weaknesses2 = Null;
        }
        if (isset($row['weaknesses'][3])) {
            $weaknesses3 = $row['weaknesses'][3];
        } else {
            $weaknesses3 = Null;
        }
        if (isset($row['weaknesses'][4])) {
            $weaknesses4 = $row['weaknesses'][4];
        } else {
            $weaknesses4 = Null;
        }
        if (isset($row['weaknesses'][5])) {
            $weaknesses5 = $row['weaknesses'][5];
        } else {
            $weaknesses5 = Null;
        }
        if (isset($row['weaknesses'][6])) {
            $weaknesses6 = $row['weaknesses'][6];
        } else {
            $weaknesses6 = Null;
        }
        if (isset($row['candy_count'])) {
            $candy_count = $row['candy_count'];
        } else {
            $candy_count = Null;
        }
        if (isset($row['spawn_chance'])) {
            $spawn_chance = $row['spawn_chance'];
        } else {
            $spawn_chance = Null;
        }
        if (isset($row['avg_spawns'])) {
            $avg_spawns = $row['avg_spawns'];
        } else {
            $avg_spawns = Null;
        }
        if (isset($row['spawn_time'])) {
            $spawn_time = $row['spawn_time'];
        } else {
            $spawn_time = Null;
        }
        if (isset($row['next_evolution'][0]['num'])) {
            $next_evolution0num = $row['next_evolution'][0]['num'];
            $next_evolution0name = $row['next_evolution'][0]['name'];
        } else {
            $next_evolution0num = Null;
            $next_evolution0name = Null;
        }
        if (isset($row['next_evolution'][1]['num'])) {
            $next_evolution1num = $row['next_evolution'][1]['num'];
            $next_evolution1name = $row['next_evolution'][1]['name'];
        } else {
            $next_evolution1num = Null;
            $next_evolution1name = Null;
        }
        if (isset($row['next_evolution'][2]['num'])) {
            $next_evolution2num = $row['next_evolution'][2]['num'];
            $next_evolution2name = $row['next_evolution'][2]['name'];
        } else {
            $next_evolution2num = Null;
            $next_evolution2name = Null;
        }
        if (isset($row['prev_evolution'][0]['num'])) {
            $prev_evolution0num = $row['prev_evolution'][0]['num'];
            $prev_evolution0name = $row['prev_evolution'][0]['name'];
        } else {
            $prev_evolution0num = Null;
            $prev_evolution0name = Null;
        }
        if (isset($row['prev_evolution'][1]['num'])) {
            $prev_evolution1num = $row['prev_evolution'][1]['num'];
            $prev_evolution1name = $row['prev_evolution'][1]['name'];
        } else {
            $prev_evolution1num = Null;
            $prev_evolution1name = Null;
        }
        // $table_data .= '
        //     <tr>
        //         <td>'.$row["id"].'</td>
        //         <td>'.$row["num"].'</td>
        //         <td>'.$row["name"].'</td>
        //         <td>'.$row["img"].'</td>
        //         <td>'.$type0."\n".$type1.'</td>
        //         <td>'.$row["height"].'</td>
        //         <td>'.$row["weight"].'</td>
        //         <td>'.$row["candy"].'</td>
        //         <td>'.$row["egg"].'</td>
        //         <td>'.$multipliers0."\n".$multipliers1.'</td>
        //         <td>'.$weaknesses0."\n".$weaknesses1."\n".$weaknesses2."\n".$weaknesses3."\n".$weaknesses4."\n".$weaknesses5."\n".$weaknesses6.'</td>
        //         <td>'.$candy_count.'</td>
        //         <td>'.$row["spawn_chance"].'</td>
        //         <td>'.$row["avg_spawns"].'</td>
        //         <td>'.$row["spawn_time"].'</td>
        //         <td>'.$next_evolution0num." ".$next_evolution0name."\n".$next_evolution1num." ".$next_evolution1name."\n".$next_evolution2num." ".$next_evolution2name.'</td>
        //         <td>'.$prev_evolution0num." ".$prev_evolution0name."\n".$prev_evolution1num." ".$prev_evolution1name.'</td>
        //     </tr>
        // ';
        // $i++;
        // if ($i <= 50) {   
        //     $query .= "INSERT INTO pokemon(id, num, name, type0, type1, height, weight, candy, egg, multipliers0, multipliers1, weaknesses0, weaknesses1, weaknesses2, weaknesses3, weaknesses4, weaknesses5, weaknesses6, candy_count, spawn_chance, avg_spawns, spawn_time, next_evolution0num, next_evolution0name, next_evolution1num, next_evolution1name, next_evolution2num, next_evolution2name, prev_evolution0num, prev_evolution0name, prev_evolution1num, prev_evolution1name) VALUES ('".$row["id"]."', '".$row["num"]."', '".$row["name"]."', '".$type0."', '".$type1."', '".$row["height"]."', '".$row["weight"]."', '".$row["candy"]."', '".$row["egg"]."', '".$multipliers0."', '".$multipliers1."', '".$weaknesses0."', '".$weaknesses1."', '".$weaknesses2."', '".$weaknesses3."', '".$weaknesses4."', '".$weaknesses5."', '".$weaknesses6."', '".$candy_count."', '".$row["spawn_chance"]."', '".$row["avg_spawns"]."', '".$row["spawn_time"]."', '".$next_evolution0num."', '".$next_evolution0name."', '".$next_evolution1num."', '".$next_evolution1name."', '".$next_evolution2num."', '".$next_evolution2name."', '".$prev_evolution0num."', '".$prev_evolution0name."', '".$prev_evolution1num."', '".$prev_evolution1name."');";
        // } else if ($i <= 100) {
        //     $query1 .= "INSERT INTO pokemon(id, num, name, type0, type1, height, weight, candy, egg, multipliers0, multipliers1, weaknesses0, weaknesses1, weaknesses2, weaknesses3, weaknesses4, weaknesses5, weaknesses6, candy_count, spawn_chance, avg_spawns, spawn_time, next_evolution0num, next_evolution0name, next_evolution1num, next_evolution1name, next_evolution2num, next_evolution2name, prev_evolution0num, prev_evolution0name, prev_evolution1num, prev_evolution1name) VALUES ('".$row["id"]."', '".$row["num"]."', '".$row["name"]."', '".$type0."', '".$type1."', '".$row["height"]."', '".$row["weight"]."', '".$row["candy"]."', '".$row["egg"]."', '".$multipliers0."', '".$multipliers1."', '".$weaknesses0."', '".$weaknesses1."', '".$weaknesses2."', '".$weaknesses3."', '".$weaknesses4."', '".$weaknesses5."', '".$weaknesses6."', '".$candy_count."', '".$row["spawn_chance"]."', '".$row["avg_spawns"]."', '".$row["spawn_time"]."', '".$next_evolution0num."', '".$next_evolution0name."', '".$next_evolution1num."', '".$next_evolution1name."', '".$next_evolution2num."', '".$next_evolution2name."', '".$prev_evolution0num."', '".$prev_evolution0name."', '".$prev_evolution1num."', '".$prev_evolution1name."');";
        // } else if ($i <= 151) {
        //     $query2 .= "INSERT INTO pokemon(id, num, name, type0, type1, height, weight, candy, egg, multipliers0, multipliers1, weaknesses0, weaknesses1, weaknesses2, weaknesses3, weaknesses4, weaknesses5, weaknesses6, candy_count, spawn_chance, avg_spawns, spawn_time, next_evolution0num, next_evolution0name, next_evolution1num, next_evolution1name, next_evolution2num, next_evolution2name, prev_evolution0num, prev_evolution0name, prev_evolution1num, prev_evolution1name) VALUES ('".$row["id"]."', '".$row["num"]."', '".$row["name"]."', '".$type0."', '".$type1."', '".$row["height"]."', '".$row["weight"]."', '".$row["candy"]."', '".$row["egg"]."', '".$multipliers0."', '".$multipliers1."', '".$weaknesses0."', '".$weaknesses1."', '".$weaknesses2."', '".$weaknesses3."', '".$weaknesses4."', '".$weaknesses5."', '".$weaknesses6."', '".$candy_count."', '".$row["spawn_chance"]."', '".$row["avg_spawns"]."', '".$row["spawn_time"]."', '".$next_evolution0num."', '".$next_evolution0name."', '".$next_evolution1num."', '".$next_evolution1name."', '".$next_evolution2num."', '".$next_evolution2name."', '".$prev_evolution0num."', '".$prev_evolution0name."', '".$prev_evolution1num."', '".$prev_evolution1name."');";
        // }   
        $query .= "INSERT INTO pokemon(id, num, name, type0, type1, height, weight, candy, egg, multipliers0, multipliers1, weaknesses0, weaknesses1, weaknesses2, weaknesses3, weaknesses4, weaknesses5, weaknesses6, candy_count, spawn_chance, avg_spawns, spawn_time, next_evolution0num, next_evolution0name, next_evolution1num, next_evolution1name, next_evolution2num, next_evolution2name, prev_evolution0num, prev_evolution0name, prev_evolution1num, prev_evolution1name) VALUES ('".$row["id"]."', '".$row["num"]."', '".$row["name"]."', '".$type0."', '".$type1."', '".$row["height"]."', '".$row["weight"]."', '".$row["candy"]."', '".$row["egg"]."', '".$multipliers0."', '".$multipliers1."', '".$weaknesses0."', '".$weaknesses1."', '".$weaknesses2."', '".$weaknesses3."', '".$weaknesses4."', '".$weaknesses5."', '".$weaknesses6."', '".$candy_count."', '".$row["spawn_chance"]."', '".$row["avg_spawns"]."', '".$row["spawn_time"]."', '".$next_evolution0num."', '".$next_evolution0name."', '".$next_evolution1num."', '".$next_evolution1name."', '".$next_evolution2num."', '".$next_evolution2name."', '".$prev_evolution0num."', '".$prev_evolution0name."', '".$prev_evolution1num."', '".$prev_evolution1name."');";
    }
    $result = mysqli_multi_query($link, $query);
    // $result = mysqli_multi_query($connect, $query1);
    // $result = mysqli_multi_query($connect1, $query2);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
    // echo '<h3>Imported JSON Data</h3><br />';
    // echo '
    // <table class="table table-bordered">
    //     <tr>
    //         <th width="10%">id</th>
    //         <th width="50%">name</th>
    //         <th width="45%">img</th>
    //         <th width="100%">type</th>
    //         <th width="20%">height</th>
    //         <th width="20%">weight</th>
    //         <th width="20%">candy</th>
    //         <th width="20%">egg</th>
    //         <th width="20%">multipliers</th>
    //         <th width="20%">weaknesses</th>                
    //         <th width="20%">candy_count</th>
    //         <th width="20%">spawn_chance</th>
    //         <th width="20%">avg_spawns</th>
    //         <th width="20%">spawn_time</th>
    //         <th width="20%">next_evolution</th>
    //         <th width="20%">prev_evolution</th>
    //     </tr>
    // ';
    // echo $table_data;  
    // echo '</table>';
    mysqli_close($link);
?>

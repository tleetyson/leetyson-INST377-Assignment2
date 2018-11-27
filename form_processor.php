<!DOCTYPE html>
<html>
<head>
	<title>Team Peer Evaluation - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<?php
function individGrad($grades, $participation ) {
    if( $participation == "Absent") {
			return "F";
		}
		elseif ($participation == "Above and Beyond") {
			return $grades;
		}
		elseif($participation == "Satisfactory"){
			return "B-";
		}
		else {
			return "D";
	}
}
/*$grades = $_POST["grades"];*/
$minutes = round(abs(strtotime($_POST[project_end]) - strtotime($_POST[project_start])) / 60,2);
echo "<h2> Team Project Results </h2>";
echo "Team Project Name: " . $_POST["project_name"] . "<br>";
echo "Total Time (minutes): " . $minutes . "<br>";
echo "Overall Grade: " . $_POST["grades"] . "<br>";
echo "Grade for " . $_POST["team_member1"] ." " . individGrad($grades, $_POST["participation1"]) . "<br>";
echo "Grade for " . $_POST["team_member2"] ." " . individGrad($grades, $_POST["participation2"]) . "<br>";
echo "Grade for " . $_POST["team_member3"] ." " . individGrad($grades, $_POST["participation3"]) . "<br>";
echo "Grade for " . $_POST["team_member4"] ." " . individGrad($grades, $_POST["participation4"]) . "<br>";
echo "Grade for " . $_POST["team_member5"] ." " . individGrad($grades, $_POST["participation5"]) . "<br>";
echo "<p>" . $_POST["comments"] . "</p>";







?>
</body>
</html>

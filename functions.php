<?

// This file contains one function to generate a table of information of data

// output a table of results, including a checkbox if $includeCheckbox is true
// receive the appointments as a database object into $allAppts
function outputApptResults($allAppts, $includeCheckbox = false) {
	
	$counter = 1;
	$output = "";
	$output .= "<table cellpadding='10'>\n
							<tr>\n";
	if ($includeCheckbox) $output .=	"						<th> </th>\n";
	$output .= "								<th>Appt.</th>\n
								<th>Player</th>\n
								<th>Mark</th>\n
							</tr>\n";
	
	// loop through $allAppts with each $row available as $appt
	foreach ($allAppts as $appt) {
		$output .= "\t<tr style='background-color: #ddd;'>\n";
		
		if ($includeCheckbox) {
			$checkboxID = "appt[" . $counter . "]";
			$checkboxValue = $appt["id"];
			$output .= "\t\t<td><input type='checkbox' id='$checkboxID' name='$checkboxID' value='$checkboxValue'></td>\n";
		}
		$output .= "\t\t<td>" . $appt["player"] . "</td>\n";
		$output .= "\t\t<td>" . $appt["player_mark"] . "</td>\n";
		$output .= "\t\t<td>" . $appt["player_space"] . "</td>\n";
		
		$output .= "\t</tr>\n";
			
		$counter++;
	}
	$output .= "</table>";
	
	return $output;
}
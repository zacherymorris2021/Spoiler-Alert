<?php
        require "dbconnect.php";
        $db = DbUtil::loginConnection();

        $stmt = $db->stmt_init();

        if($stmt->prepare("select * from Movie ORDER BY Title") or die(mysqli_error($db))) {
                $stmt->execute();
                $stmt->bind_result($Title, $Duration, $Gross, $Language, $Movie_Review, $Genre);
		echo "<table border=1>
			<th>Title</th>
			<th>Duration</th>
			<th>Gross</th>
			<th>Language</th>
			<th>Movie_Review</th>
			<th>Genre</th>\n";
                while($stmt->fetch()) {
                        echo "<tr>
				<td>$Title</td>
				<td>$Duration</td>
				<td>$Gross</td>
				<td>$Language</td>
				<td>$Movie_Review</td>
				<td>$Genre</td>
			</tr>";
                }
                echo "</table>";

                $stmt->close();
        }

        $db->close();


?>

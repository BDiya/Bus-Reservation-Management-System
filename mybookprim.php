<?php

				$conn=mysql_connect("localhost","root","");
				$db=mysql_select_db("proj");
				$sql="select * from book where email='$email'";
				$res=mysql_query($sql);
				$flag=1;
				echo "<h2 style="."color:red;font-family:calibri;text-decoration:underline".">Bookings:-</h2>";
				while($arr=mysql_fetch_array($res))
				{
					$flag=0;
					$name=$arr['name'];
					$email=$arr['email'];
					$bid=$arr['busid'];
					$seats=$arr['seats'];
					$source=$arr['source'];
					$destination=$arr['destination'];
					$bustype=$arr['bustype'];
					$dept_date=$arr['depart_date'];
					$dept_time=$arr['dept_time'];
					$bookid=$arr['bookid'];
					echo "<table>";
					echo "<tr>";
						echo "<td>Name</td>";
						echo "<td>$name</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Email</td>";
						echo "<td>$email</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Bus ID</td>";
						echo "<td>$bid</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>No of seats</td>";
						echo "<td>$seats</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Source</td>";
						echo "<td>$source</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Destination</td>";
						echo "<td>$destination</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Departure Date</td>";
						echo "<td>$dept_date</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Departure Time</td>";
						echo "<td>$dept_time</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Booking Number</td>";
						echo "<td>$bookid</td>";
					echo "</tr>";
					echo "</table>";
					?>
					<form name="f1" action="mybooking.php" method="get">
						<input type="text" name="butnm" <?php echo "value="."$bookid".""?> style="width:0px; height=0px;border:0px solid white;">
						<input type="submit" name="submit" value="delete" style="float:right;margin-right:10%; text:chk;background-color:red;color:white;">
						<br>
					</form>
					<hr>
				<?php
			}
			if($flag==1)
			{
				echo "<h1 style="."color:red;font-family:calibri;".">No Bookings Available</h1>";
			}
				
			?>
			<?php
				$bid=$_GET['butnm'];
				if($bid!="")
				{
					$sql="delete from book where email='$email' and bookid='$bid'";
					$res=mysql_query($sql);
				}
			?>
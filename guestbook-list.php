<?php
	require('config/config.php');
	require('config/db.php');
$result= $conn->query("SELECT * FROM person"); 

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($person = $result->fetch_assoc()) {
                        $date = $person['logdt'];
                        $today =  date("F j, Y, g:i a", strtotime($date));
                        echo '<tr>';
                        echo '<td>'.$person['id'].'</td>';
                        echo '<td>'.$person['firstname'].'</td>';
                        echo '<td>'.$person['lastname'].'</td>';
                        echo '<td>'.$person['address'].'</td>';
                        echo '<td>'.$today.'</td>';
                        echo '</tr>';
                        }
                      } else {
                        echo "0 results";
                    }
                    
                ?>
                   
                </tbody>
            </div>
        </table>
        
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>
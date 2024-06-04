<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Schedule Checker </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />

	</head>

    <nav>
		<div class="topnav">
            <a href="index.php">Order</a>
			<a class="active" href="View.php">View</a>
		  </div>
	</nav>

	<body>
    

        <header>
        <a href="#"><img src="banner.png" alt="header" width=100% height="300"></a>

        </header>
        
		<main>

            <h2>View your order</h2>
            
                <fieldset>
                    <legend>Record</legend>
                    <h3></h3>
                    <?php
                    require_once ('database.php');
                    $res = $database -> read();
                    ?>
                    <div>
                        <table>
                            <tr>
                                <th>Mode</th>
                                <th>Order Number</th>
                                <th>Destination</th>
                                <th>ETA</th>
                            </tr>
                            <?php
                                while($r = mysqli_fetch_assoc($res)){
                            ?>
                                <tr>
                                    <td><?php echo $r['Mode']; ?></td>
                                    <td><?php echo $r['Order']; ?></td>
                                    <td><?php echo $r['Dest']; ?></td>
                                    <td><?php echo $r['ETA']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                    </div>
                </fieldset>

        </main>
        <footer>
            <p><small>Zoe NG. All rights reserved</small></p>
        </footer>
	</body>
</html>


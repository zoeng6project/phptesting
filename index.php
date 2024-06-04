<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Schedule Checker </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />

	</head>

    <nav>
		<div class="topnav">
			<a class="active" href="index.php">Order</a>
			<a href="View.php">View</a>
		  </div>
	</nav>

	<body>
    

        <header>
        <a href="#"><img src="banner.png" alt="header" width=100% height="300"></a>

        </header>
        
		<main>
            <h2>Track your order !!!!</h2>
            
                <fieldset>
                    <legend>Order Input</legend>
                    <h3></h3>
                    <form id  = "order"  method="post" >
                        <div>
                            <label for="mode">Transportation Mode :</label>
                            <select name="mode">
                            <option value=""></option>
                            <option value="Sea">Sea</option>
                            <option value="Air">Air</option>
                            <option value="Rail">Rail</option>
                            <option value="Truck">Truck</option>
                            </select>
                        </div>

                        <div>
                            <label for="order">Tracking Number :</label>
                            <input type="text" id="order" name="order" required>
                        </div>

                        <div>
                            <label for="dest">Destination :</label>
                            <input type="text" id="dest" name="dest">
                        </div>

                        <div>
                            <label for="ETA">ETA :</label>
                            <input type="date" id="ETA" name="ETA">
                        </div>

                        <div style="text-align: center;">
                            <button type="submit" value="Submit">Submit</button>
                        </div>
                    </form>
                    <div style="text-align: center;">
                        <?php
                            require_once('database.php');

                            if(!empty($_POST)){
                                $mode = $_POST['mode'];
                                $order = $_POST['order'];
                                $dest = $_POST['dest'];
                                $ETA = $_POST['ETA'];
                                $res = $database -> create($mode,$order,$dest,$ETA);
                                if($res){
                                    echo"<p> Successfully inserted data</p>";
                                }
                            }
                        ?>
			        </div>
                </fieldset>
            
        </main>
        <footer>
            <p><small>Zoe NG. All rights reserved</small></p>
        </footer>
	</body>
</html>


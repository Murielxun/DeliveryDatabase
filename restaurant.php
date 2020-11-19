
  <html>
    <head>
        <title>Restaurant</title>
    </head>

    <body>

        <hr>

        <h2>Become A Partner Restaurant!</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="insertRestaurant" name="insertRestaurant">
            Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            Name: <input type="text" name="name"> <br /><br />
            Rating: <input type="number" name="rating" step="0.01" min="0" max="10"> <br /><br />
            Postal Code: <input type="text" name="postal_code"> <br /><br />
            Street Address: <input type="text" name="street_address"> <br /><br />
            Category: <input type="text" name="street_address"> <br /><br />
            City: <input type="text" name="city"> <br /><br />
            Province: <input type="text" name="province"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Restaurant ID And Check Current Standing.</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkRestaurant" name="checkRestaurant">
            Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="submit" name="displayRestaurant"></p>
        </form>

        <hr>

        <h2>Enter Your Restaurant ID and Update Restaurant Info.</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="updateRestaurantInfo" name="updateRestaurantInfo">
            Your Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            <input type="checkbox" name="updateName" id="updateName">
            <label for="updateName">
            New Name: <input type="text" name="newName">
            </label><br /><br />
            <input type="checkbox" name="updateStreetAddress" id="updateStreetAddress">
            <label for="updateStreetAddress">
            New Street Address: <input type="text" name="newStreetAddress">
            </label><br /><br />
            <input type="checkbox" name="updateCategory" id="updateCategory">
            <label for="updateCategory">
            New Category: <input type="text" name="newCategory">
            </label><br /><br />
            <input type="checkbox" name="updatePostalCode" id="updatePostalCode">
            <label for="updatePostalCode">
            New Postal Code: <input type="text" name="newPostalCode1">
            </label><br /><br />
            <input type="checkbox" name="updateCityAndProvince" id="updateCityAndProvince">
            <label for="updateCityAndProvince">
            New Postal Code: <input type="text" name="newPostalCode2"><br /><br />
            New City: <input type="text" name="newCity"><br /><br />
            New Province: <input type="text" name="newProvince">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Restaurant ID And Unregister Your Restaurant.</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteRestaurant" name="deleteRestaurant">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>

        <h2>Manage Dishes.</h2>
        <h3>Enter Your Restaurant ID And Add New Dishes.</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="insertMenuItem" name="insertMenuItem">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            Dish Name: <input type="text" name="name"><br /><br />
            Dish Description: <input type="text" name="description"><br /><br />
            Ingredient: <input type="text" name="ingredient"><br /><br />
            Category: <input type="text" name="category"><br /><br />
            Price: <input type="number" name="price"  step="0.01"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>
        <h3>Enter Your Restaurant ID And Dish Name To Update Dishes.</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="updateMenuItem" name="updateMenuItem">
            Your Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            Dish Name: <input type="text" name="name"> <br /><br />
            <input type="checkbox" name="updateName" id="updateName">
            <label for="updateName">
            New Name: <input type="text" name="newName">
            </label><br /><br />
            <input type="checkbox" name="updateDescription" id="updateDescription">
            <label for="updateDescription">
            New Description: <input type="text" name="newDescription">
            </label><br /><br />
            <input type="checkbox" name="updateIngredient" id="updateIngredient">
            <label for="updateIngredient">
            New Ingredient: <input type="text" name="newIngredient">
            </label><br /><br />
            <input type="checkbox" name="updateCategory" id="updateCategory">
            <label for="updateCategory">
            New Category: <input type="text" name="newCategory">
            </label><br /><br />
            <input type="checkbox" name="updatePrice" id="updatePrice">
            <label for="updatePrice">
            New Price: <input type="number" name="newPrice"  step="0.01">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>
        <h3>Enter Your Restaurant ID And Dish Name To Delete Dishes.</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteMenuItem" name="deleteMenuItem">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            Dish Name: <input type="text" name="name"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>

        <h2>Search For Orders Your Restaurant Prepared!</h2>
        <h3>Enter Your Restaurnt ID And Check All Orders.</h3>
        <form method="GET" action="resturant.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="submit" name="displayAllOrders"></p>
        </form>
        <h3>Search For Orders With Food Subtotal Between A Certain Range.</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkPriceOrders" name="checkPriceOrders">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="checkbox" name="fromPrice" id="fromPrice">
            <label for="fromPrice">
            Higher Than: <input type="number" name="fromPrice"  step="0.01">
            </label><br /><br />
            <input type="checkbox" name="toPrice" id="toPrice">
            <label for="toPrice">
            Lower Than: <input type="number" name="toPrice"  step="0.01">
            </label><br /><br />
            <input type="submit" name="displayPriceOrders"></p>
        </form>

        <hr>

        <h2>Enter Your Email And Search For Customers Who Have Placed Orders In Your Restaurant.</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkAllCustomer" name="checkAllCustomer">
            Your Restaurant ID: <input type="text" name="restaurant_id">
            <input type="submit" name="displayAllCustomer"></p>
        </form>

        <hr>

        <a href="mainpage.php">Return to Main Page</a>

        <?php

        $success = True;
        $db_conn =  OCILogon("ora_muriel98", "a32203168", "dbhost.students.cs.ubc.ca:1522/stu"); 
        $show_debug_alert_messages = False;

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) {
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr); 

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); 
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); 
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); 
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement);
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printCourierResult($result) { 
            echo "<br>Retrieved data from table Courier:<br>";
            echo "<table>";
            echo "<tr><th>courier_id</th><th>name</th><th>rating</th><th>phone_number</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }

            echo "</table>";
        }

        function printVehicleCourierResult($result) { 
            echo "<br>Retrieved data from table Vehicle_Courier:<br>";
            echo "<table>";
            echo "<tr><th>valid_vehicle</th><th>valid_insurance</th><th>driver_license</th><th>courier_id</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }

            echo "</table>";
        }

        function printBicycleCourierResult($result) { 
            echo "<br>Retrieved data from table Bicycle_Courier:<br>";
            echo "<table>";
            echo "<tr><th>courier_id</th><th>valid_bicycle</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";
        }

        function printFootCourierResult($result) { 
            echo "<br>Retrieved data from table Foot_Courier:<br>";
            echo "<table>";
            echo "<tr><th>courier_id</th><th>bus_pass</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";
        }

        function printVehicleDrivesResult($result) { 
            echo "<br>Retrieved data from table Vehicle_Drives:<br>";
            echo "<table>";
            echo "<tr><th>vehicle_id</th><th>type</th><th>courier_id</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }

            echo "</table>";
        }

        function printOrderResults($result) {
            echo "<br>Retrieved data from table Orders:<br>";
            echo "<table>";
            echo "<tr><th>customer_id</th><th>restaurant_id</th><th>courier_id</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;


            $db_conn = OCILogon("ora_muriel98", "a32203168", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); 
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleInsertCourier(){
            global $db_conn;
            
            $tuple = array (
                ":bind1" => $_POST['courier_id'],
                ":bind2" => $_POST['name'],
                ":bind3" => $_POST['rating'],
                ":bind4" => $_POST['phone_number']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Courier values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
            OCICommit($db_conn);
        }

        function handleInsertVehicleCourier(){
            global $db_conn;
            
            $tuple = array (
                ":bind1" => $_POST['courier_id'],
                ":bind2" => $_POST['name'],
                ":bind3" => $_POST['rating'],
                ":bind4" => $_POST['phone_number']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Vehicle_Courier values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
            OCICommit($db_conn);
        }

        function handleInsertVehicle(){
            global $db_conn;
            
            $tuple = array (
                ":bind1" => $_POST['vehicle_id'],
                ":bind2" => $_POST['type'],
                ":bind3" => $_POST['courier_id']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Vehicle_Drives values (:bind1, :bind2, :bind3)", $alltuples);
            OCICommit($db_conn);
        }

        function handleInsertBicycleCourier(){
            global $db_conn;
            
            $tuple = array (
                ":bind1" => $_POST['courier_id'],
                ":bind2" => $_POST['valid_bycicle']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Bicycle_Courier values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
        }

        function handleInsertFootCourier(){
            global $db_conn;
            
            $tuple = array (
                ":bind1" => $_POST['courier_id'],
                ":bind2" => $_POST['bus_pass']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Foot_Courier values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
        }

        function handleDeleteCourier() {
            global $db_conn;

            $courier_id = $_POST['courier_id'];

            executePlainSQL("DELETE FROM Courier  WHERE courier_id='" . $courier_id . "'");
            OCICommit($db_conn);
        }

        function handleUpdateCourierInfo() {
            global $db_conn;

            $courier_id = $_POST['courier_id'];
            if (isset($_POST['updateName'])) {
                $newname = $_POST['newName'];
                executePlainSQL("UPDATE Courier SET name='" . $newname . "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updatePhoneNumber'])) {
                $newphonenumber = $_POST['newPhoneNumber'];
                executePlainSQL("UPDATE Courier SET phone_number='" . $newphonenumber . "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updateDriverLicense'])) {
                $newlicense = $_POST['newDriverLicense'];
                executePlainSQL("UPDATE Vehicle_Courier SET drivers_license='" . $newlicense . "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updateValidVehicle'])) {
                $newvehicle = $_POST['newValidVehicle'];
                executePlainSQL("UPDATE Vehicle_Courier SET valid_vehicle='" . $newvehicle . "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updateValidInsurance'])) {
                $newinsurance = $_POST['newValidInsurance'];
                executePlainSQL("UPDATE Vehicle_Courier SET valid_insurance='" . $newinsurance. "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updateValidBicycle'])) {
                $newbicycle = $_POST['newValidBicycle'];
                executePlainSQL("UPDATE Bicycle_Courier SET valid_bicycle='" . $newbicycle. "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_POST['updateBusPass'])) {
                $newbuspass = $_POST['newBusPass'];
                executePlainSQL("UPDATE Foot_Courier SET bus_pass='" . $newbuspass. "' WHERE courier_id='" . $courier_id . "'");
            }

            OCICommit($db_conn);
        }

        function  handleDisplayOrders() {
            global $db_conn;
            $courier_id = $_GET['courier_id'];
            $result = executePlainSQL("SELECT customer_id, restaurant_id, courier_id FROM Orders WHERE courier_id='" . $courier_id . "'");
            printOrderResults($result);

        }

        function  handleDisplayTables() {
            global $db_conn;
            $courier_id = $_GET['courier_id'];
            $result = executePlainSQL("SELECT * FROM Courier WHERE courier_id='" . $courier_id . "'");
            printCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Vehicle_Courier WHERE courier_id='" . $courier_id . "'");
            printVehicleCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Bicycle_Courier WHERE courier_id='" . $courier_id . "'");
            printBicycleCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Foot_Courier WHERE courier_id='" . $courier_id . "'");
            printFootCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Vehicle_Drives WHERE courier_id='" . $courier_id . "'");
            printVehicleDrivesResult($result);
        }

        function  handleCheckTables() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM Courier");
            printCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Vehicle_Courier");
            printVehicleCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Bicycle_Courier");
            printBicycleCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Foot_Courier");
            printFootCourierResult($result);
            $result = executePlainSQL("SELECT * FROM Vehicle_Drives");
            printVehicleDrivesResult($result);

        }



        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('insertCourier', $_POST)) {
                    handleInsertCourier();
                } else if (array_key_exists('insertVehicleCourier', $_POST)) {
                    handleInsertVehicleCourier();
                } else if (array_key_exists('insertVehicle', $_POST)) {
                    handleInsertVehicle();
                }else if (array_key_exists('insertFootCourier', $_POST)) {
                    handleInsertFootCourier();
                }else if (array_key_exists('insertBicycleCourier', $_POST)) {
                    handleInsertBicycleCourier();
                }else if (array_key_exists('updateCourierInfo', $_POST)) {
                    handleUpdateCourierInfo();
                }else if (array_key_exists('deleteCourier', $_POST)) {
                    handleDeleteCourier();
                }

                disconnectFromDB();
            }
        }

        function handleGETRequest() {
        if (connectToDB()) {
                if (array_key_exists('displayOrders', $_GET)) {
                    handleDisplayOrders();
                } else if (array_key_exists('displayTables', $_GET)) {
                    handleDisplayTables();
                } else if (array_key_exists('checkTables', $_GET)) {
                    handleCheckTables();
                }
                disconnectFromDB();
            }
        }

		if (isset($_POST['insertSubmit']) || isset($_POST['updateSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['printAllTables']) || isset($_GET['checkAllOrders'])|| isset($_GET['checkAllTables'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>


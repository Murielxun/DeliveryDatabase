
  <html>
    <head>
        <title>Courier</title>
    </head>

    <body>

        <hr>

        <h1>Become a Courier</h1>
        <h2>New to This Delivery App? First Register As a Courier!</h2>
        <form method="POST" action="courier.php">
            <input type="hidden" id="insertCourier" name="insertCourier">
            Courier ID: <input type="text" name="courier_id"> <br /><br />
            Name: <input type="text" name="name"> <br /><br />
            Rating: <input type="number" name="rating" step="0.01" min="0" max="10"> <br /><br />
            Phone Number: <input type="text" name="phone_number"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h1>Already a Courier? More Options!</h1>
        <h2>Become a Vehicle Courier!</h2>
        <form method="POST" action="courier.php">
            <input type="hidden" id="insertVehicleCourier" name="insertVehicleCourier">
            Your Courier ID: <input type="text" name="courier_id"> <br /><br />
            Your Driver License: <input type="text" name="driver_license"> <br /><br />
            Have Valid Vehicle?: 
            <select name="valid_vehicle" id="selectValidVehicle">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select> <br /><br />
            Have Valid Insurance?: 
            <select name="valid_insurance" id="selectValidInsurance">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>
        <h3>Register Your Vehicle!</h3>
        <form method="POST" action="courier.php">
            <input type="hidden" id="insertVehicle" name="insertVehicle">
            Your Courier ID: <input type="text" name="courier_id"> <br /><br />
            Vehicle ID: <input type="text" name="vehicle_id"> <br /><br />
            Type : <input type="text" name="type"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <h2>Become a Bicycle Courier!</h2>
        <form method="POST" action="courier.php">
            <input type="hidden" id="insertBicycleCourier" name="insertBicycleCourier">
            Your Courier ID: <input type="text" name="courier_id"> <br /><br />
            Have Valid Bicycle?: 
            <select name="valid_bicycle" id="selectValidbicycle">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>
        <h3>Become a Foot Courier!</h3>
        <form method="POST" action="courier.php">
            <input type="hidden" id="insertFootCourier" name="insertFootCourier">
            Your Courier ID: <input type="text" name="courier_id"> <br /><br />
            Your Bus Pass: <input type="text" name="bus_pass"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Courier ID and Update Your Personal Info.</h2>
        <form method="POST" action="courier.php">
            <input type="hidden" id="updateCourierInfo" name="updateCourierInfo">

            <h3>Update General Info:</h3>
            Your Courier ID: <input type="text" name="courier_id"> <br /><br />
            <input type="checkbox" name="updateName" id="updateName">
            <label for="updateName">
            New Name: <input type="text" name="newName">
            </label><br /><br />
            <input type="checkbox" name="updatePhoneNumber" id="updatePhoneNumber">
            <label for="updatePhoneNumber">
            New Phone Number: <input type="text" name="newPhoneNumber">
            </label><br /><br />

            <h3>Update Vehicle Courier Info:</h3>
            <input type="checkbox" name="updateDriverLicense" id="updateDriverLicense">
            <label for="updateDriverLicense">
            New Driver License: <input type="text" name="newDriverLicense">
            </label><br /><br />
            <input type="checkbox" name="updateValidVehicle" id="updateValidVehicle">
            <label for="updateValidVehicle">
            Have Valid Vehicle?:             
            <select name="newValidVehicle" id="newValidVehicle">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select>
            </label><br /><br />
            <input type="checkbox" name="updateValidInsurance" id="updateValidInsurance">
            <label for="updateValidInsurance">
            Have Valid Insurance?:             
            <select name="newValidInsurance" id="newValidInsurance">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select>
            </label><br /><br />

            <h3>Update Bicycle Courier Info:</h3>
            <input type="checkbox" name="updateValidBicycle" id="updateValidBicycle">
            <label for="updateValidBicycle">
            Have Valid Bicycle?:             
            <select name="newValidBicycle" id="newValidBicycle">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select>
            </label><br /><br />

            <h3>Update Foot Courier Info:</h3>
            <input type="checkbox" name="updateBusPass" id="updateBusPass">
            <label for="updateBusPass">
            New BusPass: <input type="text" name="newBusPass">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

    

        <hr>

        <h2>Enter Your Courier ID and Unregister Your Courier Standing.</h2>
        <form method="POST" action="courier.php">
            <input type="hidden" id="deleteCourier" name="deleteCourier">
            Your Courier ID: <input type="text" name="courier_id">
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Courier ID And Check All Orders You Have Delivered.</h2>
        <form method="GET" action="courier.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Courier ID: <input type="text" name="courier_id">
            <input type="submit" name="displayOrders"></p>
        </form>

        <hr>

        <h2>Enter Your Courier ID And Check Your Current Standing.</h2>
        <form method="GET" action="courier.php">
            <input type="hidden" id="printAllTables" name="printAllTables">
            Your Courier ID: <input type="text" name="courier_id">
            <input type="submit" name="displayTables"></p>
        </form>

        <h2>Display All Courier Related Tables.</h2>
        <form method="GET" action="courier.php">
            <input type="hidden" id="checkAllTables" name="checkAllTables">
            <input type="submit" name="checkTables"></p>
        </form>

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


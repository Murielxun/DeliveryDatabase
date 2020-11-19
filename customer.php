
  <html>
    <head>
        <title>Customer</title>
    </head>

    <body>

        <hr>

        <h2>New to This Delivery App? First Register As a Customer!</h2>
        <form method="POST" action="customer.php">
            <input type="hidden" id="insertCustomer" name="insertCustomer">
            Customer ID: <input type="text" name="customer_id"> <br /><br />
            Email: <input type="text" name="email"> <br /><br />
            Name: <input type="text" name="name"> <br /><br />
            Phone Number: <input type="text" name="phone_number"> <br /><br />
            Age:  <input type="number" name="age"  step="1" min="0" max="120"> <br /><br />
            Postal Code: <input type="text" name="postal_code"> <br /><br />
            Street Address: <input type="text" name="street_address"> <br /><br />
            City: <input type="text" name="city"> <br /><br />
            Province: <input type="text" name="province"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>
    
        <hr>
        <h2>Enter Your Customer ID And Check Your Current Standing.</h2>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkSingleCustomer" name="checkSingleCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" name="displaySingleCustomer"></p>
        </form>

        <hr>

        <h2>Enter Your Customer ID and Update Your Personal Info.</h2>
        <form method="POST" action="customer.php">
            <input type="hidden" id="updateCustomerInfo" name="updateCustomerInfo">
            Your Customer ID: <input type="text" name="customer_id"> <br /><br />
            <input type="checkbox" name="updateName" id="updateName">
            <label for="updateName">
            New Name: <input type="text" name="newName">
            </label><br /><br />
            <input type="checkbox" name="updatePhoneNumber" id="updatePhoneNumber">
            <label for="updatePhoneNumber">
            New Phone Number: <input type="text" name="newPhoneNumber">
            </label><br /><br />
            <input type="checkbox" name="updateEmail" id="updateEmail">
            <label for="updateEmail">
            New Email: <input type="text" name="newEmail">
            </label><br /><br />
            <input type="checkbox" name="updateAge" id="updatePhoneAge">
            <label for="updateAge">
            New Age: <input type="number" name="age"  step="1" min="0" max="120">
            </label><br /><br />
            <input type="checkbox" name="updateStreetAddress" id="updateStreetAddress">
            <label for="updateStreetAddress">
            New Street Address: <input type="text" name="newStreetAddress">
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

        <h2>Enter Your Customer ID And Unregister Your Customer Standing.</h2>
        <form method="POST" action="customer.php">
            <input type="hidden" id="deleteCustomer" name="deleteCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>
        <h2>Buy Giftcard For Yourself Or Your Friend!</h2>
        <form method="POST" action="customer.php">
            <input type="hidden" id="insertGiftCard" name="insertGiftCard">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            Card Number: <input type="text" name="card_number"><br /><br />
            Recipient Name: <input type="text" name="recipient_name" value="Friend"><br /><br />
            Recipient Email: <input type="text" name="recipient_email"><br /><br />
            Balance: <input type="number" name="balance"  step="0.01"><br /><br />
            Expiry Date: <input type="datetime-local" name="expiry_date"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>
        <h2>Search For Coupon Code And Redeem It!</h2>
        <h3>Check All Coupon Code.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="printAllCouponCode" name="printAllCouponCode">
            <input type="submit" name="displayAllCouponCode"></p>
        </form>
        <h3>Search For Coupon Code With Discount Between A Given Price Range.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkRelatedCouponCode" name="checkRelatedCouponCode">
            <input type="checkbox" name="fromPrice" id="fromPrice">
            <label for="fromPrice">
            Higher Than: <input type="number" name="fromPrice"  step="0.01">
            </label><br /><br />
            <input type="checkbox" name="toPrice" id="toPrice">
            <label for="toPrice">
            Lower Than: <input type="number" name="toPrice"  step="0.01">
            </label><br /><br />
            <input type="submit" name="displayRelatedCouponCode"></p>
        </form>
        <h3>Redeem Coupon Code</h3>
        <form method="POST" action="customer.php">
            <input type="hidden" id="insertReceives" name="insertReceives">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            Coupon Code: <input type="text" name="coupon_code"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Search For Giftcard.</h2>
        <h3>Enter Your Email And Check All Giftcards You Own.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkOwnedGiftcards" name="checkOwnedGiftcards">
            Your Email: <input type="text" name="recipient_email"><br /><br />
            <input type="submit" name="displayOwnedGiftcards"></p>
        </form>
        <h3>Enter Your Customer ID And Check All Giftcard You Bought.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkBoughtGiftcards" name="checkBoughtGiftcards">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" name="displayBoughtGiftcards"></p>
        </form>

        <hr>

        <h2>Explore Restaurants!</h2>
        <h3>Check All Restaurants.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllRestaurants" name="checkAllRestaurants">
            <input type="submit" name="displayAllRestaurants"></p>
        </form>
        <h3>Search For Resturant Within A Certain City.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkCityRestaurants" name="checkCityRestaurants">
            City: <input type="text" name="city"> <br /><br />
            <input type="submit" name="displayCityRestaurants"></p>
        </form>
        <h3>Search For Resturant Within A Certain Category.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkCategoryRestaurants" name="checkCategoryRestaurants">
            Category: <input type="text" name="category"> <br /><br />
            <input type="submit" name="displayCategoryRestaurants"></p>
        </form>
        <h3>Search For Restaurant With Rating Between A Given Range</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkRatingRestaurants" name="checkRatingRestaurants">
            <input type="checkbox" name="fromRating" id="fromRating">
            <label for="fromRating">
            Higher Than: <input type="number" name="fromRating" step="0.01" min="0" max="10">
            </label><br /><br />
            <input type="checkbox" name="toRating" id="toRating">
            <label for="toRating">
            Lower Than: <input type="number" name="toRating" step="0.01" min="0" max="10">
            </label><br /><br />
            <input type="submit" name="displayRatingRestaurants"></p>
        </form>
        <h3>Advanced Search.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAdvancedRestaurants" name="checkkAdvancedRestaurants">
            City: <input type="text" name="city"> <br /><br />
            Category: <input type="text" name="category"> <br /><br />
            Rating Higher Than: <input type="number" name="fromRating" step="0.01" min="0" max="10"> <br /><br />
            Rating Lower Than: <input type="number" name="toRating" step="0.01" min="0" max="10"> <br /><br />
            <input type="submit" name="displaykAdvancedRestaurants"></p>
        </form>

        <hr>

        <h2>Check Your Order History And Place New Order!</h2>
        <h3>Enter Your Customer ID And Check All Orders You Placed.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Customer ID: <input type="text" name="customer_id"> <br /><br />
            <input type="submit" name="displayAllOrders"></p>
        </form>
        <h3>Enter Restaurant ID To Check Their Menu.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkMenuItems" name="checkMenuItems">
            Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            <input type="submit" name="displayMenuItems"></p>
        </form>
        <h3>Enter Your Customer ID And Place Order!</h3>
        <form method="POST" action="customer.php">
            <input type="hidden" id="insertOrders" name="insertOrders">
            Customer ID: <input type="text" name="customer_id"> <br /><br />
            Order Number: <input type="text" name="order_number"> <br /><br />
            Payment Method: <input type="text" name="payment_method"> <br /><br />
            Delivery Address: <input type="text" name="delivery_address"> <br /><br />
            Courier Tip: <input type="text" name="courier_tips"> <br /><br />
            Menu Item: <input type="text" name="menu_items"> <br /><br />
            <input type="checkbox" name="useCoupon" id="useCoupon">
            <label for="useCoupon">
            Coupon Code: <input type="text" name="couponUsed">
            </label><br /><br />
            <input type="checkbox" name="useGiftcard" id="useGiftcard">
            <label for="useGiftcard">
            Giftcard Number: <input type="text" name="giftcardUsed">
            </label><br /><br />
            <input type="submit" value="Submit" name="insertOrders"></p>
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


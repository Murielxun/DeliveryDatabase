
  <html>
    <head>
        <title>Customer</title>
    </head>

    <link rel="stylesheet" href="style.css">

    <body class = "courierBody">
    <div class = "restaurant">
        <h1>Customer Page</h1>
    </div>
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
        <h2>Enter Your Customer ID to View Your Current Reward Tier and Reward Point Balance.</h2>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkSingleCustomer" name="checkSingleCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" name="checkCustomer"></p>
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
            New Postal Code: <input type="text" name="newPostalCode">
            </label><br /><br />
            <input type="checkbox" name="updateCityAndProvince" id="updateCityAndProvince">
            <label for="updateCityAndProvince">
            New City: <input type="text" name="newCity"><br /><br />
            New Province: <input type="text" name="newProvince">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Customer ID to Delete Your Account.</h2>
        <form method="POST" action="customer.php">
            <input type="hidden" id="deleteCustomer" name="deleteCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>
        <h2>Buy Giftcard for Yourself or Your Friend!</h2>
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
        <h2>Search For Coupon Codes!</h2>
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

        <h2>Check Your Order History And Place New Orders!</h2>
        <h3>Enter Your Customer ID And Check All Orders You Placed.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Customer ID: <input type="text" name="customer_id"> <br /><br />
            <input type="submit" name="displayAllOrders"></p>
        </form>
        <h3>Enter a Restaurant ID To Check Their Menu.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkMenuItems" name="checkMenuItems">
            Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            <input type="submit" name="displayMenuItems"></p>
        </form>
        <h3>Enter Your Customer ID And Place an Order!</h3>
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
        $db_conn =  OCILogon("ora_jeonseol", "a39733985", "dbhost.students.cs.ubc.ca:1522/stu"); 
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

        function printCustomerResult($result) { 
            echo "<br>Retrieved customer data:<br>";
            echo "<table>";
            echo "<tr><th>reward_points</th><th>rewards_tier</th></tr>";

            $row = OCI_Fetch_Array($result, OCI_BOTH);
            echo "$row[0]";
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; 
            

            echo "</table>";
        }


        function connectToDB() {
            global $db_conn;


            $db_conn = OCILogon("ora_jeonseol", "a39733985", "dbhost.students.cs.ubc.ca:1522/stu");

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

        function handleInsertCustomer(){
            global $db_conn;

            $cus_id = $_POST["customer_id"];

            // Check if customer_id already exists; if so, reject the input
            $id_is_in_use = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
            $row = OCI_Fetch_Array($id_is_in_use, OCI_BOTH);
        
            if ($row[0] != 0) {
                $err_message = 'This Customer ID is already is use. Please choose another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else {
                $acc_balance = 0.0;
                $rew_points = 0;
                $rew_tier = 'Bronze';
                $pos_code = $_POST['postal_code'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $phone_num = $_POST['phone_number'];
                $street_addr = $_POST['street_address'];
                $name = $_POST['name'];
                
                // Check if postal code already exists in Address; if not, need to add it to Address
                $unique_pos_code = executePlainSQL("select count(*) from Address where postal_code = '$pos_code'");
                $row = OCI_Fetch_Array($unique_pos_code, OCI_BOTH);
                if ($row[0] == 0) {
                    executePlainSQL("INSERT into Address VALUES ('$pos_code', '$city', '$province')");
                }

                executePlainSQL("INSERT into Customer VALUES ($cus_id, '$email', $age, '$phone_num', '$street_addr', 
                                                             '$pos_code', '$name', $rew_points, '$rew_tier', $acc_balance)");
            }

            OCICommit($db_conn);
        }

        function handleCheckCustomer() {
            global $db_conn;
            $cus_id = $_GET['customer_id'];
            $result = executePlainSQL("SELECT * FROM Customer WHERE customer_id = $cus_id");
            printCustomerResult($result);


        }

        function handleUpdateCustomerInfo() {
            global $db_conn;

            $cus_id = $_POST['customer_id'];
            if (isset($_POST['updateName'])) {
                $new_name = $_POST['newName'];
                executePlainSQL("UPDATE Customer SET name= '$new_name' WHERE customer_id = $cus_id");
            }
            if (isset($_POST['updatePhoneNumber'])) {
                $new_phone_number = $_POST['newPhoneNumber'];
                executePlainSQL("UPDATE Customer SET phone_number= '$new_phone_number' WHERE customer_id = $cus_id");
            }
            if (isset($_POST['updateEmail'])) {
                $new_email = $_POST['newEmail'];
                executePlainSQL("UPDATE Customer SET email= '$new_email' WHERE customer_id = $cus_id");
            }
            if (isset($_POST['updateAge'])) {
                $new_age = $_POST['age'];
                executePlainSQL("UPDATE Customer SET age= '$new_age' WHERE customer_id = $cus_id");
            }
            if (isset($_POST['updateStreetAddress'])) {
                $new_addr = $_POST['newStreetAddress'];
                executePlainSQL("UPDATE Customer SET street_address= '$new_addr' WHERE customer_id = $cus_id");
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
                if (array_key_exists('insertCustomer', $_POST)) {
                    handleInsertCustomer();
                } else if (array_key_exists('updateCustomerInfo', $_POST)) {
                    handleUpdateCustomerInfo();
                } else if (array_key_exists('deleteCustomer', $_POST)) {
                    handleDeleteCustomer();
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
                } else if (array_key_exists('checkSingleCustomer', $_GET)) {
                    handleCheckCustomer();
                }
                disconnectFromDB();
            }
        }

        if (isset($_POST['insertSubmit']) || isset($_POST['updateSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['printAllTables']) || isset($_GET['checkAllOrders'])|| isset($_GET['checkAllTables']) ||
            isset($_GET['checkCustomer'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>

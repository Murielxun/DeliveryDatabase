
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
        <h2>Enter Your Customer ID to View Your Current Reward Tier and Reward Point Balance.</h2>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkSingleCustomer" name="checkSingleCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" name="checkCustomer"></p>
        </form>

        <hr>

        <h2>Enter Your Customer ID to Update Your Personal Info.</h2>
        <h3> Check the boxes next to the information you would like to update. </h3>
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
            <input type="checkbox" name="updateAddress" id="updateAddress">
            <label for="updateAddress">
            Update your Address (Please fill out all of the following 4 fields):
            </label><br /><br />
            New Street Address: <input type="text" name="newStreetAddress">
            </label><br /><br />
            New Postal Code: <input type="text" name="newPostalCode">
            </label><br /><br />
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
    
        <h3>Add a Coupon to Your Account</h3>
        <form method="POST" action="customer.php">
            <input type="hidden" id="redeemCoupon" name="redeemCoupon">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            Coupon Code: <input type="text" name="coupon_code"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Explore Restaurants!</h2>
        <h3>View All Restaurants In Your City.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllRestaurants" name="checkAllRestaurants">
            <input type="submit" name="displayAllRestaurants"></p>
        </form>
        
        <h3>Search For Resturants Within A Certain Category.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkCategoryRestaurants" name="checkCategoryRestaurants">
            Category: <input type="text" name="category"> <br /><br />
            <input type="submit" name="displayCategoryRestaurants"></p>
        </form>

        <hr>

        <h3>View All Restaurants that Have a Rating Greater Than Some Value.</h3>
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

        <hr>

        <h3>For each restaurant category, find the restaurants that have the highest rating in that category.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAdvancedRestaurants" name="checkkAdvancedRestaurants">
            City: <input type="text" name="city"> <br /><br />
            Category: <input type="text" name="category"> <br /><br />
            Rating Higher Than: <input type="number" name="fromRating" step="0.01" min="0" max="10"> <br /><br />
            Rating Lower Than: <input type="number" name="toRating" step="0.01" min="0" max="10"> <br /><br />
            <input type="submit" name="displaykAdvancedRestaurants"></p>
        </form>

        <hr>

        <h2>Find the restaurant categories that have the lowest average price of menu items compared to all other restaurant categories</h2>
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

        <h2>Check Your Order History</h2>
        <h3>Enter Your Customer ID to Check Your Order History.</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Customer ID: <input type="text" name="customer_id"> <br /><br />
            <input type="submit" name="displayAllOrders"></p>
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
            echo "<br>Retrieved Customer Data:<br>";
            echo "<table>";
            echo "<tr><th>Your Reward Points</th><th>Your Reward Tier</th></tr>";

            $row = OCI_Fetch_Array($result, OCI_BOTH);
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

            // Check if customer_id field was left empty
            if (strlen($cus_id) == 0) {
                $err_message = 'Customer ID cannot be empty. Please enter a customer ID and try again.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                    }
                </script>";
            }
            else {
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

            
        }

        function handleCheckCustomer() {
            global $db_conn;
            $cus_id = $_GET['customer_id'];
            $result = executePlainSQL("SELECT reward_points, rewards_tier FROM Customer WHERE customer_id = $cus_id");
            printCustomerResult($result);


        }

        function handleUpdateCustomerInfo() {
            global $db_conn;

            // Check if customer_id field was left empty
            $cus_id = $_POST['customer_id'];
            if (strlen($cus_id) == 0) {
                $err_message = 'Please enter a valid customer ID and try again.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                    }
                </script>";
            }
            else {
                // Check if customer_id exists
                $id_is_in_use = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
                $row = OCI_Fetch_Array($id_is_in_use, OCI_BOTH);
            
                if ($row[0] == 0) {
                    $err_message = 'This Customer ID does not exist. Please enter another one.';
                    echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                    // To not make the error message appear again after the page is refreshed
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";
                }
                
                else {
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
                    
                    if (isset($_POST['updateAddress'])) {
                        $new_addr = $_POST['newStreetAddress'];
                        $new_pos_code = $_POST['newPostalCode'];
                        $new_city = $_POST['newCity'];
                        $new_province = $_POST['newProvince'];
                        // Check for any empty strings
                        if (strlen($new_addr) == 0 || strlen($new_pos_code) == 0 
                            || strlen($new_city == 0) || strlen($new_province == 0)) {
                                $err_message = 'One or more of the required fields are empty. 
                                                Please fill out all the required fields and try again.';
                                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                                // To not make the error message appear again after the page is refreshed
                                echo "<script>
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
                                </script>";
                            }
                        else {
                            $result = executePlainSQL("SELECT COUNT(*) FROM Address WHERE postal_code = '$new_pos_code'");
                            $check_if_exists = OCI_Fetch_Array(result, OCI_BOTH);
                            if ($check_if_exists[0] == 0) {
                                executePlainSQL("INSERT INTO Address VALUES ('$new_pos_code', '$new_city', '$new_province')");
                            }
                            executePlainSQL("UPDATE Customer SET street_address= '$new_addr' WHERE customer_id = $cus_id");
                            executePlainSQL("UPDATE Customer SET postal_code= '$new_pos_code' WHERE customer_id = $cus_id");
                        }
                    }


                    $message = 'Update was successful!';
                                echo "<script type = 'text/javascript'> alert('$message');</script>";

                                // To not make the error message appear again after the page is refreshed
                                echo "<script>
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
                                </script>";

                }

            }

            OCICommit($db_conn);
            
        }

        function handleDeleteCustomer() {
            global $db_conn;

            // Check if customer_id exists in the database
            $cus_id = $_POST['customer_id'];
            $id_is_in_use = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
            $row = OCI_Fetch_Array($id_is_in_use, OCI_BOTH);
            
            if ($row[0] == 0) {
                $err_message = 'This Customer ID does not exist. Please enter another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else {
                executePlainSQL("DELETE FROM Customer WHERE customer_id = $cus_id");
                $message = 'Your account has been successfully deleted!';
                echo "<script type = 'text/javascript'> alert('$message');</script>";

                // To not make the message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";

            }

            OCICommit($db_conn);

        }

        function handleRedeemCoupon() {
            global $db_conn;
            $cus_id = $_POST['customer_id'];
            $coupon = $_POST['coupon_code'];

            // Check if customer_id and coupon_code exists in the database
            $id_is_in_use = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
            $row = OCI_Fetch_Array($id_is_in_use, OCI_BOTH);
            $code_exists = executePlainSQL("select count(*) from Coupon where coupon_code = $coupon");
            $row2 = OCI_Fetch_Array($code_exists, OCI_BOTH);
            
            if ($row[0] == 0) {
                $err_message = 'This Customer ID does not exist. Please enter another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else if ($row2[0] == 0) {
                $err_message = 'This coupon code is invalid. Please enter another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else {
                executePlainSQL("INSERT INTO Receives VALUES($cus_id, '$coupon')");
                $message = 'Coupon successfully added to account!';
                echo "<script type = 'text/javascript'> alert('$message');</script>";

                // To not make the message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }

            OCICommit($db_conn);

        }


        function  handleDisplayAllRestaurants() {
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
                } else if (array_key_exists('redeemCoupon', $_POST)) {
                    handleRedeemCoupon();
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
                } else if (array_key_exists('checkAllRestaurants', $_GET)) {
                    handleDisplayAllRestaurants();
                }
                disconnectFromDB();
            }
        }

        if (isset($_POST['insertSubmit']) || isset($_POST['updateSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['printAllTables']) || isset($_GET['displayAllRestaurants'])|| isset($_GET['checkAllTables']) ||
            isset($_GET['checkCustomer'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>


  <html>
    <head>
        <title>Customer</title>
    </head>

    <link rel="stylesheet" href="style.css">

    <body class = "customerBody">
    <div class = "customer">
        <h1> Customer Page </h1>
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

        <h2> Manage Your Customer Account Here! </h2>
        <h3>View Your Current Reward Tier and Reward Point Balance:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkSingleCustomer" name="checkSingleCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" name="checkCustomer"></p>
        </form>

        <br>

        <h3>Update Your Personal Info:</h3>
        <h4> (Check the boxes next to the information you would like to update.) </h4>
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

        <br>

        <h3>Delete Your Account:</h3>
        <h4>Warning: This action cannot be undone! </h4>
        <form method="POST" action="customer.php">
            <input type="hidden" id="deleteCustomer" name="deleteCustomer">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <br>

        <h3>Add a Coupon to Your Account:</h3>
        <form method="POST" action="customer.php">
            <input type="hidden" id="redeemCoupon" name="redeemCoupon">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            Coupon Code: <input type="text" name="coupon_code"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <br>

        <hr>

        <h2> Looking for the Perfect Gift? </h2>
        <h3> Buy a Gift Card for Yourself or a Friend! </h3>
        <form method="POST" action="customer.php">
            <input type="hidden" id="buyGiftCard" name="buyGiftCard">
            Your Customer ID: <input type="text" name="customer_id"><br /><br />
            Recipient's Email: <input type="text" name="email"><br /><br />
            Recipient's Name: <input type="text" name="name"><br /><br />
            Gift Card Balance (minimum $5): <input type="number" min= "5" name="balance"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <br>

        <hr>

        <h2>Explore Restaurants!</h2>
        <h3>View The List Of All Restaurants:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllRestaurants" name="checkAllRestaurants">
            <input type="submit" name="displayAllRestaurants"></p>
        </form>

        <br>
        
        <h3>Search For Resturants Within A Certain Category:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkCategoryRestaurants" name="checkCategoryRestaurants">
            Category: <input type="text" name="category"> <br /><br />
            <input type="submit" name="displayCategoryRestaurants"></p>
        </form>

        <br>

        <h3>View All Restaurants that Have a Rating Greater Than Some Value:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkRatingRestaurants" name="checkRatingRestaurants">
            Higher Than: <input type="number" name="fromRating" step="0.1" min="0" max="10"> <br/><br/>
            <input type="submit" name="displayRatingRestaurants"></p>
        </form>

        <br>

        <h3>For Each Restaurant Category, Find the Restaurant(s) that Has the Highest Rating in that Category:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkHighestRating" name="checkHighestRating">
            <input type="submit" name="displayHighestRating"></p>
        </form>

        <br>

        <h3>Find Which Restaurant Category Has the Lowest Average Price of Menu Items Compared to All Other Restaurant Categories:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkLowestMenuPrice" name="checkLowestMenuPrice">
            <input type="submit" name="displayLowestMenuPrice"></p>
        </form>

        <br>


        <hr>

        <h2>Check Your Order History And Place a New Order!</h2>
        <h3>Check Your Order History:</h3>
        <form method="GET" action="customer.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            Your Customer ID: <input type="text" name="customer_id"> <br /><br />
            <input type="submit" name="displayAllOrders"></p>
        </form>

        <br>

        <h3>Place a New Order:</h3>
        <form method="POST" action="customer.php">
        <input type="hidden" id="insertOrder" name="insertOrder">
            Customer ID: <input type="text" name="customer_id"> <br /><br />
            Restaurant ID: <input type="text" name="restaurant_id"> <br /><br />
            Delivery Address: <input type="text" name="delivery_addr"> <br /><br />
            Menu Items (Separate items with a comma): <input type="text" name="menu_items"> <br /><br />
            Courier Tip:  <input type="number" name="tip" step="0.01" min="0"> <br /><br />
            Payment Method: <input type="text" name="payment_meth"> <br /><br />
            (Optional) Gift Card Number: <input type="number" name="card_number"> <br /><br />
            (Optional) Coupon Code: <input type="text" name="coupon_code"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <br>

        <a href="mainpage.php">Return to Main Page</a> <br/><br/>

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

        function printRestaurantResults($result) {
            echo "<br>Retrieved List of All Restaurants:<br>";
            echo "<table>";
            echo "<tr><th>Restaurant ID</th><th>Restaurant Name</th><th>Category</th><th>Rating</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }
            
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
            $result = executePlainSQL("SELECT restaurant_id, name, category, rating FROM Restaurant");
            printRestaurantResults($result);

        }

        function  handleDisplayCategories() {
            global $db_conn;
            $category = $_GET['category'];

            // Check if category exists
            $result = executePlainSQL("SELECT count(*) FROM Restaurant WHERE category='$category'");
            $row = OCI_Fetch_Array($result, OCI_BOTH);
            if ($row[0] == 0) {
                $err_message = 'This Category does not exist. Please enter another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            } 
            else {
                $result = executePlainSQL("SELECT restaurant_id, name, rating FROM Restaurant WHERE category= '$category'");
                echo "<br>Retrieved List of All Restaurants Within Selected Category:<br>";
                echo "<table>";
                echo "<tr><th>Restaurant ID</th><th>Restaurant Name</th><th>Rating</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>"; 
                }
                
                echo "</table>";

            }
            
        }

        function handleDisplayRatings() {
            global $db_conn;
            $val = $_GET['fromRating'];

            $result = executePlainSQL("SELECT restaurant_id, name, category, rating FROM Restaurant WHERE rating> '$val'");
            echo "<br>Retrieved List of All Restaurants That Have a Rating Higher Than the Selected Value:<br>";
            echo "<table>";
            echo "<tr><th>Restaurant ID</th><th>Restaurant Name</th><th>Category</th><th>Rating</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }
            
            echo "</table>";

        }

        function handleDisplayHighestRating() {
            global $db_conn;
            $result = executePlainSQL("SELECT R.restaurant_id, R.name, R.category, max_rating 
                                        FROM Restaurant R, (SELECT R2.category AS current_category, MAX(rating) AS max_rating
                                                            FROM Restaurant R2
                                                            GROUP BY R2.category)
                                        WHERE R.rating >= max_rating AND R.category = current_category");
            
            echo "<br>Retrieved List of Restaurants That Have the Highest Rating for Each Category:<br>";
            echo "<table>";
            echo "<tr><th>Restaurant ID</th><th>Restaurant Name</th><th>Category</th><th>Rating</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }
            
            echo "</table>";

        }

        function handleDisplayLowestMenuPrice() {
            global $db_conn;
            $result = executePlainSQL("SELECT R.category, AVG(M.price)
                                        FROM Restaurant R, Menu_Items_Has M
                                        WHERE R.restaurant_id = M.restaurant_id
                                        GROUP BY R.category 
                                        HAVING AVG(M.price) <= ALL (SELECT AVG(M2.price)
                                                                    FROM Restaurant R2, Menu_Items_Has M2
                                                                    WHERE R2.restaurant_id = M2.restaurant_id
                                                                    GROUP BY R2.category)");
            
            echo "<br>Retrieved the Categories That Have the Lowest Average Price of Menu Items:<br>";
            echo "<table>";
            echo "<tr><th>Restaurant Category</th><th>Average Price of Menu Items</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; 
            }
            
            echo "</table>"; 
        }

        function handleDisplayAllOrders() {
            global $db_conn;
            $cus_id = $_GET['customer_id'];

            // Check if customer_id exists in the database
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
                $result = executePlainSQL("SELECT date_placed, order_number, restaurant_id, menu_items, food_subtotal 
                                            FROM Orders WHERE customer_id= $cus_id");
                echo "<br>Retrieved Order History:<br>";
                echo "<table>";
                echo "<tr><th>Date Placed</th><th>Order Number</th><th>Restaurant ID</th><th>Menu Items Ordered</th><th>Food Subtotal</th></tr>";
    
                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>". $row[4] . "</td></tr>"; 
                }
                
                echo "</table>"; 

            }
            
        }

        function handleInsertOrder() {
            global $db_conn;

            $cus_id = $_POST["customer_id"];
            $res_id = $_POST['restaurant_id'];

            
            // Check if customer_id and restaurant_id exist
            $result = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
            $result2 = executePlainSQL("select count(*) from Restaurant where restaurant_id = $res_id");
            $row = OCI_Fetch_Array($result, OCI_BOTH);
            $row2 = OCI_Fetch_Array($result2, OCI_BOTH);
            
            if ($row[0] == 0) {
                $err_message = 'This Customer ID does not exist. Please choose another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else if ($row2[0] == 0) {
                $err_message = 'This Restaurant ID does not exist. Please choose another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else {
                $delivery_addr = $_POST['delivery_addr'];

                // Get restaurant address
                $result = executePlainSQL("SELECT street_address FROM Restaurant WHERE restaurant_id = $res_id");
                $row = OCI_Fetch_Array($result, OCI_BOTH);
                $res_addr = $row[0];

                // Randomly generate a food subtotal
                $food_subtotal = floor((rand(15, 145) + lcg_value()) * 100) / 100;

                // Randomly generate a delivery fee
                $rand_fees = array(4.99, 3.99, 2.99, 5.99);
                $index = array_rand($rand_fees, 1);
                $delivery_fee = $rand_fees[$index]; 

                $courier_tip = $_POST['tip'];
                $payment_meth = $_POST['payment_meth'];
                $menu_items = $_POST['menu_items'];

                // Generate random order number and check if it already exists
                $order_number = rand(0, 20000);
                $result = executePlainSQL("SELECT COUNT(*) FROM Orders WHERE order_number = $order_number");
                $row = OCI_Fetch_Array($result, OCI_BOTH);
                while ($row[0] != 0) {
                    $order_number = rand(0, 20000);
                    $result = executePlainSQL("SELECT COUNT(*) FROM Orders WHERE order_number = $order_number");
                    $row = OCI_Fetch_Array($result, OCI_BOTH);
                }

                // Choose a random courier
                $result = executePlainSQL("SELECT courier_id FROM Courier");
                $rand_array = OCI_Fetch_Array($result, OCI_BOTH);
                $index = array_rand($rand_array, 1);
                $courier_id = $rand_array[$index];

                $card_number = $_POST['card_number'];
                $coupon_code = $_POST['coupon_code'];
                if (strlen($_POST['card_number']) == 0) {
                    $card_number = 1000000000;
                }
                if (strlen($_POST['coupon_code']) == 0) {
                    $coupon_code = 'NO_COUPON';
                }

                
                // Insert new order into Orders
                executePlainSQL("INSERT into Orders VALUES ('$delivery_addr', '$res_addr', $food_subtotal, $delivery_fee, $courier_tip, 
                                                            '$payment_meth', '$menu_items', sysdate, $order_number, $cus_id, $courier_id, 
                                                            $res_id, $card_number, '$coupon_code')");

                $message = 'Order was successfully placed!';
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

        function handleInsertGiftCard() {
            global $db_conn;

            $cus_id = $_POST["customer_id"];
            
            // Check if customer_id exists
            $result = executePlainSQL("select count(*) from Customer where customer_id = $cus_id");
            $row = OCI_Fetch_Array($result, OCI_BOTH);
            
            if ($row[0] == 0) {
                $err_message = 'This Customer ID does not exist. Please choose another one.';
                echo "<script type = 'text/javascript'> alert('$err_message');</script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }
            else {
                // Generate random card number and check if it already exists
                $card_number = rand(0, 20000);
                $result = executePlainSQL("SELECT COUNT(*) FROM Giftcard_Buys WHERE card_number = $card_number");
                $row = OCI_Fetch_Array($result, OCI_BOTH);
                while ($row[0] != 0) {
                    $card_number = rand(0, 20000);
                    $result = executePlainSQL("SELECT COUNT(*) FROM Giftcard_Buys WHERE card_number = $card_number");
                    $row = OCI_Fetch_Array($result, OCI_BOTH);
                }

                $email = $_POST['email'];
                $name = $_POST['name'];
                $balance = $_POST['balance'];
                $balance = floor(($balance * 100) / 100);

                
                // Insert new gift card into Giftcard_Buys
                executePlainSQL("INSERT into Giftcard_Buys VALUES ($cus_id, $card_number, '$email', '$name', 
                                                    TO_DATE('2021-12-31 23:59:59', 'yyyy-mm-dd HH24:mi:ss'), $balance)");

                $message = 'Gift card was successfully purchased!';
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
                } else if (array_key_exists('insertOrder', $_POST)) {
                    handleInsertOrder();
                } else if (array_key_exists('buyGiftCard', $_POST)) {
                    handleInsertGiftCard();
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
                } else if (array_key_exists('checkCategoryRestaurants', $_GET)) {
                    handleDisplayCategories();
                } else if (array_key_exists('checkRatingRestaurants', $_GET)) {
                    handleDisplayRatings();
                } else if (array_key_exists('checkHighestRating', $_GET)) {
                    handleDisplayHighestRating();
                } else if (array_key_exists('checkLowestMenuPrice', $_GET)) {
                    handleDisplayLowestMenuPrice();
                } else if (array_key_exists('checkAllOrders', $_GET)) {
                    handleDisplayAllOrders();
                } 
                disconnectFromDB();
            }
        }

        if (isset($_POST['insertSubmit']) || isset($_POST['updateSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['printAllTables']) || isset($_GET['displayAllRestaurants'])|| isset($_GET['checkAllTables']) ||
            isset($_GET['checkCustomer']) || isset($_GET['displayCategoryRestaurants']) || isset($_GET['displayRatingRestaurants']) ||
            isset($_GET['displayHighestRating']) || isset($_GET['displayLowestMenuPrice']) || isset($_GET['displayAllOrders'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>

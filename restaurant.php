
  <html>
    <head>
        <title>Restaurant</title>
    </head>
    <link rel="stylesheet" href="style.css">

    <style>
    * {
      font-family: sans-serif;
    }
    </style>

    <body class = "restaurantBody">

    <div class = "restaurant">
        <h1>Restaurant Page</h1>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

        <hr>
        <h2>Become A Partner Restaurant!</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="insertRestaurant" name="insertRestaurant">
            <label>Restaurant ID: </label><input type="text" name="restaurant_id"> <br /><br />
            <label>Name: </label> <input type="text" name="name"> <br /><br />
            <label>Postal Code: </label><input type="text" name="postal_code"> <br /><br />
            <label>Street Address: </label><input type="text" name="street_address"> <br /><br />
            <label>Category: </label><input type="text" name="category"> <br /><br />
            <label>City: </label><input type="text" name="city"> <br /><br />
            <label>Province: </label><input type="text" name="province"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Check Your Restaurant's Current Info:</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkRestaurant" name="checkRestaurant">
            <label>Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit" name="displayRestaurant"></p>
        </form>

        <hr>

        <h2>Update Your Restaurant's Info:</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="updateRestaurantInfo" name="updateRestaurantInfo">
            <label>Your Restaurant ID:</label> <input type="text" name="restaurant_id"> <br /><br />
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
            Move To A New Location Within The Same City?<br /><br />
            New Postal Code: <input type="text" name="newPostalCode1">
            </label><br /><br />
            <input type="checkbox" name="updateCityAndProvince" id="updateCityAndProvince">
            <label for="updateCityAndProvince">
            Move To Another City? <br /><br />
            New Postal Code: <input type="text" name="newPostalCode2">
            New City: <input type="text" name="newCity">
            New Province: <input type="text" name="newProvince">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr>

        <h2>Delete Your Restaurant From the App:</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteRestaurant" name="deleteRestaurant">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>

        <h2>Manage Your Restaurant's Dishes/Menu:</h2>

        <h3>View Your Restaurant's Dishes:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkDishes" name="checkDishes">
            <label>Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit" name="displayDishes"></p>
        </form>


        <h3>Add New Dishes to Your Restaurant's Menu:</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="insertMenuItem" name="insertMenuItem">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <label>Dish Name: </label><input type="text" name="name"><br /><br />
            <label>Dish Description: </label><input type="text" name="description"><br /><br />
            <label>Ingredient: </label><input type="text" name="ingredient"><br /><br />
            <label>Category: </label><input type="text" name="category"><br /><br />
            <label>Price: </label><input type="number" name="price"  step="0.01"><br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        
        <h3>Change the Information of a Dish in Your Restaurant's Menu:</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="updateMenuItem" name="updateMenuItem">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"> <br /><br />
            <label>Dish Name: </label><input type="text" name="name"> <br /><br />
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


        
        <h3>Delete a Dish from Your Restaurant's Menu:</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteMenuItem" name="deleteMenuItem">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <label>Dish Name: </label><input type="text" name="name"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmit"></p>
        </form>

        <hr>

        <h2>Search For Orders Prepared By Your Restaurant!</h2>
        <h3>View All Orders Your Restaurant Has Prepared:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkAllOrders" name="checkAllOrders">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="submit" name="displayAllOrders"></p>
        </form>


        <h3>Search For Orders That Have a Food Subtotal Between A Certain Range:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkPriceOrders" name="checkPriceOrders">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="checkbox" name="fromPrice" id="fromPrice">
            <label for="fromPrice">
            Higher Than: <input type="number" name="min"  step="0.01">
            </label><br /><br />
            <input type="checkbox" name="toPrice" id="toPrice">
            <label for="toPrice">
            Lower Than: <input type="number" name="max"  step="0.01">
            </label><br /><br />
            <input type="submit" name="displayPriceOrders"></p>
        </form>

        <hr>

        <h2>View All Orders That Have Been Placed With Your Restaurant:</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkAllCustomer" name="checkAllCustomer">
            <label>Your Restaurant ID: </label><input type="text" name="restaurant_id"><br /><br />
            <input type="submit" name="displayCustomer"></p>
        </form>

        <hr>

        <h2>Display All Restaurant Related Tables:</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkAllTables" name="checkAllTables">
            <input type="submit" name="displayAllTables"></p>
        </form>
        <hr>

        <h2>Hardcoded Queries</h2>
        <h3>Find All Customers Who Have Ordered From All Restaurants in Montreal, Quebec:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkHardCodeCustomerQuery" name="checkHardCodeCustomerQuery">
            <input type="submit" name="displayHardCodeCustomerQuery"></p>
        </form>

        <h3>Find All Customers Who Have Placed At Least Three Orders With a Food Subtotal Greater Than $20:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkMoreOrderCustomerQuery" name="checkMoreOrderCustomerQuery">
            <input type="submit" name="displayMoreOrderCustomerQuery"></p>
        </form>

        <h3>For All Restaurants That Have a Rating That is Higher Than a Specific Value, Return the Average Food Subtotal for 
            the Orders Made at Each of Those Restaurants:</h3>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkHigherRatingRestaurantQuery" name="checkHigherRatingRestaurantQuery">
            Rating: <input type="number" name="rating" step="0.1" min="0" max="10"> <br /><br />
            <input type="submit" name="displayHigherRatingRestaurantQuery"></p>
        </form>

        <a href="mainpage.php">Return to Main Page</a>

        <br>
        <br>

        <?php

        $success = True;
        $db_conn =  NULL;
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

        function connectToDB() {
            global $db_conn;
            $db_conn = OCILogon("ora_vicche04", "a13090618", "dbhost.students.cs.ubc.ca:1522/stu");

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



        //Insert Menu
        function handleInsertMenu() {
            global $db_conn;
            $name = $_POST['name'];
            $restaurant_id = $_POST['restaurant_id'];
            
            $name_is_in_use = executePlainSQL("SELECT count(*) FROM Menu_Items_Has  WHERE restaurant_id=" . $restaurant_id . "AND name = '" . $name . "'");
            $row = OCI_Fetch_Array($name_is_in_use, OCI_BOTH);
        
            if ($row[0] != 0) {
                $err_message = 'This Dish Name is already is use. Please choose another one.';
                echo "<script type='text/javascript'> swal('Error!', '$err_message', 'error'); </script>";

                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            } else {
                $tuple1 = array (
                    ":bind6" => $restaurant_id,
                    ":bind1" => $name,
                    ":bind2" => $_POST['description'],
                    ":bind3" => $_POST['ingredient'],
                    ":bind4" => $_POST['category'],
                    ":bind5" => $_POST['price'],
                );
    
                $alltuples1 = array (
                    $tuple1
                );
    
                executeBoundSQL("insert into Menu_Items_Has values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples1);

                $message = 'Menu Item Was Successfully Added!';
                echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

                // To not make the message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>";
            }

            OCICommit($db_conn);
        }

        //Insert Restaurant
        function handleInsertRestaurant() {
            global $db_conn;
            $restaurant_id = $_POST['restaurant_id'];

            // Check if restaurant_id field was left empty
            if (strlen($restaurant_id) == 0) {
                $err_message = 'Restaurant ID cannot be empty. Please enter a valid restaurant ID and try again.';
                echo "<script type='text/javascript'> swal('Error!', '$err_message', 'error'); </script>";


                // To not make the error message appear again after the page is refreshed
                echo "<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                    }
                </script>";
            }
            else {
                $id_is_in_use = executePlainSQL("SELECT count(*) FROM Restaurant WHERE restaurant_id = $restaurant_id");
                $row = OCI_Fetch_Array($id_is_in_use, OCI_BOTH);
        
                if ($row[0] != 0) {
                    $err_message = 'This Restaurant ID is already is use. Please choose another one.';
                    echo "<script type='text/javascript'> swal('Error!', '$err_message', 'error'); </script>";

                    // To not make the error message appear again after the page is refreshed
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";
                } else {
                    $postal_code = $_POST['postal_code'];
                    $tuple1 = array (
                        ":bind1" => $restaurant_id,
                        ":bind2" => $postal_code,
                        ":bind3" => $_POST['name'],
                        ":bind4" => $_POST['category'],
                        ":bind5" => 10.0,
                        ":bind6" => $_POST['street_address'],
                    );
        
                    $alltuples1 = array (
                        $tuple1
                    );

                    $city = $_POST['city'];
                    $province = $_POST['province'];

                    $unique_pos_code = executePlainSQL("select count(*) from Address where postal_code = '$postal_code'");
                    $row = OCI_Fetch_Array($unique_pos_code, OCI_BOTH);
                    if ($row[0] == 0) {
                        executePlainSQL("INSERT into Address VALUES ('$postal_code', '$city', '$province')");
                    }

                    executeBoundSQL("insert into Restaurant values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples1);

                    $message = 'Restaurant Was Successfully Registered!';
                    echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

                    // To not make the message appear again after the page is refreshed
                    echo "<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                    </script>";
                }

            }
            
            OCICommit($db_conn);
        }

        //print results from a select restaurant
        function printRestaurant($result) { //prints results from a select statement
            echo "<br>Retrieved data from Restaurant:<br>";
            echo "<table>";
            echo "<tr><th>Restaurant_ID</th><th>Postal_Code</th><th>Name</th><th>Category</th><th>Rating</th><th>Street_Address</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["RESTAURANT_ID"] . "</td><td>" . $row["POSTAL_CODE"] . "</td><td>" . $row["NAME"] . "</td><td>" . $row["CATEGORY"] . "</td><td>" . $row["RATING"] . "</td><td>" . $row["STREET_ADDRESS"] . "</td></tr>"; //or just use "echo $row[0]" 
            }

            echo "</table>";
        }


        //handle sql statement for select specific restaurant
        function handleSelectRestaurant() {
            global $db_conn;

            $value = $_GET['restaurant_id'];
            $txt = "SELECT * FROM Restaurant WHERE restaurant_id = " . $value;
            $result = executePlainSQL($txt);
            printRestaurant($result);
        }

        //handle sql for deleting the specific row in menu
        function handleDeleteMenuItem() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
            $dishname = $_POST['name'];
            executePlainSQL("DELETE FROM Menu_Items_Has  WHERE restaurant_id=" . $restaurant_id . "AND name = '" . $dishname . "'");

            $message = 'Menu Item Was Successfully Deleted!';
            echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

            // To not make the message appear again after the page is refreshed
            echo "<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>";

            OCICommit($db_conn);
        }

        //handle sql for deleting the specific row in restaurant
        function handleDeleteRestaurant() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
            executePlainSQL("DELETE FROM Restaurant  WHERE restaurant_id=" . $restaurant_id);

            $message = 'Your Restaurant Was Successfully Deleted!';
            echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

            // To not make the message appear again after the page is refreshed
            echo "<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>";

            OCICommit($db_conn);
        }

        //update  menu
        function handleUpdateMenuItem() {
            global $db_conn;
            $restaurant_id = $_POST['restaurant_id'];
            $olddishname = $_POST['name'];

            if (isset($_POST['updateDescription'])) {
                $newDescription = $_POST['newDescription'];
                executePlainSQL("UPDATE Menu_Items_Has SET description ='" . $newDescription . "' WHERE restaurant_id=" . $restaurant_id . " AND name = '" . $olddishname . "'");
            }

            if (isset($_POST['updateIngredient'])) {
                $newIngredient = $_POST['newIngredient'];
                executePlainSQL("UPDATE Menu_Items_Has SET ingredient ='" . $newIngredient . "' WHERE restaurant_id=" . $restaurant_id . " AND name = '" . $olddishname . "'");
            }
            if (isset($_POST['updateCategory'])) {
                $newCategory = $_POST['newCategory'];
                executePlainSQL("UPDATE Menu_Items_Has SET category ='" . $newCategory . "' WHERE restaurant_id = " . $restaurant_id . " AND name = '" . $olddishname . "'");
            }

            if (isset($_POST['updatePrice'])) {
                $newPrice = $_POST['newPrice'];
                executePlainSQL("UPDATE Menu_Items_Has SET price ='" . $newPrice . "' WHERE restaurant_id=" . $restaurant_id . " AND name = '" . $olddishname . "'");
            }
            if (isset($_POST['updateName'])) {
                $newName = $_POST['newName'];
                executePlainSQL("UPDATE Menu_Items_Has SET name ='" . $newName . "' WHERE restaurant_id = " . $restaurant_id . " AND name = '" . $olddishname . "'");
            }

            $message = 'Menu Item Was Successfully Updated!';
            echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

            // To not make the message appear again after the page is refreshed
            echo "<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>";

            OCICommit($db_conn);
        }


        //update restaurant
        function handleUpdateRestaurant() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
            if (isset($_POST['updateName'])) {
                $newname = $_POST['newName'];
                executePlainSQL("UPDATE Restaurant SET name ='" . $newname . "' WHERE restaurant_id = " . $restaurant_id);
            }
            if (isset($_POST['updateStreetAddress'])) {
                $newStreetAddress = $_POST['newStreetAddress'];
                executePlainSQL("UPDATE Restaurant SET street_address ='" . $newStreetAddress . "' WHERE restaurant_id=" . $restaurant_id);
            }

            if (isset($_POST['updateCategory'])) {
                $newCategory = $_POST['newCategory'];
                executePlainSQL("UPDATE Restaurant SET category ='" . $newCategory . "' WHERE restaurant_id=" . $restaurant_id );
            }
            if (isset($_POST['updatePostalCode'])) {
                $newPostalCode = $_POST['newPostalCode1'];
                $postal_code;
                $city;
                $province;
                $result = executePlainSQL("SELECT A.postal_code, A.city, A.province 
                                            FROM Restaurant R, Address A  WHERE A.postal_code = R.postal_code AND R.restaurant_id =" . $restaurant_id);
                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    $city = $row[1]; 
                    $province = $row[2]; // get saved province and city
                }
                $tuple = array (
                    ":bind1" => $newPostalCode,
                    ":bind2" => $city,
                    ":bind3" => $province
                );
    
                $alltuples = array (
                    $tuple
                );
                executeBoundSQL("insert into Address values (:bind1, :bind2, :bind3)", $alltuples);
                executePlainSQL("UPDATE Restaurant SET postal_code='" . $newPostalCode. "' WHERE restaurant_id=" . $restaurant_id);
            }
            if  (isset($_POST['updateCityAndProvince'])) {
                $newPostalCode = $_POST['newPostalCode2'];
                $newCity = $_POST['newCity'];
                $newProvince = $_POST['newProvince'];
                $tuple = array (
                    ":bind1" => $newPostalCode,
                    ":bind2" => $newCity,
                    ":bind3" => $newProvince
                );
    
                $alltuples = array (
                    $tuple
                );
                executeBoundSQL("insert into Address values (:bind1, :bind2, :bind3)", $alltuples);
                executePlainSQL("UPDATE Restaurant SET postal_code='" . $newPostalCode. "' WHERE restaurant_id=" . $restaurant_id);
            }

            $message = 'Restaurant Information Was Successfully Updated!';
            echo "<script type='text/javascript'> swal('Success!', '$message', 'success'); </script>";

            // To not make the message appear again after the page is refreshed
            echo "<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>";

            OCICommit($db_conn);

        }

        //handle the sql statement for selecting all the orders from the restaurant
        function  handleDisplayAllOrders() {
            global $db_conn;
            $restaurant_id = $_GET['restaurant_id'];
            $result = executePlainSQL("SELECT order_number, restaurant_id,customer_id, date_placed, food_subtotal FROM Orders WHERE restaurant_id=" . $restaurant_id);
            printAllOrderResults($result);

        }

        //handle the sql statement for selecting all the orders within the range(food_subtotal) from the restaurant
        function  handleDisplayOrdersWithInRange() {
            global $db_conn;
            $restaurant_id = $_GET['restaurant_id'];
            $max = PHP_INT_MAX;
            $min = 0;
            if (isset($_GET['fromPrice'])) {
                $min = $_GET['min'];
            }
            if (isset($_GET['toPrice'])) {
                $max = $_GET['max'];
            }

            $result = executePlainSQL("SELECT order_number, restaurant_id, customer_id, date_placed, food_subtotal FROM Orders 
                                        WHERE restaurant_id = " . $restaurant_id . " AND food_subtotal <= " . $max . " AND food_subtotal >= ". $min);
            printAllOrderResults($result);

        }

        //print the orders
        function printAllOrderResults($result) {
            echo "<br>Retrieved Orders from Restaurant:<br>";
            echo "<table>";
            echo "<tr><th>order_number</th><th>restaurant_id</th><th>customer_id</th><th>date_placed</th><th>food_subtotal</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleDisplayAllTables() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM Restaurant");
            printRestaurant($result);
            $result = executePlainSQL("SELECT order_number, restaurant_id, customer_id, date_placed, food_subtotal FROM Orders");
            printAllOrderResults($result);
            $result = executePlainSQL("SELECT * FROM Menu_Items_Has");
            printAllMenuItems($result);
            $result = executePlainSQL("SELECT * FROM Address");
            printAllAddress($result);
        }

        function handleDisplayDishes() {
            global $db_conn;
            $restaurant_id = $_GET['restaurant_id'];
            $result = executePlainSQL("SELECT * FROM Menu_Items_Has WHERE restaurant_id = " . $restaurant_id);
            printAllMenuItems($result);
        }

        function printAllAddress($result) {
            echo "<br>Retrieved Dishes from Address:<br>";
            echo "<table>";
            echo "<tr><th>Postal_Code</th><th>City</th><th>Province</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }

            echo "</table>";
        }

        function printAllMenuItems($result) {
            echo "<br>Retrieved Dishes from your Restaurant:<br>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Description</th><th>Ingredient</th><th>Category</th><th>Price</th><th>Restaurant_ID</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleDisplayCustomer() {
            global $db_conn;
            $restaurant_id = $_GET['restaurant_id'];
            $result = executePlainSQL("SELECT o.order_number, c.customer_id, c.email, c.name, c.phone_number, c.street_address 
                                        FROM Customer c, Restaurant r, Orders o 
                                        WHERE o.customer_id = c.customer_id AND r.restaurant_id = o.restaurant_id AND r.restaurant_id = " . $restaurant_id);
            printAllCustomer($result);
        }
        
        function printAllCustomer($result) {
            echo "<br>Retrieved Information About All Orders Placed With Your Restaurant:<br>";
            echo "<table>";
            echo "<tr><th>Order_Number</th><th>Customer_ID</th><th>Email</th><th>Name</th><th>Phone_Number</th><th>Street_Address</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td></tr>";
            }

            echo "</table>";
        }

        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('deleteMenuItem', $_POST)) {
                    handleDeleteMenuItem();
                }else if (array_key_exists('updateMenuItem', $_POST)) {
                    handleUpdateMenuItem();
                }else if (array_key_exists('insertRestaurant', $_POST)) {
                    handleInsertRestaurant();
                }else if (array_key_exists('updateRestaurantInfo', $_POST)) {
                    handleUpdateRestaurant();
                }else if (array_key_exists('deleteRestaurant', $_POST)) {
                    handleDeleteRestaurant();
                }else if (array_key_exists('insertMenuItem', $_POST)) {
                    handleInsertMenu();
                }
                disconnectFromDB();
            }
        }

        // Find all customers who have ordered from all restaurants in Montreal, Quebec.
        function handleDisplayHardCodeCustomerQuery() {
            global $db_conn;
            $result = executePlainSQL("SELECT C.name, C.customer_id
                                       FROM Customer C
                                       WHERE NOT EXISTS ((SELECT R.restaurant_id
                                                        FROM Restaurant R, Address A
                                                        WHERE R.postal_code = A.postal_code 
                                                            AND A.city = 'Montreal' 
                                                            AND A.province = 'Quebec')
                                                            MINUS (SELECT O.restaurant_id
                                                                    FROM Orders O, Restaurant R2, Address A2
                                                                    WHERE O.restaurant_id = R2.restaurant_id 
                                                                        AND O.customer_id = C.customer_id
                                                                        AND R2.postal_code = A2.postal_code
                                                                        AND A2.city = 'Montreal'
                                                                        AND A2.province = 'Quebec'))");
            
            echo "<br>Find all customers who have ordered from all restaurants in Montreal, Quebec:<br>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Customer ID</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; 
            }
            
            echo "</table>"; 
        }

        function handleDisplayHigherRatingRestaurantQuery() {
            global $db_conn;
            $rating = $_GET['rating'];
            $result = executePlainSQL("SELECT avg_subtotal, R.restaurant_id, R.name, R.rating
                                        FROM Restaurant R, (SELECT R2.restaurant_id AS res_id, avg(food_subtotal) AS avg_subtotal
                                                            FROM Restaurant R2 JOIN Orders O
                                                            ON R2.restaurant_id = O.restaurant_id
                                                            WHERE R2.rating > '$rating'
                                                            GROUP BY R2.restaurant_id)
                                        WHERE R.restaurant_id = res_id");
            echo "<br>Retrieved Restaurant and Order Info: <br>";
            echo "<table>";
            echo "<tr><th>Average Food Subtotal</th><th>Restaurant ID</th><th>Name</th><th>Rating</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; 
            }
            
            echo "</table>";                        
        }

        //Find the IDs of customers who have placed at least three orders, where only orders with a food subtotal > 20 are considered. 
        function handleDisplayMoreOrderCustomerQuery() {
            global $db_conn;
            $result = executePlainSQL("SELECT DISTINCT C.customer_id, COUNT(*)
                                        FROM Orders O, Customer C
                                        WHERE O.customer_id = C.customer_id AND O.food_subtotal > 20
                                        GROUP BY C.customer_id
                                        HAVING COUNT(*) > 2");
            
            echo "<br>Find IDs of Customers Who Have Placed At Least Three Orders, With Food Subtotal Higher Than $20:<br>";
            echo "<table>";
            echo "<tr><th>Customer ID</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td></tr>"; 
            }
            
            echo "</table>"; 
        }

        function handleGETRequest() {
        if (connectToDB()) {
                if (array_key_exists('displayAllOrders', $_GET)) {
                    handleDisplayAllOrders();
                } else if (array_key_exists('displayAllTables', $_GET)) {
                    handleDisplayAllTables();
                } else if (array_key_exists('displayCustomer', $_GET)) {
                    handleDisplayCustomer();
                } else if (array_key_exists('displayRestaurant', $_GET)) {
                    handleSelectRestaurant();
                } else if (array_key_exists('displayPriceOrders', $_GET)) {
                    handleDisplayOrdersWithInRange();
                } else if (array_key_exists('displayDishes', $_GET)) {
                    handleDisplayDishes();
                } else if (array_key_exists('displayHardCodeCustomerQuery', $_GET)) {
                    handleDisplayHardCodeCustomerQuery();
                } else if (array_key_exists('displayMoreOrderCustomerQuery', $_GET)) {
                    handleDisplayMoreOrderCustomerQuery();
                } else if (array_key_exists('displayHigherRatingRestaurantQuery', $_GET)) {
                    handleDisplayHigherRatingRestaurantQuery();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['insertSubmit']) || isset($_POST['updateSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['checkAllOrders']) || isset($_GET['checkAllCustomer']) 
                    || isset($_GET['checkRestaurant']) || isset($_GET['checkAllTables'])) {
            handleGETRequest();
        } else if (isset($_GET['checkPriceOrders']) || isset($_GET['checkDishes']) 
                    || isset($_GET['checkHardCodeCustomerQuery']) || isset($_GET['checkMoreOrderCustomerQuery']) || isset($_GET['checkHigherRatingRestaurantQuery'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>

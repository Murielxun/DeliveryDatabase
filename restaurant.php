
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
            Category: <input type="text" name="category"> <br /><br />
            City: <input type="text" name="city"> <br /><br />
            Province: <input type="text" name="province"> <br /><br />
            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr>

        <h2>Enter Your Restaurant ID And Check Current Standing.</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkRestaurant" name="checkRestaurant">
            Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit Query" name="displayRestaurant"></p>
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
                Old Postal Code: <input type="text" name="oldPostalCode1">
                New Postal Code: <input type="text" name="newPostalCode1">
            </label><br /><br />
            <input type="checkbox" name="updateCityAndProvince" id="updateCityAndProvince">
            <label for="updateCityAndProvince">
                New City: <input type="text" name="newCity">
                New Province: <input type="text" name="newProvince">
            </label><br /><br />
            <input type="submit" value="Submit" name="updateSubmitRestaurant"></p>
        </form>

        <hr>

        <h2>Enter Your Restaurant ID And Unregister Your Restaurant.</h2>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteRestaurant" name="deleteRestaurant">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmitRestaurant"></p>
        </form>

        <hr>

        <h2>Manage Dishes/Menu.</h2>
        <h3>Enter Your Restaurant ID And Add New Dishes.</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="insertMenuItem" name="insertMenuItem">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            Dish Name: <input type="text" name="name"><br /><br />
            Dish Description: <input type="text" name="description"><br /><br />
            Ingredient: <input type="text" name="ingredient"><br /><br />
            Category: <input type="text" name="category"><br /><br />
            Price: <input type="number" name="price"  step="0.01"><br /><br />
            <input type="submit" value="Submit" name="insertSubmitMenu"></p>
        </form>

        
        <h3>Enter Your Restaurant ID And Dish Name To Update Dishes/Menu.</h3>
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
            <input type="submit" value="Submit" name="updateSubmitMenu"></p>
        </form>


        
        <h3>Enter Your Restaurant ID And Dish Name To Delete Dishes.</h3>
        <form method="POST" action="restaurant.php">
            <input type="hidden" id="deleteMenuItem" name="deleteMenuItem">
            Your Restaurant ID: <input type="text" name="restaurant_id"><br /><br />
            Dish Name: <input type="text" name="name"><br /><br />
            <input type="submit" value="Submit" name="deleteSubmitDishes"></p>
        </form>

        <hr>

        <h2>Search For Orders Your Restaurant Prepared!</h2>
        <h3>Enter Your Restaurnt ID And Check All Orders.</h3>
        <form method="GET" action="restaurant.php">
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
            Higher Than: <input type="number" name="min"  step="0.01">
            </label><br /><br />
            <input type="checkbox" name="toPrice" id="toPrice">
            <label for="toPrice">
            Lower Than: <input type="number" name="max"  step="0.01">
            </label><br /><br />
            <input type="submit" name="displayPriceOrders"></p>
        </form>

        <hr>

        <h2>Enter Your Email And Search For Customers Who Have Placed Orders In Your Restaurant.</h2>
        <form method="GET" action="restaurant.php">
            <input type="hidden" id="checkAllCustomer" name="checkAllCustomer">
            Your Restaurant ID: <input type="text" name="restaurant_id">
            <input type="submit" name="displayCustomerWithEmail"></p>
        </form>

        <hr>

        <a href="mainpage.php">Return to Main Page</a>

        <hr />
        <hr />
        <hr />
        <hr />

        <?php

        $success = True;
        $db_conn =  NULL; // edit the login credentials in connectToDB()
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

            //Getting the values from user and insert data into the table
            $tuple1 = array (
                ":bind6" => $_POST['restaurant_id'],
                ":bind1" => $_POST['name'],
                ":bind2" => $_POST['description'],
                ":bind3" => $_POST['ingredient'],
                ":bind4" => $_POST['category'],
                ":bind5" => $_POST['price'],
            );

            $alltuples1 = array (
                $tuple1
            );

            executeBoundSQL("insert into Menu_items_has values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples1);
            OCICommit($db_conn);
        }

        //Insert Restaurant
        function handleInsertRestaurant() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple1 = array (
                ":bind1" => $_POST['restaurant_id'],
                ":bind2" => $_POST['postal_code'],
                ":bind3" => $_POST['name'],
                ":bind4" => $_POST['category'],
                ":bind5" => $_POST['rating'],
                ":bind6" => $_POST['street_address'],
            );

            $alltuples1 = array (
                $tuple1
            );

            $tuple2 = array (
                ":bind1" => $_POST['postal_code'],
                ":bind2" => $_POST['city'],
                ":bind3" => $_POST['province']
            );

            $alltuples2 = array (
                $tuple2
            );

            executeBoundSQL("insert into ADDRESS values (:bind1, :bind2, :bind3)", $alltuples2);
            executeBoundSQL("insert into Restaurant values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples1);
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

        //print all restaurant
        function handleCheckRestaurant() {
            $result = executePlainSQL("SELECT * FROM restaurant");
            printRestaurant($result);
        }

        //handle sql statement for select specific restaurant
        function handleSelectRestaurant() {
            global $db_conn;

            //Getting the values from user and insert data into the table
//            $tuple1 = array (
//                ":bind1" => $_GET['restaurant_id'],
//            );

//            $alltuples1 = array (
//                $tuple1
//            );

            $value = $_GET['restaurant_id'];
            $txt = "SELECT * FROM restaurant WHERE RESTAURANT_ID = " . $value;
            //executeBoundSQL("insert into ADDRESS values (:bind1, :bind2, :bind3)", $alltuples2);
            $result = executePlainSQL($txt);
            printRestaurant($result);
        }

        //handle sql for deleting the specific row in menu
        function handleDeleteMenu() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
            $dishname = $_POST['name'];
            executePlainSQL("DELETE FROM Menu_Items_Has  WHERE restaurant_id=" . $restaurant_id . "AND name = '" . $dishname . "'");
            OCICommit($db_conn);
        }

        //handle sql for deleting the specific row in restaurant
        function handleDeleteRestaurant() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
//            $txt = "SELECT * FROM restaurant WHERE RESTAURANT_ID = " . $restaurant_id;
//            $result = executePlainSQL($txt);
//            printRestaurant($result);

            executePlainSQL("DELETE FROM Restaurant  WHERE restaurant_id=" . $restaurant_id);
            OCICommit($db_conn);
        }

        //update  menu
        function handleUpdateMenu() {
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

            OCICommit($db_conn);
        }


        //update restaurant
        function handleUpdateRestaurant() {
            global $db_conn;

            $restaurant_id = $_POST['restaurant_id'];
//            $txt = "SELECT * FROM restaurant WHERE RESTAURANT_ID = " . $restaurant_id;
//            $result = executePlainSQL($txt);
//            printRestaurant($result);


            //$restaurant_id = $_POST['$restaurant_id'];

            if (isset($_POST['updateName'])) {
                $newname = $_POST['newName'];
                executePlainSQL("UPDATE Restaurant SET NAME ='" . $newname . "' WHERE restaurant_id = " . $restaurant_id);
            }

            if (isset($_POST['updateStreetAddress'])) {
                $newStreetAddress = $_POST['newStreetAddress'];
                executePlainSQL("UPDATE Restaurant SET Street_Address ='" . $newStreetAddress . "' WHERE restaurant_id=" . $restaurant_id);
            }

            if (isset($_POST['updateCategory'])) {
                $newCategory = $_POST['newCategory'];
                executePlainSQL("UPDATE Restaurant SET Category ='" . $newCategory . "' WHERE restaurant_id=" . $restaurant_id );
            }

            $newPostalCode = $_POST['newPostalCode1'];
            $oldpc = $_POST['oldPostalCode1'];
            $newCity = $_POST['newCity'];
            $newProvince = $_POST['newProvince'];
            $tuple2 = array (
                ":bind1" => $newPostalCode,
                ":bind2" => $newCity,
                ":bind3" => $newProvince
            );

            $alltuples2 = array (
                $tuple2
            );
            if (isset($_POST['updatePostalCode'])) {
                //executePlainSQL("UPDATE Restaurant SET Postal_code='" . NULL. "' WHERE restaurant_id=" . $restaurant_id);
                executeBoundSQL("insert into ADDRESS values (:bind1, :bind2, :bind3)", $alltuples2);
                //executePlainSQL("UPDATE Address SET Postal_code='" . $newPostalCode. "' WHERE Postal_Code='" . $oldpc . "'");
                executePlainSQL("UPDATE Restaurant SET Postal_code='" . $newPostalCode. "' WHERE restaurant_id=" . $restaurant_id);
            }
//            if (isset($_POST['updateCityAndProvince'])) {
//
//                executePlainSQL("UPDATE Address SET City='" . $newCity. "' WHERE Postal_Code='" . $newPostalCode . "'");
//                executePlainSQL("UPDATE Address SET Province='" . $newProvince. "' WHERE Postal_Code='" . $newPostalCode . "'");
//            }
            OCICommit($db_conn);
        }

        //handle the sql statement for selecting all the orders from the restaurant
        function  handleDisplayAllOrders() {
            global $db_conn;
            $restaurant_id = $_GET['restaurant_id'];
            $result = executePlainSQL("SELECT order_number, customer_id, date_placed, food_subtotal FROM Orders WHERE restaurant_id=" . $restaurant_id);
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
                //executePlainSQL("UPDATE Courier SET name='" . $newname . "' WHERE courier_id='" . $courier_id . "'");
            }
            if (isset($_GET['toPrice'])) {
                $max = $_GET['max'];
                //executePlainSQL("UPDATE Courier SET phone_number='" . $newphonenumber . "' WHERE courier_id='" . $courier_id . "'");
            }

            $result = executePlainSQL("SELECT order_number, customer_id, date_placed, food_subtotal FROM Orders 
                                        WHERE restaurant_id = " . $restaurant_id . " AND food_subtotal <= " . $max . " AND food_subtotal >= ". $min);
            printAllOrderResults($result);

        }

        //print the orders
        function printAllOrderResults($result) {
            echo "<br>Retrieved orders from your restaurant:<br>";
            echo "<table>";
            echo "<tr><th>order_number</th><th>order_number</th><th>date_placed</th><th>food_subtotal</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
            }

            echo "</table>";
        }

        



        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('insertCourier', $_POST)) {
                    handleInsertCourier();
                } else if (array_key_exists('can reuse', $_POST)) {
                    handleInsertVehicleCourier();
                } else if (array_key_exists('can reuse', $_POST)) {
                    handleInsertVehicle();
                }else if (array_key_exists('can reuse', $_POST)) {
                    handleInsertFootCourier();
                }else if (array_key_exists('can reuse', $_POST)) {
                    handleInsertBicycleCourier();
                }else if (array_key_exists('deleteSubmitDishes', $_POST)) {
                    handleDeleteMenu();
                }else if (array_key_exists('updateSubmitMenu', $_POST)) {
                    handleUpdateMenu();
                }else if (array_key_exists('insertSubmit', $_POST)) {
                    handleInsertRestaurant();
                }else if (array_key_exists('updateSubmitRestaurant', $_POST)) {
                    handleUpdateRestaurant();
                }else if (array_key_exists('deleteSubmitRestaurant', $_POST)) {
                    handleDeleteRestaurant();
                }else if (array_key_exists('insertSubmitMenu', $_POST)) {
                    handleInsertMenu();
                }
                disconnectFromDB();
            }
        }

        function handleGETRequest() {
        if (connectToDB()) {
                if (array_key_exists('displayAllOrders', $_GET)) {
                    handleDisplayAllOrders();
                } else if (array_key_exists('displayTables', $_GET)) {
                    handleDisplayTables();
                } else if (array_key_exists('checkTables', $_GET)) {
                    handleCheckTables();
                } else if (array_key_exists('displayRestaurant', $_GET)) {
                    handleSelectRestaurant();
                } else if (array_key_exists('displayPriceOrders', $_GET)) {
                    handleDisplayOrdersWithInRange();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['insertRestaurant']) || isset($_POST['updateRestaurantInfo']) || isset($_POST['deleteRestaurant']) ||
                isset($_POST['deleteMenuItem']) || isset($_POST['updateMenuItem']) || isset($_POST['insertMenuItem'])) {
            handlePOSTRequest();
        } else if (isset($_GET['checkPriceOrders']) || isset($_GET['checkAllOrders'])|| isset($_GET['checkAllCustomer'])) {
            handleGETRequest();
        } else if (isset($_GET['checkRestaurant'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>


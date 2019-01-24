<?php

                    $obj = new dbc();
                    $obj->connect();

                    if($conn->connect_error)
                    {
                        die("Connection failed: ".$conn->connect_error);
                    }

                    $sql="SELECT expense_text, expense_amount FROM Expense WHERE user_name='$user_name'";

                      $result = mysqli_query($conn, $sql);

                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr><td>".$row["expense_text"]."</td><td>"."$".$row["expense_amount"]."</td></tr>";
                        }
                        echo "</tbody></table>";
                        
            }
            $conn->close();

        ?>
<?php

require_once "include/common.php";


include 'header.php';
?>

  <div class="container" >
  <div class="p-4 m-1">
    <form action = "list-salons.php" method = "get">
    <table>
        <tr>
            <td>
                Choose a timeslot: 
            </td>
            <td>
                <select name="timeslot">
                    <option value="10am"> 10 AM </option>
                    <option value="11am"> 11 AM </option>
                    <option value="12pm"> 12 PM </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Choose a price range: 
            </td>
            <td>
                <input type="number" name="min-price" min="0"> - 
                <input type="number" name="max-price" min="0">
            </td>
        </tr>
        <tr>
            <td>
                Choose a location: 
            </td>
            <td>
                <input type="text" name="location">
            </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </tr>
            </tr>
        </tr>
    </table>

    </form>
</div>
</div>
</body>

<?php 
include "footer.php";
?>




</html>
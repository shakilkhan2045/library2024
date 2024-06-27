<?php 
    
    include "connection.php";
    include "navbar.php";

?>
    <section style="background-image:url(images/book2.jpg)";>
    <div class="srch">
              <form style="margin-left: 1200px;" class="navbar-form" method="post" name="form1">
              <input class="form-control" type="text" name="search"
              placeholder="search books.." required="">
              <button style="background-color: #6db6b9e6;" type="submit"
              name="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
    </div>
      
	<h2>List Of Books</h2>

	<?php

    if(isset($_POST['submit']))
   {
        $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' OR authors like '%$_POST[search]%' ");
      
        if(mysqli_num_rows($q)==0)
     {
          
       echo "Sorry! No book found. Try searching again.";
      
    }

           else
     {


    
		echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:steelblue;'>";
      //Table header
      echo "<th>"; echo "ID";	echo "</th>";
      echo "<th>"; echo "Book-Name";  echo "</th>";
      echo "<th>"; echo "Authors Name";  echo "</th>";
      echo "<th>"; echo "Edition";  echo "</th>";
      echo "<th>"; echo "Status";  echo "</th>";
      echo "<th>"; echo "Quantity";  echo "</th>";
      echo "<th>"; echo "Department";  echo "</th>";
    echo "</tr>";	
 
    while($row=mysqli_fetch_assoc($q))
    {
      echo "<tr style='color:black; font-size:large;'>";
      echo "<td>"; echo $row['bid']; echo "</td>";
      echo "<td   style='background-color:whitesmoke ;'>"; echo $row['name']; echo "</td>";
      echo "<td>"; echo $row['authors']; echo "</td>";
      echo "<td>"; echo $row['edition']; echo "</td>";
      echo "<td>"; echo $row['status']; echo "</td>";
      echo "<td>"; echo $row['quantity']; echo "</td>";
      echo "<td>"; echo $row['department']; echo "</td>";

      echo "</tr>";
    }
  echo "</table>";

  }

}
          /*if button is not pressed.*/
else

  {


		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color:steelblue;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr style='color:black; font-size:large;'>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td   style='background-color:whitesmoke ;'>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";

  }


    ?>

  </section>
 </body>
 </html>
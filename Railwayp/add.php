<html>
 <body>
 <form method="post" action="insert.php">
 <link rel="stylesheet" type="text/css" href="css/add.css">
 <label>Trains:</label>
 <select id="t_name" name="t_name" required>
			<option selected disabled>-------------------Select trains here----------------------</option>
			<option value="Goa Express" >Goa Express - Margao to Belgaum </option>
			<option value="Nizamuddin Express" >Nizamuddin Express - Mumbai to Delhi </option>
			<option value="Tejas">Tejas - Pune to Kerala </option>
			<option value="Rajdhani Express" > Rajdhani Express - Mumbai to Mysore JN </option>
		</select>
    <br>
 <label>Source:</label>
 <select id="sour" name="sour" required>
			<option value="Margao" >Margao</option>
			<option value="Mumbai" >Mumbai</option>
			<option value="Pune">Pune</option>
			<option value="Mahabaleshwar" >Mahabaleshwar </option>
			<option value="Goa">Goa</option>
			<option value="mysuru">Mysuru JN</option>
			<option value="Hudpi">Hudpi</option>
			<option value="Vadodara">Vadodara</option>
		</select>
    <br>
 <label>Destination:</label>
 <select id="dest" name="dest" required>
			<option value="Belgaum" >Belgaum</option>
			<option value="Delhi" >Delhi</option>
			<option value="Kerala">Kerala</option>
			<option value="Mysore JN" >Mysore JN </option>
			<option value="Surat" >Surat</option>
			<option value="Ratlam" >Ratlam</option>
			<option value="Sangli" >Sangli</option>
			<option value="Satara" >Satara</option>
		</select>
    <br>
 <label for="tickets">No of Tickets:</label>
  <select name="tickets" id="tickets">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select>
  <br><br>
  
 <input type="submit" name="submit" value="sumbit"><br>
 <a href="index.php">Menu</a><br><br>
 </form>
 </body>
</html>
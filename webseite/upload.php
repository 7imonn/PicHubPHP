<!doctype html>

<html lang="en">
<?php include 'head.php'; ?>
<body>
  
  <header></header>
  <section>
  <form method="post" action="postetdata.html">
	<div>
		<label for="titel">Titel:</label>
		<input id="titel" type="text">
	</div>
	<div>
        <label for="description">Description:</label>
        <textarea id="description"></textarea>
    </div>
	<div>
		<label for="titel">Freigabe:</label>
		<select id="select" onchange="selecteditem()">
			<option value="defaultValue">Choose</option>
			<option value="all">All</option>
			<option value="specific">Specific User</option>
			<option value="owner">Only Owner</option>
		</select>
		<label class="specificUser" for="specificUser">Specific User:</label>
		<input class="specificUser" type="text">
	</div>
	<div>
		<label for="image">image:</label>
		<input id="image" enctype=�multipart/form-data� type="file"></input>
	</div>
	<button type="submit">Senden</button>
  </form>
  </section>
  <script src="js/scripts.js"></script>
</body>
</html>
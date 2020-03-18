<html>
<head>
<title>tesdb</title>
</head>
<body>
    <h1>Employee information</h1>
    <?php

    echo br();
        echo form_open('tesform/save');
    ?>
        <table border=”0″>
            <tr>
                <td>Emp Name</td>
                <td><input type="text" name="ename"></input></td>
            </tr>
            <tr>
                <td>Emp ID</td>
                <td><input type="text" name="empid"></input></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></input></td>
            </tr>
            <tr>
			<td><?php echo anchor('tesform/allusers','<input type="button" name="show" value="Show All Users"></input>') ?></td>
          </tr>

          <tr>
    <td><input type="submit" name="update" value="Update Name"></input></td>
        </tr>

        <tr>
  <td><input type="submit" name="delete" value="Delete User"></input></td>
      </tr>

        </table>
    <?php
	//echo form_input($data);
        echo form_close();
    ?>
</body>
</html>

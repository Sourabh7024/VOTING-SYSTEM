<html>

<head>
  <title>Online voting system - Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <div id="change1">
    <div id="div1">
      <div></div>
    </div>
    <div id="div2">
      <center>
        <div id="headerSection">
          <h1>Online Voting System</h1>
        </div>
        <hr class="line-1">

        <div id="loginSection">
          <h2>Login</h2><br>
          <form action="apps/login.php" method="POST">
            <input type="number" name="mobile" placeholder="Enter mobile" required><br><br>
            <input type="password" name="password" placeholder="Enter password" required><br><br>
            <select name="role" style="width: 25%; border: 2px solid black">
              <option value="1">Voter</option>
              <option value="2">Group</option>
            </select><br><br>
            <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
            New user? <a href="partials/register.php">Register here</a>
          </form>
        </div>

      </center>
    </div>
    <div id="div3">
      <div></div>
    </div>
  </div>


</body>

</html>
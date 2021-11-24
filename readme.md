# :fire::fire: Web Application for Logging :fire::fire:

This Application is for logging like a log book but it is in digital and it's way faster to type than to write in papers. :wink:
<br><br>

## :movie_camera: Application Demo Video

- [Website Demo ](https://github.com/stevenFrozt/logApp-Evio/blob/main/sample-output/sample-output%20logApp.mov) :movie_camera:

<br><br>

---

## :no_entry_sign: No More **pen** and **papers!** :pencil:

![logging](https://media0.giphy.com/media/ibnBA0BrYmOJr27dMe/giphy.gif?cid=ecf05e47v8jnspw76bvd94uty9miabzkztv6yghzgf40qyx0&rid=giphy.gif&ct=g)

<br><br>
<br><br>

### :page_with_curl:PHP files

**:heart: Main PHP**

- index.php
- guestbook-login.php
- guestbook-list.php
- guestbook-logout.php

**:purple_heart: Includes PHP**

- footer.php
- header.php
- navbar.php

**:blue_heart: Config Database PHP**

- config.php
- db.php
  <br><br>

## :cd: **Installation of Database**

1. Create your database schema on **_phpmyadmin_**.

2. Add table and columns that you need.

3. Goto your project setup your database connection.
4. Create config file "**_config.php_**".

   ```
    <?php

   	define('ROOT_URL', 'http://localhost/REDEMPLE/logApp-scaling-octo');
   	define('DB_HOST', '"localhost');
   	define('DB_USER', 'Your database user');
   	define('DB_PASS', 'Your Database Password');
   	define('DB_NAME', 'Your Database Name');

      ?>
   ```

5. Create "**_db.php_**" file and paste this code.

```
<?php

// Create Connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if(mysqli_connect_errno()){
// Connection Failed
echo 'Failed to connect to MySQL '. mysqli_connect_errno();
}

?>
```

<br><br>

## **Author** :alien:

## <img src="./img/id2.png" alt="me" style="width:500px;"/>

### Evio, Steven Kyle R.

#### BSCS3 - B1

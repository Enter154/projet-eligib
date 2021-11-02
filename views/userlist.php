<html>  
<head></head>  
  
<body>  
    
    <header>
      
    </header>
  
    <table>  
        <tbody><tr><td>Username</td><td>User ID</td><td>E-mail</td></tr></tbody>  
        <?php   
  
            foreach ($user as $username => $user)  
            {  
                echo '<tr><td><a href="index.php?user='.$user->username.'">'.$user->username.'</a></td><td>'.$user->userID.'</td><td>'.$user->email.'</td></tr>';  
            }  
  
        ?>  
    </table>  

    <footer>

    </footer>
  
</body>  
</html>  
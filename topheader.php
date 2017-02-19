<style>
body {margin:0;}
    .newboxes table td{
    background-color: white;    
    color: blue;
    padding: 5px;
    text-decoration: none;
    font-size: 12px;    
    }    

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #E49B0F;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}
    ri {
    float: right;
        
}

li a {
    display: block;
    color: white;
    padding: 5px;
    text-decoration: none;
    
}
a:hover {
    text-decoration: underline;
    }
    
    ri a {
    display: block;
    color: white;
    padding: 5px;
    text-decoration: none;
    vertical-align: text-bottom;
}

.main {
    padding: 16px;
    margin-top: 30px;
    height: 1500px; /* Used in this example to enable scrolling */
}
</style>
</head>
<body>

    
<ul>
  <li>  <?php
 include 'sidebarmenu.html';    
?></li>
  <li><a href="#home">Home Food</a></li>
  <li><a style="margin-left:50px;">Veg</a> </li>
  <li><a>Non-Veg</a></li>
    
    <ri>         <?php 
  
            session_start();
              try{
                  //  $login_user = $_SESSION['login_user'];     
                   if(!(isset($_SESSION['login_user']))){
                    echo '<a href="login.php">Sign in</a></ri>';      
                    
                  }
              }catch(Exception $e){
                   echo '<a href="login.php">Sign in</a></ri>';
              }   
              
            
                        
            if((isset($_SESSION['login_user']))) {
                 echo '<li style="color:white;"><a  style="text-decoration: none;">Hi '.$_SESSION['login_user'].'</a></li>  <ri><a href="logout.php">Log out</a></ri>';
                 // echo 'Hi '.$_SESSION['email'].' | <a href="logout.php">Log out</a>';
             }
               
              ?>
              <ri><a href="#checkout-details"><img src="image/basketppp.png" width="40" height="39" align="bottom"/></a></ri> 

</ul>
<html>
<head>
<style>
body 
{
  font-family:sans-serif; 
  background:linear-gradient(to bottom,#8B4F47,#643939);
  color:black;
}


h1{
    text-align: center;
}


form{
    width:25rem;
    margin: auto;
    color:black;
}

input{
    width: 50%;
    margin: 5px 0;
    padding: 8px 18px;
    box-sizing:border box ;
  }

.button {
    background-color:#AC6060;
    color:black;
    padding:10px 15px;
    margin: 7px 0;
    width: 70%;
    font-size: 18px;
  }

.button:hover {
    opacity: 0.6;
    cursor: pointer;
  } 
  
.container{
    text-align: center;
    padding: 20px 40px;
	margin-top: 20px;
}

form{
    width:35rem;
	margin:200px 500px;
    color:black;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color:#DA9191;
    border-radius: 0px;
    border: 1px solid rgba(255, 255, 255, 0.125);
}



</style>
</head>
<body bgcolor="ffe5b4">
<form name="form" action="n3.php" method="POST"><center>
<div class="container">
<center><h1> LOGIN </h1></center>
USERID:&nbsp;&nbsp; <input type="text" name="uid" placeholder="Enter Userid"/><br>
PASSWORD:<input type="password" name="pass" placeholder="Enter Password"/><br>
<input type="submit" class="button" value="SIGN IN" name="login"/>
</div>
</center>
</form>
</body>
</html>
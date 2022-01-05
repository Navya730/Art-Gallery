<style>
body
 {
font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}
.group
{
	padding : 16px;
	text-align: center;
}
.b{
	background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/1ea6cf13-859e-4907-8082-98d0b1e0c52c/ddkkt2o-94d951fe-f89e-43b3-8cec-91a8489af41b.jpg/v1/fill/w_1920,h_1080,q_75,strp/silverfall_by_ik_morishita_ddkkt2o-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTA4MCIsInBhdGgiOiJcL2ZcLzFlYTZjZjEzLTg1OWUtNDkwNy04MDgyLTk4ZDBiMWUwYzUyY1wvZGRra3Qyby05NGQ5NTFmZS1mODllLTQzYjMtOGNlYy05MWE4NDg5YWY0MWIuanBnIiwid2lkdGgiOiI8PTE5MjAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.0tGNviAx_78V1CQTSDILJzSgU0XSKtHQTaXdAVN8Ntk");
  width:100%;
  height: 800px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.h{
text-align:center;
color:red;
}
#email,#password{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color : black;
  }
  #submit{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}


</style>
<html>
<body>
<form method="post" class="b" action="loginuser.php">
<div class="group">
<br>
<br>
<br>
<h1 class="h"> Login Here </h1>
<label for="email"><b>Enter your Email Address</b></label>
<br>
<input type="email"  name="email" id="email">
<br>
<label for="password"><b>Enter your Password</b></label>
<br>
<input type="password"  name="password" id="password">
<br>
<input type="submit" id="submit" value="submit" name="submit">
</div>
</form>
</body>
</html>
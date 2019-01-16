<form action = "passport.php" method = "post" enctype="multipart/form-data">
Enter Your Name : <input type = "text" name = "ename"><br/>
Passport: <input type ="file" name="pix"><br/>
<button type ="submit">Upload</button><br/><br/>
</form>
<form action="get.php" method ="POST">
   <h3> VIEW YOUR IMAGE </h3>
Enter Your Name : <input type="text" name="yname">
<button type="submit">Get Image</button>
</form>   
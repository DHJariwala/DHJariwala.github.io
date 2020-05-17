<html>
  <head>
    <link rel="stylesheet" href="web.css" type="text/css">
    <script src="book.js">    </script>
  </head>
  <body>
    <a href="about_home.html" class="l"><img src="logo.png" alt="logo" height="50px" width="150px"></a>
    <div class="head">
      <a href="about_home.html">about</A>
	  <a href="contact_us.html">contact us</A>
      <a href="about_small.html">small events</a>
      <a href="about_large.html">large events</a>
      <a href="home.html">home</a>     
    </div><br>
    <div style="margin-left:20px;text-transform:capitalize;">
<form name="frm" id="display" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <fieldset style="margin-right:20px">
    <legend>BOOK NOW</legend>
name:<input type="text" class="tb" name="nam">
<br><br>
address of the event<textarea rows="2" cols="60" class="tb" name="adress"></textarea><br><br><br><br>
email id<input type="textbox" class="tb" name="email"><br><br>
payment options: &nbsp<input type="radio" name="pay" onclick="frm.pay_o.value='cash'">cash &nbsp <input type="radio" name="pay" onclick="frm.pay_o.value='cheque'">cheque &nbsp<input type="radio" name="pay" onclick="frm.pay_o.value='credit card'">credit card <input type="text" name="pay_o" readonly length="20px" style="visibility:hidden">
<br><br>
credit card no. &nbsp <input type="text" maxlength="4" style="width:50px" class="tb_cc" name="cc_1">&nbsp - &nbsp<input type="text" maxlength="4" style="width:50px" class="tb_cc" name="cc_2">&nbsp - &nbsp<input type="text" maxlength="4" style="width:50px" class="tb_cc" name="cc_3">&nbsp - &nbsp<input type="text" maxlength="4" style="width:50px" class="tb_cc" name="cc_4">
<br><br>
CVV no. &nbsp<input type="password" maxlength="3"  style="width:40px" class="tb" name="cvv">
<br><br>
Event &nbsp<select name="eve" onchange="c(this.form)">
<option value="Wedding">	Wedding	<!--</option>-->
<option value="DJ party">	Dj party	<!--</option>-->
<option value="Annual Function">	Annual Function	<!--</option>-->
<option value="Exhibition">	Exhibition	<!--</option>-->
<option value="Birthday">	Birthday	<!--</option>-->
<option value="Anniversary">	Anniversary	<!--</option>-->
<option value="Corporate event">	Corporate event	<!--</option>-->
<option value="farewell">	Farewell	<!--</option>-->
</select>     <input type="text" name="txt" class="tb_cc" readonly value="Wedding" style="visibility:hidden">
<br><br>
Package type &nbsp <select name="pt">
<option value="Standard">Standard</option>
<option value="Premium">Premium</option>
</select>
<br><br>
Event date &nbsp <input type="text" class="tb_cc" maxlength="2" style="width:25px" name="dat"> / <input type="text" class="tb_cc" maxlength="2" style="width:25px" name="mon"> / <input type="text" class="tb_cc" maxlength="2" style="width:25px" name="ye"> (DD/MM/YY)
<br><br>
contact no.<input type="textbox" maxlength="10" class="tb" name="contact">
<hr>

<input type="submit" value="submit" onclick="b()" name = "sub">
<?php
	include 'book2.php'; ?>
    </div>
    </fieldset>
</form>
    <div style="overflow:auto; margin-bottom:50px;">     
      <div class="foot">
        <a href="mailto:ev_man@gmail.com">mail to us</a>
      </div>
    </div>
  </body>
</html>




     

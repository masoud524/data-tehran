<!DOCTYPE html>
<html>
<body>

<form action="bours.php" name="myForm">
  <label for="fname">arz & time:</label><br>
  <select id="fname" name="ex" onchange="tu(this.value)"><br>
    <option value="bours">bours</option>
    <option value="shakhes">shakhes</option>
    <option value="mix">mix</option>
    <option value="sabet">sabet</option>
    <option value="arz">arz</option>
    <option value="tala">tala</option>
    <option value="sekeh">sekeh</option>
    <option value="xug">xug</option>
  </select>
  <select id="fname" name="time"><br>
      <option value="d">d</option>
      <option value="m">m</option>
  </select><br>
  <label for="lname">ارزها:</label><br>
  <input type="text" id="lname" name="arz" value="arz1,arz2,arz3"><br><br>
  <input type="submit" value="Submit">
</form>
<h1>سکه ها</h1>
<p>["sekee","coin_blubber","sekeb","sekeb_blubber","nim","nim_blubber","rob","rob_blubber","gerami","gerami_blubber"]</p><br>
<h1>طلا</h1>
<p>["geram18","geram24","ons","mesghal","gold_17","gold_mini_size","gold_world_futures","gold_17_transfer","gold_17_coin"]</p><br>
<h1>نقره</h1>
<p>["silver_999","silver"]</p><br>
<h1>ارز</h1>
<p>["price_dollar_rl","sana_sell_usd","nima_sell_usd","price_eur","bank_eur","price_gbp","bank_gbp","price_aed","bank_aed"]</p><br>
<h1>شاخص</h1>
<p>["ش-کل-فرابورس","ش-قیمت-هم-وزن","ش-کل-بورس"]</p><br>
<h1>بورس</h1>
<p>["شتاب","ارزش","اهرم"]</p><br>
<h1>ثابت</h1>
<p>["یاقوت","کیان","افران"]</p><br>
<h1>ترکیبی</h1>
<p>["همای","پتروآگاه","عیار"]</p><br>
<script>
   function tu(str){
    document.forms["myForm"].action=str+'.php';
   }
</script>
</body>
</html>


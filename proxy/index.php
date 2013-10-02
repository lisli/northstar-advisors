<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
  <title>PHProxy</title>
  <link rel="stylesheet" type="text/css" href="style.css" title="Default Theme" media="all" />
</head>
<body onload="document.getElementById('address_box').focus()">
<div id="container">
  <h1 id="title">PHProxy</h1>
  <ul id="navigation">
    <li><a href="http://electricnachos.com/dcm/">URL Form</a></li>
    <li><a href="javascript:alert('cookie managment has not been implemented yet')">Manage Cookies</a></li>
  </ul>
  <form method="post" action="/dcm/index.php">
    <ul id="form">
      <li id="address_bar"><label>Web Address <input id="address_box" type="text" name="q" value="" onfocus="this.select()" /></label> <input id="go" type="submit" value="Go" /></li>
      <li class="option"><label><input type="checkbox" name="hl[include_form]" checked="checked" />Include mini URL-form on every page</label></li>
<li class="option"><label><input type="checkbox" name="hl[remove_scripts]" checked="checked" />Remove client-side scripting (i.e JavaScript)</label></li>
<li class="option"><label><input type="checkbox" name="hl[accept_cookies]" checked="checked" />Allow cookies to be stored</label></li>
<li class="option"><label><input type="checkbox" name="hl[show_images]" checked="checked" />Show images on browsed pages</label></li>
<li class="option"><label><input type="checkbox" name="hl[show_referer]" checked="checked" />Show actual referring Website</label></li>
<li class="option"><label><input type="checkbox" name="hl[rotate13]" />Use ROT13 encoding on the address</label></li>
<li class="option"><label><input type="checkbox" name="hl[base64_encode]" checked="checked" />Use base64 encodng on the address</label></li>
<li class="option"><label><input type="checkbox" name="hl[strip_meta]" checked="checked" />Strip meta information tags from pages</label></li>
<li class="option"><label><input type="checkbox" name="hl[strip_title]" />Strip page title</label></li>
<li class="option"><label><input type="checkbox" name="hl[session_cookies]" checked="checked" />Store cookies for this session only</label></li>
    </ul>
  </form>
  <!-- The least you could do is leave this link back as it is. This software is provided for free and I ask nothing in return except that you leave this link intact
       You're more likely to recieve support should you require some if I see a link back in your installation than if not -->
  <div id="footer"><a href="http://whitefyre.com/poxy/">PHProxy</a> 0.5b2</div>
</div>
</body>
</html>
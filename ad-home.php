<?php

include_once 'ad-header.php';
?>

<div class="admin-details">

<div class="container1">
<h1>Book-details</h1>
<form class="book" action="ad-books.inc.php" method="POST">
<div class="container">
    <label for="bookname"><b>Book-Name</b></label>
      <input type="text" placeholder="Enter Book Name" name="bookname" style="margin-left: 15px;margin-bottom: 10px;" required>
    <label for="author"><b>Author</b></label>
      <input type="text" placeholder="Enter Author Name" name="author" style="margin-left: 15px;margin-bottom: 10px;" required>
    <label for="publisher"><b>Publisher</b></label>
      <input type="text" placeholder="Enter Publisher name " name="publisher" style="margin-left: 15px;margin-bottom: 10px;" required>
    <label for="edition"><b>Edition</b></label>
      <input type="text" placeholder="Enter Edition " name="edition" style="margin-left: 15px;margin-bottom: 10px;" required>
    <label for="isbn"><b>ISBN</b></label>
      <input type="text" placeholder="ISBN  " name="isbn" style="margin-left: 15px;margin-bottom: 10px;" >
    <label for="description"><b>Description</b></label>
      <textarea rows="5" cols="10" type="text" placeholder="Enter Description " name="description" style="margin-left: 15px;margin-bottom: 10px;" required></textarea>
    <label for="category"><b>Category</b></label>
      <select name="category" id="category" style="margin-left: 15px;margin-bottom: 10px;" required>
            
                <option value="0">Select</option> 
                <option value="Technology(General)">Technology(General)</option> 
                <option value="Engineering(Genaral). Civil Engineering">Engineering(Genaral). Civil Engineering</option> 
                <option value="Hydraulic Engineering. Ocean engineering">Hydraulic Engineering. Ocean engineering</option> 
                <option value="Environmental Technology">Environmental Technology</option> 
                <option value="Highway engineering. Roads and pavements">Highway engineering. Roads and pavements</option>
                <option value="Railroad engineering and operation">Railroad engineering and operation</option>
                <option value="Bridge engineering">Bridge engineering</option> 
                <option value="Building Construction">Building Construction</option> 
                <option value="Meachanical engineering and machinery">Meachanical engineering and machinery</option> 
                <option value="Electrical Engineering. Electronics. Nuclear engineering">Electrical Engineering. Electronics. Nuclear engineering</option>
                <option value="Motor vehicles. Aeronautics. Astronautics">Motor vehicles. Aeronautics. Astronautics</option>
                <option value="Mining engineering. Metallurgy">Mining engineering. Metallurgy</option>
                <option value="Chemical technology">Chemical technology</option>
                <option value="Photography">Photography</option>
                <option value="Manufactures">Manufactures</option>
                <option value="Handicrafts. Arts and crafts">Handicrafts. Arts and crafts</option>
                <option value="Home Economics">Home Economics</option> 
            
      </select>
      
     <button type="submit"  class="sub" name="submit">Submit</button>
  </div>
</form>
</div>

<div class="container2">
<h1>QR Code</h1>

<div class="qr">

<!--</div>

</div>-->
<!--End admin-details-->
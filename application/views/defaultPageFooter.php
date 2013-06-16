   <p> <div class="fltrt" >   
           <?php if ($this->session->userdata('logged_in')){echo "<img src=".base_url()."images/cart.jpg  width=\"20\" height=\"20\" />"; echo $this->cart->total();}?>
     </div></p>
<div class="sidebar2">
 
    <h4>Backgrounds</h4>
    <p>By nature, the background color on any div will only show for the length of the content. If you'd like a dividing line instead of a color, place a border on the side of the .content div (but only if it will always contain more content).</p>
    <!-- end .sidebar2 --></div>
  <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>

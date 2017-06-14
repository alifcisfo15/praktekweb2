 <div id="templatemo_right_column">
	    	<h1>List Buku Tahun Ini </h1>
            <table class="table table-bordered" border="2"><font size="30"></font>
	<thead>
		<tr>
			<th><font size="3">ID Buku</th></font>
			<th><font size="3">Judul</th></font>
			<th><font size="3">Penulis</th></font>
		</tr>
	</thead>
	<tbody>
 <?php 
 foreach ($nama_buku as $dt) { ?>
		<tr>
			<td align="center"><font color="white" size="4"><?= $dt['id_buku'] ?></td></font>
			<td><font color="white" size="2"><?= $dt['judul'] ?></td></font>
			<td><font color="white" size="2"><?= $dt['penulis'] ?></td></font>
		</tr>
		<?php 
		} ?>
	</tbody>
</table>    
    			<h1>Daftar Contact Alif Fitrah</h1>
            	Silahkan Hubungi Contact dibawah ini jika mau menghubungi Alif Fitrah<br />
                 
			   <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a><br />                     
    
<div id="templatemo_section">
            	<h3>Our Gallery</h3>
                	<div class="subsection">
                     	<img src="template/images/templatemo_thumb.gif"  alt="image 1" /><br />
							Nam sit amet justo vel libero tincidunt dignissim. Fusce ac orci sit amet velit ultrices condimentum. <br /> <a href="#">more</a>                    
                    </div>
                    <div class="subsection">
                     	<img src="template/images/templatemo_thumb.gif"  alt="image 2" /><br />
							Ut id massa. Nullam nunc. Integer imperdiet odio ac eros. Ut id massa. Nullam nunc. <br /> <a href="#">more</a>                     
                     </div>
                     <div class="subsection">
                     	<img src="template/images/templatemo_thumb.gif"  alt="image 3" /><br />
							Fusce ac orci sit amet velit ultrices condimentum. Ut id massa. Nullam nunc.<br /> <a href="#">more</a>               
                     </div>                            
            </div>
		</div>
    </div>
    
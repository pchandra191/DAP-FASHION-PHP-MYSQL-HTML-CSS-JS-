<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h3 class="m_2">Categories</h3>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">JEANS</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">SHIRTS</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">SUITS</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">CASUAL</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">SHORTS</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
									<a href="#"><p>sub category1</p></a>
						     </div>
					      </div>
						  
					    <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					  
						
					 
				 <section  class="sky-form">
						<h4>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>VAPH</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Puma</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Pepe Jeans</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Crocodile</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
<input type="checkbox" id="myCheck"  onclick="myFunction()">

<p id="text" style="display:none">Checkbox is CHECKED!


					

</p>							

							</div>
							</div>
				   </section>	

				   <script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
</script>
				   
				   <br>				 

  
				   <section  class="sky-form">
						<h4>Price</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
								</div>
							</div>
				   </section>		       
			 </div>			 
			 </div>
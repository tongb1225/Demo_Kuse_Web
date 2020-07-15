	<form action="<?=base_url();?>checkout/" method="post" accept-charset="utf-8" id="form1" name="viewcart">
	<h3>3. SHIPPING ADDRESS</h3>
	<div id="target">
	  <a href=""><img src="<?=base_url();?>images/btn_use_my_address.png" width="173" height="32" alt="Btn Use My Address"></a>
	</div>

	<div style="color:red; padding:10px;"><?php echo validation_errors(); ?></div>

		<div id="view_cart_mail" class="myform" id="form1">
		<p>
			<label for="firstname">First Name:
			<span class="small"></span></label>
			<?=form_input('first_name', set_value('first_name'), 'size="50" class="required" id="first_name"');?>
		</p>	

		<p>
			<label for="firstname">Last Name:
			<span class="small"></span></label>
			<?=form_input('last_name', set_value('last_name'), 'size="50" class="required" id="last_name"');?>
		</p>
		
		<p>
			<label for="firstname">Address:
			<span class="small"></span></label>
			<?=form_input('address1', set_value('address1'), 'size="50" class="required" id="address1"');?>
		</p>
		
		<p>
			<label for="firstname">Country:
			<span class="small"></span></label>
			<? $country_list = $this->category_model->get_country_list(); ?>
			<?=form_dropdown('country',$country_list, $this->session->userdata('country'), 'id="select_country"');?>
		</p>
		
		<p>
			<label for="firstname">City:
			<span class="small"></span></label>
			<?=form_input('city', set_value('city'), 'size="50" class="required" id="city"');?>
		</p>

		<p>
			<label for="firstname">State:
			<span class="small"></span></label>
			<?=form_input('state', set_value('state'), 'size="50" class="required" id="state"');?>
		</p>

		<p>
			<label for="firstname">Zip Code:
			<span class="small"></span></label>
			<?=form_input('zip_code', set_value('zip_code'), 'size="50" class="required" id="zip_code"');?>
		</p>

		<p>
			<label for="firstname">E-mail:
			<span class="small"></span></label>
			<?=form_input('email', set_value('email'), 'size="50" class="required" id="email"');?>
		</p>

		<p>
			<label for="firstname">Telephone:
			<span class="small"></span></label>
			<?=form_input('phone', set_value('phone'), 'size="50" class="required" id="phone"');?>
		</p>
						
		<div class="clear"></div>
	</div>

		<div class="clear">&nbsp;</div>
</div><!-- end block1 -->

<div id="view_cart_column2">
	<h3>4. SHIPPING METHOD</h3>
	<div id="view_cart_mail" class="myform" > 
	<?=form_radio('shipping_m', 'free', true, 'id="radio"').' 1. Free Standard Recorded Air Mail anywhere in the world 14 days. <br />';?>
	<?=form_radio('shipping_m', 'ems', false, 'id="radio"').'
					2. EMS 25 GBP (UK, USA, Europe & Australia) 5 working days. <br />';?>
		<div class="clear"></div>
	</div>

	<h3>5. DISCOUNT COUPON</h3>
		<?=form_input('coupon'); ?> (optional)
		<div class="clear">&nbsp;</div>
		<br />
	<h3>6. ORDER SUMMARY</h3>
		<div id="order_summary">
			
		</div>
		<div class="clear">&nbsp;</div>
		<br />
	<h3>7. PROCEED TO CHECKOUT</h3>

	<!-- select payment -->
	<div id="view_cart_mail" class="myform"> 

		<div>
			<div id="radio_box"><?=form_radio('pay_by', 'paypal', true, 'id="radio"');?></div>
			<div style="float:right; width:240px;"><?=img(array('align'=>'right', 'src'=>'images/paypal.png'))?>
			<br /><p style="width:220px;">Pay as a Paypal member or Pay with your debit or credit card as a PayPal guest</p></div>
			<div class="clear"></div>
		</div>

			

		<div>
			<div id="radio_box" style="padding-top:25px;"><?=form_radio('pay_by', 'google', false, 'id="radio"');?></div>
			<div style="float:right; width:240px;"><?=img(array('align'=>'right', 'src'=>'images/google_wallet.png'))?></div>
			<div class="clear"></div>
		</div>

			
	</div>

	<div style="text-align:center;"><input type="submit" value="&nbsp;" class="btn_checkout"></div>

	<div style="text-align:center; padding-top:20px;">
	<span id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=rxjMZQgO24J4TbEkBe1DdisR2ueDEXQps5IuOcf80xFcZJLTvmA1yPN9HXH"></script></span>
	</div>
</div>

<style type="text/css">
	#radio_box { float: left; width:20px; padding-top: 10px; }
</style>

</form>
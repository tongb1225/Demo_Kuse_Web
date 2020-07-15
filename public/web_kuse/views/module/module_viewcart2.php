<?php echo form_open('welcome/updatecart', 'name="cart"'); ?>

<table cellpadding="6" cellspacing="1" width="550" border="0">

<tr>
	<th>&nbsp;</th>
	<th style="text-align:left;">PRODUCT</th>
	<th>QUANTITY</th>
	<th>PRICE</th>
</tr>
<?php $i = 1; $weight = '0'; ?>

<?php foreach($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr class="product_line">
	  	<? $this->db->where('id' , $items['id']);
		   $query = $this->db->get('products', '1');
		?>
		<?php foreach($query->result() as $row): ?>
	  	<td width="80"><img src="<?=base_url().$row->image;?>" width="80" /><? $weight2 = $row->weight; ?></td>			
		<?php endforeach; ?>
	  <td style="text-align:left;">
		<?php echo $items['name']; ?>
			<br />STYLE CODE: <?php echo $items['sku']; ?>
			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>	
	  </td>
	  <td style="text-align:center">
	  	<?=$items['qty']; ?>
	  </td>
	  <td style="text-align:center"><?=$this->category_model->getconvert_rate2($items['subtotal']); ?></td>
	</tr>

<? $i++;
$qty = $items['qty'];
$weight = $weight + ($qty * $weight2);
endforeach; ?>
<? $this->session->set_userdata('weight', $weight); ?>

<tr>
	<td colspan="2" style="background-color:#ebebeb;"></td>
	<td style="text-align:center; font-size:1.1em; background-color:#ebebeb;"><strong>SUBTOTAL</strong></td>
	<td style="text-align:center; font-size:1.1em; background-color:#ebebeb;"><? 
								 $all_total = $this->cart->total(); 
							echo $this->category_model->getconvert_rate2($all_total); ?>
	</td>
</tr>

</table>
</form>
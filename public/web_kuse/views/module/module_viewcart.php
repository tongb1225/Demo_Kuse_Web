<?=form_open('cart/updatecart', 'name="cart"')?>
	<table class="table table-striped">
		<tr>
			<th colspan="2">สินค้า</th>
			<th>จำนวน</th>
			<th>ราคา</th>
		</tr>
		<?php $i = 1; $weight = '0'; ?>
		<?php foreach($this->cart->contents() as $items): ?>
			<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
			<tr>
				<td class="col-xs-2">
				  	<? $this->db->where('id' , $items['id']);
					   $query = $this->db->get('products', '1');
					?>
					<? if($query->num_rows > 0)
					{
						foreach($query->result() as $row): ?>
					  	<img src="<?=base_url().$row->image;?>" class="img-responsive" /><? $weight2 = $row->weight; ?>	
						<? endforeach; 
					}
					else
					{
						echo '<img src="'.base_url().'images/custom_shirt.jpg" class="img-responsive" />';
					} ?>
				</td>
			  	<td class="col-xs-7">
					<b><?php echo $items['name']; ?></b>
					<br />รหัสสินค้า : <?php echo $items['sku']; ?>
					<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
						<p>
							<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
								<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
							<?php endforeach; ?>
						</p>
					<?php endif; ?>	
			  	</td>
			  	<td class="col-xs-1">
			  		<?=form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '3', 'id' => 'qty', 'class'=>'form-control input-sm text-center')); ?>
			  		<div><?=anchor('cart/deletecart/'.$items['rowid'], '<i class="fa fa-times"></i> ลบสินค้า', 'class="btn btn-danger btn-xs"'); ?></div>
			  	</td>
			  	<td class="col-xs-2"><?=$this->category_model->getconvert_rate2($items['subtotal']); ?></td>
			</tr> 
		<? $i++;
		$qty = $items['qty'];
		if(isset($weight2))
		{
			$weight = $weight + ($qty * $weight2);
		}
		endforeach; ?>
		<? $this->session->set_userdata('weight', $weight); ?>

		<tr>
			<td colspan="2"><a href="javascript:update_cart()" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> แก้ไขตะกร้าสินค้า</a></td>
			<td><b>ราคารวม</b></td>
			<td><? echo $all_total = $this->category_model->getconvert_rate2($this->cart->total()); ?></td>
		</tr>
	</table>
</form>
<script language="JavaScript"><!--
function update_cart() {
    document.cart.submit();
}
//--></script>
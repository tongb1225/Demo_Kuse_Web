<?php

class Shippingcost_model extends Model{

	function shippingcost_model(){

		parent::Model();

	}
	
	function get_shipping($country, $product_order_total, $weight){

			$price = '';
			$shippingcost = '0';
			$remote_area = '0';
			$shippingcost = 'Free';
			$price .= 'ORDER SUBTOTAL <span>'.$this->category_model->getconvert_rate2($product_order_total).'</span><br/>';
			$price .= 'SHIPPING <span> Free</span>';
			$price .=  '<br/>TOTAL <span>'.$this->category_model->getconvert_rate2($product_order_total).'</span>';
			$price .=  '<div class="clear"></div>';
			
			// store shipping data to session
			$newdata = array(
			                   'shipping' => '0',
			                   'estimated_total' => $this->category_model->getconvert_rate2($product_order_total)
			               );
			$this->session->set_userdata($newdata);
			
			return $price;
	}
	
	function get_shipping2($shipping_type, $all_total){
			
			$est_total = "";
			$price = "";			
			if($shipping_type=='free')
			{
				$shipping = '0';
				$shippingcost = 'free';
				$est_total = $all_total;
			}
			else
			{
				$shipping = '25.00';
				$shippingcost = $this->category_model->getconvert_rate2('25.00');
				$est_total = $all_total + '25';
			}
			
			$price .= 'ORDER SUBTOTAL <span>'.$this->category_model->getconvert_rate2($all_total).'</span><br/>';
			$price .= 'SHIPPING <span> '.$shippingcost.'</span>';
			$price .=  '<br/>TOTAL <span>'.$this->category_model->getconvert_rate2($est_total).'</span>';
			$price .=  '<div class="clear"></div>';
			
			// store shipping data to session
			$newdata = array(
			                   'shipping' => $shipping,
			                   'estimated_total' => $this->category_model->getconvert_rate2($est_total)
			               );
			$this->session->set_userdata($newdata);
			
			return $price;
	}

	function get_shipping_thai($shipping_type, $all_total){
			
			$est_total = "";
			$price = "";			
			
			if($all_total > 1500)
			{
				$shipping = '0';
				$shippingcost = 'ส่ง EMS ฟรี';
				$est_total = $all_total;
			}
			elseif($shipping_type=='30')
			{
				$shipping = 30;
				$shippingcost = $this->category_model->getconvert_rate2('30.00');
				$est_total = $all_total + $shipping;
			}
			else
			{
				$shipping = 50;
				$shippingcost = $this->category_model->getconvert_rate2('50.00');
				$est_total = $all_total + $shipping;
			}
			
			$price .= '<div class="col-xs-6">ราคารวม</div><div class="col-xs-6 text-right">'.$this->category_model->getconvert_rate2($all_total).'</div>';
			$price .= '<div class="col-xs-6">ค่าจัดส่งสินค้า</div><div class="col-xs-6 text-right">'.$shippingcost.'</div>';
			$price .= '<div class="col-xs-6">ราคารวมทั้งหมด</div><div class="col-xs-6 text-right" style="color:red; font-size:1.2em;">'.$this->category_model->getconvert_rate2($est_total).'</div>';
			
			// store shipping data to session
			$newdata = array(
		                   'shipping' => $shipping,
		                   'estimated_total' => $this->category_model->getconvert_rate2($est_total)
			               );
			$this->session->set_userdata($newdata);
			
			return $price;
	}
	
} // end class
?>
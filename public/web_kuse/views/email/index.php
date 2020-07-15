<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color:#f0f2ea; margin:0; padding:0; color:#333333;">

<table width="100%" bgcolor="#f0f2ea" cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <tr>
            <td style="padding:40px 0;">
                <!-- begin main block -->
                <table cellpadding="0" cellspacing="0" width="608" border="0" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?=base_url()?>" style="display:block; width:407px; height:100px; margin:0 auto 30px;">
                                    <img src="<?=base_url()?>application/views/email/logo.png" width="407" height="100" alt="Pixelbuddha" style="display:block; border:0; margin:0;">
                                </a>
                                <p style="margin:0 0 36px; text-align:center; font-size:14px; line-height:20px; text-transform:uppercase; color:#626658;">
                                
                                </p>
                                <!-- begin wrapper -->
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td width="8" height="4" colspan="2" style="background:url(http://demo.artlance.ru/email/shadow-top-left.png) no-repeat 100% 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td height="4" style="background:url(http://demo.artlance.ru/email/shadow-top-center.png) repeat-x 0 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="8" height="4" colspan="2" style="background:url(http://demo.artlance.ru/email/shadow-top-right.png) no-repeat 0 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        </tr>
                                        
                                        <tr>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-left-top.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td colspan="3" rowspan="3" bgcolor="#FFFFFF" style="padding:0 0 30px;">
                                                <!-- begin content -->
                                                <img src="http://www.cosmetoday.com/images/banner.jpg" width="600" height="95" alt="summer‘s coming trimm your sheeps" style="display:block; border:0; margin:0 0 44px; background:#eeeeee;">
                                                <p style="margin:0 30px 33px;; text-align:center; text-transform:uppercase; font-size:24px; line-height:30px; font-weight:bold; color:#484a42;">
                                                    รหัสสั่งซื้อ : <?=$this->session->userdata('order_no')?>
                                                </p>
                                                <!-- begin articles -->
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr valign="top">
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td colspan="3">
                                                               

                <table cellpadding="6" cellspacing="1" width="100%" border="0">
                    <tr>
                        <th>&nbsp;</th>
                        <th style="text-align:left;">สินค้า</th>
                        <th>จำนวน</th>
                        <th>ราคา</th>
                    </tr>

                    <? foreach($this->cart->contents() as $items)
                        {
                            $id = $items['id'];
                            $image = $this->category_model->getImageURL($id); ?>
                        <tr class="product_line">
                            <td width="80"><img src="<?=base_url().$image?>" width="80" /></td>          
                            <td style="text-align:left; font-size:14px;">
                                <?=$items['name']?>
                                <? if ($this->cart->has_options($items['rowid']) == TRUE)
                                {
                                    foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
                                    {
                                        $body .= '<p><?=$option_name?> <?=$option_value?></p>';
                                    }
                                }       
                                ?>       
                            </td>
                            <td style="text-align:center; font-size:14px;"><?=$items['qty']?></td>
                            <td style="text-align:center; font-size:14px;"><?=$this->category_model->getconvert_rate2($items['subtotal'])?></td>
                        </tr>
                    <? } ?>  
                    <tr>
                        <td colspan="2" style="background-color:#ebebeb; font-size:14px;"></td>
                        <td style="text-align:center; background-color:#ebebeb; font-size:14px;"><strong>ราคารวม</strong></td>
                        <td style="text-align:center; background-color:#ebebeb; font-size:14px;"><?=$this->category_model->getconvert_rate2($this->cart->total())?></td>
                    </tr>
                </table><br>

                

                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td width="255" style="font-size:13px;" valign="top">
                                                                


                                                                <h3>สรุปรายการสั่งซื้อ</h3>
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                      <tr>
                                                                        <td><font size="2">ราคาสินค้า</font></td>
                                                                        <td><?=$this->category_model->getconvert_rate2($this->cart->total())?></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td><font size="2">ค่าจัดส่ง</font></td>
                                                                        <td><?=$this->category_model->getconvert_rate2($this->session->userdata('shipping'))?></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td><font size="2" style="font-size:14px; font-weight:bold">ยอดรวมทั้งหมด</font></td>
                                                                        <td style="font-size:16px; font-weight:bold; border-bottom:2px solid #000;"><?=$this->session->userdata('estimated_total')?></td>
                                                                      </tr>
                                                                </table>

                                                                <p style="color:red; font-size:14px; font-weight:bold;">* กรุณารอการยืนยันจากทางร้านค้าก่อนทำการโอนเงิน ทุกครั้ง</p>
                                                                <p style="color:red; font-size:14px; font-weight:bold;">* กรุณาโอนเงินภายใน 2 วัน หลังจากได้รับการยืนยันแล้ว</p>



                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td width="255" style="font-size:13px;">
                                                                

                                                            <h3>ข้อมูลการชำระสินค้า</h3>
                                                            <p>กรุณาชำระเงินด้วยการโอนเงินเข้าบัญชี ตามรายละเอียดด้านล่าง และแจ้งยืนยันการชำระเงิน 
                                                            โดยการตอบกลับอีเมล์ หรือแจ้งไปที่ <?=mailto($admin_email)?>
                                                            พร้อมทั้งแจ้งรายละเอียดการโอนเงิน เช่น เวลาที่โอน จำนวนเงิน และเลขที่สั่งซื้อ (order number)</p>

                                                            <br />
                                                            <img src="<?=base_url()?>application/views/email/bbl.png" width="160" height="40"><br>
                                                            BBL สาขาสยามพารากอน <br />
                                                            ชื่อบัญชี : พรวิภา สมทรัพย์<br />
                                                            เลขที่บัญชี : 8550099363<br />
                                                            <br>
                                                            <img src="<?=base_url()?>application/views/email/scb.jpg" width="160" height="40"><br>
                                                            SCB สาขาสยามพารากอน <br />
                                                            ชื่อบัญชี : พรวิภา สมทรัพย์<br />
                                                            เลขที่บัญชี : 2182450351<br />
                                                            <br>
                                                            <img src="<?=base_url()?>application/views/email/ktb.jpg" width="160" height="40"><br>
                                                            KTB สาขาเซ็นทรัล ลาดพร้าว<br />
                                                            ชื่อบัญชี : พรวิภา สมทรัพย์<br />
                                                            เลขที่บัญชี : 6900312470<br />
                                                            <br>
                                                            <img src="<?=base_url()?>application/views/email/kbank.jpg" width="160" height="40"><br>
                                                            KBANK สาขาเซ็นทรัล ลาดพร้าว<br />
                                                            ชื่อบัญชี : พรวิภา สมทรัพย์<br />
                                                            เลขที่บัญชี : 7302045557<br />

                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td colspan="3">

                                                                <h3 style="font-size:16px;">ที่อยู่ในการจัดส่งสินค้า</h3>
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                    <td style="width:100px;"><font size="2">ชื่อ</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('first_name')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">นามสกุล</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('last_name')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">ที่อยู่</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('address1')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">อำเภอ</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('city')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">จังหวัด</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('state')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">รหัสไปรณีย์</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('zip_code')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">เบอร์โทรศัพท์</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('phone')?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td><font size="2">อีเมล์</font></td>
                                                                    <td><font size="2"><?=$this->session->userdata('email')?></font></td>
                                                                    </tr>
                                                                </table> 
                                                                <br><br>
                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        </tr>
                                                    </tbody>
                                                </table>




                                                <!-- /end articles -->
                                                <p style="margin:0; border-top:2px solid #e5e5e5; font-size:5px; line-height:5px; margin:0 30px 29px;">&nbsp;</p>
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr valign="top">
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td>
                                                                <p style="margin:0 0 4px; font-weight:bold; color:#333333; font-size:14px; line-height:22px;">Cosme Today</p>
                                                                <p style="margin:0; color:#333333; font-size:11px; line-height:18px;">
                                                                    อีเมล์ : <?=mailto('cosmetoday@gmail.com')?><br>
                                                                    โทรศัพท์ : 093-186-9006<br>
                                                                    facebook : <a href="https://www.facebook.com/pages/Cosmetoday/530459787087934">facebook.com/cosmetoday</a><br>
                                                                    line : cosmetoday<br>
                                                                    line shop: <a href="http://shop.line.me/web/m/shop/58431">http://shop.line.me/web/m/shop/58431</a><br>
                                                                    เว็บไซต์ : <a href="<?=base_url()?>">www.cosmetoday.com</a>
                                                                </p>
                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                            <td width="120">
                                                            </td>
                                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- end content --> 
                                            </td>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-right-top.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td width="4" style="background:url(http://demo.artlance.ru/email/shadow-left-center.png) repeat-y 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="4" style="background:url(http://demo.artlance.ru/email/shadow-right-center.png) repeat-y 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        </tr>
                                        
                                        <tr> 
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-left-bottom.png) repeat-y 100% 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-right-bottom.png) repeat-y 0 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        </tr>
                                 
                                        <tr>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-bottom-corner-left.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-bottom-left.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td height="4" style="background:url(http://demo.artlance.ru/email/shadow-bottom-center.png) repeat-x 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-bottom-right.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                            <td width="4" height="4" style="background:url(http://demo.artlance.ru/email/shadow-bottom-corner-right.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end wrapper-->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end main block -->
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>

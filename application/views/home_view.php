<style type="text/css">
	#map_canvas {
		width: 550px;
		height: 400px;
		margin: auto;
		/*  margin-top:100px;*/
	}
</style>
<div class="container">
	<!-- Main component for a primary marketing message or call to action -->
	<div class="jumbotron">
		<?php
		//////////////////////////////////////////////////////////////////////////////////////
		// $json = file_get_contents('http://128.199.112.126:3000/product/KIS9987');
		if ($url_api_value != null) {
			$json = file_get_contents("http://" . $url_api_value . ":8080/CropCalendarServer/api/ftocservice/");
			$obj = json_decode($json);

			// echo $obj;
			echo '<pre>Current server: ';
			print_r($url_api_value);
			echo '</pre>';
			echo '<pre>';
			print_r($obj);
			echo '</pre>';
		}
		//////////////////////////////////////////////////////////////////////////////////////
		?>

		
		<!-- <?= image_asset("logo_kasetsart.gif"); ?> -->
		<?= $this -> session -> userdata('item'); ?>
		<h1>ปฏิทินล้นเกวียน</h1>
		<br />
		<form class="form-horizontal row">
			<div class="form-group">
				<label for="username" class="col-sm-2 control-label">ชื่อ</label>
				<div class="col-sm-4">
					<input id="username" class="form-control" placeholder="ex. วรัญญู">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">จังหวัด</label>
				<div class="col-sm-4">
					<select class="form-control" name="province">
						<option value="" selected>--- เลือกจังหวัด ---</option>
						<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
						<option value="กระบี่">กระบี่ </option>
						<option value="กาญจนบุรี">กาญจนบุรี </option>
						<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
						<option value="กำแพงเพชร">กำแพงเพชร </option>
						<option value="ขอนแก่น">ขอนแก่น</option>
						<option value="จันทบุรี">จันทบุรี</option>
						<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
						<option value="ชัยนาท">ชัยนาท </option>
						<option value="ชัยภูมิ">ชัยภูมิ </option>
						<option value="ชุมพร">ชุมพร </option>
						<option value="ชลบุรี">ชลบุรี </option>
						<option value="เชียงใหม่">เชียงใหม่ </option>
						<option value="เชียงราย">เชียงราย </option>
						<option value="ตรัง">ตรัง </option>
						<option value="ตราด">ตราด </option>
						<option value="ตาก">ตาก </option>
						<option value="นครนายก">นครนายก </option>
						<option value="นครปฐม">นครปฐม </option>
						<option value="นครพนม">นครพนม </option>
						<option value="นครราชสีมา">นครราชสีมา </option>
						<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
						<option value="นครสวรรค์">นครสวรรค์ </option>
						<option value="นราธิวาส">นราธิวาส </option>
						<option value="น่าน">น่าน </option>
						<option value="นนทบุรี">นนทบุรี </option>
						<option value="บึงกาฬ">บึงกาฬ</option>
						<option value="บุรีรัมย์">บุรีรัมย์</option>
						<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
						<option value="ปทุมธานี">ปทุมธานี </option>
						<option value="ปราจีนบุรี">ปราจีนบุรี </option>
						<option value="ปัตตานี">ปัตตานี </option>
						<option value="พะเยา">พะเยา </option>
						<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
						<option value="พังงา">พังงา </option>
						<option value="พิจิตร">พิจิตร </option>
						<option value="พิษณุโลก">พิษณุโลก </option>
						<option value="เพชรบุรี">เพชรบุรี </option>
						<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
						<option value="แพร่">แพร่ </option>
						<option value="พัทลุง">พัทลุง </option>
						<option value="ภูเก็ต">ภูเก็ต </option>
						<option value="มหาสารคาม">มหาสารคาม </option>
						<option value="มุกดาหาร">มุกดาหาร </option>
						<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
						<option value="ยโสธร">ยโสธร </option>
						<option value="ยะลา">ยะลา </option>
						<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
						<option value="ระนอง">ระนอง </option>
						<option value="ระยอง">ระยอง </option>
						<option value="ราชบุรี">ราชบุรี</option>
						<option value="ลพบุรี">ลพบุรี </option>
						<option value="ลำปาง">ลำปาง </option>
						<option value="ลำพูน">ลำพูน </option>
						<option value="เลย">เลย </option>
						<option value="ศรีสะเกษ">ศรีสะเกษ</option>
						<option value="สกลนคร">สกลนคร</option>
						<option value="สงขลา">สงขลา </option>
						<option value="สมุทรสาคร">สมุทรสาคร </option>
						<option value="สมุทรปราการ">สมุทรปราการ </option>
						<option value="สมุทรสงคราม">สมุทรสงคราม </option>
						<option value="สระแก้ว">สระแก้ว </option>
						<option value="สระบุรี">สระบุรี </option>
						<option value="สิงห์บุรี">สิงห์บุรี </option>
						<option value="สุโขทัย">สุโขทัย </option>
						<option value="สุพรรณบุรี">สุพรรณบุรี </option>
						<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
						<option value="สุรินทร์">สุรินทร์ </option>
						<option value="สตูล">สตูล </option>
						<option value="หนองคาย">หนองคาย </option>
						<option value="หนองบัวลำภู">หนองบัวลำภู </option>
						<option value="อำนาจเจริญ">อำนาจเจริญ </option>
						<option value="อุดรธานี">อุดรธานี </option>
						<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
						<option value="อุทัยธานี">อุทัยธานี </option>
						<option value="อุบลราชธานี">อุบลราชธานี</option>
						<option value="อ่างทอง">อ่างทอง </option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">พันธุ์ข้าว</label>
				<div class="col-sm-4">
					<select class="form-control" name="">
						<option value="" selected>--- เลือกพันธุ์ข้าว ---</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">การเพาะปลูก</label>
				<div class="col-sm-4">
					<select class="form-control" name="">
						<option value="" selected></option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">วิธีการปลูก</label>
				<div class="col-sm-4">
					<select class="form-control" name="">
						<option value="" selected></option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">วันที่</label>
				<div class="col-sm-2">
					<input class="form-control" type="text" id="datepicker" />
				</div>
			</div>
		</form>
	</div>
</div>


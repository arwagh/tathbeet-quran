<!DOCTYPE html>
<html lang="en">

<head>
	<title>إنشاء خطة القرآن الكريم</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
    <link rel="icon" type="image/jpg" href="images/icons/quran.png"/>

    <!--Header 2 Links-->
    
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">



        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

        <script>
            $( document ).ready(function() {
                $('.mem-option').show();
        $('.rev-options').hide();
            });
function memorizeFunction() {
    $('.mem-option').show();
    $('.rev-options').hide();

}
function rivisionFunction() {
    $('.rev-options').show();
    $('.mem-option').hide();
}
</script>

</head>

<body>
    
<!--Header 4*-->
<ul class="nav justify-content-end"  style="background-color:#e6e6e6;
font-family:'Adobe Arabic'; font-size:20px; margin-bottom:5px;">
<li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">المتشابهات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Moshaweqat.php">المشوّقات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Memorize-methods.php">كيفية حفظ القرآن الكريم</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">إنشاء خطة جديدة</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Homepage.php">الرئيسية</a>
  </li>
</ul>
<!--End of Header-->
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="processing-plan.php">
				<span class="contact100-form-title" style="font-family:'Adobe Arabic'">
					إنشاء خطة حفظ وتثبيت القرآن الكريم
				</span>

				<div class="wrap-input100 bg1">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
					<span class="label-input100">نوع الخطة</span>
					<br>
					<div style="float: left; width: 50%;">
                    <label class="input100" for="memorize" onclick="memorizeFunction()">حفظ 
                    <input type="radio" id="memorize" name="plan-type" value="mem"> </label>
                    </div>
                    <div style="float: left; width: 50%;">
                    <label class="input100" for="revision" onclick="rivisionFunction()">مراجعة 
                    <input type="radio" id="revision" name="plan-type" value="rev"> </label>
                    </div>
				</div>
                
                <div class="wrap-input100 bg1 mem-option">
                <span class="label-input100">البداية</span>
					<br>
					<div style="float: right; width: 50%;">
    <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>اختر</option>
        <option value="1">البقرة</option>
        <option value="2">آل عمران</option>
        <option value="3">النساء</option>
      </select>
      <label class="mr-sm-2" for="inlineFormCustomSelect">السورة</label>
    </div>
</div>

                    <div style="float: right; width: 50%;">
    <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>اختر</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <label class="mr-sm-2" for="inlineFormCustomSelect">الآية</label>
    </div>
                    </div>

                </div>

                    <div class="wrap-input100 bg1 mem-option">
                    <span class="label-input100">الجزئية يوميًّا (اختر إما بعدد الأوجه أو الآيات)ا</span>
					<br>
                    <div style="float: right; width: 50%;">
                    <div class="col-auto my-1">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>اختر</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    <label class="mr-sm-2" for="inlineFormCustomSelect">عدد الصفحات</label>
                    </div>
                    </div>

                    <div style="float: right; width: 50%;">
                    <div class="col-auto my-1">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>اختر</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    <label class="mr-sm-2" for="inlineFormCustomSelect">عدد الآيات</label>
                    </div>
                    </div>

                    </div>


                    <div class="wrap-input100 bg1 mem-option">
                    <div style="float: right; width: 50%;">
					<span class="label-input100">أيام الحفظ في الأسبوع</span>
					<br>
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        السبت
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>

                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأحد
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الإثنين
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الثلاثاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأربعاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الخميس
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الجمعة
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    </div>
                    <div style="float: right; width: 50%;">
					<span class="label-input100">أيام المراجعة في الأسبوع</span>
					<br>
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        السبت
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>

                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأحد
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الإثنين
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الثلاثاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأربعاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الخميس
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: center; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الجمعة
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
</div>

                    </div>
                    </div>

                    <div class="wrap-input100 bg1 mem-option">
					<span class="label-input100">أيام المراجعة في الأسبوع</span>
					<br>
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        السبت
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>

                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأحد
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الإثنين
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الثلاثاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الأربعاء
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الخميس
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    <div style="float: right; width: 25%;">
                    <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="gridCheck" style="padding-right:5px;">
                        الجمعة
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                    </div>
                    </div>
                    
                    </div>
                
        <div class="wrap-input100 validate-input bg1" data-validate="الرجاء اختيار التاريخ">
					<span class="label-input100">تاريخ البداية</span>
			        <input class="input100" type="date">
				</div> 

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">إذا كنت ترغب باستلام الخطة على البريد الإلكتروني، قم بكتابته أدناه</span>
					<input class="input100" type="text" name="email" placeholder="البريد الإلكتروني">
				</div>
<!--
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate"
					data-validate="Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>
-->
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
							إنشاء
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function () {
				$(this).on('select2:close', function (e) {
					if ($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [1500, 3900],
			connect: true,
			range: {
				'min': 1500,
				'max': 7500
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function (values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
			$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
			$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>
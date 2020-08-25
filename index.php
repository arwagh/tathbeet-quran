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
function memorizeFunction() {
    $('.mem-options').show();
    $('.rev-options').hide();

}
function rivisionFunction() {
    $('.rev-options').show();
    $('.mem-options').hide();
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
					<div style="display: inline-block float:right;">
					<label class="input100" for="memorize" onclick="memorizeFunction()">حفظ <input type="radio" id="memorize" name="plan-type" value="memorize"> </label>
					<label class="input100" for="revision" onclick="rivisionFunction()">مراجعة <input type="radio" id="revision" name="plan-type" value="revision"> </label>
				</div>
				</div>
				
				<div class="wrap-input100 bg1">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
					<span class="label-input100">بداية من</span>
					<br>
					<div style="display: inline-block float:right;">
					<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">السورة</span>
						<select class="js-select2" name="service">
							<option>آية</option>
							<option>وجه</option>
							<option>وجهين</option>
							<option>ربع حزب</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">الآية</span>
						<select class="js-select2" name="service">
							<option>آية</option>
							<option>وجه</option>
							<option>وجهين</option>
							<option>ربع حزب</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				</div>

				<div class="wrap-input100 bg1">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
					<span class="label-input100">الجزئية</span>
					<br>
					<div style="display: inline-block float:right;">
					<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">الأوجه</span>
						<select class="js-select2" name="service">
							<option>آية</option>
							<option>وجه</option>
							<option>وجهين</option>
							<option>ربع حزب</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">الصفحات</span>
						<select class="js-select2" name="service">
							<option>آية</option>
							<option>وجه</option>
							<option>وجهين</option>
							<option>ربع حزب</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				</div>
				<!--Memoize divs-->
				
				<!--To make div sizes identical to the rest-->
                <div class="wrap-input100 input100-select bg1 mem-options">

                <div class="mem-options">

                <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">مقدار الحفظ يوميًّا</span>
						<select class="js-select2" name="service">
							<option>آية</option>
							<option>وجه</option>
							<option>وجهين</option>
							<option>ربع حزب</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
           
<!-- -->
<!--
				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What type of products do you sell?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical"
								checked="checked">
							<label class="label-radio100" for="radio1">
								Phycical Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Digital Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Services Consulting
							</label>
						</div>
					</div>

					<div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span>

						<div class="contact100-form-range-value">
							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>
				</div>

-->


				<div class="wrap-input100 bg1">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
					<span class="label-input100">عدد أيام الحفظ أسبوعيًّا</span>
			        <input class="input100" class="wrap-input100 bg1" type="number" min="1" max="7">
				</div> 

				<div class="wrap-input100 bg1">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
					<span class="label-input100">مرات تكرار المراجعة للأجزاء المحفوظة</span>
					
					<label class="input100" for="weekly">مرة كل أسبوع <input type="radio" id="reco" name="memorize-type" value="weekly"> </label><br>
					<label class="input100" for="two-weeks">مرة كل أسبوعين 	<input type="radio" id="memoriz" name="memorize-type" value="two-weeks"> </label><br>
					<label class="input100" for="three-weeks">مرة كل ثلاث أسابيع <input type="radio" id="memoriz" name="memorize-type" value="three-weeks"> </label><br>
					<label class="input100" for="monthly">مرة كل شهر <input type="radio" id="memoriz" name="memorize-type" value="monthly"> </label><br>

                </div>
</div>
</div>			
<div class="wrap-input100 input100-select bg1 rev-options">

<div class="rev-options">

<div class="wrap-input100 bg1">
					<span class="label-input100">مقدار المراجعة يوميًّا</span>           		
						<select class="js-select2" name="service">
							<option>خمسة أوجه</option>
							<option>نصف جزء</option>
							<option>جزء كامل</option>
							<option>جزءان</option>
						</select>
						<div class="dropDownSelect2"></div>
</div>
</div>
</div>
                <div class="wrap-input100 validate-input bg1" data-validate="الرجاء اختيار التاريخ">
					<!--	<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
					-->
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
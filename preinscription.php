<?php include 'URL-PATH.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Troupe Théâtre S.Y.G - Preinscription</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Preinscription</h2>
        <ol>
          <li><a href="accueil">Home</a></li>
          <li>Preinscription</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Preinscription en ligne INSTITU DU TMC</h2>
                <p>Remplissez tous les Champs pour passer a une autre étape</p>

                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Image</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                    	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                	</div>
                    <br>
                    <!-- fieldsets -->
                    <fieldset data-aos="zoom-in">
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Account Information:</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 1 - 4</h2>
                            	</div>
                            </div>

                           



                            <div class="form-group">
                              <label class="d-inline-block align-top">Identifiant :</label>
                              <div class="d-inline-block">
                                <div class="radio">
                                  <input id="radio-1" name="radio" value="cni" type="radio" />
                                  <label for="radio-1" class="radio-label">CNI</label>
                                </div>
                                <div class="radio">
                                  <input id="radio-2" name="radio" value="massar" type="radio" />
                                  <label for="radio-2" class="radio-label">MASSAR</label>
                                </div>
                            </div>
                            </div>








                            <div class="cni box">
                               <label class="fieldlabels">CNI :</label>
                               <input type="text" name="cni" placeholder="GY00000"/>
                            </div>


                             <div class="massar box">
                               <label class="fieldlabels">MASSAR :</label>
                               <input type="text" name="massar" placeholder="E0000000"/>
                            </div>


                            <label class="fieldlabels">Adresse Email :</label>
                            <input type="email" name="email" placeholder="adresse@host.com" required/>
                            <label class="fieldlabels">Username :</label>
                            <input type="text" name="uname" placeholder="personne123"/>

                            <div class="pw-meter">
                            <div class="form-element">
                            <label for="password" class="fieldlabels">Password :</label>
                            <input id="password" type="password" name="pwd" placeholder="Password"/>
                            <div class="pw-display-toggle-btn">
                              <i class="fa fa-eye"></i>
                              <i class="fa fa-eye-slash"></i>
                           </div>
                           <div class="pw-strength">
                           <span>Weak</span>
                           <span></span>
                           </div>
                            </div>
                            </div>
                            


                            <label class="fieldlabels">Confirm Password :</label>
                            <input type="password" name="cpwd" placeholder="Confirm Password"/>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset data-aos="zoom-in">
                        <div class="form-card">
                            <div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Personal Information :</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 2 - 4</h2>
                            	</div>
                            </div>
                            <label class="fieldlabels">First Name :</label>
                            <input type="text" name="fname" placeholder="First Name"/>
                            <label class="fieldlabels">Last Name :</label>
                            <input type="text" name="lname" placeholder="Last Name"/>
                            <label class="fieldlabels">Contact No :</label>
                            <input type="text" name="phno" placeholder="Contact No."/>
                            <label class="fieldlabels">Alternate Contact No :</label>
                            <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Image Upload :</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 3 - 4</h2>
                            	</div>
                            </div>
                            <label class="fieldlabels">Upload Your Photo :</label>
                            <input type="file" name="pic" accept="image/*">
                            <label class="fieldlabels">Upload Signature Photo :</label>
                            <input type="file" name="pic" accept="image/*">
                        </div>
                        <input type="submit" name="next" class="next action-button" value="Submit"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Finish :</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 4 - 4</h2>
                            	</div>
                            </div>
                            <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
	</div>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"><img src="assets/img/logo/logominN.png" alt=""></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
   /**
   * preinscription form
   */

$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(++current);
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")   
    }
    
    $(".submit").click(function(){
        return false;
    })
        
    });





     /**
   * PASSWORD FORCE INDICATOR
   */

  function getPasswordStrength(password){
  let s = 0;
  if(password.length == 0){
    s = 0;
  }
  if(password.length > 6){
    s++;
  }
  if(password.length > 10){
    s++;
  }
  if(/[A-Z]/.test(password)){
    s++;
  }
  if(/[0-9]/.test(password)){
    s++;
  }
  if(/[^A-Za-z0-9]/.test(password)){
    s++;
  }
  return s;
}
document.querySelector(".pw-meter #password").addEventListener("focus",function(){
  document.querySelector(".pw-meter .pw-strength").style.display = "block";
});

document.querySelector(".pw-meter #password").addEventListener("focusout",function(){
  document.querySelector(".pw-meter .pw-strength").style.display = "none";
});


document.querySelector(".pw-meter .pw-display-toggle-btn").addEventListener("click",function(){
  let el = document.querySelector(".pw-meter .pw-display-toggle-btn");
  if(el.classList.contains("active")){
    document.querySelector(".pw-meter #password").setAttribute("type","password");
    el.classList.remove("active");
  } else {
    document.querySelector(".pw-meter #password").setAttribute("type","text");
    el.classList.add("active");
  }
});

document.querySelector(".pw-meter #password").addEventListener("keyup",function(e){
  let password = e.target.value;
  let strength = getPasswordStrength(password);
  let passwordStrengthSpans = document.querySelectorAll(".pw-meter .pw-strength span");
  strength = Math.max(strength,1);
  passwordStrengthSpans[1].style.width = strength*20 + "%";
  if(strength < 2){
    passwordStrengthSpans[0].innerText = "Weak";
    passwordStrengthSpans[0].style.color = "#111";
    passwordStrengthSpans[1].style.background = "#d13636";
  } else if(strength >= 2 && strength <= 4){
    passwordStrengthSpans[0].innerText = "Medium";
    passwordStrengthSpans[0].style.color = "#111";
    passwordStrengthSpans[1].style.background = "#e6da44";
  } else {
    passwordStrengthSpans[0].innerText = "Strong";
    passwordStrengthSpans[0].style.color = "#fff";
    passwordStrengthSpans[1].style.background = "#20a820";
  }
});





$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
  </script>

</body>

</html>
<?php
require '../config.php';
session_start();

?>

<!DOCTYPE html>

<html lang="el">

<head>
  <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />

  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="../layout/styles/styles.css" rel="stylesheet" type="text/css" media="all">
  
</head>
<body id="top">

<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <ul class="nospace">
          <li class="languages" > <a class="active-lang" href="#">Gr</a> | <a class="lang" href="#">En</a></li>
          <li><i class="fas fa-phone rgtspace-5"></i> <a class="info" href="tel:+302131516649">+30 213 1516 649</a></li>
          <li><i class="far fa-envelope rgtspace-5"></i> <a class="info" href="mailto:info@ypakp.gr">info@ypakp.gr</a></li>
        </ul> 
      </div>
      <div class="fl_right"> 

      <ul class="nospace">
          <li style="text-transform: capitalize;"><a href="../index.php">Συχνές ερωτήσεις</a></li>
          <li style="text-transform: capitalize;"><a href="contact.php" title="Help Centre">Επικοινωνία</a></li>

          <?php if ((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {  ?>
                <li><a href="user/account.php" title="Ο λογαριασμός μου"><i class="fas fa-user"></i></a></li>
          <?php } else { ?>
                <li><a href="user/login.php" title="Σύνδεση"><i class="fas fa-sign-in-alt"></i></a></li>
                <li><a href="user/register.php" title="Εγγραφή"><i class="fas fa-edit"></i></a></li>
          <?php } ?>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </div>


  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 

        <h1 style="font-size: 20px; margin-top: -15px;"><a href="../index.php"> ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ <br> ΥΠΟΥΡΓΕΙΟ ΕΡΓΑΣΙΑΣ <br> ΚΑΙ ΚΟΙΝΩΝΙΚΩΝ ΥΠΟΘΕΣΕΩΝ </a></h1>

      </div>
      <nav id="mainav" class="fl_right"> 

        <ul class="clear">
          <li ><a href="../index.php">Αρχική </a></li>
          <li class="active"><a class="drop" href="#">Ενδιαφερόμενοι</a>
            <ul>
              <li><a href="employees.php">Εργαζόμενοι</a></li>
              <li class="active"><a href="employers.php">Εργοδότες</a></li>
              <li><a href="#">Άνεργοι</a></li>
              <li><a href="#">Συνταξιούχοι</a></li>
              <li><a href="#">Ευπαθείς ομάδες</a></li>
              <li><a href="#">Άλλες ομάδες</a></li>
            </ul>
          </li>

          <li><a href="#">Υπουργείο</a></li>
          <li><a href="#">Έντυπα</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/emp.png');">
    <div id="breadcrumb" class="hoc clear"> 
  
    <h6 class="heading">Άδειες Ειδικού Σκοπού</h6>
      
      <ul>
        <li><a href="../index.php">Αρχική</a></li>
        <li><a href="employers.php">Εργαζόμενοι</a></li>
        <li><p class="active-breadcrumb">Άδειες Ειδικού Σκοπού<p></li>
      </ul>
  
    </div>
  </div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <h1 style="text-transform:none;">Επιλογή Άδειας</h1>

<!--       <div class="container-fluid">
 -->    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">               
                <form id="msform" action="backend/workpermit.php"  method = "post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Βήμα 1:<br>Σύνδεση με<br>taxisnet</strong></li>
                        <li  id="empty"></li>
                        <li id="personal"><strong>Βήμα 2:<br>Διαθέσιμες επιλογές<br>άδειας ειδικού σκοπού</strong></li>
                        
                        <li id="payment"><strong>Βήμα 3:<br>Συμπληρώστε τα απαραίτητα στοιχεία<br>και τη χρονική περίοδο</strong></li>
                        <li id="confirm"><strong>Βήμα 4:<br>Επιβεβαίωση και Υποβολή</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                      <?php if ( (isset( $_SESSION['workpermit'] ) && $_SESSION['workpermit']  == "error")){ ?>
                        <h2 id="heading" style="color:red;">
                          Κάποιο πρόβλημα προέκυψε , πρέπει να ξαναυποβάλλετε την αίτηση!
                        </h2>
                        <?php unset($_SESSION["workpermit"]);?>   
                      <?php }?>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Συνδεθείτε με taxisnet:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Βήμα 1 - 4</h2>
                                </div>

                            </div><label class="fieldlabels">Όνομα Χρήστη: *</label> <input type="text" name="uname" placeholder="Όνομα Χρήστη" /> <label class="fieldlabels">Κωδικός: *</label> <input type="password" name="pwd" placeholder="Κωδικός" /> 
                            <?php if ( !(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){ ?>
                                <h2 id="heading" style="color:red;">
                                <?php $_SESSION['redirect'] = 'workpermit';?>
                                <a href="user/login.php"> Σύνδεση</a>
                                </h2>
                                
                              <?php }?> 


                        </div>
                        <input type="button" name="next" class="next action-button" value="Επόμενο" 
                        <?php if ( !(isset($_SESSION["login"]) && $_SESSION["login"] == "OK") || ( $_SESSION['type'] != '2')  ){ ?>
                          disabled
                        <?php }?>
                        />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Επιλογή Άδειας:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Βήμα 2 - 4</h2>
                                </div>
                            </div>    
                            <label id="register-user-type">Eπιλέξτε την κατηγορία που ανήκετε: *</label>
                            <select class="select-css" name="user-category" id="user-category"  >
                              <option value="" selected disabled>----</option>
                              <option value="1">Μονογονέας</option>
                              <option value="2">Αποκλειστική επιμέλεια</option>
                              <option value="3">Σύζυγος Δημόσιο</option>
                              <option value="4">Σύζυγος Ιδιωτικός Τομέας</option>
                              <option value="5">Σύζυγος Ελεύθερος Επαγγελματίας</option> 
                              <option value="6">Σύζυγος Δεν Εργάζεται - ΑΜΕΑ</option>  
                            </select> 
                           <br><br>
                          
                        </div> <input type="button" name="next" class="next action-button" value="Επόμενο" onclick="showResult()" /> <input type="button" name="previous" class="previous action-button-previous" value="Πίσω" />
                    </fieldset>
                    <fieldset>
                    
                    <div id="result">
                            </div>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Στοιχεία Εργαζόμενου:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Βήμα 3 - 4</h2>
                                </div>
                            </div> 

                            <label class="fieldlabels">Όνομα: *</label> <input id="user-name" type="text" name="fname" placeholder="Όνομα" /> 
                            <label class="fieldlabels">Επώνυμο: *</label> <input id="user-surname" type="text" name="lname" placeholder="Επώνυμο" /> 
                            <label class="fieldlabels">Α.Φ.Μ.: *</label> <input id="user-afm" type="text" name="afm" placeholder="Α.Φ.Μ." /> 
                            <label class="fieldlabels">Email: *</label> <input id="user-email" type="text" name="phno_2" placeholder="Email" />

                            <br>
                            <div class="col-7">
                                    <h2 class="fs-title">Στοιχεία Εργοδότη:</h2>
                                </div>

                            <label class="fieldlabels">Επωνυμία Εταιρείας: *</label> <input id="user-eponimia" type="text" name="fname" placeholder="Επωνυμία Εταιρείας" /> 
                            <label class="fieldlabels">Α.Φ.Μ. Εταιρείας: *</label> <input id="user-afm_etairias" type="text" name="afm_etairia" placeholder="Α.Φ.Μ. Εταιρείας" />

                            <br>
                            <div class="col-7">
                                    <h2 class="fs-title">Επιλογή Χρονικής Περιόδου:</h2>
                                    <!-- <form action="/action_page.php"> -->
                                      <label for="start">Από:</label>
                                      <input id="user-from" type="date"  name="from"/>
                                      <label for="start">Έως:</label>
                                      <input id="user-to" type="date" name="to"/>
                                     <!--  <input type="submit" value="Submit"> -->
                                    <!-- </form> -->
                                </div>
                              <br>
                             <div class="col-7">
                                    <h2 class="fs-title">Στοιχεία Παιδιών:</h2>
                                </div>
                             <!-- <label  style="margin-top:100px;">Συμπληρώστε τα στοιχεία του/των παιδιού/ων σας: *</label> -->
                            <table id="kids" >
                                  <tr id="heading">
                                    <th>Όνομα</th>
                                    <th>Επίθετο</th>
                                    <th>Ηλικία</th>
                                  </tr>
                                  <tr>
                                      <td><input type="text" name="kid-name-0"  id="kid-name-0"/></td>
                                      <td><input type="text" name="kid-lastname-0" id="kid-lastname-0" /></td>
                                      <td><input type="text" name="kid-age-0" id="kid-age-0" /></td>
                                  </tr>
                            </table>
                            <input type="button" id="add" onclick="my_add()" value="Προσθήκη" />
                                    <input type="button" onclick="my_sub()" id="sub" value="Αφαίρεση">
                            <script>
                              function my_add(){
                                  var tbodyRef = document.getElementById('kids');
                                  var rows = tbodyRef.rows.length;

                                  // Insert a row at the end of table
                                  var newRow = tbodyRef.insertRow();

                                  // Insert a cell at the end of the row
                                 
                                  newRow.innerHTML =  ' <tr> ' +
                                      '<td><input type="text" name="kid-name-'+rows + '" id="kid-name-'+rows + '"   /></td>' +
                                      '<td><input type="text" name="kid-lastname-'+rows + '"  id="kid-lastname-'+rows + '"  /></td>'+
                                      '<td><input type="text" name="kid-age-'+rows + '"  id="kid-age-'+rows + '"  /></td>' + '</tr>' ;


                                  var result = document.getElementById('results-kids');
                                  var rows = tbodyRef.rows.length;

                                  // Insert a row at the end of table
                                  var resultRow = result.insertRow();
                                  resultRow.innerHTML =  '<tr>Παιδί</tr>' ;

                                  var resultRow2 = result.insertRow();
                                  resultRow2.innerHTML =  '<tr>'
                                                        +      '<td class="label">Όνομα </td> <td class="value" id="result-kid_name_'+rows+'"></td>'
                                                        +   '</tr>';
                                  
                                  var resultRow3 = result.insertRow();
                                  resultRow3.innerHTML =  '<tr>'
                                                        +       '<td class="label">Επίθετο </td> <td class="value" id="result-kid_surname_'+rows+'"></td>'
                                                        +  '</tr>';

                                  var resultRow4 = result.insertRow();
                                  resultRow4.innerHTML =   '<tr>'
                                                        +     '<td class="label">Ηλικία </td> <td class="value" id="result-kid_age_'+rows+'"></td>'
                                                        + '</tr>';


                              }

                              function my_sub(){
                                var tbodyRef = document.getElementById('kids');
                                var rows = tbodyRef.rows.length;
                                if (rows > 2){
                                  var newRow = tbodyRef.deleteRow(rows-1);
                                }

                                var result = document.getElementById('results-kids');
                                var resultRows = result.rows.length;
                                if (resultRows > 2){
                                  var newRow = tbodyRef.deleteRow(resultRows-1);
                                }

                              }
                             
                            </script>

                        </div> 



                        <input type="button" name="next" class="next action-button" value="Επόμενο"  onclick="showResult()" /> <input type="button" name="previous" class="previous action-button-previous" value="Πίσω" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Επιβεβαίωση και Υποβολή</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Βήμα 4 - 4</h2>
                                </div>
                            </div> <br><br>

                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">H δήλωση σας</h5>
                                </div>
                            </div>
                            <p class="sum-up-label"> Στοιχεία εργαζόμενου </p>
                            <table class="user-details">
                              <tr>
                                <td class="label">Κατηγορία</td> <td class="value" id="result-category"></td>
                              </tr>
                              <tr>
                                <td class="label">Όνομα</td> <td class="value" id="result-name"></td>
                              </tr>
                              <tr>
                                <td class="label">Επώνυμο</td> <td class="value" id="result-surname"></td>
                              </tr>
                              <tr>
                                <td class="label">Α.Φ.Μ.</td> <td class="value" id="result-afm"></td>
                              </tr>
                              <tr>
                                <td class="label">Email</td> <td class="value" id="result-email"></td>
                              </tr>
                            </table>

                            <br>
                            <p class="sum-up-label">Στοιχεία Παιδιών </p>
                            <table id="results-kids" class="ergodotis-details">
                              <tr>Παιδί</tr>
                                <tr>
                                  <td class="label">Όνομα </td> <td class="value" id="result-kid_name_0"></td>
                                </tr>
                                <tr>
                                  <td class="label">Επίθετο </td> <td class="value" id="result-kid_surname_0"></td>
                                </tr>
                                <tr>
                                  <td class="label">Ηλικία </td> <td class="value" id="result-kid_age_0"></td>
                                </tr>
                            </table>
                            <br>

                            <p class="sum-up-label"> Στοιχεία Εργοδότη </p>
                            <table class="ergodotis-details">
                              <tr>
                                <td class="label">Επωνυμία Εταιρείας </td> <td class="value" id="result-eponimia"></td>
                              </tr>
                              <tr>
                                <td class="label">Α.Φ.Μ. Εταιρείας </td> <td class="value" id="result-afm_etairias"></td>
                              </tr>
                            </table>

                            <br> <p id="geeks"></p>
                            <p class="sum-up-label"> Χρονική Περιόδος </p>
                            <table class="ergodotis-details">
                              <tr>
                                <td class="label">Από </td> <td class="value" id="result-form"></td>
                              </tr>
                              <tr>
                                <td class="label">Έως </td> <td class="value" id="result-to"></td>
                              </tr>
                            </table>
                           
                            <script>
                              function showResult(){
                                var category = document.getElementById("user-category").value;
                                if (category == 1){
                                    document.getElementById("result-category").textContent = 'Μονογονέας' ;
                                }
                                else if (category == 2){
                                  document.getElementById("result-category").textContent = 'Αποκλειστική επιμέλεια' ;
                                }
                                else if (category == 3){
                                  document.getElementById("result-category").textContent = 'Σύζυγος Δημόσιο' ;
                                }
                                else if (category == 4){
                                  document.getElementById("result-category").textContent = 'Σύζυγος Ιδιωτικός Τομέας' ;
                                }
                                else if (category == 5){
                                  document.getElementById("result-category").textContent = 'Σύζυγος Ελεύθερος Επαγγελματίας' ;
                                }
                                else if (category == 6){
                                  document.getElementById("result-category").textContent = 'Σύζυγος Δεν Εργάζεται - ΑΜΕΑ' ;
                                }

                                var tbodyRef = document.getElementById('kids');
                                var rows = tbodyRef.rows.length;
                                for (i = 0; i < rows ; i++) {
                                  var id = 'kid-name-' + i ;
                                  var name = document.getElementById(id).value;
                                  var result_id = 'result-kid_name_' + i ;
                                  document.getElementById(result_id).textContent = name;
                                  
                                  id = 'kid-lastname-' + i ;
                                  var surname = document.getElementById(id).value;
                                  result_id = 'result-kid_surname_' + i ;
                                  document.getElementById(result_id).textContent = surname;

                                  id = 'kid-age-' + i;
                                  var age = document.getElementById(id).value;
                                  result_id = 'result-kid_age_' + i;
                                  document.getElementById(result_id).textContent = age;
                                
                                }
                                var name = document.getElementById("user-name").value;
                                document.getElementById("result-name").textContent = name;

                                var surname = document.getElementById("user-surname").value;
                                document.getElementById("result-surname").textContent = surname;

                                var afm = document.getElementById("user-afm").value;
                                document.getElementById("result-afm").textContent = afm;

                                var email = document.getElementById("user-email").value;
                                document.getElementById("result-email").textContent = email;

                                var eponimia = document.getElementById("user-eponimia").value;
                                document.getElementById("result-eponimia").textContent = eponimia;

                                var afm_etairias = document.getElementById("user-afm_etairias").value;
                                document.getElementById("result-afm_etairias").textContent = afm_etairias;
                                
                                var from = document.getElementById("user-from").value;
                                document.getElementById("result-from").innerHTML = from;

                                var to = document.getElementById("user-to").value;
                                document.getElementById("result-to").innerHTML = to;
                                console.log(to);



                                        
                                    
                              }
                            </script>
                            <div class="row justify-content-center">
                            
                            <button class="form-submit" name="workpermit" type="submit"><i class="fa fa-sign-in"></i>  Υποβολή</button>
                                <!-- <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div> -->
                            </div> <br>

                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Πίσω" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!-- </div>
 -->      
      
      
    </div> <!--finish div container -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row3" style="margin-top: -10px; margin-bottom: -10px;">
    <section id="cta" class="hoc container clear"> 
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Καλέστε μας στο:</strong> +30 213 1516 649</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Στείλτε μας mail στο:</strong> info@ypakp.gr</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Δευτέρα - Παρασκευή:</strong> 08.00 π.μ. - 14.00 μ.μ.</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Τοποθεσία:</strong> Οδηγίες για την <a href="https://www.google.com/maps/place/%CE%A5%CF%80%CE%BF%CF%85%CF%81%CE%B3%CE%B5%CE%AF%CE%BF+%CE%95%CF%81%CE%B3%CE%B1%CF%83%CE%AF%CE%B1%CF%82+%CE%BA%CE%B1%CE%B9+%CE%9A%CE%BF%CE%B9%CE%BD%CF%89%CE%BD%CE%B9%CE%BA%CF%8E%CE%BD+%CE%A5%CF%80%CE%BF%CE%B8%CE%AD%CF%83%CE%B5%CF%89%CE%BD/@37.9804173,23.7310797,15z/data=!4m2!3m1!1s0x0:0x6db1fc0cbb58a00a?sa=X&ved=2ahUKEwipy6yBpI3uAhWoNOwKHeZOACwQ_BIwEnoECCcQBQ" target="_blank">τοποθεσία μας</a></span></div>
        </li>
      </ul>
    </section>
  </div>

  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <div class="one_quarter first">
        <h6 class="heading">To υπουργείο</h6>
        <p>Το Υπουργείο Εργασίας προέκυψε μετά την μετονομασία του Υπουργείου Απασχολήσεως στις 3 Αυγούστου 1976 από την Κυβέρνηση Κωνσταντίνου Γ.
          Καραμανλή 1974 και λειτούργησε μέχρι τις 14 Σεπτεμβρίου 1995 οπότε μετονομάστηκε σε Υπουργείο Εργασίας και Κοινωνικών Ασφαλίσεων.
          [<a href="#"><i class="fas fa-arrow-right"></i></a>]
        </p>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="https://www.facebook.com/MinLabourCY/" target="_blank"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="https://twitter.com/labourgovgr" target="_blank"><i class="fab fa-twitter"></i></a></li>

        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">ΝΕΑ - ΑΝΑΚΟΙΝΩΣΕΙΣ</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Παράταση διάρκειας τακτικής επιδότησης ανεργίας, επιδόματος μακροχρονίως ανέργων και βοηθημάτων ανεργίας&hellip;</a></p>
              <time class="block font-xs" datetime="2045-04-06">Παρασκευή, 8 Ιανουαρίου 2021</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Lockdown: Οδικός Χάρτης – Τα 21 μέτρα προστασίας επιχειρήσεων, εργαζομένων και ανέργων για το Νοέμβριο&hellip;</a></p>
              <time class="block font-xs" datetime="2045-04-05">Πέμπτη, 7 Ιανουαρίου 2021</time>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading" style="color:#202020;">.</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Κρατική ενίσχυση επιχειρήσεων με τη μορφή επιστρεπτέας προκαταβολής&hellip;</a></p>
              <time class="block font-xs" datetime="2045-04-06">Δευτέρα, 4 Ιανουαρίου 2021</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Μένουμε Ασφαλείς-Εργασία εξ αποστάσεως. Μέριμνα για τις ευπαθείς ομάδες στον ιδιωτικό τομέα&hellip;</a></p>
              <time class="block font-xs" datetime="2045-04-05">Τρίτη, 29 Δεκεμβρίου 2020</time>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">ΔΗΜΟΦΙΛΗ ΘΕΜΑΤΑ</h6>
        <ul class="nospace linklist">
          <li><a href="#">Επαναφορά του μέτρου της αναστολής των συμβάσεων εργασίας για τους πληττομένους κλάδους</a></li>
          <li><a href="#">Προστασία των ανέργων και των εποχικά απασχολούμενων στον τουρισμό.</a></li>
          <li><a href="#">Πρόγραμμα «ΣΥΝ-ΕΡΓΑΣΙΑ» – SURE</a></li>
        </ul>
      </div>

    </footer>
  </div>


  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 

      <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved</p>

    </div>
  </div>


  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../layout/scripts/multiplestepsform.js"></script>
</body>
</html>
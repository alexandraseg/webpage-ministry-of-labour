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
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

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
          <li ><a class="drop" href="#">Ενδιαφερόμενοι</a>
            <ul>
              <li><a href="employees.php">Εργαζόμενοι</a></li>
              <li ><a href="employers.php">Εργοδότες</a></li>
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


<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/contact.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

  <h6 class="heading">Επικοινωνία</h6>
    
    <ul>
      <li><a href="index.php">Αρχική</a></li>
      <li<p class="active-breadcrumb">Επικοινωνία</p></li>
    </ul>

  </div>
</div>

<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 

  <p>Για την ταχύτερη ανταπόκριση στις απορίες σας, παρακαλούμε χρησιμοποιείστε τη διαδικτυακή φόρμα <a href="contact-form.php">"επικοινωνήστε μαζί μας"</a> αν έχετε μια γενική ερώτηση ή δε γνωρίζετε σε ποιο γραφείο πρέπει να επικοινωνήσετε.</p>

<p>Κατευθυντήριες οδηγίες σχετικά με τον κορωνοϊό μπορείτε να βρείτε στη διεύθυνση <a href="#">www.ypakp.gr/covid</a></p>
<button class="accordion">Επικοινωνία με το Υπουργείο</button>
<div class="panel">
  <br/>
    <span style="font-weight: bold;">Email:</span> info@ypakp.gr<br/>
    <span style="font-weight: bold;">Τηλέφωνο:</span> +30 213 1516 649<br/>
    <span style="font-weight: bold;">Διεύθυνση:</span> Σταδίου 29, Αθήνα, 10559 </li>
  <br/><br/>
</div>

<button class="accordion">Covid - Τροποποιήσεις Ωραρίου</button>
<div class="panel">
  <br>
 <span style="font-weight: bold;">Ώρες:</span><br/>
  Τρίτη - Παρασκευή: 07:00 - 17:00<br/>
  Σάββατο, Κυριακή, Δευτέρα: κλειστά
  <br><br>
</div>

<button class="accordion">Επίσκεψη</button>
<div class="panel">
  <p><span style="font-weight: bold;">Διεύθυνση:</span><br/>Σταδίου 29<br/>Αθήνα 10559</p>
  <a href="appointment.php" style="padding:20px;">Κλείστε ραντεβού</a><br/>
  <a href="https://goo.gl/maps/Y2bGuzJxPX2MFYKn6" target= "_blank">
    <div id="map-tile" style="height:250px; width: 250px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.8591056342266!2d23.72888565056554!3d37.98041727962309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3bacfad54f%3A0xb64e5b8e619348ea!2sStadiou%2029%2C%20Athina%20105%2059!5e0!3m2!1sen!2sgr!4v1610658587272!5m2!1sen!2sgr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


    </section>


</div>

<div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
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
      <!-- ################################################################################################ -->
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
</body>
</html>
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
              <li class="active"><a href="employees.php">Εργαζόμενοι</a></li>
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

<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/emp.png');">
  <div id="breadcrumb" class="hoc clear"> 

  <h6 class="heading">Εργαζόμενοι</h6>
    
    <ul>
      <li><a href="../index.php">Αρχική</a></li>
      <li><p class="active-breadcrumb">Εργαζόμενοι<p></li>
    </ul>
  </div>
</div>





<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <!-- <h1>Εργαζόμενοι</h1> -->
      <p>Η σελίδα αυτή παρέχει μια συντόμευση για πληροφορίες και υπηρεσίες που προσφέρει το Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων στους εργαζόμενους.</p>

      <p id="top1"><h2>Δικαιώματα Εργαζομένων - Κορωνοϊός</h2></p>
      <ul>
        <a href="workpermit.php" style="color:black;"><li>Άδειες ειδικού σκοπού</li></a>
        <li>Τηλεργασία</li>
        <li>Αναστολή σύμβασης εργασίας</li>
        <li>Επικοινωνήστε για ζητήματα υγείας και ασφάλειας στην εργασία</li>
        <li>Μάθε τα δικαιώματά σου</li>
        <li>Πότε πρέπει να υποβάλλετε καταγγελία</li>
      </ul>

      <p id="top2"><h2>Μισθοί και Ώρες Εργασίας</h2></p>
        <ul>
        <li>Topic</li>
        <li>Topic</li>
        <li>Topic</li>
      </ul>

      <p id="top3"><h2>Ασφάλεια και Υγεία στον Χώρο Εργασίας</h2></p>
        <ul>
        <li>Topic</li>
        <li>Topic</li>
        <li>Topic</li>
      </ul>



      <div id="comments"> <!-- don't delete it, otherwise sidebar gets deleted -->
        <p><h2>.</h2></p>    
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    




    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6 style="text-transform: none;">Στη σελίδα αυτή</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#top1">Δικαιώματα Εργαζομένων - Κορωνοϊός</a></li>
          <li><a href="#top2">Μισθοί και Ώρες Εργασίας</a> </li>
          <li><a href="#top3">Ασφάλεια και Υγεία στο Χώρο Εργασίας</a></li>
            </ul>
          </li>
        </ul>
      </nav>



      
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="margin-top: -10px; margin-bottom: -10px;">
    <section id="cta" class="hoc container clear"> 
      <!-- ################################################################################################ -->
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
      <!-- ################################################################################################ -->
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
          <!-- <li><a href="#">14-12-20 Δημοσίευση νέας έκθεσης του Δικτύου Ευρυδίκη με θέμα: “ Eurydice Brief, Equity in school education in Europe: Structures, policies and student performance”</a></li>
          <li><a href="#">10-12-20 11 Δεκεμβρίου: Παγκόσμια ημέρα παιδιού. Έχεις φωνή, είμαστε δίπλα σου...</a></li> -->
        </ul>
      </div>
      <!-- <div class="one_quarter">
        <h6 class="heading">Volutpat quisque mauris</h6>
        <p class="nospace btmspace-15">Viverra etiam dictum euismod lectus vestibulum tincidunt erat vel molestie.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div> -->
      <!-- ################################################################################################ -->
    </footer>
  </div>


  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 

      <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved</p>
      <!-- <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->

    </div>
  </div>


  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
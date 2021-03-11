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
          <li><a href="../index.php">Αρχική </a></li>
          <li><a class="drop" href="#">Ενδιαφερόμενοι</a>
            <ul>
              <li><a href="employees.php">Εργαζόμενοι</a></li>
              <li><a href="employers.php">Εργοδότες</a></li>
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
        <li><a href="index.php">Αρχική</a></li>
        <li><a href="employees.php">Εργαζόμενοι</a></li>
        <li><p class="active-breadcrumb">Άδειες ειδικού σκοπού<p></li>
      </ul>
  
    </div>
  </div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <h1 style="text-transform:none;">Άδεια Ειδικού Σκοπού</h1>

      <p>Η άδεια ειδικού σκοπού συνιστά ειδικό μέτρο, που αποβλέπει στη διευκόλυνση των εργαζόμενων γονέων του ιδιωτικού τομέα και δημόσιου τομέα για τη φροντίδα των παιδιών τους, κατά το διάστημα που οι μονάδες/δομές παροχής φροντίδας ή εκπαίδευσης παραμένουν κλειστές για την αντιμετώπιση και τον περιορισμό της διάδοσης του κορωνοϊού COVID-19.
<br><br>
Η λήψη της άδειας ειδικού σκοπού συνιστά δικαίωμα του εργαζόμενου να το αιτηθεί στον εργοδότη και εκείνος οφείλει να την εγκρίνει, εφόσον πληρούνται οι προϋποθέσεις για τη λήψη της.</p>
       <p>Χρησιμοποιείστε τη διαδικτυακή φόρμα <a href="workpermit.php">Δήλωση Άδειας Ειδικού Σκοπού</a> για να αιτηθείτε την κατάλληλη άδεια.</p>
       <br>

      <button class="accordion">Ποιους αφορά</button>
      <div class="panel">
        <br>
        Δικαιούχοι της άδειας ειδικού σκοπού είναι οι φυσικοί, θετοί ή ανάδοχοι γονείς παιδιών, εφόσον τα παιδιά:
<br><br>
α) είναι εγγεγραμμένα σε βρεφικούς, βρεφονηπιακούς και παιδικούς σταθμούς,<br>
β) φοιτούν σε σχολικές μονάδες υποχρεωτικής εκπαίδευσης (Νηπιαγωγείο, Δημοτικό και Γυμνάσιο),<br>
γ) φοιτούν σε ειδικά σχολεία ή σχολικές μονάδες ειδικής αγωγής και εκπαίδευσης, ανεξαρτήτως ορίου ηλικίας των παιδιών,<br>
δ) τα παιδιά είναι άτομα με αναπηρία και είναι ωφελούμενα σε δομές παροχής υπηρεσιών ανοικτής φροντίδας για άτομα με αναπηρία, ανεξαρτήτως της ηλικίας τους.
<br><br>
Στο έγγραφο οικ. 12339/404/12.3.2020 αναλύονται περιπτώσεις γονέων, που δικαιούνται ή δεν δικαιούνται την άδεια ειδικού σκοπού.
        <br><br>
     </div>

      <button class="accordion">Από πότε χορηγείται και για πόσο χρόνο</button>
      <div class="panel">
         <br>
         Η άδεια ειδικού σκοπού χορηγείται από 11.3.2020 έως 10.5.2020 (εγκ 16135/499/23-4-2020), και για όσο διαρκεί η εφαρμογή των έκτακτων και προσωρινών μέτρων.
<br><br>
Η χορήγηση της άδειας ειδικού σκοπού συναρτάται με την προσωρινή αναστολή λειτουργίας του βρεφονηπιακού σταθμού ή της σχολικής μονάδας, όπου φοιτά το τέκνο του/της υπαλλήλου και χορηγείται υπό τις προβλεπόμενες προϋποθέσεις για όλο το διάστημα που διαρκεί η εν λόγω αναστολή, χωρίς να προβλέπεται άλλος χρονικός περιορισμός ή να χρειάζεται να εκδοθεί νέα προς τούτο ρύθμιση. Το ίδιο δε ισχύει και για τη χορήγηση της εν λόγω άδειας ειδικού σκοπού και στους γονείς, των οποίων τα τέκνα ηλικίας έως τεσσάρων (4) ετών δεν φοιτούν σε βρεφονηπιακούς σταθμούς.
<br><br>
Σε περίπτωση επανέναρξης λειτουργίας των σχολικών μονάδων και βάσει των στοιχείων που έχει στη διάθεσή της η αρμόδια διεύθυνση προσωπικού, θα επανελέγχεται η συνδρομή των προϋποθέσεων χορήγησης της εν λόγω άδειας και εφόσον δεν στοιχειοθετείται πλέον δικαίωμα, οι υπάλληλοι αυτοί συνυπολογίζονται στους υπαλλήλους, που παρέχουν εκ περιτροπής εργασία.
<br><br>
Επιπλέον, λόγω της χρονικής διάρκειας ισχύος των μέτρων και δεδομένων των έκτακτων συνθηκών, όπως διαμορφώνονται κατά την αντιμετώπιση της πανδημίας του κορωνοϊού, επισημαίνεται ότι είναι δυνατή η διακοπή της άδειας ειδικού σκοπού από τους δικαιούχους υπαλλήλους. Ωστόσο, είναι προφανές ότι στις περιπτώσεις αυτές, οι εν λόγω υπάλληλοι προσμετρώνται στους υπαλλήλους, που παρέχουν εργασία εκ περιτροπής -με αυτοπρόσωπη παρουσία ή με εξ αποστάσεως παροχή εργασίας.
<br><br>
Χρήση αυτής δύναται να γίνει είτε από τον έναν εξ ολοκλήρου, είτε και από τους δύο, εφόσον μοιραστούν μεταξύ τους διαστήματα αυτής, ενώ δεν μπορεί να γίνει ταυτόχρονα χρήση της και από τους δύο.
         <br><br>
      </div>
      <button class="accordion">Πώς χορηγείται η άδεια</button>
      <div class="panel">
        <br>
        Η άδεια αυτή μπορεί να χορηγείται συνεχόμενα η  και τμηματικά, εφόσον εξυπηρετούνται οι ανάγκες του εργαζόμενου.
<br><br>
Έχει διάρκεια κατ' ελάχιστον τριών (3) ημερών, την οποία ακολουθεί στη συνέχεια η χορήγηση μίας ημέρας κανονικής αδείας του έτους 2020, σχήμα το οποίο επαναλαμβάνεται κυκλικά για όσο διάστημα χρειαστεί, μέχρι τη λήξη του έκτακτου και προσωρινού μέτρου.
<br><br>
Σε κάθε περίπτωση τα μέτρα περί παροχής εξ αποστάσεως εργασίας και χορήγησης της άδειας ειδικού σκοπού, μπορούν να λειτουργήσουν συνδυαστικά με τρόπο ώστε και τα δύο μέρη, εργαζόμενοι (εργαζόμενοι γονείς) και εργοδότες, να μπορούν να ανταπεξέλθουν στην κατάσταση έκτακτης ανάγκης, που έχει δημιουργηθεί, για την αντιμετώπιση της μετάδοσης του κορωνοϊου, στο πλαίσιο πάντα της καλής πίστης, της αλληλέγγυας συνευθύνης και της τριμερούς συμμετοχής για την αντιμετώπιση του φαινομένου.
<br><br>
Η χορήγηση της άδειας συσχετίζεται με το δικαίωμα λήψης ετήσιας κανονικής άδειας και συνεπώς, ανάλογα με τη διάρκεια της υπηρεσίας των εργαζομένων στον ίδιο εργοδότη είναι δυνατόν να κάνουν χρήση αυτής στο σύνολό της, εφόσον αυτοί πληρούν τις νόμιμες προϋποθέσεις λήψης ετήσιας κανονικής άδειας τουλάχιστον έξι (6) ημερών για την εξαήμερη εργασία, ή πέντε (5) ημερών για την πενθήμερη εργασία. Διαφορετικά δικαιούνται να κάνουν χρήση τμήματος αυτής κατ' αναλογία του δικαιώματός τους σε κανονική άδεια.
<br><br>
Ανά 3 ημέρες άδειας ειδικού σκοπού προστίθεται υποχρεωτικά μία (1) ημέρα ετήσιας κανονικής άδειας του εργαζόμενου, η οποία αφαιρείται από τη συνολικά δικαιούμενη κανονική άδεια για το έτος 2020.


        <br><br>
      </div>  
       <button class="accordion">Ποια η φύση της περιόδου άδειας</button>
      <div class="panel">
         <br>
         Η περίοδος της άδειας ειδικού σκοπού είναι:<br>
- χρόνος εργασίας,<br>
- αμείβεται και ασφαλίζεται ως χρόνος εργασίας<br>
- λαμβάνεται υπόψη για τη θεμελίωση κάθε δικαιώματος των εργαζομένων, που προκύπτει λόγω της σχέσης εργασίας τους.
         <br><br>
      </div>
      <button class="accordion">Πώς αμείβεται</button>
      <div class="panel">
         <br>
         Οι δύο πρώτες ημέρες της άδειας ειδικού σκοπού αμείβονται από τον εργοδότη, η τρίτη από τον τακτικό προϋπολογισμό.
         <br><br>
      </div>
      
    </div>
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
  <script src="../layout/scripts/accordion.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Budget: Argentum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <script src="main.js"></script>
  </head>
  <body>
    <div class="pages">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Argentum</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#contentpages"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="contentpages">
            <ul class="navbar-nav">
              <li><a class="nav-link active" href="#">Profile</a></li>
              <li><a class="nav-link active" href="#">Data</a></li>
              <li><a class="nav-link active" href="#">About Us</a></li>
              <li><a class="nav-link active" href="#">Contact</a></li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li><a class="nav-link active" href="#">Sign Up</a></li>
              <li><a class="nav-link active" href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <br />
    <br />
    <br />
    <br />
    <div id="formContent" class="container">
        <div class="row"> 
            <a class="btn btn-primary float-left" href="http://webdev.scs.ryerson.ca/~s2miah/budget.html" role="button">Back</a>
        </div>
    
        <?php
            $items = $_POST['itemsArray'];
            $price = $_POST['priceArray'];
            $budget = $_POST['budget'];
            $income = $_POST['income'];
            $total = 0;
           
            echo('<div class="row">');

                echo('<div class="col">');
                    echo('<div class="row"');
                        echo('<h3>Input</h3>');
                    echo('</div>');
                    foreach( $items as $key => $currentItem ) {
                        echo('<div class="row">');
                            echo '{Item, Price}: ' . $currentItem . ', $' . $price[$key];
                        echo('</div>');
                        $total += $price[$key];
                    }
                echo('</div>');
                echo('<div class="col">');

                    echo('<div class="row"');
                        echo('<h3>Feedback</h3>');
                        echo('<br/>');
                    echo('</div>');
                  
                    echo('<div class="row"');
                        echo '<br/>' . 'Monthly Income: $' . $income;
                        echo '<br/>' . 'Monthly Budget $' . $budget;
                        echo '<br/>' . 'Total Expenses: $' . $total;
                        echo '<br/>' . 'Remaining Budget: $' . ($budget - $total);
                    echo('</div>');

                echo('</div>');

            echo('</div>'); 
                    
            echo('<br />');
            echo('<div class="row"');
                if ($budget > $total){
                    if($income > $total && (($income - $total) / $income) > 0.50){
                        echo '<p>You stayed under your budget and saved more than half your income. Amazing! Keep up the great work! :-)</p>';
                    }else{
                        echo '<p>You stayed under your budget. Keep up the great work! :-)</p>';
                    }
                }else if ($budget == $total){
                    echo '<p>Your expenses might have been high this month. You still spent within your budget. Good job</p>';
                }else{
                    echo '<p>You need to reign in your spending. You went over your budget for the month :(';
                }
            echo('</div>');
            echo('<br />');
        ?>
    </div>
  </body>
</html>

<html>
    <head>
        <title>What Are Your Chances At </title>
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
         <script src="/js/jquery.js"></script>
         <script src="/js/bootstrap.min.js"></script>
         <link href="/css/single-page.css" rel="stylesheet" media="screen">
    </head>
<?php
$hospital = $_POST['hospital']
?>

<body>
    <div id="wrap">
        
        <!-- start of titles -->
        
        <div class="container">
            <div class="leaderboard" align="center">
                <h1>What Are My Chances?</h1>
                <br>
                <?php
                echo "<h2>Your Chances At $hospital Are:</h2>" ;
                ?>
                <!-- <h2>Your Chances Are At </h2> -->
                <br>
                <div class="well">
                <?php
                echo "<h3>Good to Excellent</h3>" 
                ?>
                </div>
            </div>
   
       
        
        <!-- start of main form -->
       
        <div class="hero-unit">
            
       <div class="row-fluid">
       
            <div class="span12">
                
           <div class="row-fluid">
                
              <div class="span4" align="left">
                <h4>Hospital Rating:</h4>
            </div>
            
            <div class="span4" align="center">
                <h4>This is Data</h4>
            </div>
            
            <div class="span4" align="right">
                <h4>This is a Picture</h4>
            </div>
          </div>
          
          <div class="row-fluid">
            
             <div class="span4" align="left">
                <h4>Death Rates:</h4>
            </div>
            
            <div class="span4" align="center">
                <h4>This is Data</h4>
            </div>
            
            <div class="span4" align="right">
                <h4>This is a Picture</h4>
            </div>
            
          </div>
          
          <div class="row-fluid">
            
            <div class="span4" align="left">
                <h4>A&E Waiting Time:</h4>
            </div>
            
            <div class="span4" align="center">
                <h4>This is Data</h4>
            </div>
            
            <div class="span4" align="right">
                <h4>This is a Picture</h4>
            </div>
          </div>  
          </div>
          </div>
          </div>
          
        
    </div>
    
    
    <div id="footer" class="modal-footer">
    <div class="container">
      <div class="row">
        
        <div class="span6" align="left">
        <p class="muted credit">
            Created by Sam Kirsten 2013
        </p>
        </div>
        <div class="span6">
            <img src="/img/pbg.png" alt="Powered by Google">
        </div>
        </div>
    </div>
    </div>
    
    
</body>

</html>
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

<?php
mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("whataremychances") or die (mysql_error());

$data = mysql_query("SELECT * FROM details WHERE hospital='$hospital'") or die(mysql_error());
$info = mysql_fetch_array( $data );

$mortality = $info['mortality'];
$inpatient = $info['inpatient-experience'];
$occupancy = $info['bed-occupancy'];
$ambresponse = $info['amb-response'];
$aneresponse = $info['a&e-response'];

$data2 = mysql_query("SELECT * FROM average") or die(mysql_error());
$info2 = mysql_fetch_array( $data2 );

$mortalityav = $info2['mortality'];
$inpatientav = $info2['inpatient-experience'];
$occupancyav = $info2['bed-occupancy'];
$ambresponseav = $info2['amb-response'];
$aneresponseav = $info2['a&e-response'];
?>

<?php

$counter = 0;
$rating  = "Unrated";

if ($inpatient > $inpatientav)
                {
                    $counter = 1;  
                } 
if ($mortality < $mortalityav)
                {
                    $counter = $counter + 1;  
                } 
if ($occupancy < $occupancyav)
                {
                    $counter = $counter + 1;  
                } 
if ($ambresponse > $ambresponseav)
                {
                    $counter = $counter + 1;  
                } 
if ($aneresponse > $aneresponseav)
                {
                    $counter = $counter + 1;  
                } 
   
if ($counter === 5)
{
  $rating = "Excellent";
}
if ($counter === 4)
{
  $rating = "Good";
}
if ($counter === 3)
{
  $rating = "Average";
}
if ($counter === 2)
{
  $rating = "Poor";
}
if ($counter === 1)
{
  $rating = "Very Poor";
}
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
                echo "<h2>$rating</h2>" ;
                ?>
                </div>
            </div>
   
       
      
        <!-- start of main form -->
       
        <div class="hero-unit" align="center">
            
       <div class="row-fluid">
       
            <div class="span12">
                
           <div class="row-fluid">
                
              <div class="span4" align="left">
                <h4>In-Patient Rating:</h4>
              </div>
            
              <div class="span4" align="center">
                <?php
                if ($inpatient > $inpatientav)
                {
                    echo "<h4>Above Average</h4>";
                     
                } 
                else if ($inpatient < $inpatientav)
                {
                    echo "<h4>Below Average</h4>";
                   
                }
                else 
                {
                     echo "<h4>No Data Available</h4>";
                }
                ?>
              </div>
            
              <div class="span4" align="right">
                  <?php
                          if ($inpatient > $inpatientav)
                {
                    echo '<img src="/img/tick.svg"></img>';
                } 
                else if ($inpatient < $inpatientav)
                {
                    echo '<img src="/img/cross.svg"></img>';
                }
                else 
                {
                    echo '<img src="/img/attention.svg"></img>';
                }
                  ?>
                
              </div>
           </div>
          <hr>
          
          <div class="row-fluid">
            
             <div class="span4" align="left">
                <h4>Death Rates:</h4>
            </div>
            
            <div class="span4" align="center">
                <?php
                if ($mortality < $mortalityav)
                {
                    echo "<h4>Below Average</h4>";
                }
                else if ($mortality > $mortalityav)
                {
                    echo "<h4>Above Average</h4>";
                }
                else 
                    {
                        echo "<h4>No Data Available</h4>";
                    }
                ?>
              </div>
            
              <div class="span4" align="right">
                  <?php
                          if ($mortality < $mortalityav)
                {
                    echo '<img src="/img/tick.svg"></img>';
                } 
                else if ($mortality > $mortalityav)
                {
                    echo '<img src="/img/cross.svg"></img>';
                }
                else 
                {
                    echo '<img src="/img/attention.svg"></img>';
                }
                  ?>
                
              </div>
            
          </div>
          <hr>
          
          <div class="row-fluid">
            
            <div class="span4" align="left">
                <h4>Bed Occupancy:</h4>
            </div>
            
            <div class="span4" align="center">
                <?php
                if ($occupancy < $occupancyav)
                {
                    echo "<h4>Below Average</h4>";
                    
                } 
                else if ($occupancy > $occupancyav)
                {
                    echo "<h4>Above Average</h4>";
                }
                else 
                    {
                        echo "<h4>No Data Available</h4>";
                    }
                ?>
              </div>
            
              <div class="span4" align="right">
                  <?php
                          if ($occupancy < $occupancyav)
                {
                    echo '<img src="/img/tick.svg"></img>';
                } 
                else if ($occupancy > $occupancyav)
                {
                    echo '<img src="/img/cross.svg"></img>';
                }
                else 
                {
                    echo '<img src="/img/attention.svg"></img>';
                }
                  ?>
                
              </div>
            
           </div>
           
            <hr>
            
            <div class="row-fluid">
            
            <div class="span4" align="left">
                <h4>Ambulance Response (8 Mins):</h4>
            </div>
            
           <div class="span4" align="center">
                <?php
                if ($ambresponse > $ambresponseav)
                {
                    echo "<h4>Above Average</h4>";
                    
                } 
                else if ($ambresponse < $ambresponseav)
                {
                   echo "<h4>Below Average</h4>";
                }
                else 
                    {
                        echo "<h4>No Data Available</h4>";
                    }
                ?>
              </div>
            
              <div class="span4" align="right">
                  <?php
                          if ($ambresponse > $ambresponseav)
                {
                    echo '<img src="/img/tick.svg"></img>';
                } 
                else if ($ambresponse < $ambresponseav)
                {
                    echo '<img src="/img/cross.svg"></img>';
                }
                else 
                {
                    echo '<img src="/img/attention.svg"></img>';
                }
                  ?>
                
              </div>
            </div>
            <hr>
            
              <div class="row-fluid">
            
            <div class="span4" align="left">
                <h4>A&E Response:</h4>
            </div>
            
            <div class="span4" align="center">
                <?php
                if ($aneresponse > $aneresponseav)
                {
                    echo "<h4>Above Average</h4>";
                    
                } 
                else if ($aneresponse < $aneresponseav)
                {
                    echo "<h4>Below Average</h4>";
                }
                else 
                    {
                        echo "<h4>No Data Available</h4>";
                    }
                ?>
              </div>
            
              <div class="span4" align="right">
                  <?php
                if ($aneresponse > $aneresponseav)
                {
                    echo '<img src="/img/tick.svg"></img>';
                } 
                else if ($aneresponse < $aneresponseav)
                {
                    echo '<img src="/img/cross.svg"></img>';
                }
                else 
                {
                    echo '<img src="/img/attention.svg"></img>';
                }
                
                
                
                  ?>
                
              </div>
            </div>
            
          </div>  
          </div>
          </div>
          </div>
          
        
    </div>
    
    
        <div id="footer" class="modal-footer">
    <div class="container">
      <div class="row">
        <div class="span3" align="left">
            
                <form action="/index.html">
                <input type="submit" value="Home" class="btn btn-primary">
                </form>
            
        </div>
        <div class="span3" align="left">
        <p class="muted credit">
            Created by Sam Kirsten 2013
        </p>
        </div>
        <div class="span3">
            <img src="/img/pbg.png" alt="Powered by Google">
        </div>
        <div class="span3" align="right">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="SD5S7X5SRDK2L">
            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
        </div>
    </div>
    </div>
    
    
</body>

</html>
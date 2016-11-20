<script id="match-info" type="text/x-custom-template">
<head>
    <style>
        .scoreboard{
                      background: url("src/resources/venue.jpg") no-repeat center center fixed;
                      background-color: #16224d;
                      zoom:1;
                      position:relative;
                      background-size: cover;
                      font-family:Segoe UI;
        }
        
        .dashboard img {
           display: table;
           width: 100%;
        }
        .dashboard .btn {
          width:100%;
          white-space: normal;
        }
        .panel-title{
          text-align: center;
        }
       .btn .btn-primary .btn-raised .panel-button{
         background-color: #40B0F9 !important; 
     }

    </style>
   <head>
        <div style="padding-top:50px;">
            
        <div style='height:370px;' class='scoreboard'>
            <div class="row">
                <div class="text-center" style="color:white">
                    <h2><strong>KKR won by 82 runs</strong></h2>
                </div>
            </div>
            <div class="row">
            <div class='col-lg-3 col-lg-offset-3'>
                <div class='row'>
                    <div class='text-right' style="">
                        <h3 style="color:white;padding-right:20px;" ><strong id='team1name'>KKR</strong></h3>
                    </div>
                </div>
                <div clas="row">
                    <div class="text-right">
                        <h1 style="color:white;font-size: 72px;" > <strong id="team1runs">0</strong> <strong>/</strong><strong id="team1wickets">0</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class='text-right' style="">
                        <h4 style="color:white;padding-right:20px;" ><strong>Run Rate: <strong id='team1runrate'>2.54</strong></strong></h4>
                        <h4 style="color:white;padding-right:20px;" ><strong>Overs: <strong id='team1overs' >19.1</strong></strong></h4>
                    </div>

                 </div>
                </div>
            <div class='col-lg-3' style="padding-left:50px;">
                <div class='row'>
                    <div class='text-left' style="">
                        <h3 style="color:white;padding-left:20px;" id='team2name'><strong>MI</strong></h3>
                    </div>
                </div>
                <div clas="row">
                    <div class="text-left">
                        <h1 style="color:white;font-size: 72px;" > <strong id="team2runs">0</strong> <strong>/</strong><strong id="team2wickets">0</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class='text-left' style="">
                        <h4 style="color:white;padding-left:20px;" ><strong>Run Rate: <strong id='team2runrate'>2.54</strong></strong></h4>
                        <h4 style="color:white;padding-left:20px;" ><strong>Overs: <strong id='team2overs' >19.1</strong></strong></h4>
                    </div>
                </div>
            </div>
            </div>
            
            <div class='row text-center' style="padding-top:10px;">
                <div class=' col-lg-3 col-lg-offset-4 text-center' style="margin-left:520px;">
                    <ul class="nav nav-tabs nav-justified" style="background:#4d90fe;">
                    <li class="active"><a href="#" id="overview">Overview</a></li>
                     <li class="divider"></li>
                    <li class=""><a href="#" id="scoreboard">Scorecard</a></li>
                     </ul>
               
                </div>
                
            </div>
            
            </div>
        </div>
 
        
         
        <div class="well" id="targetdiv" style="">
            
        </div>

</script>
  <script id="scorecard-template" type="text/x-custom-template">
            <h1 class='text-center'>Scorecard</h1>
            <hr>
            <div class=" panel panel-default panel-info " >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Team 1 Innings</div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        
                    <table class="table table-striped">
                        <thead>Batting Scorecard</thead>
                        <tbody>
                            <tr>
                                <th style="width: 30%">Name</th>
                                <th>Runs</th>
                                <!--Add the other columns here-->
                            </tr>
                        <tr>
                            <td>Players 1 Name </td>
                            <td>Players 1 Runs</td>
                        </tr>
                        
                        </tbody>
                    </table>
                        
                        
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-striped">
                            <thead>Batting Scorecard</thead>
                            <tbody>
                                <tr>
                                <th style="width: 30%">Name</th>
                                <th>Wickets</th>
                                <!--Add the other columns here-->
                                </tr>
                                <tr>
                            <td>Players 1 Name </td>
                            <td>Players 1 Wickets</td>
                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=" panel panel-default panel-info " >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Team 2 Innings</div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        
                    <table class="table table-striped">
                        <thead>Batting Scorecard</thead>
                        <tbody>
                            <tr>
                                <th style="width: 30%">Name</th>
                                <th>Runs</th>
                                <!--Add the other columns here-->
                            </tr>
                        <tr>
                            <td>Players 1 Name </td>
                            <td>Players 1 Runs</td>
                        </tr>
                        
                        </tbody>
                    </table>
                        
                        
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-striped">
                            <thead>Batting Scorecard</thead>
                            <tbody>
                                <tr>
                                <th style="width: 30%">Name</th>
                                <th>Wickets</th>
                                <!--Add the other columns here-->
                                </tr>
                                <tr>
                            <td>Players 1 Name </td>
                            <td>Players 1 Wickets</td>
                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </script>
        <script id="overview-template" type="text/x-custom-template">
            <h1 class='text-center'>Overview</h1>
            <hr>
            <div class="row">
            <div class="col-lg-6">
            <div class=" panel panel-default panel-info " >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Match Stream</div>
                <div class="panel-body">
                    <div class="panel panel-default panel-success">
                        <div class="panel-heading"  style="height:100px;">
                            <div class="col-lg-2 pull-left" style="margin-top:30px;">
                                <strong style="color:white;">Over</strong>
                            </div>
                        <div class="col-lg-10 pull-right" style="margin-top:10px;">
                            <table style="border-color: none;" class="table">
                                                          <tbody>
                                                              <tr>
                                                                  <td class="col-lg-2" id="live-ball1">
                                                                    <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">2</p>
                                                                      </span>
                                                                  </td>
                                                                  <td class="col-lg-2"  id="live-ball2">
                                                                      <span class="fa-stack fa-2x">
                                                                        <i class="fa fa-circle fa-stack-2x " style="color:#ffc440;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">6</p>
                                                                      </span>
                                                                  </td>
                                                                  <td class="col-lg-2"  id="live-ball3">
                                                                      <span class="fa-stack fa-2x">
                                                                        <i class="fa fa-circle fa-stack-2x " style="color:#f03d2f;"></i>
                                                                        <p class="fa-stack-1x" style="color:white;font-family:Segoe UI;">W</p>
                                                                      </span>
                                                                  </td>
                                                                  <td class="col-lg-2"  id="live-ball4">
                                                                      <span class="fa-stack fa-2x">
                                                                        <i class="fa fa-circle fa-stack-2x " style="color:#0571ea;"></i>
                                                                        <p class="fa-stack-1x" style="color:white;font-family:Segoe UI;">4</p>
                                                                      </span>
                                                                  </td>
                                                                  <td class="col-lg-2"  id="live-ball5">
                                                                      <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">.</p>
                                                                      </span>
                                                                  </td>
                                                                  <td class="col-lg-2"  id="live-ball6">
                                                                      <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">1</p>
                                                                      </span>
                                                                  </td>
                                                                  
                                                              </tr>
                                                          </tbody>
                                                      </table>
                        </div>
                        </div>
                        <div class="panel-body">
                            <!--this is the basic element you need to copy over time for each ball-->
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>
                                        <div class="col-lg-3" id="scoreicon">
                                            <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">2</p>
                                                                      </span>
                                        </div>
                                        <div class="col-lg-9"><p id='commhere'>Some commentary here</p></div>
                                    </td>
                                </tr>
                            </table>
                            
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>
                                        <div class="col-lg-3" id="scoreicon">
                                            <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">2</p>
                                                                      </span>
                                        </div>
                                        <div class="col-lg-9"><p id='commhere'>Some commentary here</p></div>
                                    </td>
                                </tr>
                            </table>
                            
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>
                                        <div class="col-lg-3" id="scoreicon">
                                            <span class="fa-stack fa-2x" style="">
                                                                        <i class="fa fa-circle fa-stack-2x  " style="color:#c1cbdd;"></i>
                                                                        <p class="fa-stack-1x" style="color:black;font-family:Segoe UI;">2</p>
                                                                      </span>
                                        </div>
                                        <div class="col-lg-9"><p id='commhere'>Some commentary here</p></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                    
            </div>
            </div>
         
          
        </div>
            </div>
                <div class="col-lg-6">
                     <div class=" panel panel-default panel-info " >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Match Information</div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Players</div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <table class="table">
                                    <thead><p class='text-center'>Team 1 Name</p></thead>
                                    <tbody>
                                        <tr><td>Player 1 name </td></tr>
                                         <tr><td>Player 2 name </td></tr>
                                          <tr><td>Player 3 name </td></tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="col-lg-6">
                                <table class="table">
                                    <thead class="text-center"><p class='text-center'>Team 2 Name</p></thead>
                                    <tbody>
                                        <tr><td>Player 1 name </td></tr>
                                         <tr><td>Player 2 name </td></tr>
                                          <tr><td>Player 3 name </td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    <div class='row'>
                        <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Umpires</div>
                        <div class="panel-body">
                            
                                <table class="table">
                                    
                                    <tbody>
                                        <tr><td class='text-center'>Umpiree 1 name </td></tr>
                                         <tr><td>Umpire 2 name </td></tr>
                                        
                                    </tbody>
                                </table>
                                
                          
                            
                        </div>
                    </div> 
                        </div>
                        
                        <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Venue</div>
                        <div class="panel-body">
                            
                                <table class="table">
                                    
                                    <tbody>
                                        <tr><td class='text-center'>Venue Here </td></tr>
                                        
                                        
                                    </tbody>
                                </table>
                                
                          
                            
                        </div>
                    </div> 
                        </div>
                        
                    </div>
                </div>
         
          
        </div>
                </div>
            </div>
        </script>
       
<script>
   
    $('#overview').click(function(){ loadOverview(); return false; });
     $('#scoreboard').click(function(){ loadScoreboard(); return false; });
    
    function loadOverview(){
    console.log("In home");
    var remove = document.getElementById('targetdiv');
    while( remove.hasChildNodes() ){
            remove.removeChild(remove.lastChild);
    }


    var template = $('#overview-template').html();
    console.log("template is "+template);
    $('#targetdiv').append(template);
    }
    
    
    function loadScoreboard(){
    console.log("In home");
    var remove = document.getElementById('targetdiv');
    while( remove.hasChildNodes() ){
            remove.removeChild(remove.lastChild);
    }


    var template = $('#scorecard-template').html();
    console.log("template is "+template);
    $('#targetdiv').append(template);
    }
</script>
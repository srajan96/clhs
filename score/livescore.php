 <script id="scorecard-template" type="text/x-custom-template">
            <h1 class='text-center'>Scorecard</h1>
            <hr>
            <div class=" panel panel-default panel-info text-center" >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Team 1 Innings</div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        
                    <table class="table table-striped text-center">
                        <thead>Batting Scorecard</thead>
                        
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Runs</th>
                                <!--Add the other columns here-->
                            </tr>
                        
                        
                        <tbody id="batting1"></tbody>
                    </table>
                        
                        
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-striped text-center">
                            <thead>Bowling Scorecard</thead>
                            
                                <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Wickets</th>
                                <!--Add the other columns here-->
                                </tr>
                             
                            <tbody id="bowling2" class="text-center"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=" panel panel-default panel-info text-center " >
                <div class="panel-heading text-center"style="color:white;background:#4d90fe" >Team 2 Innings</div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        
                    <table class="table table-striped text-center">
                        <thead>Batting Scorecard</thead>
                        
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Runs</th>
                                <!--Add the other columns here-->
                            </tr>
                       
                        
                       <tbody id="batting2"> </tbody>
                    </table>
                        
                        
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-striped text-center">
                            <thead>Bowling Scorecard</thead>
                            
                                <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Wickets</th>
                                <!--Add the other columns here-->
                                </tr>
                              
                         <tbody id="bowling1">   </tbody>
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
                            <div class="col-lg-3 " style="margin-top:30px;">
                                <strong style="color:white;">Ball Info</strong>
                            </div>
                            <div class="col-lg-7 text-center" style="margin-top:30px;">
                                <strong style="color:white;">Commentary</strong>
                            </div>
                        </div>
                        <div class="panel-body" id="commentarybody">
                            <!--this is the basic element you need to copy over time for each ball-->
                           
                            
                            
                            
                            
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
                                    <thead><p class='text-center' id="playersteam1name">Team 1 Name</p></thead>
                                    <tbody id="playertable1" class="text-center">
                                      
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="col-lg-6">
                                <table class="table ">
                                    <thead class="text-center"><p class='text-center' id="playersteam2name">Team 2 Name</p></thead>
                                    <tbody id="playertable2" class="text-center">
                                      
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
                                    
                                    <tbody class='text-center'>
                                        <tr><td id="overviewumpire1">Umpiree 1 name </td></tr>
                                         <tr><td id="overviewumpire2">Umpire 2 name </td></tr>
                                        
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
                                        <tr><td class='text-center ' id='overviewvenue'>Venue Here </td></tr>
                                        
                                        
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
     

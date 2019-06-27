@extends('layouts.app')
@section('content')
<body>
    <style>
            .panel-heading:hover{
                background-color:green;
            }
            .list-group-item:hover{
                background-color:blue;
            }
    </style>
    <div class="bs-example">
        <div class="panel panel-default"  style="float:left; width:400px">
                <!-- Default panel contents -->
                @foreach($teamname as $teamname)
                <div class="panel-heading" id="fixture">Team Name {{$teamname->team_name}} </div>
                <!--<div class="panel-body">
                    <p>The following products are currently available on our store.</p>
                </div>-->
                <!-- List group -->
        
                        <ul class="list-group" width="200px" id="playername">
                                
                               <li class="list-group-item">{{$teamname->captain_name}} (c) </li>
                                @endforeach
                                @foreach($firstteam as $firstteam)
                                <li class="list-group-item">{{$firstteam->player_name}} 
                                    <span>
                                     <small>{{$firstteam->player_role}}</small> </span> </li>        
                                @endforeach
                            </ul>
                
            </div>
        
              
        
        
                <div class="panel panel-default" style="float:left; width:400px; margin-left:50px ">
                    <!-- Default panel contents -->
                            @foreach($secondteam as $secondteam)
                    <div class="panel-heading" >Team Name {{$secondteam->team_name}} </div>
                    <!--<div class="panel-body">
                        <p>The following products are currently available on our store.</p>
                    </div>-->
                    <!-- List group -->
            
                            <ul class="list-group" width="200px">
                                    
                                    <li class="list-group-item">{{$secondteam->captain_name}} (c) </li>
                                    @endforeach
                                    @foreach($opponentteam as $opponentteam)
                                    <li class="list-group-item">{{$opponentteam->player_name}}<span>
                                         <small>{{$opponentteam->player_role}}</small> </span> </li>        
                                    @endforeach
                                        
                                </ul>
                    
                </div>
            </div>
        </body>
            @endsection
<script>
        
</script>
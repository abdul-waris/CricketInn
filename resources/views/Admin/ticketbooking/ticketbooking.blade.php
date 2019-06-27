@extends('layouts.app')
@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

   <input type="hidden" name="teamid" value="{{$teamname->id}}">
 <svg version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin">
        <circle fill="#F7941E" stroke="white" stroke-width="60" cx="250" cy="250" r="200"/>
      <a xlink:href="ticket hamza-{{$teamname->id}} " >
         <text x="210" y="45" stroke-width="0" stroke="black" fill="black">Main Entrance</text>
      </a>
      <!--------------       Entrance Rajas's      -->
   <line x1="135" y1="50" x2="161" y2="105" style="stroke:rgb(255,0,0);stroke-width:2" />
   <a xlink:href="ticket haziq-{{$teamname->id}}">
    <text x="150" y="55" transform="rotate(67 153,50)" font-size="7px" stroke-width="0" stroke="black" fill="black">Entrance Rajas's</text>
    </a>
    <line x1="160" y1="38" x2="180" y2="95 " style="stroke:rgb(255,0,0);stroke-width:2" />
    <!--------------       Waqar Youns      -->
    <line x1="185" y1="29" x2="203" y2="87" style="stroke:rgb(255,0,0);stroke-width:2" />
    <text x="150" y="30" transform="rotate(69 154,50)" font-size="7px" stroke-width="0" stroke="black" fill="black">Waqar Youns</text>
    <!--------------       Wasim Akram      -->
    <line x1="311" y1="28" x2="291" y2="85" style="stroke:rgb(255,0,0);stroke-width:2" />
    <text x="105" y="-70" transform="rotate(110 180,70)" font-size="7px" stroke-width="0" stroke="black" fill="black">Wasim Akram</text>
    
    <!--------------       Saeed Anwer Entrance     -->
    <line x1="335" y1="36" x2="313" y2="92" style="stroke:rgb(255,0,0);stroke-width:2" />
    <text x="100" y="-70" transform="rotate(110 170,60)" font-size="7px" stroke-width="0" stroke="black" fill="black">Saeed Anwer</text>
    <!--------------       Wasim akram Anwer Enclosure      --> 
   <line x1="357" y1="46" x2="333" y2="102" style="stroke:rgb(255,0,0);stroke-width:2" />
    <a xlink:href="ticket Wasi Akram-{{$teamname->id}}">
    <text x="350" y="70"  transform="rotate(35 330,90)" font-size="7px" stroke-width="0" stroke="black" fill="black">Wasim Akram</text>
</a>
    <!--------------       Sarfaraz Nawaz Enclosure     -->  
    <line x1="435" y1="113" x2="385" y2="147" style="stroke:rgb(255,0,0);stroke-width:2" />
    <a xlink:href="tickett Sarfaraz Nawaz-{{$teamname->id}}">
    <text x="420" y="70"  transform="rotate(65 360,110)" font-size="7px" stroke-width="0" stroke="black" fill="black">Sarfaraz Nawaz</text>
        </a>
    <!--------------       Sarfaraz Nawaz Entrance     -->  
   <line x1="477" y1="210" x2="417" y2="220" style="stroke:rgb(255,0,0);stroke-width:2" />
   <text x="420" y="70"  transform="rotate(168 438,146)" font-size="7px" stroke-width="0" stroke="black" fill="black">Sarfaraz Nawaz</text>
    <!--------------       Zaheer Hanif & Imataiz Entrance     -->     
   <line x1="480" y1="232" x2="420" y2="240" style="stroke:rgb(255,0,0);stroke-width:2" />
   <text x="420" y="70"  transform="rotate(172 440,157)" font-size="7px" stroke-width="0" stroke="black" fill="black">Zaheer & Hanif</text>
    <line x1="480" y1="252" x2="420" y2="259" style="stroke:rgb(255,0,0);stroke-width:2" />
     <!-------------Imataiz & Hanif-------------------->
     <text x="240" y="370"  transform="rotate(290 300,215)" font-size="7px" stroke-width="0" stroke="black" fill="black">Hanif & Imataiz</text>
  <line x1="458" y1="350" x2="394" y2="340" style="stroke:rgb(255,0,0);stroke-width:2" />
  <a xlink:href="ticket Imataiz & Hanif-{{$teamname->id}}">
  <text x="405" y="385"  transform="rotate(365 790,230)" font-size="7px" stroke-width="0" stroke="black" fill="black">Imataiz & Hanif</text>
     </a>
     <!-------------Jawad & Saeed-------------------->
  
  <line x1="450" y1="365" x2="384" y2="355" style="stroke:rgb(255,0,0);stroke-width:2" />
  <text x="395" y="402"  transform="rotate(365 790,230)" font-size="7px" stroke-width="0" stroke="black" fill="black">Jawad & Saeed</text>
  
  <line x1="440" y1="380" x2="371" y2="370" style="stroke:rgb(255,0,0);stroke-width:2" />
        <!------Javed Miandad------>
    <line x1="380" y1="440" x2="347" y2="390" style="stroke:rgb(255,0,0);stroke-width:2" />
     <a xlink:href="ticket Javed Miandad-{{$teamname->id}}">
     <text x="180" y="385"  transform="rotate(305 320,210)" font-size="7px" stroke-width="0" stroke="black" fill="black">Javed Miandad</text>
    </a>
     <!-------------Imran Khan -------------------->
     <line x1="325" y1="468" x2="305" y2="411" style="stroke:rgb(255,0,0);stroke-width:2" />
      <a xlink:href="ticket Imran Khan-{{$teamname->id}}">
     <text x="180" y="385"  transform="rotate(315 335,230)" font-size="7px" stroke-width="0" stroke="black" fill="black">Imran Khan</text>
     </a>
     <!-------------Imran Khan -------------------->    
     <line x1="310" y1="472" x2="290" y2="415" style="stroke:rgb(255,0,0);stroke-width:2" />
       <text x="308" y="410"  transform="rotate(430 295,410)" font-size="7px" stroke-width="0" stroke="black" fill="black">Imran khan</text>
      <!-------------------Entrance---------------------->
     <text x="195" y="460" stroke-width="0" stroke="black" fill="black">Main Entrance</text>
      
<!----- Right Side---------------------------------------->
    <!---------- Rajas's  Enclouser---------------------------->
       <a xlink:href="ticket Rajas-{{$teamname->id}}">
        <text x="150" y="55" transform="rotate(330 230,140)" font-size="7px" stroke-width="0" stroke="black" fill="black"> Rajas's</text>    
       </a>
        <line x1="85" y1="90" x2="130" y2="130" style="stroke:rgb(255,0,0);stroke-width:2" />
        <!--------------------abdul qadir Enclouser------------>
            <line x1="43" y1="150" x2="100" y2="170" style="stroke:rgb(255,0,0);stroke-width:2" />
            <a xlink:href="ticket Rajas-{{$teamname->id}}">
            <text x="150" y="55" transform="rotate(300 200,160)" font-size="7px" stroke-width="0" stroke="black" fill="black"> Abdul Qadir</text>    
           </a>
           <!----------- abdul qadir Entery ------------>
            <line x1="36" y1="164" x2="93" y2="185" style="stroke:rgb(255,0,0);stroke-width:2" />
          <text x="80" y="140" transform="rotate(20 10,50)" font-size="7px" stroke-width="0" stroke="black" fill="black">Entrance Abdul</text>
           
           <!----------- Inzamam Quaid and Nazar Entery ------------>
           <line x1="31" y1="180" x2="88" y2="200" style="stroke:rgb(255,0,0);stroke-width:2" />
           <text x="75" y="160" transform="rotate(20 10,50)" font-size="7px" stroke-width="0" stroke="black" fill="black">Entrance Inzamam</text>
                <!-----------Inzamam Enclouser-------->
            <a xlink:href="ticket Inzamam-{{$teamname->id}}">
            <text x="156" y="65" transform="rotate(290 220,220)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Inzamam </text>   
              </a>
                <!--------------Quaid Enclouser---------------->
            <line x1="21" y1="230" x2="81" y2="235" style="stroke:rgb(255,0,0);stroke-width:2" />
            <a xlink:href="ticket Quaid-{{$teamname->id}}">
            <text x="163" y="70" transform="rotate(270 205,225)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Quaid </text>   
    </a>
                <!--------------Nazar Enclouser---------------->
            <line x1="22.5" y1="285" x2="81" y2="270" style="stroke:rgb(255,0,0);stroke-width:2" />
        <a xlink:href="ticket Nawaz-{{$teamname->id}}">
            <text x="167" y="66" transform="rotate(260 215,235)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Nazar </text>   
    </a>
                <!--------------Nazar,Quaid Entrance---------------->
             <line x1="34" y1="330" x2="89" y2="305" style="stroke:rgb(255,0,0);stroke-width:2" />
           <text x="10" y="259" transform="rotate(-25 200,235)" font-size="7px" stroke-width="0" stroke="black" fill="black"> Nazar & Quaid</text>
             <!--------------Kardar Entrance---------------->
             <line x1="40" y1="345" x2="95" y2="320" style="stroke:rgb(255,0,0);stroke-width:2" />
           <text x="10" y="275" transform="rotate(-25 200,235)" font-size="7px" stroke-width="0" stroke="black" fill="black"> Kardar & Majid </text>
            <line x1="48" y1="360" x2="102" y2="333" style="stroke:rgb(255,0,0);stroke-width:2" />
                <!------------- Kardar Enclouser---------------->
            <line x1="75" y1="400" x2="121" y2="360" style="stroke:rgb(255,0,0);stroke-width:2" />
        <a xlink:href="ticket Kardar-{{$teamname->id}}">
            <text x="190" y="55" transform="rotate(230 215,235)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Kardar </text>   
        </a>
                <!------------- Fazal Enclouser---------------->
            <line x1="120" y1="440" x2="162" y2="395" style="stroke:rgb(255,0,0);stroke-width:2" />
          <a xlink:href="ticket Fazal-{{$teamname->id}}">
            <text x="150" y="55" transform="rotate(230 215,235)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Fazal </text>   
            </a>
            <line x1="135" y1="450" x2="179" y2="404" style="stroke:rgb(255,0,0);stroke-width:2" />
            <text x="20" y="341" transform="rotate(-40 215,235)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Fazal </text>   

            <line x1="156" y1="460" x2="195" y2="410" style="stroke:rgb(255,0,0);stroke-width:2" />
            <text x="30" y="300" transform="rotate(305 235,260)" font-size="7px" stroke-width="0" stroke="black" fill="black">  Patrons </text>   
                

                <!--<line x1="299" y1="440" x2="150" y2="439" style="stroke:rgb(255,0,0);stroke-width:2" />
    --></svg>
    
</div>

@endsection
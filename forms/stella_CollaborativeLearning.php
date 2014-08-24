<html>
   <head onload="MM_preloadImages('../images/stella.png')"
	  <center>
	  <div class="main" align="">
	  <span class="page1">
	  <a href="../stella_HomePage.html">
	  <img src="../../images/sm_nsu.png" width="180" height="120" align="left" />
	  </a><img src="../../images/stella.png" width="780" height="100" align="Center" /></span>
	  </a><img src="../../images/sm_nsu.png" width="180" height="120" align="right" /></span>
	  <div class="nav">
     <p align="center" class="style1"><span class="tab1"></span><b>Collaborative Learning<b/></p>
	  <link rel="stylesheet" type="text/js" href="../../javascript/forms.js">
	  
	<style>
	   button {
		  display: block;
		  width: 100px;
		  margin: 10px 4px 6px 180px;
	   }
   
	   label.magiclabel {
		  position: absolute;
		  padding: 2px;
	   }

		  label.magiclabel,
		  input.magiclabel {
			 width: 250px;
	   }
   
	   .hidden { display: none; }
	</style>

	<noscript>
	   <style>
		  /* Example of graceful degredation */
		  label.magiclabel {
		  position: static;
	}
	   </style>
	</noscript>
   </head>

   <body>
      <form method="post" action="../../php/stella_PeerMentor.php">

		<a>Date</a><br>
		<label class="magiclabel" for="input-5">x:xx</label>
		<input class="magiclabel" type="text" name="firstMentor" id="input-5" value=""><br><br>
		
        <a>Start Time</a><br>
		<label class="magiclabel" for="input-6">last</label>
		<input class="magiclabel" type="text" name="lastMentor"  id="input-6" value="">

		<label for="ampm">  </label>
		<select id="ahour" type="text" name="ahour" value="">
		<option value="NULL"></option>
		<option value="0">Am</option>  
		<option value="1">Pm</option>         
		</select>

		<p>Overal Session Time<p>
		<label for="ahour"> Hours: </label>
		<select id="ahour" type="text" name="ahour" value="">
		<option value="0">0</option>  
		<option value="1">1</option>         
		<option value="2">2</option>          
		<option value="3">3</option>          
		<option value="4">4</option>          
		<option value="5">5</option>        
		<option value="6">6</option>          
		<option value="7">7</option>           
		<option value="8">8</option>            
		<option value="9">9</option>          
		<option value="10">10</option>      
		<option value="11">11</option>         
		<option value="12">12</option> 
		</select>

		<label for="amin"> Minutes: </label>
		<select id="amin" type="text" name="amin" value="">
		<option value="0">0</option>  
		<option value="1">1</option>         
		<option value="2">2</option>          
		<option value="3">3</option>          
		<option value="4">4</option>          
		<option value="5">5</option>        
		<option value="6">6</option>          
		<option value="7">7</option>           
		<option value="8">8</option>            
		<option value="9">9</option>          
		<option value="10">10</option>      
		<option value="11">11</option>         
		<option value="12">12</option>          
		<option value="13">13</option>          
		<option value="14">14</option>          
		<option value="15">15</option>        
		<option value="16">16</option>          
		<option value="17">17</option>           
		<option value="18">18</option>            
		<option value="19">19</option>          
		<option value="20">20</option>  
		<option value="21">21</option>         
		<option value="22">22</option>          
		<option value="23">23</option>          
		<option value="24">24</option>          
		<option value="25">25</option>        
		<option value="26">26</option>          
		<option value="27">27</option>           
		<option value="28">28</option>            
		<option value="29">29</option>          
		<option value="30">30</option>  
		<option value="31">31</option>         
		<option value="32">32</option>          
		<option value="33">33</option>          
		<option value="34">34</option>          
		<option value="35">35</option>        
		<option value="36">36</option>          
		<option value="37">37</option>           
		<option value="38">38</option>            
		<option value="39">39</option>          
		<option value="40">40</option>  
		<option value="41">41</option>         
		<option value="42">42</option>          
		<option value="43">43</option>          
		<option value="44">44</option>          
		<option value="45">45</option>        
		<option value="46">46</option>          
		<option value="47">47</option>           
		<option value="48">48</option>            
		<option value="49">49</option>          
		<option value="50">50</option>  
		<option value="51">51</option>         
		<option value="52">52</option>          
		<option value="53">53</option>          
		<option value="54">54</option>          
		<option value="55">55</option>        
		<option value="56">56</option>          
		<option value="57">57</option>           
		<option value="58">58</option>            
		<option value="59">59</option>
		</select><br><br>

		Include the names of the members in your group and discuss the activities engaged in:<br>
        <textarea align="left" rows="10" cols="100">
        </textarea>
		<br>
		<input  type="submit" value="Submit">  
      </form>
      <script src="../../javascript/forms.js"></script> 
   </body>
</html>
<?php include("includes/head.php");?>

<body>
	<div class="wrapper">	
		<?php include("includes/nav.php");?>

		<div id="volunteerInfo">
			<p>Volunteers are vital to the success of Not Far From The Tree’s programs. Each year, hundreds of amazing folks contribute their skills, energy and passion to help out in the field, at community events, and behind the scenes.</p>
			<p>We strive to create meaningful, action-oriented volunteer opportunities that will benefit the project, volunteers, and most of all, the local community.</p>	
			<h1>Volunteer Registration</h1>
			<p>If you'd like to lend a hand with Not Far From The Tree's programs, please fill out this form. We'll keep you up to date on all of the latest volunteer opportunities.</p>
		</div>
		
		<form action="submit.php" method="post" name="volunteer-form" id="volunteer-form">
		  <h1 id="form-title">Volunteer Registration Form</h1>
		  <h1 id="name">Name</h1>
		  <p id="first">First<span class="asterisk">*</span>:</p><input type="text" name="firstName" id="firstName"/>
		  <p id="last">Last<span class="asterisk">*</span>:</p><input type="text" name="lastName" id="lastName"/><br/><br/>
		  
		  <p>Email<span class="asterisk">*</span>:</p><input type="text" name="email" id="email"/><br/><br/>

		  <p>Phone (Primary):</p><input type="text" name="phone_01" id="phone_01" maxlength="10" valuesize="10"/>  
		  <label id="extensionLbl">Extension:</label><input type="text" name="extension" id="extension" maxlength="4" valuesize="4"><br/><br/>
		  
		  <p>Phone (Secondary):</p><input type="text" name="phone_02" id="phone_02" maxlength="10" valuesize="10"/>
		  <label id="extensionLbl">Extension:</label><input type="text" name="extension" id="extension" maxlength="4" valuesize="4"><br/><br/>

		  <h1 id="address">Address</h1>
		  <p>Street Address:</p><input type="text" name="streetName" id="streetName"/><br/><br/>
		  <p>City:</p><input type="text" name="city" id="city"/> 
		  <p>State/Province/Region:</p><input type="text" name="province" id="province"/><br/><br/>

 		  <p>Postal Code:</p><input type="text" name="postalcode" id="postalcode"/>
		  <p>Country:</p>
		  <select>
			  <option value="country"></option>
			  <option value="audi">Australia</option>
			  <option value="saab">Brazil</option>			  
			  <option value="saab">Canada</option>
			  <option value="saab">France</option>	
			  <option value="saab">India</option>
			  <option value="saab">New Zealand</option>			  		  
			  <option value="opel">United States</option>
			  <option value="audi">United Kingdom</option>
		  </select> <br/><br/>

		  <p>Would you like to receive our newsletter?</p>
		  <input type="radio" name="newsletter" value="yes">yes
		  <input type="radio" name="newsletter" value="no">no<br/><br/>
		  
		  <p>Ways to get involved<span class="asterisk">*</span>:</p>
		  <input type="checkbox" name="involvement" value="pickFruits" class="modeClass">Picking fruit<br/>
		  <input type="checkbox" name="involvement" value="tabling">Tabling at events<br/>
		  <input type="checkbox" name="involvement" value="distributeFlyers">Distributing flyers and posters<br/>
		  <input type="checkbox" name="involvement" value="thurs">Lending your professional skills<br/><br/>

		  <div id="text_form" class="hidden">
			  <p>Please choose which area(s) of Toronto you'd like to pick fruit in.<span class="asterisk">*</span></p>
			  <p id="note">Note: Although we aren't yet picking throughout all of Toronto, we know we'll get there some day. We encourage you to choose all areas of the city you'd like to be notified about, for this year and for the future.</p>
			  <input type="checkbox" name="location" value="toronto">Toronto & East York<br/>
			  <input type="checkbox" name="location" value="scarborough">Scarborough<br/>
			  <input type="checkbox" name="location" value="northYork">North York<br/>
			  <input type="checkbox" name="location" value="etobicoke">Etobicoke<br/><br/>
		  </div>

		  <div id="radio_form" class="hidden">
			  <p>Now, please choose the ward(s) of Toronto & East York that you'd like to pick fruit in.<span class="asterisk">*</span></p>
			  <input type="checkbox" name="ward" value="parkdale">14 - Parkdale High Park - Councillor Gord Perks<br/>
			  <input type="checkbox" name="ward" value="davenport">18 - Davenport - Councillor Ana Bailão<br/>
			  <input type="checkbox" name="ward" value="trinitySpadina">19 - Trinity Spadina - Councillor Mike Layton<br/>
			  <input type="checkbox" name="ward" value="trinitySpadinaVaughn">20 - Trinity Spadina - Councillor Adam Vaughan<br/>
			  <input type="checkbox" name="ward" value="stPaulsOne">21 - St. Paul's - Councillor Joe Michev<br/>
			  <input type="checkbox" name="ward" value="stPaulsTwo">22 - St. Paul's - Councillor Josh Matlow<br/>
			  <input type="checkbox" name="ward" value="rosedaleOne">27 - Toronto Centre Rosedale - Councillor Kristyn Wong-Tam<br />
			  <input type="checkbox" name="ward" value="rosedaleTwo">28 - Toronto Centre Rosedale - Councillor Pam McConnell<br/>
			  <input type="checkbox" name="ward" value="danforthOne">29 - Toronto Danforth - Councillor Mary Fragedakis<br/>
			  <input type="checkbox" name="ward" value="danforthTwo">30 - Toronto Danforth - Councillor Paula Fletcher<br/>
			  <input type="checkbox" name="ward" value="beachesOne">31 - Beaches East York - Councillor Janet Davis<br/>
			  <input type="checkbox" name="ward" value="beachesTwo">32 - Beaches East York - Councillor Mary-Margaret McMahon<br/><br/>
			</div>

			<div class="hidden">
			  <p>Now, please choose the ward(s) of Scarborough that you'd like to pick fruit in.<span class="asterisk">*</span></p>
			  <input type="checkbox" name="ward" value="scarboroughSouthOne">35 - Scarborough Southwest - Councillor Michelle Berardinetti<br/>
			  <input type="checkbox" name="ward" value="scarboroughSouthTwo">36 - Scarborough Southwest - Councillor Gary Crawford<br/>
			  <input type="checkbox" name="ward" value="scarboroughCentre">37 - Scarborough Centre - Councillor Michael Thompson<br/>
			  <input type="checkbox" name="ward" value="scarboroughCentre">38 - Scarborough Centre - Councillor Glenn De Baeremaeker<br/>
			  <input type="checkbox" name="ward" value="scarboroughAgincourtOne">39 - Scarborough Agincourt - Councillor Mike Del Grande<br/>
			  <input type="checkbox" name="ward" value="scarboroughAgincourtTwo">40 - Scarborough Agincourt - Councillor Norm Kelly<br/>
			  <input type="checkbox" name="ward" value="rougeRiverOne">41 - Scarborough Rouge River - Councillor Chin Lee<br/>
			  <input type="checkbox" name="ward" value="rougeRiverTwo">42 - Scarborough Rouge River - Councillor Raymond Cho<br/>
			  <input type="checkbox" name="ward" value="scarboroughEast">43 - Scarborough East - Councillor Paul Ainslie<br/><br/>
			</div> 

			<div class="hidden">
			  <p>Now, please choose the ward(s) of North York that you'd like to pick fruit in.<span class="asterisk">*</span></p>
			  <input type="checkbox" name="ward" value="yorkWest">8 - York West - Councillor Anthony Perruzza<br/>
			  <input type="checkbox" name="ward" value="yorkCentre">9 - York Centre - Councillor Maria Augimeri<br/>
			  <input type="checkbox" name="ward" value="yorkCentre">10 - York Centre - Councillor James Pasternak<br/>
			  <input type="checkbox" name="ward" value="eglintonLawrenceOne">15 - Eglinton Lawrence - Councillor Josh Colle<br/>
			  <input type="checkbox" name="ward" value="eglintonLawrenceTwo">16 - Eglinton Lawrence - Councillor Karen Stintz<br/>
			  <input type="checkbox" name="ward" value="willowdaleOne">23 - Willowdale - Councillor John Filion<br/>
			  <input type="checkbox" name="ward" value="willowdaleTwo">24 - Willowdale - Councillor David Shiner<br/>
			  <input type="checkbox" name="ward" value="donValleyWestOne">25 - Don Valley West - Councillor Jaye Robinson<br/>
			  <input type="checkbox" name="ward" value="donValleyWestTwo">26 - Don Valley West - Councillor John Parker<br/>
			  <input type="checkbox" name="ward" value="donValleyEastOne">33 - Don Valley East - Councillor Shelley Carroll<br/>
			  <input type="checkbox" name="ward" value="donValleyEastTwo">34 - Don Valley East - Councillor Denzil Minnan-Wong<br/><br/>
			</div>  

			<div class="hidden">
			  <p>Now, please choose the ward(s) of Etobicoke that you'd like to pick fruit in.<span class="asterisk">*</span></p>
			  <input type="checkbox" name="ward" value="etobicokeNorthOne">1 - Etobicoke North - Councillor Vincent Crisanti<br/>
			  <input type="checkbox" name="ward" value="etobicokeNorthTwo">2 - Etobicoke North - Councillor Doug Ford<br/>
			  <input type="checkbox" name="ward" value="etobicokeCentreOne">3 - Etobicoke Centre - Councillor Douglas Holyday<br/>
			  <input type="checkbox" name="ward" value="etobicokeCentreTwo">4 - Etobicoke Centre - Councillor Gloria Lindsay Luby<br/>
			  <input type="checkbox" name="ward" value="etobicokeLakeshoreOne">5 - Etobicoke Lakeshore - Councillor Peter Milczyn<br/>
			  <input type="checkbox" name="ward" value="etobicokeLakeshoreTwo">6 - Etobicoke Lakeshore - Councillor Mark Grimes<br/>
			  <input type="checkbox" name="ward" value="yorkWest">7 - York West - Councillor Giorgio Mammoliti<br/>
			  <input type="checkbox" name="ward" value="yorkSouthOne">11 - York South Weston - Councillor Frances Nunziata<br/>
			  <input type="checkbox" name="ward" value="yorkSouthTwo">12 - York South Weston - Councillor Frank Di Giorgio<br/>
			  <input type="checkbox" name="ward" value="parkdale">13 - Parkdale High Park - Councillor Sarah Doucette<br/>
			  <input type="checkbox" name="ward" value="davenport">17 - Davenport - Councillor Cesar Palacio<br/><br/>
			</div>  

		  <p>Availability<span class="asterisk">*</span>:</p>
		  <input type="checkbox" name="availability" value="weekends">Weekends<br/>
		  <input type="checkbox" name="availability" value="weekdays">Weekdays<br/>
		  <input type="checkbox" name="availability" value="evenings">Evenings<br/><br/>

		  <input type="submit" name="submit" value="submit" id="submit">
		</form>
</body>
		      <?php include("includes/footer.php");?>



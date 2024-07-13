<?php
include('../includes/headers.php'); 
include('../includes/navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">


	<div class="container-fluid">

<div id="frmRegistration">

<form class="form-horizontal" action="../includes/amkor_code.php" onsubmit="return checkForm();" enctype="multipart/form-data" method="POST">
	
<div class="row g-3">
    <div class="col-md-6">
      <label class="control-label" for="username">Customer Code:</label>
      <input type="text" name="customer_code" class="form-control" id="customer_code" placeholder="Customer Code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Customer Name:</label>
      <input type="text" name="customer_name" class="form-control" id="customer_name" style="text-transform: capitalize;" placeholder="Customer Name" maxlength="50" required>
    </div>
    <br/>
    <br/>
    <div class="col-md-6">
      <label class="control-label" for="username">Plate Number:</label>
      <input type="text" name="plate_number" class="form-control" id="plate_number" placeholder="Plate Number" maxlength="10" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">HAWB:</label>
      <input type="text" name="hawb" class="form-control" id="hawb" placeholder="HAWB" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="12" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Airway Bill:</label>
      <input type="text" name="airway_bill" class="form-control" id="airway_bill" placeholder="Airway Bill" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="12" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Peza Ticket:</label>
      <input type="text" name="peza_ticket" class="form-control" id="peza_ticket" placeholder="Peza Ticket" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="12" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Trucker:</label>
    <select name="trucker" id="trucker"  class="form-control" required>
		<option value="">-- Trucker --</option>
		<option value="Sample 1">Sample 1</option>
		<option value="Sample 2">Sample 2</option>
		</select>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Wafer Run:</label>
      <input type="text" name="wafer_run" class="form-control" id="wafer_run" placeholder="Wafer Run" maxlength="10" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Device Number:</label>
    <input type="text" name="device_number" class="form-control" id="device_number" placeholder="Device Number" maxlength="10" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Customer Lot Number:</label>
    <input type="text" name="customer_lot_number" class="form-control" id="customer_lot_number" placeholder="Customer Lot Number"  onkeypress=" return isNumber(event)" maxlength="5" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Country Origin:</label>
    <select name="country_origin" id="country_origin" class="form-control" required>
		<option value="">-- Country Origin --</option>
		<option value="Argentina">Afghanistan</option>
		<option value="Albania">Albania</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas	">Bahamas</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium	</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
    <option value="Cabo Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Greece">Greece</option>
    <option value="Grenada">Grenada</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Holy See">Holy See</option>
    <option value="Honduras">Honduras</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Laos">Laos</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="North Korea">North Korea</option>
    <option value="North Macedonia">North Macedonia</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine State">Palestine State</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Qatar">Qatar</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russia</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Korea">South Korea</option>
    <option value="South Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-Leste">Timor-Leste</option>
    <option value="Togo">Togo</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
		</select>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Plant Site:</label>
    <select name="plant_site" id="plant_site" class="form-control" required>
		<option value="">-- Plant Site --</option>
		<option value="1">1</option>
		<option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
		</select>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Wafer Type:</label>
    <input type="text" name="wafer_type" class="form-control" id="wafer_type" placeholder="Wafer Type" maxlength="10" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Airlines:</label>
    <select name="airlines" id="airlines" class="form-control" required>
		<option value="">-- Airlines --</option>
		<option value="Aegean Airlines">Aegean Airlines</option>
		<option value="Aer Lingus">Aer Lingus</option>
    <option value="Aeroflot">Aeroflot</option>
		<option value="Aerolineas Argentinas">Aerolineas Argentinas</option>
    <option value="Aeromexico">Aeromexico</option>
		<option value="Air Arabia">Air Arabia</option>
    <option value="Air Astana">Air Astana</option>
		<option value="Air Austral">Air Austral</option>
    <option value="Air Baltic">Air Baltic</option>
		<option value="Air Belgium">Air Belgium</option>
    <option value="Air Canada">Air Canada</option>
		<option value="Air Caraibes">Air Caraibes</option>
    <option value="Air China">Air China</option>
		<option value="Air Corsica">Air Corsica</option>
    <option value="Air Dolomiti">Air Dolomiti</option>
		<option value="Air Europa">Air Europa</option>
    <option value="Air France">Air France</option>
		<option value="Air India">Air India</option>
    <option value="Air India Express">Air India Express</option>
		<option value="Air Macau">Air Macau</option>
    <option value="Air Malta">Air Malta</option>
		<option value="Air Mauritius">Air Mauritius</option>
    <option value="Air Namibia">Air Namibia</option>
		<option value="Air New Zealand">Air New Zealand</option>
    <option value="Air North">Air North</option>
		<option value="Air Seoul">Air Seoul</option>
    <option value="Air Serbia">Air Serbia</option>
		<option value="Air Tahiti Nui">Air Tahiti Nui</option>
    <option value="Air Transat">Air Transat</option>
		<option value="Air Vanuatu">Air Vanuatu</option>
    <option value="AirAsia">AirAsia</option>
		<option value="AirAsia X">AirAsia X</option>
    <option value="Aircalin">Aircalin</option>
		<option value="Alaska Airlines">Alaska Airlines</option>
    <option value="Alitalia">Alitalia</option>
		<option value="Allegiant">Allegiant</option>
    <option value="Aegean Airlines">Aegean Airlines</option>
		<option value="ANA">ANA</option>
    <option value="Asiana">Asiana</option>
    <option value="Austrian">Austrian</option>
    <option value="Avianca">Avianca</option>
    <option value="Azerbaijan Hava Yollary">Azerbaijan Hava Yollary</option>
    <option value="Azores Airlines">Azores Airlines</option>
    <option value="Azul">Azul</option>
    <option value="Bamboo Airways">Bamboo Airways</option>
    <option value="Bangkok Airways">Bangkok Airways</option>
    <option value="British Airways">British Airways</option>
    <option value="Brussels Airlines">Brussels Airlines</option>
    <option value="Caribbean Airlines">Caribbean Airlines</option>
    <option value="Cathay Dragon">Cathay Dragon</option>
    <option value="Cathay Pacific">Cathay Pacific</option>
    <option value="Cayman Airways">Cayman Airways</option>
    <option value="CEBU Pacific Air">CEBU Pacific Air</option>
    <option value="China Airlines">China Airlines</option>
    <option value="China Eastern">China Eastern</option>
    <option value="China Southern">China Southern</option>
    <option value="Condor">Condor</option>
    <option value="Copa Airlines">Copa Airlines</option>
    <option value="Croatia Airlines">Croatia Airlines</option>
    <option value="Czech Airlines">Czech Airlines</option>
    <option value="Delta">Delta</option>
    <option value="easyJet">easyJet</option>
    <option value="Edelweiss Air">Edelweiss Air</option>
    <option value="Egyptair">Egyptair</option>
    <option value="EL AL">EL AL</option>
    <option value="Emirates">Emirates</option>
    <option value="Ethiopian Airlines">Ethiopian Airlines</option>
    <option value="Etihad">Etihad</option>
    <option value="Eurowings">Eurowings</option>
    <option value="EVA Air">EVA Air</option>
    <option value="F - O">F - O</option>
    <option value="Fiji Airways">Fiji Airways</option>
    <option value="Finnair">Finnair</option>
    <option value="flydubai">flydubai </option>
    <option value="FlyOne">FlyOne</option>
    <option value="French bee">French bee</option>
    <option value="Frontier">AmericanFrontier</option>
    <option value="Garuda Indonesia">Garuda Indonesia</option>
    <option value="Gol">Gol</option>
    <option value="Gulf Air">Gulf Air</option>
    <option value="Hainan Airlines">Hainan Airlines</option>
    <option value="Hawaiian Airlines">Hawaiian Airlines</option>
    <option value="Helvetic Airways">Helvetic Airways</option>
    <option value="HK Express">HK Express</option>
    <option value="Hong Kong Airlines">Hong Kong Airlines</option>
    <option value="Iberia">Iberia</option>
    <option value="Icelandair">Icelandair</option>
    <option value="IndiGo Airlines">IndiGo Airlines</option>
    <option value="InterJet">InterJet</option>
    <option value="Japan Airlines">Japan Airlines</option>
    <option value="Jeju Air">Jeju Air</option>
    <option value="Jet2">Jet2</option>
    <option value="JetBlue">American Airlines</option>
    <option value="Jetstar">Jetstar</option>
    <option value="Jin Air">Jin Air</option>
    <option value="Kenya Airways">Kenya Airways</option>
    <option value="KLM">KLM</option>
    <option value="Korean Air">Korean Air</option>
    <option value="Kulula">Kulula</option>
    <option value="La Compagnie">La Compagnie</option>
    <option value="LATAM">LATAM</option>
    <option value="Lion Airlines">Lion Airlines</option>
    <option value="LOT Polish Airlines">LOT Polish Airlines</option>
    <option value="Lufthansa">Lufthansa</option>
    <option value="Luxair">Luxair</option>
    <option value="Malaysia Airlines">Malaysia Airlines</option>
    <option value="Mango">Mango</option>
    <option value="Middle East Airlines">Middle East Airlines</option>
    <option value="Nok Air">Nok Air</option>
    <option value="Nordwind Airlines">Nordwind Airlines</option>
    <option value="Norwegian Air International">Norwegian Air International</option>
    <option value="Norwegian Air Shuttle">Norwegian Air Shuttle</option>
    <option value="Norwegian Air Sweden">Norwegian Air Sweden</option>
    <option value="Norwegian Air UK">Norwegian Air UK</option>
    <option value="Oman Air">Oman Air</option>
    <option value="P - W">P - W</option>
    <option value="Pakistan International Airlines">Pakistan International Airlines</option>
    <option value="Peach">Peach</option>
    <option value="Pegasus Airlines">Pegasus Airlines</option>
    <option value="Philippine Airlines">Philippine Airlines</option>
    <option value="Porter">Porter</option>
    <option value="Qantas">Qantas</option>
    <option value="Qatar Airways">Qatar Airways</option>
    <option value="Regional Express">Regional Express</option>
    <option value="Rossiya - Russian Airlines">Rossiya - Russian Airlines</option>
    <option value="Royal Air Maroc">Royal Air Maroc</option>
    <option value="Royal Brunei">Royal Brunei</option>
    <option value="Royal Jordanian">Royal Jordanian</option>
    <option value="RwandAir">RwandAir</option>
    <option value="Ryanair">Ryanair</option>
    <option value="S7 Airlines">AmericanS7 Airlines</option>
    <option value="SAS">SAS</option>
    <option value="Saudia">Saudia</option>
    <option value="Scoot Airlines">Scoot Airlines</option>
    <option value="Shanghai Airlines">Shanghai Airlines</option>
    <option value="Silkair">Silkair</option>
    <option value="Silver">Silver</option>
    <option value="Singapore Airlines">Singapore Airlines</option>
    <option value="Skylanes">Skylanes</option>
    <option value="South African Airways">South African Airways</option>
    <option value="Southwest">Southwest</option>
    <option value="SpiceJet">SpiceJet</option>
    <option value="Spirit">Spirit</option>
    <option value="Spring Airlines">Spring Airlines</option>
    <option value="Spring Japan">Spring Japan</option>
    <option value="SriLankan Airlines">SriLankan Airlines</option>
    <option value="Sun Country">Sun Country</option>
    <option value="Sunclass Airlines">Sunclass Airlines</option>
    <option value="Sunwing">Sunwing</option>
    <option value="SWISS">SWISS</option>
    <option value="Swoop">Swoop</option>
    <option value="TAAG">TAAG</option>
    <option value="TACA">TACA</option>
    <option value="TAP Portugal">TAP Portugal</option>
    <option value="THAI">THAI</option>
    <option value="tigerair Australia">tigerair Australia</option>
    <option value="Transavia Airlines">Transavia Airlines</option>
    <option value="TUI UK">TUI UK</option>
    <option value="TUIfly">TUIfly</option>
    <option value="Tunis Air">Tunis Air</option>
    <option value="Turkish Airlines">Turkish Airlines</option>
    <option value="Ukraine International">Ukraine International</option>
    <option value="United">United</option>
    <option value="Ural Airlines">Ural Airlines</option>
    <option value="UTair Aviation">UTair Aviation</option>
    <option value="Uzbekistan Airways">Uzbekistan Airways</option>
    <option value="Vietnam Airlines">Vietnam Airlines</option>
    <option value="Virgin Atlantic">Virgin Atlantic</option>
    <option value="Virgin Australia">Virgin Australia</option>
    <option value="Vistara">Vistara</option>
    <option value="Viva Aerobus">Viva Aerobus</option>
    <option value="Volaris">Volaris</option>
    <option value="Volotea">Volotea</option>
    <option value="Vueling Airlines">Vueling Airlines</option>
    <option value="WestJet">WestJet</option>
    <option value="Wizzair">Wizzair</option>
    <option value="Xiamen Airlines">Xiamen Airlines</option>
		</select>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Driver:</label>
    <input type="text" name="driver" class="form-control" id="driver" placeholder="Driver" maxlength="50" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Container Type:</label>
    <select name="container_type" id="container_type" class="form-control" required>
		<option value="">-- Container Type --</option>
		<option value="Sample 1">Sample 1</option>
		<option value="Sample 2">Sample 2</option>
		</select>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Wafer Size:</label>
    <input type="number" name="wafer_size" class="form-control" id="wafer_size" placeholder="Wafer Size" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Wafer Number:</label>
    <input type="number" name="wafer_number" class="form-control" id="wafer_number" placeholder="Wafer Number" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Die QTY:</label>
    <input type="number" name="die_qty" class="form-control" id="die_qty" placeholder="Die QTY" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">SAWN Date:</label>
    <input type="date" name="sawn_date" class="form-control" id="sawn_date" placeholder="SAWN Date" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Unit Price:</label>
    <input type="currency" name="unit_price" class="form-control" id="unit_price" placeholder="Unity Price" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">P.O #:</label>
    <input type="number" name="p_o" class="form-control" id="p_o" placeholder="P.O#" maxlength="10" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Invoice #:</label>
    <input type="number" name="invoice" class="form-control" id="invoice" placeholder="Invoice #" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Plane Number:</label>
    <input type="text" name="plane_number" class="form-control" id="plane_number" placeholder="Plane Number" maxlength="8" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Number of Box:</label>
    <select name="number_box" id="number_box" class="form-control" required>
		<option value="">-- Number of Box --</option>
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
		</select>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Wafer Qty:</label>
    <select name="wafer_qty" id="wafer_qty" class="form-control" required>
		<option value="">-- Wafer Qty --</option>
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
    <option value="23">24</option>
    <option value="25">25</option>
		</select>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Customer Info:</label>
      <input type="text" name="customer_info" class="form-control" id="customer_info" placeholder="Customer Info" maxlength="50" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETD Date:</label>
    <input type="date" name="edt_date" class="form-control" id="edt_date" placeholder="EDT Date" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETD Time:</label>
    <input type="time" name="edt_time" class="form-control" id="edt_time" placeholder="EDT Time" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETA Date:</label>
    <input type="date" name="eta_date" class="form-control" id="eta_date" placeholder="ETA Date" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETA Time:</label>
    <input type="time" name="eta_time" class="form-control" id="eta_time" placeholder="ETA Time" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETC Date:</label>
    <input type="date" name="etc_date" class="form-control" id="etcsawn_date" placeholder="ETC Date" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">ETC Time:</label>
    <input type="time" name="etc_time" class="form-control" id="etc_time" placeholder="ETC Time" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Remarks:</label>
    <textarea name="remarks" id="remarks" class="form-control" cols="80" rows="10" required></textarea>  
    </div>
    <br/>
</div>
<br/>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="in_going_button" class="btn btn-primary">Submit</button>
      <a href="user_in_going_home.php" class="btn btn-danger">Close</a>
	</div>
  </div>
</form>
</div>
</div>

</div>
</div>

<!-- Content Row -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script>
$(document).on('keypress', '#name', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

function isNumber(e){
    e = e || window.event;
    var charCode = e.which ? e.which : e.keyCode;
    return /\d/.test(String.fromCharCode(charCode));
}

</script>


<script>
function checkForm() {
    var PsWd = document.getElementById('password');

    if (PsWd.value.length < 8) {
        alert('The password length needs to be 8 characters.');
        return false;
    } else {
        return true;
    }
}
</script>

<?php

if (isset($_POST['in_going_button'])) {
  $sql = "INSERT INTO in_going (customer_code, customer_name, plate_number) VALUES (?,?,?)";
  $dbh->prepare($sql)->execute([$_POST['customer_code'], $_POST['customer_name'], $_POST['plate_number']]);
   header('Location: user_in_going_home.php');
}

?>
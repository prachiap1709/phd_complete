<div class="app-content">
               <div class="side-app">
                
                  <div class="page-header">
                     <ol class="breadcrumb">
                     
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Job</li>
                     </ol>
                    
                  </div>
              
                  <div class="row">
                    
                     <div class="col-sm-12">
                         	<form class="form-horizontal row" id="addnewjobfrm" onsubmit="return validateaddnewjob('<?php echo base_url();?>');">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Add New Job</h3>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label for="exampleInputname"><strong>Company Name</strong></label>
                                       <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter Company Name">
                                    </div>
                                 </div>
                              
                              
                               <div class="col-sm-3">
                                 <label for="exampleInputEmail1"><strong>Email Address</strong></label>
                                 <input type="email" name="company_email" class="form-control" id="company_email" placeholder="Enter Email Address">
                              </div>
                               <div class="col-sm-3">
                                 <label for="exampleInputnumber"><strong>Conatct Number</strong></label>
                                 <input type="text" name="company_phone" class="form-control numfg" id="company_phone" placeholder="Enter Contact Number">
                              </div>
                        
							  
							   


                                <div class="col-sm-3">
                    <label><strong>Country</strong></label>
                    <select name="country" id="country" class="form-control">
                <option value="" selected="">Select Country</option>
                <option data-ccode="93" value="Afghanistan">Afghanistan</option>
                <option data-ccode="355" value="Albania">Albania</option>
                <option data-ccode="213" value="Algeria">Algeria</option>
                <option data-ccode="1684" value="American Samoa">American Samoa</option>
                <option data-ccode="376" value="Andorra">Andorra</option>
                <option data-ccode="244" value="Angola">Angola</option>
                <option data-ccode="1264" value="Anguilla">Anguilla</option>
                <option data-ccode="1268" value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option data-ccode="54" value="Argentina">Argentina</option>
                <option data-ccode="374" value="Armenia">Armenia</option>
                <option data-ccode="297" value="Aruba">Aruba</option>
                <option data-ccode="61" value="Australia">Australia</option>
                <option data-ccode="43" value="Austria">Austria</option>
                <option data-ccode="994" value="Azerbaijan">Azerbaijan</option>
                <option data-ccode="1242" value="Bahamas">Bahamas</option>
                <option data-ccode="973" value="Bahrain">Bahrain</option>
                <option data-ccode="880" value="Bangladesh">Bangladesh</option>
                <option data-ccode="1246" value="Barbados">Barbados</option>
                <option data-ccode="375" value="Belarus">Belarus</option>
                <option data-ccode="32" value="Belgium">Belgium</option>
                <option data-ccode="501" value="Belize">Belize</option>
                <option data-ccode="229" value="Benin">Benin</option>
                <option data-ccode="1441" value="Bermuda">Bermuda</option>
                <option data-ccode="975" value="Bhutan">Bhutan</option>
                <option data-ccode="591" value="Bolivia">Bolivia</option>
                <option data-ccode="387" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option data-ccode="267" value="Botswana">Botswana</option>
                <option data-ccode="55" value="Brazil">Brazil</option>
                <option data-ccode="246" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option data-ccode="673" value="Brunei Darussalam">Brunei Darussalam</option>
                <option data-ccode="359" value="Bulgaria">Bulgaria</option>
                <option data-ccode="226" value="Burkina Faso">Burkina Faso</option>
                <option data-ccode="257" value="Burundi">Burundi</option>
                <option data-ccode="855" value="Cambodia">Cambodia</option>
                <option data-ccode="237" value="Cameroon">Cameroon</option>
                <option data-ccode="1" value="Canada">Canada</option>
                <option data-ccode="238" value="Cape Verde">Cape Verde</option>
                <option data-ccode="1345" value="Cayman Islands">Cayman Islands</option>
                <option data-ccode="236" value="Central African Republic">Central African Republic</option>
                <option data-ccode="235" value="Chad">Chad</option>
                <option data-ccode="56" value="Chile">Chile</option>
                <option data-ccode="86" value="China">China</option>
                <option data-ccode="61" value="Christmas Island">Christmas Island</option>
                <option data-ccode="672" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option data-ccode="57" value="Colombia">Colombia</option>
                <option data-ccode="269" value="Comoros">Comoros</option>
                <option data-ccode="242" value="Congo">Congo</option>
                <option data-ccode="242" value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                <option data-ccode="682" value="Cook Islands">Cook Islands</option>
                <option data-ccode="506" value="Costa Rica">Costa Rica</option>
                <option data-ccode="225" value="Cote D'Ivoire">Cote D'Ivoire</option>
                <option data-ccode="385" value="Croatia">Croatia</option>
                <option data-ccode="53" value="Cuba">Cuba</option>
                <option data-ccode="357" value="Cyprus">Cyprus</option>
                <option data-ccode="420" value="Czech Republic">Czech Republic</option>
                <option data-ccode="45" value="Denmark">Denmark</option>
                <option data-ccode="253" value="Djibouti">Djibouti</option>
                <option data-ccode="1767" value="Dominica">Dominica</option>
                <option data-ccode="1809" value="Dominican Republic">Dominican Republic</option>
                <option data-ccode="593" value="Ecuador">Ecuador</option>
                <option data-ccode="20" value="Egypt">Egypt</option>
                <option data-ccode="503" value="El Salvador">El Salvador</option>
                <option data-ccode="240" value="Equatorial Guinea">Equatorial Guinea</option>
                <option data-ccode="291" value="Eritrea">Eritrea</option>
                <option data-ccode="372" value="Estonia">Estonia</option>
                <option data-ccode="251" value="Ethiopia">Ethiopia</option>
                <option data-ccode="500" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option data-ccode="298" value="Faroe Islands">Faroe Islands</option>
                <option data-ccode="679" value="Fiji">Fiji</option>
                <option data-ccode="358" value="Finland">Finland</option>
                <option data-ccode="33" value="France">France</option>
                <option data-ccode="594" value="French Guiana">French Guiana</option>
                <option data-ccode="689" value="French Polynesia">French Polynesia</option>
                <option data-ccode="241" value="Gabon">Gabon</option>
                <option data-ccode="220" value="Gambia">Gambia</option>
                <option data-ccode="995" value="Georgia">Georgia</option>
                <option data-ccode="49" value="Germany">Germany</option>
                <option data-ccode="233" value="Ghana">Ghana</option>
                <option data-ccode="350" value="Gibraltar">Gibraltar</option>
                <option data-ccode="30" value="Greece">Greece</option>
                <option data-ccode="299" value="Greenland">Greenland</option>
                <option data-ccode="1473" value="Grenada">Grenada</option>
                <option data-ccode="590" value="Guadeloupe">Guadeloupe</option>
                <option data-ccode="1671" value="Guam">Guam</option>
                <option data-ccode="502" value="Guatemala">Guatemala</option>
                <option data-ccode="224" value="Guinea">Guinea</option>
                <option data-ccode="245" value="Guinea-Bissau">Guinea-Bissau</option>
                <option data-ccode="592" value="Guyana">Guyana</option>
                <option data-ccode="509" value="Haiti">Haiti</option>
                <option data-ccode="39" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option data-ccode="504" value="Honduras">Honduras</option>
                <option data-ccode="852" value="Hong Kong">Hong Kong</option>
                <option data-ccode="36" value="Hungary">Hungary</option>
                <option data-ccode="354" value="Iceland">Iceland</option>
                <option data-ccode="91" value="India" selected="selected">India</option>
                <option data-ccode="62" value="Indonesia">Indonesia</option>
                <option data-ccode="98" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option data-ccode="964" value="Iraq">Iraq</option>
                <option data-ccode="353" value="Ireland">Ireland</option>
                <option data-ccode="972" value="Israel">Israel</option>
                <option data-ccode="39" value="Italy">Italy</option>
                <option data-ccode="1876" value="Jamaica">Jamaica</option>
                <option data-ccode="81" value="Japan">Japan</option>
                <option data-ccode="962" value="Jordan">Jordan</option>
                <option data-ccode="7" value="Kazakhstan">Kazakhstan</option>
                <option data-ccode="254" value="Kenya">Kenya</option>
                <option data-ccode="686" value="Kiribati">Kiribati</option>
                <option data-ccode="850" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option data-ccode="82" value="Korea, Republic of">Korea, Republic of</option>
                <option data-ccode="965" value="Kuwait">Kuwait</option>
                <option data-ccode="996" value="Kyrgyzstan">Kyrgyzstan</option>
                <option data-ccode="856" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option data-ccode="371" value="Latvia">Latvia</option>
                <option data-ccode="961" value="Lebanon">Lebanon</option>
                <option data-ccode="266" value="Lesotho">Lesotho</option>
                <option data-ccode="231" value="Liberia">Liberia</option>
                <option data-ccode="218" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option data-ccode="423" value="Liechtenstein">Liechtenstein</option>
                <option data-ccode="370" value="Lithuania">Lithuania</option>
                <option data-ccode="352" value="Luxembourg">Luxembourg</option>
                <option data-ccode="853" value="Macao">Macao</option>
                <option data-ccode="389" value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                <option data-ccode="261" value="Madagascar">Madagascar</option>
                <option data-ccode="265" value="Malawi">Malawi</option>
                <option data-ccode="60" value="Malaysia">Malaysia</option>
                <option data-ccode="960" value="Maldives">Maldives</option>
                <option data-ccode="223" value="Mali">Mali</option>
                <option data-ccode="356" value="Malta">Malta</option>
                <option data-ccode="692" value="Marshall Islands">Marshall Islands</option>
                <option data-ccode="596" value="Martinique">Martinique</option>
                <option data-ccode="222" value="Mauritania">Mauritania</option>
                <option data-ccode="230" value="Mauritius">Mauritius</option>
                <option data-ccode="269" value="Mayotte">Mayotte</option>
                <option data-ccode="52" value="Mexico">Mexico</option>
                <option data-ccode="691" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option data-ccode="373" value="Moldova, Republic of">Moldova, Republic of</option>
                <option data-ccode="377" value="Monaco">Monaco</option>
                <option data-ccode="976" value="Mongolia">Mongolia</option>
                <option data-ccode="1664" value="Montserrat">Montserrat</option>
                <option data-ccode="212" value="Morocco">Morocco</option>
                <option data-ccode="258" value="Mozambique">Mozambique</option>
                <option data-ccode="95" value="Myanmar">Myanmar</option>
                <option data-ccode="264" value="Namibia">Namibia</option>
                <option data-ccode="674" value="Nauru">Nauru</option>
                <option data-ccode="977" value="Nepal">Nepal</option>
                <option data-ccode="31" value="Netherlands">Netherlands</option>
                <option data-ccode="599" value="Netherlands Antilles">Netherlands Antilles</option>
                <option data-ccode="687" value="New Caledonia">New Caledonia</option>
                <option data-ccode="64" value="New Zealand">New Zealand</option>
                <option data-ccode="505" value="Nicaragua">Nicaragua</option>
                <option data-ccode="227" value="Niger">Niger</option>
                <option data-ccode="234" value="Nigeria">Nigeria</option>
                <option data-ccode="683" value="Niue">Niue</option>
                <option data-ccode="672" value="Norfolk Island">Norfolk Island</option>
                <option data-ccode="1670" value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option data-ccode="47" value="Norway">Norway</option>
                <option data-ccode="968" value="Oman">Oman</option>
                <option data-ccode="92" value="Pakistan">Pakistan</option>
                <option data-ccode="680" value="Palau">Palau</option>
                <option data-ccode="970" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option data-ccode="507" value="Panama">Panama</option>
                <option data-ccode="675" value="Papua New Guinea">Papua New Guinea</option>
                <option data-ccode="595" value="Paraguay">Paraguay</option>
                <option data-ccode="51" value="Peru">Peru</option>
                <option data-ccode="63" value="Philippines">Philippines</option>
                <option data-ccode="48" value="Poland">Poland</option>
                <option data-ccode="351" value="Portugal">Portugal</option>
                <option data-ccode="1787" value="Puerto Rico">Puerto Rico</option>
                <option data-ccode="974" value="Qatar">Qatar</option>
                <option data-ccode="262" value="Reunion">Reunion</option>
                <option data-ccode="40" value="Romania">Romania</option>
                <option data-ccode="70" value="Russian Federation">Russian Federation</option>
                <option data-ccode="250" value="Rwanda">Rwanda</option>
                <option data-ccode="290" value="Saint Helena">Saint Helena</option>
                <option data-ccode="1869" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option data-ccode="1758" value="Saint Lucia">Saint Lucia</option>
                <option data-ccode="508" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option data-ccode="1784" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option data-ccode="684" value="Samoa">Samoa</option>
                <option data-ccode="378" value="San Marino">San Marino</option>
                <option data-ccode="239" value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option data-ccode="966" value="Saudi Arabia">Saudi Arabia</option>
                <option data-ccode="221" value="Senegal">Senegal</option>
                <option data-ccode="381" value="Serbia and Montenegro">Serbia and Montenegro</option>
                <option data-ccode="248" value="Seychelles">Seychelles</option>
                <option data-ccode="232" value="Sierra Leone">Sierra Leone</option>
                <option data-ccode="65" value="Singapore">Singapore</option>
                <option data-ccode="421" value="Slovakia">Slovakia</option>
                <option data-ccode="386" value="Slovenia">Slovenia</option>
                <option data-ccode="677" value="Solomon Islands">Solomon Islands</option>
                <option data-ccode="252" value="Somalia">Somalia</option>
                <option data-ccode="27" value="South Africa">South Africa</option>
                <option data-ccode="34" value="Spain">Spain</option>
                <option data-ccode="94" value="Sri Lanka">Sri Lanka</option>
                <option data-ccode="249" value="Sudan">Sudan</option>
                <option data-ccode="597" value="Suriname">Suriname</option>
                <option data-ccode="47" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option data-ccode="268" value="Swaziland">Swaziland</option>
                <option data-ccode="46" value="Sweden">Sweden</option>
                <option data-ccode="41" value="Switzerland">Switzerland</option>
                <option data-ccode="963" value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option data-ccode="886" value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option data-ccode="992" value="Tajikistan">Tajikistan</option>
                <option data-ccode="255" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option data-ccode="66" value="Thailand">Thailand</option>
                <option data-ccode="670" value="Timor-Leste">Timor-Leste</option>
                <option data-ccode="228" value="Togo">Togo</option>
                <option data-ccode="690" value="Tokelau">Tokelau</option>
                <option data-ccode="676" value="Tonga">Tonga</option>
                <option data-ccode="1868" value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option data-ccode="216" value="Tunisia">Tunisia</option>
                <option data-ccode="90" value="Turkey">Turkey</option>
                <option data-ccode="7370" value="Turkmenistan">Turkmenistan</option>
                <option data-ccode="1649" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option data-ccode="688" value="Tuvalu">Tuvalu</option>
                <option data-ccode="256" value="Uganda">Uganda</option>
                <option data-ccode="380" value="Ukraine">Ukraine</option>
                <option data-ccode="971" value="United Arab Emirates">United Arab Emirates</option>
                <option data-ccode="44" value="United Kingdom">United Kingdom</option>
                <option data-ccode="1" value="United States">United States</option>
                <option data-ccode="1" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option data-ccode="598" value="Uruguay">Uruguay</option>
                <option data-ccode="998" value="Uzbekistan">Uzbekistan</option>
                <option data-ccode="678" value="Vanuatu">Vanuatu</option>
                <option data-ccode="58" value="Venezuela">Venezuela</option>
                <option data-ccode="84" value="Viet Nam">Viet Nam</option>
                <option data-ccode="1284" value="Virgin Islands, British">Virgin Islands, British</option>
                <option data-ccode="1340" value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                <option data-ccode="681" value="Wallis and Futuna">Wallis and Futuna</option>
                <option data-ccode="212" value="Western Sahara">Western Sahara</option>
                <option data-ccode="967" value="Yemen">Yemen</option>
                <option data-ccode="260" value="Zambia">Zambia</option>
                <option data-ccode="263" value="Zimbabwe">Zimbabwe</option>
                <option data-ccode="381" value="Serbia">Serbia</option>
                <option data-ccode="382" value="Montenegro">Montenegro</option>
                <option data-ccode="358" value="Aland Islands">Aland Islands</option>
                <option data-ccode="599" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option data-ccode="599" value="Curacao">Curacao</option>
                <option data-ccode="44" value="Guernsey">Guernsey</option>
                <option data-ccode="44" value="Isle of Man">Isle of Man</option>
                <option data-ccode="44" value="Jersey">Jersey</option>
                <option data-ccode="381" value="Kosovo">Kosovo</option>
                <option data-ccode="590" value="Saint Barthelemy">Saint Barthelemy</option>
                <option data-ccode="590" value="Saint Martin">Saint Martin</option>
                <option data-ccode="1" value="Sint Maarten">Sint Maarten</option>
                <option data-ccode="211" value="South Sudan">South Sudan</option>
              </select>
        </div>
        
         <div class="col-sm-3">
                                    <label><strong>State</strong></label>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
                                </div>
                                
             <div class="col-sm-3">
                                    <label><strong>City</strong></label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                                </div>                    
		
		 <div class="col-sm-3">
            <label><strong>Website URL</strong></label>
            <input type="text" name="company_website_url" id="company_website_url" class="form-control" placeholder="Enter Website URL">
        </div>
		
		
		 <div class="col-sm-3 mb-3">
            <label><strong>Job Profile</strong></label>
            <input type="text" class="form-control" name="job_profile" id="job_profile" placeholder="Enter Job Profile">
        </div>
			<div class="col-sm-3 mb-3">
            <label><strong>Job Type</strong></label>
           <select name="job_type" id="job_type" class="form-control">
                <option value="">Select Job Type</option>
               <option value="Fresher">Fresher</option>
               <option value="Experienced">Experienced</option>
           </select>
        </div>
		<div class="col-sm-3 mb-3">
            <label><strong>Experience (In Years)</strong></label>
           <select name="experience" id="experience" class="form-control">
                <option value="">Select Experience (In Years)</option>
               <option value="0-1 Years">0-1 Years</option>
               <option value="1-2 Years">1-2 Years</option>
               <option value="2-5 Years">2-5 Years</option>
               <option value="5-7 Years">5-7 Years</option>
               <option value="7-10 Years">7-10 Years</option>
               <option value="10-15 Years">10-15 Years</option>
               <option value="15+ Years">15+ Years</option>
           </select>
        </div>
        
        
        	<div class="col-sm-3 mb-3">
            <label><strong>Salary</strong></label>
           <select name="salary" id="salary" class="form-control">
                <option value="">Select Salary</option>
               <option value="0-2 Lakhs">0-2 Lakhs</option>
               <option value="2-4 Lakhs">2-4 Lakhs</option>
               <option value="4-6 Lakhs">4-6 Lakhs</option>
               <option value="6-10 Lakhs">6-10 Lakhs</option>
               <option value="10-15 Lakhs">10-15 Lakhs</option>
               <option value="15-25 Lakhs">15-25 Lakhs</option>
               <option value="25-50 Lakhs">25-50 Lakhs</option>
               <option value="50+ Lakhs">50+ Lakhs</option>
           </select>
        </div>
        
        <div class="col-sm-3 mb-3">
            <label><strong>Skills</strong></label>
           <input type="text" class="form-control" name="skills[]" id="skills" value="" placeholder="Type here & press enter"/>
        </div>
        
                              <div class="col-md-12">
                                 <label for="exampleInputnumber"><strong>Job Profile Description</strong></label>
                                 <textarea class="form-control" name="job_profile_description" id="job_profile_description"></textarea>
                              </div></div>
                           </div>
                           <div class="card-footer text-right">
                               	<button class="btn btn-primary mt-1">Save →</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@extends('alumni')
 
@section('content')
<div class="container dashboard_container">
	<div class="row">
		<div class="col-md-4">
			<div class="btn_container">
				<div class="btn-group btn_display">
		  			<button onclick="location.href='{{ url('user/dashboard') }}'"type="button" class="btn usr_btn">Profile</button>
		  			<button onclick="location.href='{{ url('user/tracer') }}'" class="btn usr_btn">Tracer</button>
		  			<button type="button" class="btn usr_btn">Year Book</button>
				</div>
			</div>
		</div>
		
			<div class="col-md-7" style="margin-top: 1rem;">
				
	    			<a href="" class="btn btn-default btn-rounded mb-4 btn_design" data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-gears "></i></a>

				
					<div class="col-md-4">
						<div class="image-cropper">
						  <img src="{{URL::asset('images/te1.jpg')}}" alt="avatar" class="profile-pic">
						</div>
					</div>

					<div class="col-md-8">
						<label class="display_name">RICHARD RICHARD</label>
					</div>
			</div>
			<div class="col-md-7 whole_container">
				<div class="display_container">
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<label class="">Email Address: </label>
						<p>asdf</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-address-book" aria-hidden="true"></i></span>
						<label class="">Address: </label>
						<p>asdf</p>
					</div>
					<div class="display_details">
						
						<label class="">Country: </label>
						<p>asdf</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-mobile-phone" aria-hidden="true"></i></span>
						<label class="">Mobile Number: </label>
						<p>asdf</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-pencil" aria-hidden="true"></i></span>
						<label class="">Course: </label>
						<p>asdf</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
						<label class="">Batch: </label>
						<p>asdf</p>
					</div>
				</div>
			</div>
		
	</div>
</div>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3"> 

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" name="name_firstname" id="firstname" class="form-control input-sm" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                              <input type="text" name="name_middlename" id="middlename" class="form-control input-sm" placeholder="Middle Name">
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" name="name_lastname" id="lastname" class="form-control input-sm" placeholder="Last Name">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                              <input type="password" name="name_password" id="password" class="form-control input-sm" placeholder="Password">
                          </div>
                       </div>
                    </div>
                  </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                         <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                              <input type="password" name="name_password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                <div class="form-group">
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                          <input type="text" class="form-control input-sm" id="address" name="name_address" placeholder="Address">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                    
                    <select id="country" name="name_country" class="form-control" >
                      <option value="" disabled selected>Select your Country</option>
                      <option value=""></option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
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
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="East Timor">East Timor</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
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
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
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
                      <option value="North Korea">North Korea</option>
                      <option value="South Korea">South Korea</option>
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
                      <option value="Macedonia">Macedonia</option>
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
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
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
                      <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syria">Syria</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania">Tanzania</option>
                      <option value="Thailand">Thailand</option>
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
                      <option value="United States">United States</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Vatican City">Vatican City</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile-phone" aria-hidden="true"></i></span>
                              <input type="text" name="name_mobile" id="mobile" class="form-control input-sm" placeholder="Mobile Number">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                        <input type="text" name="name_course" id="course" class="form-control input-sm" placeholder="Course">
                            </div>
                        </div>   
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                         <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
                              <input type="text" name="name_batch" id="batch" class="form-control input-sm" placeholder="Batch">
                            </div>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="form-group">
                   <div class="cols-sm-10">
                        <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-group" aria-hidden="true"></i></span>
                              <input type="text" class="form-control input-sm" id="membership" name="name_membership" placeholder="Membership">
                        </div>
                      </div>
                    </div>

                
                
              
              

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button style="cursor:pointer" type="submit" class="btn btn-info btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>


@endsection
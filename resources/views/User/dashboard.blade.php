@extends('alumni')
 <title>User - Dashboard</title>
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
						<label class="display_name">{{ $userDetails->firstname.' '.$userDetails->lastname }}</label>
					</div>
			</div>
			<div class="col-md-7 whole_container">
				<div class="display_container">
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<label class="">Email Address: </label>
						<p>{{ $userDetails->email }}</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-address-book" aria-hidden="true"></i></span>
						<label class="">Address: </label>
						<p>{{ $userDetails->address }}</p>
					</div>
					<div class="display_details">
						
						<label class="">Country: </label>
						<p>{{ $userDetails->country }}</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-mobile-phone" aria-hidden="true"></i></span>
						<label class="">Mobile Number: </label>
						<p>{{ $userDetails->mobile }}</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-pencil" aria-hidden="true"></i></span>
						<label class="">Course: </label>
						<p>{{ $userDetails->course }}</p>
					</div>
					<div class="display_details input-group">
						 <span class=""><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
						<label class="">Batch: </label>
						<p>{{ $userDetails->batch }}</p>
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
                        <input type="text" name="name_firstname" id="firstname" class="form-control input-sm" placeholder="First Name" value="{{ $userDetails->firstname }}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                              <input type="text" name="name_middlename" id="middlename" class="form-control input-sm" placeholder="Middle Name" value="{{ $userDetails->middlename }}">
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" name="name_lastname" id="lastname" class="form-control input-sm" placeholder="Last Name" value="{{ $userDetails->lastname }}">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="{{ $userDetails->email }}">
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                              <input type="password" name="name_password" id="password" class="form-control input-sm" placeholder="Password" >
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
                          <input type="text" class="form-control input-sm" id="address" name="name_address" placeholder="Address" value="{{ $userDetails->address }}">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                    
                    <select id="country" name="name_country" class="form-control" >
                      <option value="" disabled selected>Select your Country</option>
                      <option value=""></option>
                      <option {{ $userDetails->country == "Afghanistan" ? 'selected' : '' }} value="Afghanistan">Afghanistan</option>
                      <option {{ $userDetails->country == "Albania" ? 'selected' : '' }} value="Albania">Albania</option>
                      <option {{ $userDetails->country == "Algeria" ? 'selected' : '' }} value="Algeria">Algeria</option>
                      <option {{ $userDetails->country == 'Andorra' ? 'selected' : '' }} value="Andorra">Andorra</option>
                      <option {{ $userDetails->country == 'Antigua and Barbuda' ? 'selected' : '' }} value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option {{ $userDetails->country == 'Argentina' ? 'selected' : '' }} value="Argentina">Argentina</option>
                      <option {{ $userDetails->country == 'Armenia' ? 'selected' : '' }} value="Armenia">Armenia</option>
                      <option {{ $userDetails->country == 'Australia' ? 'selected' : '' }} value="Australia">Australia</option>
                      <option {{ $userDetails->country == 'Austria' ? 'selected' : '' }} value="Austria">Austria</option>
                      <option {{ $userDetails->country == 'Azerbaijan' ? 'selected' : '' }} value="Azerbaijan">Azerbaijan</option>
                      <option {{ $userDetails->country == 'Bahamas' ? 'selected' : '' }} value="Bahamas">Bahamas</option>
                      <option {{ $userDetails->country == 'Bahrain' ? 'selected' : '' }} value="Bahrain">Bahrain</option>
                      <option {{ $userDetails->country == 'Bangladesh' ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                      <option {{ $userDetails->country == 'Barbados' ? 'selected' : '' }} value="Barbados">Barbados</option>
                      <option {{ $userDetails->country == 'Belarus' ? 'selected' : '' }} value="Belarus">Belarus</option>
                      <option {{ $userDetails->country == 'Belgium' ? 'selected' : '' }} value="Belgium">Belgium</option>
                      <option {{ $userDetails->country == 'Belize' ? 'selected' : '' }} value="Belize">Belize</option>
                      <option {{ $userDetails->country == 'Benin' ? 'selected' : '' }} value="Benin">Benin</option>
                      <option {{ $userDetails->country == 'Bhutan' ? 'selected' : '' }} value="Bhutan">Bhutan</option>
                      <option {{ $userDetails->country == 'Bolivia' ? 'selected' : '' }} value="Bolivia">Bolivia</option>
                      <option {{ $userDetails->country == 'Bosnia and Herzegovina' ? 'selected' : '' }} value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option {{ $userDetails->country == 'Botswana' ? 'selected' : '' }} value="Botswana">Botswana</option>
                      <option {{ $userDetails->country == 'Brazil' ? 'selected' : '' }} value="Brazil">Brazil</option>
                      <option {{ $userDetails->country == 'Brunei' ? 'selected' : '' }} value="Brunei">Brunei</option>
                      <option {{ $userDetails->country == 'Bulgaria' ? 'selected' : '' }} value="Bulgaria">Bulgaria</option>
                      <option {{ $userDetails->country == 'Burkina Faso' ? 'selected' : '' }} value="Burkina Faso">Burkina Faso</option>
                      <option {{ $userDetails->country == 'Burundi' ? 'selected' : '' }} value="Burundi">Burundi</option>
                      <option {{ $userDetails->country == 'Cambodia' ? 'selected' : '' }} value="Cambodia">Cambodia</option>
                      <option {{ $userDetails->country == 'Cameroon' ? 'selected' : '' }} value="Cameroon">Cameroon</option>
                      <option {{ $userDetails->country == 'Canada' ? 'selected' : '' }} value="Canada">Canada</option>
                      <option {{ $userDetails->country == 'Cape Verde' ? 'selected' : '' }} value="Cape Verde">Cape Verde</option>
                      <option {{ $userDetails->country == 'Central African Republic' ? 'selected' : '' }} value="Central African Republic">Central African Republic</option>
                      <option {{ $userDetails->country == 'Chad' ? 'selected' : '' }} value="Chad">Chad</option>
                      <option {{ $userDetails->country == 'Chile' ? 'selected' : '' }} value="Chile">Chile</option>
                      <option {{ $userDetails->country == 'China' ? 'selected' : '' }} value="China">China</option>
                      <option {{ $userDetails->country == 'Colombia' ? 'selected' : '' }} value="Colombia">Colombia</option>
                      <option {{ $userDetails->country == 'Comoros' ? 'selected' : '' }} value="Comoros">Comoros</option>
                      <option {{ $userDetails->country == 'Congo' ? 'selected' : '' }} value="Congo">Congo</option>
                      <option {{ $userDetails->country == 'Costa Rica' ? 'selected' : '' }} value="Costa Rica">Costa Rica</option>
                      <option {{ $userDetails->country == 'Cote d Ivoire' ? 'selected' : '' }} value="Cote d'Ivoire">Cote d'Ivoire</option>
                      <option {{ $userDetails->country == 'Croatia' ? 'selected' : '' }} value="Croatia">Croatia</option>
                      <option {{ $userDetails->country == 'Cuba' ? 'selected' : '' }} value="Cuba">Cuba</option>
                      <option {{ $userDetails->country == 'Cyprus' ? 'selected' : '' }} value="Cyprus">Cyprus</option>
                      <option {{ $userDetails->country == 'Czech Republic' ? 'selected' : '' }} value="Czech Republic">Czech Republic</option>
                      <option {{ $userDetails->country == 'Denmark' ? 'selected' : '' }} value="Denmark">Denmark</option>
                      <option {{ $userDetails->country == 'Djibouti' ? 'selected' : '' }} value="Djibouti">Djibouti</option>
                      <option {{ $userDetails->country == 'Dominica' ? 'selected' : '' }} value="Dominica">Dominica</option>
                      <option {{ $userDetails->country == 'Dominican Republic' ? 'selected' : '' }} value="Dominican Republic">Dominican Republic</option>
                      <option {{ $userDetails->country == 'East Timor' ? 'selected' : '' }} value="East Timor">East Timor</option>
                      <option {{ $userDetails->country == 'Ecuador' ? 'selected' : '' }} value="Ecuador">Ecuador</option>
                      <option {{ $userDetails->country == 'Egypt' ? 'selected' : '' }} value="Egypt">Egypt</option>
                      <option {{ $userDetails->country == 'El Salvador' ? 'selected' : '' }} value="El Salvador">El Salvador</option>
                      <option {{ $userDetails->country == 'Equatorial Guinea' ? 'selected' : '' }} value="Equatorial Guinea">Equatorial Guinea</option>
                      <option {{ $userDetails->country == 'Eritrea' ? 'selected' : '' }} value="Eritrea">Eritrea</option>
                      <option {{ $userDetails->country == 'Estonia' ? 'selected' : '' }} value="Estonia">Estonia</option>
                      <option {{ $userDetails->country == 'Ethiopia' ? 'selected' : '' }} value="Ethiopia">Ethiopia</option>
                      <option {{ $userDetails->country == 'Fiji' ? 'selected' : '' }} value="Fiji">Fiji</option>
                      <option {{ $userDetails->country == 'Finland' ? 'selected' : '' }} value="Finland">Finland</option>
                      <option {{ $userDetails->country == 'France' ? 'selected' : '' }} value="France">France</option>
                      <option {{ $userDetails->country == 'Gabon' ? 'selected' : '' }} value="Gabon">Gabon</option>
                      <option {{ $userDetails->country == 'Gambia' ? 'selected' : '' }} value="Gambia">Gambia</option>
                      <option {{ $userDetails->country == 'Georgia' ? 'selected' : '' }} value="Georgia">Georgia</option>
                      <option {{ $userDetails->country == 'Germany' ? 'selected' : '' }} value="Germany">Germany</option>
                      <option {{ $userDetails->country == 'Ghana' ? 'selected' : '' }} value="Ghana">Ghana</option>
                      <option {{ $userDetails->country == 'Greece' ? 'selected' : '' }} value="Greece">Greece</option>
                      <option {{ $userDetails->country == 'Grenada' ? 'selected' : '' }} value="Grenada">Grenada</option>
                      <option {{ $userDetails->country == 'Guatemala' ? 'selected' : '' }} value="Guatemala">Guatemala</option>
                      <option {{ $userDetails->country == 'Guinea' ? 'selected' : '' }} value="Guinea">Guinea</option>
                      <option {{ $userDetails->country == 'Guinea-Bissau' ? 'selected' : '' }} value="Guinea-Bissau">Guinea-Bissau</option>
                      <option {{ $userDetails->country == 'Guyana' ? 'selected' : '' }} value="Guyana">Guyana</option>
                      <option {{ $userDetails->country == 'Haiti' ? 'selected' : '' }} value="Haiti">Haiti</option>
                      <option {{ $userDetails->country == 'Honduras' ? 'selected' : '' }} value="Honduras">Honduras</option>
                      <option {{ $userDetails->country == 'Hong Kong' ? 'selected' : '' }} value="Hong Kong">Hong Kong</option>
                      <option {{ $userDetails->country == 'Hungary' ? 'selected' : '' }} value="Hungary">Hungary</option>
                      <option {{ $userDetails->country == 'Iceland' ? 'selected' : '' }} value="Iceland">Iceland</option>
                      <option {{ $userDetails->country == 'India' ? 'selected' : '' }} value="India">India</option>
                      <option {{ $userDetails->country == 'Indonesia' ? 'selected' : '' }} value="Indonesia">Indonesia</option>
                      <option {{ $userDetails->country == 'Iran' ? 'selected' : '' }} value="Iran">Iran</option>
                      <option {{ $userDetails->country == 'Iraq' ? 'selected' : '' }} value="Iraq">Iraq</option>
                      <option {{ $userDetails->country == 'Ireland' ? 'selected' : '' }} value="Ireland">Ireland</option>
                      <option {{ $userDetails->country == 'Israel' ? 'selected' : '' }} value="Israel">Israel</option>
                      <option {{ $userDetails->country == 'Italy' ? 'selected' : '' }} value="Italy">Italy</option>
                      <option {{ $userDetails->country == 'Jamaica' ? 'selected' : '' }} value="Jamaica">Jamaica</option>
                      <option {{ $userDetails->country == 'Japan' ? 'selected' : '' }} value="Japan">Japan</option>
                      <option {{ $userDetails->country == 'Jordan' ? 'selected' : '' }} value="Jordan">Jordan</option>
                      <option {{ $userDetails->country == 'Kazakhstan' ? 'selected' : '' }} value="Kazakhstan">Kazakhstan</option>
                      <option {{ $userDetails->country == 'Kenya' ? 'selected' : '' }} value="Kenya">Kenya</option>
                      <option {{ $userDetails->country == 'Kiribati' ? 'selected' : '' }} value="Kiribati">Kiribati</option>
                      <option {{ $userDetails->country == 'North Korea' ? 'selected' : '' }} value="North Korea">North Korea</option>
                      <option {{ $userDetails->country == 'South Korea' ? 'selected' : '' }} value="South Korea">South Korea</option>
                      <option {{ $userDetails->country == 'Kuwait' ? 'selected' : '' }} value="Kuwait">Kuwait</option>
                      <option {{ $userDetails->country == 'Kyrgyzstan' ? 'selected' : '' }} value="Kyrgyzstan">Kyrgyzstan</option>
                      <option {{ $userDetails->country == 'Laos' ? 'selected' : '' }} value="Laos">Laos</option>
                      <option {{ $userDetails->country == 'Latvia' ? 'selected' : '' }} value="Latvia">Latvia</option>
                      <option {{ $userDetails->country == 'Lebanon' ? 'selected' : '' }} value="Lebanon">Lebanon</option>
                      <option {{ $userDetails->country == 'Lesotho' ? 'selected' : '' }} value="Lesotho">Lesotho</option>
                      <option {{ $userDetails->country == 'Liberia' ? 'selected' : '' }} value="Liberia">Liberia</option>
                      <option {{ $userDetails->country == 'Libya' ? 'selected' : '' }} value="Libya">Libya</option>
                      <option {{ $userDetails->country == 'Liechtenstein' ? 'selected' : '' }} value="Liechtenstein">Liechtenstein</option>
                      <option {{ $userDetails->country == 'Lithuania' ? 'selected' : '' }} value="Lithuania">Lithuania</option>
                      <option {{ $userDetails->country == 'Luxembourg' ? 'selected' : '' }} value="Luxembourg">Luxembourg</option>
                      <option {{ $userDetails->country == 'Macedonia' ? 'selected' : '' }} value="Macedonia">Macedonia</option>
                      <option {{ $userDetails->country == 'Madagascar' ? 'selected' : '' }} value="Madagascar">Madagascar</option>
                      <option {{ $userDetails->country == 'Malawi' ? 'selected' : '' }} value="Malawi">Malawi</option>
                      <option {{ $userDetails->country == 'Malaysia' ? 'selected' : '' }} value="Malaysia">Malaysia</option>
                      <option {{ $userDetails->country == 'Maldives' ? 'selected' : '' }} value="Maldives">Maldives</option>
                      <option {{ $userDetails->country == 'Mali' ? 'selected' : '' }} value="Mali">Mali</option>
                      <option {{ $userDetails->country == 'Malta' ? 'selected' : '' }} value="Malta">Malta</option>
                      <option {{ $userDetails->country == 'Marshall Islands' ? 'selected' : '' }} value="Marshall Islands">Marshall Islands</option>
                      <option {{ $userDetails->country == 'Mauritania' ? 'selected' : '' }} value="Mauritania">Mauritania</option>
                      <option {{ $userDetails->country == 'Mauritius' ? 'selected' : '' }} value="Mauritius">Mauritius</option>
                      <option {{ $userDetails->country == 'Mexico' ? 'selected' : '' }} value="Mexico">Mexico</option>
                      <option {{ $userDetails->country == 'Micronesia' ? 'selected' : '' }} value="Micronesia">Micronesia</option>
                      <option {{ $userDetails->country == 'Moldova' ? 'selected' : '' }} value="Moldova">Moldova</option>
                      <option {{ $userDetails->country == 'Monaco' ? 'selected' : '' }} value="Monaco">Monaco</option>
                      <option {{ $userDetails->country == 'Mongolia' ? 'selected' : '' }} value="Mongolia">Mongolia</option>
                      <option {{ $userDetails->country == 'Montenegro' ? 'selected' : '' }} value="Montenegro">Montenegro</option>
                      <option {{ $userDetails->country == 'Morocco' ? 'selected' : '' }} value="Morocco">Morocco</option>
                      <option {{ $userDetails->country == 'Mozambique' ? 'selected' : '' }} value="Mozambique">Mozambique</option>
                      <option {{ $userDetails->country == 'Myanmar' ? 'selected' : '' }} value="Myanmar">Myanmar</option>
                      <option {{ $userDetails->country == 'Namibia' ? 'selected' : '' }} value="Namibia">Namibia</option>
                      <option {{ $userDetails->country == 'Nauru' ? 'selected' : '' }} value="Nauru">Nauru</option>
                      <option {{ $userDetails->country == 'Nepal' ? 'selected' : '' }} value="Nepal">Nepal</option>
                      <option {{ $userDetails->country == 'Netherlands' ? 'selected' : '' }} value="Netherlands">Netherlands</option>
                      <option {{ $userDetails->country == 'New Zealand' ? 'selected' : '' }} value="New Zealand">New Zealand</option>
                      <option {{ $userDetails->country == 'Nicaragua' ? 'selected' : '' }} value="Nicaragua">Nicaragua</option>
                      <option {{ $userDetails->country == 'Niger' ? 'selected' : '' }} value="Niger">Niger</option>
                      <option {{ $userDetails->country == 'Nigeria' ? 'selected' : '' }} value="Nigeria">Nigeria</option>
                      <option {{ $userDetails->country == 'Norway' ? 'selected' : '' }} value="Norway">Norway</option>
                      <option {{ $userDetails->country == 'Oman' ? 'selected' : '' }} value="Oman">Oman</option>
                      <option {{ $userDetails->country == 'Pakistan' ? 'selected' : '' }} value="Pakistan">Pakistan</option>
                      <option {{ $userDetails->country == 'Palau' ? 'selected' : '' }} value="Palau">Palau</option>
                      <option {{ $userDetails->country == 'Panama' ? 'selected' : '' }} value="Panama">Panama</option>
                      <option {{ $userDetails->country == 'Papua New Guinea' ? 'selected' : '' }} value="Papua New Guinea">Papua New Guinea</option>
                      <option {{ $userDetails->country == 'Paraguay' ? 'selected' : '' }} value="Paraguay">Paraguay</option>
                      <option {{ $userDetails->country == 'Peru' ? 'selected' : '' }} value="Peru">Peru</option>
                      <option {{ $userDetails->country == 'Philippines' ? 'selected' : '' }} value="Philippines">Philippines</option>
                      <option {{ $userDetails->country == 'Poland' ? 'selected' : '' }} value="Poland">Poland</option>
                      <option {{ $userDetails->country == 'Portugal' ? 'selected' : '' }} value="Portugal">Portugal</option>
                      <option {{ $userDetails->country == 'Puerto Rico' ? 'selected' : '' }} value="Puerto Rico">Puerto Rico</option>
                      <option {{ $userDetails->country == 'Qatar' ? 'selected' : '' }} value="Qatar">Qatar</option>
                      <option {{ $userDetails->country == 'Romania' ? 'selected' : '' }} value="Romania">Romania</option>
                      <option {{ $userDetails->country == 'Russia' ? 'selected' : '' }} value="Russia">Russia</option>
                      <option {{ $userDetails->country == 'Rwanda' ? 'selected' : '' }}  value="Rwanda">Rwanda</option>
                      <option {{ $userDetails->country == 'Saint Kitts and Nevis' ? 'selected' : '' }} value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option {{ $userDetails->country == 'Saint Lucia' ? 'selected' : '' }} value="Saint Lucia">Saint Lucia</option>
                      <option {{ $userDetails->country == 'Saint Vincent and the Grenadines' ? 'selected' : '' }} value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                      <option {{ $userDetails->country == 'Samoa' ? 'selected' : '' }} value="Samoa">Samoa</option>
                      <option {{ $userDetails->country == 'San Marino' ? 'selected' : '' }} value="San Marino">San Marino</option>
                      <option {{ $userDetails->country == 'Sao Tome and Principe' ? 'selected' : '' }} value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option {{ $userDetails->country == 'Saudi Arabia' ? 'selected' : '' }} value="Saudi Arabia">Saudi Arabia</option>
                      <option {{ $userDetails->country == 'Senegal' ? 'selected' : '' }} value="Senegal">Senegal</option>
                      <option {{ $userDetails->country == 'Serbia and Montenegro' ? 'selected' : '' }} value="Serbia and Montenegro">Serbia and Montenegro</option>
                      <option {{ $userDetails->country == 'Seychelles' ? 'selected' : '' }} value="Seychelles">Seychelles</option>
                      <option {{ $userDetails->country == 'Sierra Leone' ? 'selected' : '' }} value="Sierra Leone">Sierra Leone</option>
                      <option {{ $userDetails->country == 'Singapore' ? 'selected' : '' }} value="Singapore">Singapore</option>
                      <option {{ $userDetails->country == 'Slovakia' ? 'selected' : '' }} value="Slovakia">Slovakia</option>
                      <option {{ $userDetails->country == 'Slovenia' ? 'selected' : '' }} value="Slovenia">Slovenia</option>
                      <option {{ $userDetails->country == 'Solomon Islands' ? 'selected' : '' }} value="Solomon Islands">Solomon Islands</option>
                      <option {{ $userDetails->country == 'Somalia' ? 'selected' : '' }} value="Somalia">Somalia</option>
                      <option {{ $userDetails->country == 'South Africa' ? 'selected' : '' }} value="South Africa">South Africa</option>
                      <option {{ $userDetails->country == 'Spain' ? 'selected' : '' }} value="Spain">Spain</option>
                      <option {{ $userDetails->country == 'Sri Lanka' ? 'selected' : '' }} value="Sri Lanka">Sri Lanka</option>
                      <option {{ $userDetails->country == 'Sudan' ? 'selected' : '' }} value="Sudan">Sudan</option>
                      <option {{ $userDetails->country == 'Suriname' ? 'selected' : '' }} value="Suriname">Suriname</option>
                      <option {{ $userDetails->country == 'Swaziland' ? 'selected' : '' }} value="Swaziland">Swaziland</option>
                      <option {{ $userDetails->country == 'Sweden' ? 'selected' : '' }} value="Sweden">Sweden</option>
                      <option {{ $userDetails->country == 'Switzerland' ? 'selected' : '' }} value="Switzerland">Switzerland</option>
                      <option {{ $userDetails->country == 'Syria' ? 'selected' : '' }} value="Syria">Syria</option>
                      <option {{ $userDetails->country == 'Taiwan' ? 'selected' : '' }} value="Taiwan">Taiwan</option>
                      <option {{ $userDetails->country == 'Tajikistan' ? 'selected' : '' }} value="Tajikistan">Tajikistan</option>
                      <option {{ $userDetails->country == 'Tanzania' ? 'selected' : '' }} value="Tanzania">Tanzania</option>
                      <option {{ $userDetails->country == 'Thailand' ? 'selected' : '' }} value="Thailand">Thailand</option>
                      <option {{ $userDetails->country == 'Togo' ? 'selected' : '' }} value="Togo">Togo</option>
                      <option {{ $userDetails->country == 'Tonga' ? 'selected' : '' }} value="Tonga">Tonga</option>
                      <option {{ $userDetails->country == 'Trinidad and Tobago' ? 'selected' : '' }} value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option {{ $userDetails->country == 'Tunisia' ? 'selected' : '' }} value="Tunisia">Tunisia</option>
                      <option {{ $userDetails->country == 'Turkey' ? 'selected' : '' }} value="Turkey">Turkey</option>
                      <option {{ $userDetails->country == 'Turkmenistan' ? 'selected' : '' }} value="Turkmenistan">Turkmenistan</option>
                      <option {{ $userDetails->country == 'Tuvalu' ? 'selected' : '' }} value="Tuvalu">Tuvalu</option>
                      <option {{ $userDetails->country == 'Uganda' ? 'selected' : '' }} value="Uganda">Uganda</option>
                      <option {{ $userDetails->country == 'Ukraine' ? 'selected' : '' }} value="Ukraine">Ukraine</option>
                      <option {{ $userDetails->country == 'United Arab Emirates' ? 'selected' : '' }} value="United Arab Emirates">United Arab Emirates</option>
                      <option {{ $userDetails->country == 'United Kingdom' ? 'selected' : '' }} value="United Kingdom">United Kingdom</option>
                      <option {{ $userDetails->country == 'United States' ? 'selected' : '' }} value="United States">United States</option>
                      <option {{ $userDetails->country == 'Uruguay' ? 'selected' : '' }} value="Uruguay">Uruguay</option>
                      <option {{ $userDetails->country == 'Uzbekistan' ? 'selected' : '' }} value="Uzbekistan">Uzbekistan</option>
                      <option {{ $userDetails->country == 'Vanuatu' ? 'selected' : '' }} value="Vanuatu">Vanuatu</option>
                      <option {{ $userDetails->country == 'Vatican City' ? 'selected' : '' }} value="Vatican City">Vatican City</option>
                      <option {{ $userDetails->country == 'Venezuela' ? 'selected' : '' }} value="Venezuela">Venezuela</option>
                      <option {{ $userDetails->country == 'Vietnam' ? 'selected' : '' }} value="Vietnam">Vietnam</option>
                      <option {{ $userDetails->country == 'Yemen' ? 'selected' : '' }} value="Yemen">Yemen</option>
                      <option {{ $userDetails->country == 'Zambia' ? 'selected' : '' }} value="Zambia">Zambia</option>
                      <option {{ $userDetails->country == 'Zimbabwe' ? 'selected' : '' }} value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile-phone" aria-hidden="true"></i></span>
                              <input type="text" name="name_mobile" id="mobile" class="form-control input-sm" placeholder="Mobile Number" value="{{ $userDetails->mobile }}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                        <input type="text" name="name_course" id="course" class="form-control input-sm" placeholder="Course" value="{{ $userDetails->course }}" disabled="">
                            </div>
                        </div>   
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                         <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
                              <input type="text" name="name_batch" id="batch" class="form-control input-sm" placeholder="Batch" value="{{ $userDetails->batch }}" disabled="">
                            </div>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="form-group">
                   <div class="cols-sm-10">
                        <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-group" aria-hidden="true"></i></span>
                              <input type="text" class="form-control input-sm" id="membership" name="name_membership" placeholder="Membership" value="{{ $userDetails->membership }}" disabled="">
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
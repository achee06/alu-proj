@extends('alumni')
 <title>Registration</title>
@section('content')


 <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        
        

             @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if(session()->has('success_message'))
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  </button>
                  <strong>{{ session('success_message') }}</strong>               
                </div>
              @endif

        
          <div class="panel panel-default form_background">
            <div class="panel-heading">
              <h3 class="panel-title title-header">Membership Registration</h3>
            </div>
            <div class="panel-body">
              <form method="POST" action="{{url ('pages/registration/success') }}">
                 {{ csrf_field() }}

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name" value="{{ old('firstname') }}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                              <input type="text" name="middlename" id="middlename" class="form-control input-sm" placeholder="Middle Name" value="{{ old('middlename') }}">
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name" value="{{ old('lastname') }}">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="{{ old('email') }}">
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                              <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                          </div>
                       </div>
                    </div>
                  </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                         <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                <div class="form-group">
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                          <input type="text" class="form-control input-sm" id="address" name="address" placeholder="Address" value="{{ old('address') }}">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                    
                    <select id="country" name="country" class="form-control" >
                      <option value="" disabled selected>Select your Country</option>                      
                      <option {{ old('country') == 'Afghanistan' ? 'selected' : '' }} value="Afghanistan">Afghanistan</option>
                      <option {{ old('country') == 'Albania' ? 'selected' : '' }} value="Albania">Albania</option>
                      <option {{ old('country') == 'Algeria' ? 'selected' : '' }} value="Algeria">Algeria</option>
                      <option {{ old('country') == 'Andorra' ? 'selected' : '' }} value="Andorra">Andorra</option>
                      <option {{ old('country') == 'Antigua and Barbuda' ? 'selected' : '' }} value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option {{ old('country') == 'Argentina' ? 'selected' : '' }} value="Argentina">Argentina</option>
                      <option {{ old('country') == 'Armenia' ? 'selected' : '' }} value="Armenia">Armenia</option>
                      <option {{ old('country') == 'Australia' ? 'selected' : '' }} value="Australia">Australia</option>
                      <option {{ old('country') == 'Austria' ? 'selected' : '' }} value="Austria">Austria</option>
                      <option {{ old('country') == 'Azerbaijan' ? 'selected' : '' }} value="Azerbaijan">Azerbaijan</option>
                      <option {{ old('country') == 'Bahamas' ? 'selected' : '' }} value="Bahamas">Bahamas</option>
                      <option {{ old('country') == 'Bahrain' ? 'selected' : '' }} value="Bahrain">Bahrain</option>
                      <option {{ old('country') == 'Bangladesh' ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                      <option {{ old('country') == 'Barbados' ? 'selected' : '' }} value="Barbados">Barbados</option>
                      <option {{ old('country') == 'Belarus' ? 'selected' : '' }} value="Belarus">Belarus</option>
                      <option {{ old('country') == 'Belgium' ? 'selected' : '' }} value="Belgium">Belgium</option>
                      <option {{ old('country') == 'Belize' ? 'selected' : '' }} value="Belize">Belize</option>
                      <option {{ old('country') == 'Benin' ? 'selected' : '' }} value="Benin">Benin</option>
                      <option {{ old('country') == 'Bhutan' ? 'selected' : '' }} value="Bhutan">Bhutan</option>
                      <option {{ old('country') == 'Bolivia' ? 'selected' : '' }} value="Bolivia">Bolivia</option>
                      <option {{ old('country') == 'Bosnia and Herzegovina' ? 'selected' : '' }} value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option {{ old('country') == 'Botswana' ? 'selected' : '' }} value="Botswana">Botswana</option>
                      <option {{ old('country') == 'Brazil' ? 'selected' : '' }} value="Brazil">Brazil</option>
                      <option {{ old('country') == 'Brunei' ? 'selected' : '' }} value="Brunei">Brunei</option>
                      <option {{ old('country') == 'Bulgaria' ? 'selected' : '' }} value="Bulgaria">Bulgaria</option>
                      <option {{ old('country') == 'Burkina Faso' ? 'selected' : '' }} value="Burkina Faso">Burkina Faso</option>
                      <option {{ old('country') == 'Burundi' ? 'selected' : '' }} value="Burundi">Burundi</option>
                      <option {{ old('country') == 'Cambodia' ? 'selected' : '' }} value="Cambodia">Cambodia</option>
                      <option {{ old('country') == 'Cameroon' ? 'selected' : '' }} value="Cameroon">Cameroon</option>
                      <option {{ old('country') == 'Canada' ? 'selected' : '' }} value="Canada">Canada</option>
                      <option {{ old('country') == 'Cape Verde' ? 'selected' : '' }} value="Cape Verde">Cape Verde</option>
                      <option {{ old('country') == 'Central African Republic' ? 'selected' : '' }} value="Central African Republic">Central African Republic</option>
                      <option {{ old('country') == 'Chad' ? 'selected' : '' }} value="Chad">Chad</option>
                      <option {{ old('country') == 'Chile' ? 'selected' : '' }} value="Chile">Chile</option>
                      <option {{ old('country') == 'China' ? 'selected' : '' }} value="China">China</option>
                      <option {{ old('country') == 'Colombia' ? 'selected' : '' }} value="Colombia">Colombia</option>
                      <option {{ old('country') == 'Comoros' ? 'selected' : '' }} value="Comoros">Comoros</option>
                      <option {{ old('country') == 'Congo' ? 'selected' : '' }} value="Congo">Congo</option>
                      <option {{ old('country') == 'Costa Rica' ? 'selected' : '' }} value="Costa Rica">Costa Rica</option>
                      <option {{ old('country') == 'Cote d Ivoire' ? 'selected' : '' }} value="Cote d'Ivoire">Cote d'Ivoire</option>
                      <option {{ old('country') == 'Croatia' ? 'selected' : '' }} value="Croatia">Croatia</option>
                      <option {{ old('country') == 'Cuba' ? 'selected' : '' }} value="Cuba">Cuba</option>
                      <option {{ old('country') == 'Cyprus' ? 'selected' : '' }} value="Cyprus">Cyprus</option>
                      <option {{ old('country') == 'Czech Republic' ? 'selected' : '' }} value="Czech Republic">Czech Republic</option>
                      <option {{ old('country') == 'Denmark' ? 'selected' : '' }} value="Denmark">Denmark</option>
                      <option {{ old('country') == 'Djibouti' ? 'selected' : '' }} value="Djibouti">Djibouti</option>
                      <option {{ old('country') == 'Dominica' ? 'selected' : '' }} value="Dominica">Dominica</option>
                      <option {{ old('country') == 'Dominican Republic' ? 'selected' : '' }} value="Dominican Republic">Dominican Republic</option>
                      <option {{ old('country') == 'East Timor' ? 'selected' : '' }} value="East Timor">East Timor</option>
                      <option {{ old('country') == 'Ecuador' ? 'selected' : '' }} value="Ecuador">Ecuador</option>
                      <option {{ old('country') == 'Egypt' ? 'selected' : '' }} value="Egypt">Egypt</option>
                      <option {{ old('country') == 'El Salvador' ? 'selected' : '' }} value="El Salvador">El Salvador</option>
                      <option {{ old('country') == 'Equatorial Guinea' ? 'selected' : '' }} value="Equatorial Guinea">Equatorial Guinea</option>
                      <option {{ old('country') == 'Eritrea' ? 'selected' : '' }} value="Eritrea">Eritrea</option>
                      <option {{ old('country') == 'Estonia' ? 'selected' : '' }} value="Estonia">Estonia</option>
                      <option {{ old('country') == 'Ethiopia' ? 'selected' : '' }} value="Ethiopia">Ethiopia</option>
                      <option {{ old('country') == 'Fiji' ? 'selected' : '' }} value="Fiji">Fiji</option>
                      <option {{ old('country') == 'Finland' ? 'selected' : '' }} value="Finland">Finland</option>
                      <option {{ old('country') == 'France' ? 'selected' : '' }} value="France">France</option>
                      <option {{ old('country') == 'Gabon' ? 'selected' : '' }} value="Gabon">Gabon</option>
                      <option {{ old('country') == 'Gambia' ? 'selected' : '' }} value="Gambia">Gambia</option>
                      <option {{ old('country') == 'Georgia' ? 'selected' : '' }} value="Georgia">Georgia</option>
                      <option {{ old('country') == 'Germany' ? 'selected' : '' }} value="Germany">Germany</option>
                      <option {{ old('country') == 'Ghana' ? 'selected' : '' }} value="Ghana">Ghana</option>
                      <option {{ old('country') == 'Greece' ? 'selected' : '' }} value="Greece">Greece</option>
                      <option {{ old('country') == 'Grenada' ? 'selected' : '' }} value="Grenada">Grenada</option>
                      <option {{ old('country') == 'Guatemala' ? 'selected' : '' }} value="Guatemala">Guatemala</option>
                      <option {{ old('country') == 'Guinea' ? 'selected' : '' }} value="Guinea">Guinea</option>
                      <option {{ old('country') == 'Guinea-Bissau' ? 'selected' : '' }} value="Guinea-Bissau">Guinea-Bissau</option>
                      <option {{ old('country') == 'Guyana' ? 'selected' : '' }} value="Guyana">Guyana</option>
                      <option {{ old('country') == 'Haiti' ? 'selected' : '' }} value="Haiti">Haiti</option>
                      <option {{ old('country') == 'Honduras' ? 'selected' : '' }} value="Honduras">Honduras</option>
                      <option {{ old('country') == 'Hong Kong' ? 'selected' : '' }} value="Hong Kong">Hong Kong</option>
                      <option {{ old('country') == 'Hungary' ? 'selected' : '' }} value="Hungary">Hungary</option>
                      <option {{ old('country') == 'Iceland' ? 'selected' : '' }} value="Iceland">Iceland</option>
                      <option {{ old('country') == 'India' ? 'selected' : '' }} value="India">India</option>
                      <option {{ old('country') == 'Indonesia' ? 'selected' : '' }} value="Indonesia">Indonesia</option>
                      <option {{ old('country') == 'Iran' ? 'selected' : '' }} value="Iran">Iran</option>
                      <option {{ old('country') == 'Iraq' ? 'selected' : '' }} value="Iraq">Iraq</option>
                      <option {{ old('country') == 'Ireland' ? 'selected' : '' }} value="Ireland">Ireland</option>
                      <option {{ old('country') == 'Israel' ? 'selected' : '' }} value="Israel">Israel</option>
                      <option {{ old('country') == 'Italy' ? 'selected' : '' }} value="Italy">Italy</option>
                      <option {{ old('country') == 'Jamaica' ? 'selected' : '' }} value="Jamaica">Jamaica</option>
                      <option {{ old('country') == 'Japan' ? 'selected' : '' }} value="Japan">Japan</option>
                      <option {{ old('country') == 'Jordan' ? 'selected' : '' }} value="Jordan">Jordan</option>
                      <option {{ old('country') == 'Kazakhstan' ? 'selected' : '' }} value="Kazakhstan">Kazakhstan</option>
                      <option {{ old('country') == 'Kenya' ? 'selected' : '' }} value="Kenya">Kenya</option>
                      <option {{ old('country') == 'Kiribati' ? 'selected' : '' }} value="Kiribati">Kiribati</option>
                      <option {{ old('country') == 'North Korea' ? 'selected' : '' }} value="North Korea">North Korea</option>
                      <option {{ old('country') == 'South Korea' ? 'selected' : '' }} value="South Korea">South Korea</option>
                      <option {{ old('country') == 'Kuwait' ? 'selected' : '' }} value="Kuwait">Kuwait</option>
                      <option {{ old('country') == 'Kyrgyzstan' ? 'selected' : '' }} value="Kyrgyzstan">Kyrgyzstan</option>
                      <option {{ old('country') == 'Laos' ? 'selected' : '' }} value="Laos">Laos</option>
                      <option {{ old('country') == 'Latvia' ? 'selected' : '' }} value="Latvia">Latvia</option>
                      <option {{ old('country') == 'Lebanon' ? 'selected' : '' }} value="Lebanon">Lebanon</option>
                      <option {{ old('country') == 'Lesotho' ? 'selected' : '' }} value="Lesotho">Lesotho</option>
                      <option {{ old('country') == 'Liberia' ? 'selected' : '' }} value="Liberia">Liberia</option>
                      <option {{ old('country') == 'Libya' ? 'selected' : '' }} value="Libya">Libya</option>
                      <option {{ old('country') == 'Liechtenstein' ? 'selected' : '' }} value="Liechtenstein">Liechtenstein</option>
                      <option {{ old('country') == 'Lithuania' ? 'selected' : '' }} value="Lithuania">Lithuania</option>
                      <option {{ old('country') == 'Luxembourg' ? 'selected' : '' }} value="Luxembourg">Luxembourg</option>
                      <option {{ old('country') == 'Macedonia' ? 'selected' : '' }} value="Macedonia">Macedonia</option>
                      <option {{ old('country') == 'Madagascar' ? 'selected' : '' }} value="Madagascar">Madagascar</option>
                      <option {{ old('country') == 'Malawi' ? 'selected' : '' }} value="Malawi">Malawi</option>
                      <option {{ old('country') == 'Malaysia' ? 'selected' : '' }} value="Malaysia">Malaysia</option>
                      <option {{ old('country') == 'Maldives' ? 'selected' : '' }} value="Maldives">Maldives</option>
                      <option {{ old('country') == 'Mali' ? 'selected' : '' }} value="Mali">Mali</option>
                      <option {{ old('country') == 'Malta' ? 'selected' : '' }} value="Malta">Malta</option>
                      <option {{ old('country') == 'Marshall Islands' ? 'selected' : '' }} value="Marshall Islands">Marshall Islands</option>
                      <option {{ old('country') == 'Mauritania' ? 'selected' : '' }} value="Mauritania">Mauritania</option>
                      <option {{ old('country') == 'Mauritius' ? 'selected' : '' }} value="Mauritius">Mauritius</option>
                      <option {{ old('country') == 'Mexico' ? 'selected' : '' }} value="Mexico">Mexico</option>
                      <option {{ old('country') == 'Micronesia' ? 'selected' : '' }} value="Micronesia">Micronesia</option>
                      <option {{ old('country') == 'Moldova' ? 'selected' : '' }} value="Moldova">Moldova</option>
                      <option {{ old('country') == 'Monaco' ? 'selected' : '' }} value="Monaco">Monaco</option>
                      <option {{ old('country') == 'Mongolia' ? 'selected' : '' }} value="Mongolia">Mongolia</option>
                      <option {{ old('country') == 'Montenegro' ? 'selected' : '' }} value="Montenegro">Montenegro</option>
                      <option {{ old('country') == 'Morocco' ? 'selected' : '' }} value="Morocco">Morocco</option>
                      <option {{ old('country') == 'Mozambique' ? 'selected' : '' }} value="Mozambique">Mozambique</option>
                      <option {{ old('country') == 'Myanmar' ? 'selected' : '' }} value="Myanmar">Myanmar</option>
                      <option {{ old('country') == 'Namibia' ? 'selected' : '' }} value="Namibia">Namibia</option>
                      <option {{ old('country') == 'Nauru' ? 'selected' : '' }} value="Nauru">Nauru</option>
                      <option {{ old('country') == 'Nepal' ? 'selected' : '' }} value="Nepal">Nepal</option>
                      <option {{ old('country') == 'Netherlands' ? 'selected' : '' }} value="Netherlands">Netherlands</option>
                      <option {{ old('country') == 'New Zealand' ? 'selected' : '' }} value="New Zealand">New Zealand</option>
                      <option {{ old('country') == 'Nicaragua' ? 'selected' : '' }} value="Nicaragua">Nicaragua</option>
                      <option {{ old('country') == 'Niger' ? 'selected' : '' }} value="Niger">Niger</option>
                      <option {{ old('country') == 'Nigeria' ? 'selected' : '' }} value="Nigeria">Nigeria</option>
                      <option {{ old('country') == 'Norway' ? 'selected' : '' }} value="Norway">Norway</option>
                      <option {{ old('country') == 'Oman' ? 'selected' : '' }} value="Oman">Oman</option>
                      <option {{ old('country') == 'Pakistan' ? 'selected' : '' }} value="Pakistan">Pakistan</option>
                      <option {{ old('country') == 'Palau' ? 'selected' : '' }} value="Palau">Palau</option>
                      <option {{ old('country') == 'Panama' ? 'selected' : '' }} value="Panama">Panama</option>
                      <option {{ old('country') == 'Papua New Guinea' ? 'selected' : '' }} value="Papua New Guinea">Papua New Guinea</option>
                      <option {{ old('country') == 'Paraguay' ? 'selected' : '' }} value="Paraguay">Paraguay</option>
                      <option {{ old('country') == 'Peru' ? 'selected' : '' }} value="Peru">Peru</option>
                      <option {{ old('country') == 'Philippines' ? 'selected' : '' }} value="Philippines">Philippines</option>
                      <option {{ old('country') == 'Poland' ? 'selected' : '' }} value="Poland">Poland</option>
                      <option {{ old('country') == 'Portugal' ? 'selected' : '' }} value="Portugal">Portugal</option>
                      <option {{ old('country') == 'Puerto Rico' ? 'selected' : '' }} value="Puerto Rico">Puerto Rico</option>
                      <option {{ old('country') == 'Qatar' ? 'selected' : '' }} value="Qatar">Qatar</option>
                      <option {{ old('country') == 'Romania' ? 'selected' : '' }} value="Romania">Romania</option>
                      <option {{ old('country') == 'Russia' ? 'selected' : '' }} value="Russia">Russia</option>
                      <option {{ old('country') == 'Rwanda' ? 'selected' : '' }}  value="Rwanda">Rwanda</option>
                      <option {{ old('country') == 'Saint Kitts and Nevis' ? 'selected' : '' }} value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option {{ old('country') == 'Saint Lucia' ? 'selected' : '' }} value="Saint Lucia">Saint Lucia</option>
                      <option {{ old('country') == 'Saint Vincent and the Grenadines' ? 'selected' : '' }} value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                      <option {{ old('country') == 'Samoa' ? 'selected' : '' }} value="Samoa">Samoa</option>
                      <option {{ old('country') == 'San Marino' ? 'selected' : '' }} value="San Marino">San Marino</option>
                      <option {{ old('country') == 'Sao Tome and Principe' ? 'selected' : '' }} value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option {{ old('country') == 'Saudi Arabia' ? 'selected' : '' }} value="Saudi Arabia">Saudi Arabia</option>
                      <option {{ old('country') == 'Senegal' ? 'selected' : '' }} value="Senegal">Senegal</option>
                      <option {{ old('country') == 'Serbia and Montenegro' ? 'selected' : '' }} value="Serbia and Montenegro">Serbia and Montenegro</option>
                      <option {{ old('country') == 'Seychelles' ? 'selected' : '' }} value="Seychelles">Seychelles</option>
                      <option {{ old('country') == 'Sierra Leone' ? 'selected' : '' }} value="Sierra Leone">Sierra Leone</option>
                      <option {{ old('country') == 'Singapore' ? 'selected' : '' }} value="Singapore">Singapore</option>
                      <option {{ old('country') == 'Slovakia' ? 'selected' : '' }} value="Slovakia">Slovakia</option>
                      <option {{ old('country') == 'Slovenia' ? 'selected' : '' }} value="Slovenia">Slovenia</option>
                      <option {{ old('country') == 'Solomon Islands' ? 'selected' : '' }} value="Solomon Islands">Solomon Islands</option>
                      <option {{ old('country') == 'Somalia' ? 'selected' : '' }} value="Somalia">Somalia</option>
                      <option {{ old('country') == 'South Africa' ? 'selected' : '' }} value="South Africa">South Africa</option>
                      <option {{ old('country') == 'Spain' ? 'selected' : '' }} value="Spain">Spain</option>
                      <option {{ old('country') == 'Sri Lanka' ? 'selected' : '' }} value="Sri Lanka">Sri Lanka</option>
                      <option {{ old('country') == 'Sudan' ? 'selected' : '' }} value="Sudan">Sudan</option>
                      <option {{ old('country') == 'Suriname' ? 'selected' : '' }} value="Suriname">Suriname</option>
                      <option {{ old('country') == 'Swaziland' ? 'selected' : '' }} value="Swaziland">Swaziland</option>
                      <option {{ old('country') == 'Sweden' ? 'selected' : '' }} value="Sweden">Sweden</option>
                      <option {{ old('country') == 'Switzerland' ? 'selected' : '' }} value="Switzerland">Switzerland</option>
                      <option {{ old('country') == 'Syria' ? 'selected' : '' }} value="Syria">Syria</option>
                      <option {{ old('country') == 'Taiwan' ? 'selected' : '' }} value="Taiwan">Taiwan</option>
                      <option {{ old('country') == 'Tajikistan' ? 'selected' : '' }} value="Tajikistan">Tajikistan</option>
                      <option {{ old('country') == 'Tanzania' ? 'selected' : '' }} value="Tanzania">Tanzania</option>
                      <option {{ old('country') == 'Thailand' ? 'selected' : '' }} value="Thailand">Thailand</option>
                      <option {{ old('country') == 'Togo' ? 'selected' : '' }} value="Togo">Togo</option>
                      <option {{ old('country') == 'Tonga' ? 'selected' : '' }} value="Tonga">Tonga</option>
                      <option {{ old('country') == 'Trinidad and Tobago' ? 'selected' : '' }} value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option {{ old('country') == 'Tunisia' ? 'selected' : '' }} value="Tunisia">Tunisia</option>
                      <option {{ old('country') == 'Turkey' ? 'selected' : '' }} value="Turkey">Turkey</option>
                      <option {{ old('country') == 'Turkmenistan' ? 'selected' : '' }} value="Turkmenistan">Turkmenistan</option>
                      <option {{ old('country') == 'Tuvalu' ? 'selected' : '' }} value="Tuvalu">Tuvalu</option>
                      <option {{ old('country') == 'Uganda' ? 'selected' : '' }} value="Uganda">Uganda</option>
                      <option {{ old('country') == 'Ukraine' ? 'selected' : '' }} value="Ukraine">Ukraine</option>
                      <option {{ old('country') == 'United Arab Emirates' ? 'selected' : '' }} value="United Arab Emirates">United Arab Emirates</option>
                      <option {{ old('country') == 'United Kingdom' ? 'selected' : '' }} value="United Kingdom">United Kingdom</option>
                      <option {{ old('country') == 'United States' ? 'selected' : '' }} value="United States">United States</option>
                      <option {{ old('country') == 'Uruguay' ? 'selected' : '' }} value="Uruguay">Uruguay</option>
                      <option {{ old('country') == 'Uzbekistan' ? 'selected' : '' }} value="Uzbekistan">Uzbekistan</option>
                      <option {{ old('country') == 'Vanuatu' ? 'selected' : '' }} value="Vanuatu">Vanuatu</option>
                      <option {{ old('country') == 'Vatican City' ? 'selected' : '' }} value="Vatican City">Vatican City</option>
                      <option {{ old('country') == 'Venezuela' ? 'selected' : '' }} value="Venezuela">Venezuela</option>
                      <option {{ old('country') == 'Vietnam' ? 'selected' : '' }} value="Vietnam">Vietnam</option>
                      <option {{ old('country') == 'Yemen' ? 'selected' : '' }} value="Yemen">Yemen</option>
                      <option {{ old('country') == 'Zambia' ? 'selected' : '' }} value="Zambia">Zambia</option>
                      <option {{ old('country') == 'Zimbabwe' ? 'selected' : '' }} value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile-phone" aria-hidden="true"></i></span>
                              <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile Number" value="{{ old('mobile') }}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                        <!-- <input type="text" name="course" id="course" class="form-control input-sm" placeholder="Course" value="{{ old('course') }}"> -->
                              <select id="course" name="course" class="form-control" >
                                <option value="" disabled selected></option>
                                @foreach($courses as $key => $course)
                                  <option {{ old('course') == $course->name ? 'selected' : '' }} value="{{ $course->name }}">{{ $course->name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>   
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                         <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
                              <input type="text" name="batch" id="batch" class="form-control input-sm" placeholder="Batch" value="{{ old('batch') }}">
                            </div>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="form-group">
                   <div class="cols-sm-10">
                        <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-group" aria-hidden="true"></i></span>
                              <!-- <input type="text" class="form-control input-sm" id="membership" name="membership" placeholder="Membership" value="{{ old('membership') }}"> -->
                              <select id="membership" name="membership" class="form-control" >
                                <option value="" disabled selected></option>
                                <option {{ old('membership') == 'Monthly' ? 'selected' : '' }} value="Monthly">Monthly</option>
                                <option {{ old('membership') == 'Yearly' ? 'selected' : '' }} value="Yearly">Yearly</option>
                              </select>
                        </div>
                      </div>
                    </div>

                
                <button style="cursor:pointer" type="submit" class="btn btn-info btn-block">Submit</button>
              
              </form>
            </div>
        
        </div>
      
          
        
          
              
        

        @if(Request::is('/'))

          <div class="col-md-4 side_officer">
            <div class="nav-title">Officer and<br> Board Members</div>
            <div class="content-officer">
              <p class="side-content">
                <span class="side-name">Engr. Rudith Elena Campos-Joson</span><br>
                <span class="side-title">President</span>
              </p>
              <p class="side-content">
                <span class="side-name">Engr. Ernesto J. Casis, PME</span><br>
                <span class="side-title">1st Vice-President</span>
              </p>

              <p class="side-content">
                <span class="side-name">Engr. Clarito N. Sison</span><br>
                <span class="side-title">2nd Vice-President</span>
              </p>
              <p class="side-content">
                <span class="side-name">Ms. Mary Grace Esteve-Chua</span><br>
                <span class="side-title">Secretary</span>
              </p>
              <p class="side-content">
                <span class="side-name">Ms. Bernardita H. Leyva</span><br>
                <span class="side-title">Treasurer</span>
              </p>
              <p class="side-content">
                <span class="side-name">Mr. Jaime M. Molino, CPA</span><br>
                <span class="side-title">Auditor</span>
              </p>
              <p class="side-content">
                <span class="side-name">Ms. Virginia Ugalde-Ramos</span><br>
                <span class="side-title">Business Manager</span>
              </p>
              
              <p class="side-content">
                <span class="side-name">Mr. Glen Jose Y. Saño, MIT</span><br>
                <span class="side-title">P.R.O.</span>
              </p>

              <p class="side-content">
                <span class="side-name">Engr. Joel C. Herrera, PME</span><br>
                <span class="side-name">Engr. Enrique A. Macaspac</span><br>
                <span class="side-name">Engr. Aladino M. Abulencia</span><br>
                <span class="side-name">Arch. Patrick T. Ellazar</span><br>
                <span class="side-name">Ms. Mercidita D. Cruz</span><br>
                <span class="side-name">Capt. Reynaldo P. Derige</span><br>
                <span class="side-name">Ms. Gina S. Chavez</span><br>
                <span class="side-title">Board Of Directors</span>
              </p>

              <p class="side-content">
                <span class="side-name">Engr. Arturo P. Barrameda (IPP)</span><br>
                <span class="side-name">Engr. Dante C. Valencia</span><br>
                <span class="side-name">Engr. Ernesto D. Leyva</span><br>
                <span class="side-name">Engr. Alfredo F. Villarin</span><br>
                <span class="side-title">Advisers</span>
              </p>
            </div>
          </div>
       
        <!-- Sidebar Widgets Column -->
        <!-- <div class="col-md-4"> -->

          <!-- Search Widget -->
         <!--  <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form method="get" action="{{ url('search') }}">
                <div class="input-group form-inline">
                  <input type="text" name="search_text"class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="{{ url('category/latest') }}">Latest</a>
                    </li>
                    <li>
                      <a href="{{ url('category/News') }}">News</a>
                    </li>
                    <li>
                      <a href="{{ url('category/Events') }}">Events</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Side Widget
           <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div> 
          </div>-->
          
        </div>
        @endif
      
      <!-- /.row -->

    </div>
  </div>
@endsection

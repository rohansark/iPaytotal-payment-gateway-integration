<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ipaytotal | Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        #form-wrap {
            background-color: #EFF7FC;
            padding: 2rem;
            border-radius: 2rem;

        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <img class="text-center" style="width:150px;" src="logo.png" alt="ipaytotal">
        <h1 class="text-center">ipaytotal</h1>
        <hr>
        <br>
        <div id="form-wrap">




            <form method="post" name="paying-form" action="carddetails.php" onsubmit="return validateForm()">
                <fieldset>
                    <legend>BILLING INFO</legend>
                    <div class="row">
                        <div class="col">
                            <label for="firstName">First Name*</label>
                            <input type="text" name="firstName" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <label for="lastName">Last Name*</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="address">Address*</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="col">
                            <label for="CustOrderIdNo">Customer Order ID Number*</label>
                            <input type="text" name="custOrderId" class="form-control" placeholder="Customer Order ID Number" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="country">Country*</label>
                            <select class="form-control" name="country" id="country" required>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="state">State*</label>
                            <input type="text" name="state" class="form-control" placeholder="State" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="city">City*</label>
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col">
                            <label for="zip">Zip Code*</label>
                            <input type="text" name="zip" class="form-control" placeholder="Zip Code" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email*</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <label for="phoneNo">Phone No.*</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" name="phnNo" class="form-control" id="inlineFormInputGroup" placeholder="Phone Number" required>
                                <small class="text-mute">Note:Enter the phone number in the following format '+Country Code-Phone Number'; e.g."+441234567890"</small>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="amount">Amount*</label>
                            <input type="number" name="amount" class="form-control" placeholder="Amount" required>
                        </div>
                        <div class="col">
                            <label for="currency">Currency*</label>
                            <select class="form-control" name="currency" id="currency" required>
                                <option value="USD" selected="selected">United States Dollars</option>
                                <option value="EUR">Euro</option>
                                <option value="GBP">United Kingdom Pounds</option>
                                <option value="DZD">Algeria Dinars</option>
                                <option value="ARP">Argentina Pesos</option>
                                <option value="AUD">Australia Dollars</option>
                                <option value="ATS">Austria Schillings</option>
                                <option value="BSD">Bahamas Dollars</option>
                                <option value="BBD">Barbados Dollars</option>
                                <option value="BEF">Belgium Francs</option>
                                <option value="BMD">Bermuda Dollars</option>
                                <option value="BRR">Brazil Real</option>
                                <option value="BGL">Bulgaria Lev</option>
                                <option value="CAD">Canada Dollars</option>
                                <option value="CLP">Chile Pesos</option>
                                <option value="CNY">China Yuan Renmimbi</option>
                                <option value="CYP">Cyprus Pounds</option>
                                <option value="CSK">Czech Republic Koruna</option>
                                <option value="DKK">Denmark Kroner</option>
                                <option value="NLG">Dutch Guilders</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="EGP">Egypt Pounds</option>
                                <option value="FJD">Fiji Dollars</option>
                                <option value="FIM">Finland Markka</option>
                                <option value="FRF">France Francs</option>
                                <option value="DEM">Germany Deutsche Marks</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="GRD">Greece Drachmas</option>
                                <option value="HKD">Hong Kong Dollars</option>
                                <option value="HUF">Hungary Forint</option>
                                <option value="ISK">Iceland Krona</option>
                                <option value="INR">India Rupees</option>
                                <option value="IDR">Indonesia Rupiah</option>
                                <option value="IEP">Ireland Punt</option>
                                <option value="ILS">Israel New Shekels</option>
                                <option value="ITL">Italy Lira</option>
                                <option value="JMD">Jamaica Dollars</option>
                                <option value="JPY">Japan Yen</option>
                                <option value="JOD">Jordan Dinar</option>
                                <option value="KRW">Korea (South) Won</option>
                                <option value="LBP">Lebanon Pounds</option>
                                <option value="LUF">Luxembourg Francs</option>
                                <option value="MYR">Malaysia Ringgit</option>
                                <option value="MXP">Mexico Pesos</option>
                                <option value="NLG">Netherlands Guilders</option>
                                <option value="NZD">New Zealand Dollars</option>
                                <option value="NOK">Norway Kroner</option>
                                <option value="PKR">Pakistan Rupees</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="PHP">Philippines Pesos</option>
                                <option value="XPT">Platinum Ounces</option>
                                <option value="PLZ">Poland Zloty</option>
                                <option value="PTE">Portugal Escudo</option>
                                <option value="ROL">Romania Leu</option>
                                <option value="RUR">Russia Rubles</option>
                                <option value="SAR">Saudi Arabia Riyal</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="SGD">Singapore Dollars</option>
                                <option value="SKK">Slovakia Koruna</option>
                                <option value="ZAR">South Africa Rand</option>
                                <option value="KRW">South Korea Won</option>
                                <option value="ESP">Spain Pesetas</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="SDD">Sudan Dinar</option>
                                <option value="SEK">Sweden Krona</option>
                                <option value="CHF">Switzerland Francs</option>
                                <option value="TWD">Taiwan Dollars</option>
                                <option value="THB">Thailand Baht</option>
                                <option value="TTD">Trinidad and Tobago Dollars</option>
                                <option value="TRL">Turkey Lira</option>
                                <option value="VEB">Venezuela Bolivar</option>
                                <option value="ZMK">Zambia Kwacha</option>
                                <option value="EUR">Euro</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="XPT">Platinum Ounces</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div id="btn" class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="submit" class="btn btn-warning">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <script>
        function validateForm() {

            var email = document.forms[0]["email"].value;
            var patt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!patt.test(email)) {
                alert("You have entered an invalid email address!");
                return false;
            }

            var x = document.forms[0]["phnNo"].value;
            if (x[0] != '+') {
                alert('Please Match the Phone Number Format');
                return false;
            }

        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
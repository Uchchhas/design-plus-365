@extends('frontEnd.master') 

@section('title') 
Contact Us | DesignPlus365
@endsection

@section('mainContent')


<main class="quote-page">
    <section id="contactPageSectionOne" class="contact-page-section-one">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-sm-5">
                    <h5 class="text-white font-weight-normal wow animate__animated animate__fadeInUp mb-4">GET A FREE QUOTE</h5>
                    <h1 class="primary-text font-size-40 font-weight-500 wow animate__animated animate__fadeInUp mb-4">You Think, we build!</h1>
                    <h5 class="text-white text-justify font-weight-light wow animate__animated animate__fadeInUp mb-4">
                        Do you want to portray your thoughts into reality? Then approach us, we have a record of doing more than 700+ startups. Share your ideas with our team and we will shape it into a realistic presentation.
                    </h5>
                    <h5 class="text-white font-weight-normal wow animate__animated animate__fadeInUp mt-4 mb-3">QUICK CHAT:</h5>
                    <div class="quick-chat d-flex justify-content-between">
                        <div class="chat-item text-center d-flex flex-column justify-content-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                            <a href="https://wa.me/01707334429" target="_blank" class="text-white">
                                <i class="icofont-brand-whatsapp"></i>
                                <p class="mb-0">WhatsApp</p>
                            </a>
                        </div>
                        <div class="chat-item text-center d-flex flex-column justify-content-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <a href="https://msng.link/o/?https://www.facebook.com/designplus365=fm" target="_blank" class="text-white">
                                <i class="icofont-facebook-messenger"></i>
                                <p class="mb-0">Messanger</p>
                            </a>
                        </div>
                        <div class="chat-item text-center d-flex flex-column justify-content-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            <a href="skype:designplus365? chat" target="_blank" class="text-white">
                                <i class="icofont-skype"></i>
                                <p class="mb-0">Skype</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    @if (Session::has('flash_message'))
                        <div class="alert alert-success" role="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <strong>Success:</strong> {{ Session::get('flash_message')}}
                        </div>
                    @endif 
                   <form action="{{url('/contact-us')}}" method="post" name="form" class="contact-form" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                                    <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone*" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                    <input type="text" name="websiteurl" class="form-control" placeholder="Website url">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.3s" required="">
                                    <select name="country" class="form-control" required="">
<option value="">Select your country</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
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
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
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
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
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
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                                    <input type="text" name="subject" class="form-control" placeholder="What are you interested in?">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                    <input type="date" name="date" class="form-control" placeholder="Project deadline">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input-group wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                    <input type="number" name="budget" class="form-control" placeholder="Budget">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                                    <textarea rows="6" name="message" class="form-control" placeholder="Tell us about your project...*" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                                <!-- <button type="submit" class="btn btn-app app-color mr-2">Send</button> -->
                                <!-- <button type="submit" class="btn btn-app app-color">Attach File</button> -->
                                <input type="submit" name="submit" value="Send" class="btn btn-app app-color mr-2">
                                <input type="file" name="files[]" accept="file_extension|image/*|media_type" multiple> multiple />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contactPageSectionTwo" class="contact-page-section-two">
        <div class="container">
            <h1 class="text-center mb-5 font-size-50 font-weight-600">Connect Me On Social Media</h1>
            <div class="d-flex flex-wrap justify-content-center social-medias">
                <div class="text-center d-flex flex-column justify-content-center single-media wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <a href="https://www.facebook.com/designplus365" target="_blank">
                        <i class="icofont-facebook"></i>
                        <p class="primary-text mt-2 mb-0">FACEBOOK</p>
                    </a>
                </div>
                <div class="text-center d-flex flex-column justify-content-center single-media wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <a href="https://twitter.com/designplus365" target="_blank">
                        <i class="icofont-twitter"></i>
                        <p class="primary-text mt-2 mb-0">TWITTER</p>
                    </a>
                </div>
                <div class="text-center d-flex flex-column justify-content-center single-media wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <a href="https://www.instagram.com/designplus365/" target="_blank">
                        <i class="icofont-instagram"></i>
                        <p class="primary-text mt-2 mb-0">INSTAGRAM</p>
                    </a>
                </div>
                <div class="text-center d-flex flex-column justify-content-center single-media wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <a href="https://www.pinterest.com/designplus365/" target="_blank">
                        <i class="icofont-pinterest"></i>
                        <p class="primary-text mt-2 mb-0">PINTEREST</p>
                    </a>
                </div>
                <div class="text-center d-flex flex-column justify-content-center single-media wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                    <a href="http://www.linkedin.com/" target="_blank">
                        <i class="icofont-linkedin"></i>
                        <p class="primary-text mt-2 mb-0">LINKEDIN</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

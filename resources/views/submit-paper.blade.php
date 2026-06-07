@extends('layouts.app')

@section('content')

    @include('sections.topbar')
    @include('sections.navbar')

    <!-- Page Banner -->
    <div class="page-banner">
        <div class="page-banner-content">
            <h1>SUBMIT A PAPER</h1>
        </div>
    </div>

    <!-- Submit Paper Form Section -->
    <section class="submit-paper-section">
        <div class="container submit-paper-container">
            <p class="submit-desc">
                Submit your abstract through our official website. Accepted abstracts and presentations will be showcased in the summit program and included in the abstract book.
            </p>
            
            <div class="download-link-wrap">
                <a href="{{ asset('sample-abstract.docx') }}" class="download-link" download>Download Sample Abstract Doc</a>
            </div>

            <form class="submit-form" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <select name="title" class="form-control" required>
                            <option value="">Select Title*</option>
                            <option value="Mr">Mr.</option>
                            <option value="Ms">Ms.</option>
                            <option value="Dr">Dr.</option>
                            <option value="Prof">Prof.</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="contact_number" class="form-control" placeholder="Contact Number*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="organization" class="form-control" placeholder="Organization*" required>
                    </div>

                    <div class="form-group">
                        <select name="country" class="form-control" required>
                            <option value="">Select Country*</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
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
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France, Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
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
                            <option value="Korea (North)">Korea (North)</option>
                            <option value="Korea (South)">Korea (South)</option>
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
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic">Slovak Republic</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican city state (Holy See)">Vatican city state (Holy See)</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Yugoslavia">Yugoslavia</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="interested_in" class="form-control" required>
                            <option value="">Interested In*</option>
                            <option value="Plenary">Plenary</option>
                            <option value="Keynote">Keynote</option>
                            <option value="Invited">Invited</option>
                            <option value="Oral">Oral</option>
                            <option value="Poster Presentations">Poster Presentations</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="track" class="form-control" required>
                            <option value="">Select Track*</option>
                            <option value="Biomedical Engineering">Biomedical Engineering</option>
                            <option value="Biomedical Signal Processing">Biomedical Signal Processing</option>
                            <option value="Biomedical Imaging">Biomedical Imaging</option>
                            <option value="Biomedical Imaging and Signal Processing">Biomedical Imaging and Signal Processing</option>
                            <option value="Biomedical Data Mining and Machine Learning">Biomedical Data Mining and Machine Learning</option>
                            <option value="AI and Robotics in Healthcare">AI and Robotics in Healthcare</option>
                            <option value="Medical Robotics and Automation">Medical Robotics and Automation</option>
                            <option value="Wearable Robotics and Exoskeletons">Wearable Robotics and Exoskeletons</option>
                            <option value="Telemedicine and Remote Health Monitoring">Telemedicine and Remote Health Monitoring</option>
                            <option value="Tissue Engineering">Tissue Engineering</option>
                            <option value="Cellular Bioengineering">Cellular Bioengineering</option>
                            <option value="Biofabrication and 3D Bioprinting Technologies">Biofabrication and 3D Bioprinting Technologies</option>
                            <option value="Synthetic Biology and Bioengineering">Synthetic Biology and Bioengineering</option>
                            <option value="Drug Discovery & Delivery">Drug Discovery & Delivery</option>
                            <option value="Nanomedicine and Nanobiotechnology">Nanomedicine and Nanobiotechnology</option>
                            <option value="Epigenetics and Gene Editing Technologies">Epigenetics and Gene Editing Technologies</option>
                            <option value="Pharmaceutical Engineering">Pharmaceutical Engineering</option>
                            <option value="Clinical Trials and Therapeutic Innovations">Clinical Trials and Therapeutic Innovations</option>
                            <option value="Advanced Medical Imaging Modalities">Advanced Medical Imaging Modalities</option>
                            <option value="Point-of-Care Diagnostic Technologies">Point-of-Care Diagnostic Technologies</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    
                    <div class="form-group file-upload-group" style="grid-column: 1 / -1; margin-top: 20px;">
                        <label for="abstract_file" class="file-upload-label" style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 50px 20px; border: 2px dashed var(--teal-accent); border-radius: 12px; background: #f8fafc; cursor: pointer; transition: all 0.3s ease; text-align: center;">
                            <i class="fa-solid fa-cloud-arrow-up" style="font-size: 3.5rem; color: var(--teal-accent); margin-bottom: 15px;"></i>
                            <span style="font-weight: 700; font-size: 1.3rem; color: var(--navy-dark); margin-bottom: 8px;">Click to upload or drag and drop</span>
                            <span style="font-size: 0.95rem; color: #64748b;">Supported formats: DOC, DOCX, PDF (Max size: 5MB)</span>
                            <span id="file-chosen" style="margin-top: 20px; font-weight: 700; color: var(--green-accent); font-size: 1.1rem; display: none; background: rgba(0, 168, 150, 0.1); padding: 8px 16px; border-radius: 8px;"></span>
                        </label>
                        <input type="file" name="abstract_file" id="abstract_file" accept=".doc,.docx,.pdf" style="display: none;" required>
                    </div>
                </div>

                <div class="form-submit-wrap" style="display: flex; justify-content: center; margin-top: 40px;">
                    <button type="submit" class="btn btn-teal" style="padding: 16px 50px; font-size: 1.2rem; border-radius: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 10px 20px rgba(0, 168, 150, 0.2);">SUBMIT PAPER <i class="fa-solid fa-paper-plane" style="margin-left: 10px;"></i></button>
                </div>
            </form>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="success-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(10, 25, 47, 0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
        <div style="background: #fff; padding: 50px; border-radius: 20px; text-align: center; max-width: 500px; width: 90%; box-shadow: 0 25px 50px rgba(0,0,0,0.2); animation: slideUp 0.4s ease;">
            <div style="width: 80px; height: 80px; background: rgba(0, 168, 150, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                <i class="fa-solid fa-check" style="font-size: 2.5rem; color: var(--teal-accent);"></i>
            </div>
            <h2 style="color: var(--navy-dark); margin-bottom: 15px; font-size: 2rem;">Submission Successful!</h2>
            <p style="color: #475569; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">Thank you for submitting your paper. Our reviewing committee will evaluate your abstract and notify you via email shortly.</p>
            <button id="close-modal" class="btn btn-teal" style="padding: 12px 30px; border-radius: 8px; font-weight: 700; cursor: pointer;">Back to Home</button>
        </div>
    </div>

    <style>
        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .file-upload-label:hover {
            background: #f0fdfa !important;
            border-color: var(--green-accent) !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('abstract_file');
            const fileChosen = document.getElementById('file-chosen');
            const form = document.querySelector('.submit-form');
            const modal = document.getElementById('success-modal');
            const closeModal = document.getElementById('close-modal');

            // Handle file selection display
            fileInput.addEventListener('change', function() {
                if(this.files && this.files.length > 0) {
                    fileChosen.style.display = 'inline-block';
                    fileChosen.innerHTML = '<i class="fa-solid fa-file-lines" style="margin-right: 8px;"></i>' + this.files[0].name;
                } else {
                    fileChosen.style.display = 'none';
                }
            });

            // Handle drag and drop styling
            const dropZone = document.querySelector('.file-upload-label');
            
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults (e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                dropZone.style.background = '#f0fdfa';
                dropZone.style.borderColor = 'var(--green-accent)';
            }

            function unhighlight(e) {
                dropZone.style.background = '#f8fafc';
                dropZone.style.borderColor = 'var(--teal-accent)';
            }

            dropZone.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;

                if(files && files.length > 0) {
                    fileInput.files = files; // Assign files to input
                    fileChosen.style.display = 'inline-block';
                    fileChosen.innerHTML = '<i class="fa-solid fa-file-lines" style="margin-right: 8px;"></i>' + files[0].name;
                }
            }

            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent actual form submission for demo
                
                // Show modal
                modal.style.display = 'flex';
            });

            // Handle modal close
            closeModal.addEventListener('click', function() {
                modal.style.display = 'none';
                form.reset();
                fileChosen.style.display = 'none';
                window.location.href = '/'; // Redirect to home
            });
        });
    </script>

    @include('sections.footer')

@endsection

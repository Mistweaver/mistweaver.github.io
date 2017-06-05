<?php
    class updateProfile {
        function info($city, $state, $country, $zip, $gender, $age, $userId) {
            $toSet = "";
            if ($city != "") $toSet .= "city='$city', ";
            if ($state != "") $toSet .= "state='$state', ";
            if ($country != "") $toSet .= "country='$country', ";
            if ($zip != "") $toSet .= "zip='$zip', ";
            if ($gender != "") $toSet .= "gender='$gender', ";
            if ($age != "") $toSet .= "age='$age', ";
            if ($toSet == "") return "Nothing on your profile was updated.";
            else {
                $toSet = substr($toSet, 0, strlen($toSet) - 2);
                $query = "UPDATE users_information SET $toSet WHERE userID='$userId'";
                $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
                mysql_select_db('louistay_surveys', $db_server);
                mysql_query($query);
                mysql_close($db_server);
                return "Your profile was successfully updated!";
            }
        }
        function password($currentPass, $newPass, $userId) {
            $query = "SELECT password FROM users_information WHERE userID='$userId'";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $salt = "camping";
            $password = md5($salt.$currentPass);
            if ($row["password"] != $password) return "The old password you entered does not match with the password you created.";
            else {
                $newPass = md5($salt.$newPass);
                $query = "UPDATE users_information SET password='$newPass' WHERE userID='$userId'";
                mysql_query($query);
                return "Your password was successfully changed!";
            }
            mysql_close($db_server);
        }
        function mail($changeMail, $userId) {
            $query = "SELECT username FROM users_information";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $result = mysql_query($query);
            while($row = mysql_fetch_assoc($result)) {
                if ($row["username"] == $changeMail) {
                    mysql_close($db_server);
                    return "This username is already taken.";
                }
            }
            $query = "UPDATE users_information SET username='$changeMail' WHERE userID='$userId'";
            mysql_query($query);
            mysql_close($db_server);
            return "Your email address and username were successfully changed!";
        }
        function deleteAccount($yes, $userId) {
            if ($yes == "yes") {
                $query = "UPDATE users_information SET status='deleted' WHERE userID='$userId'";
                $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
                mysql_select_db('louistay_surveys', $db_server);
                mysql_query($query);
                mysql_close($db_server);
                session_start();
                require_once('../php/User/membership.php');
                $membership = new membership();
                $membership->log_out();
                return true;
            }
        }
        function get_profile_demoGraphics($city, $state, $country, $zip, $gender, $age) {
            $ret = '<div id="alert_placeholder"></div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="city">City</label>
                                        <input name="city" type="text" class="form-control" id="cityId" placeholder="City" value='; if ($city != "") $ret .= "\"".$city."\""; else $ret .= "\"\""; $ret .= ' />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="country">Country</label>
                                        <select class="form-control" name="country" id="countryId" value='; $ret .= "\"".$country."\""; $ret .= '>
                                            '; if ($country == "") $ret .= "<option value=\"\" selected>---Select Country---</option>"; else $ret .= "<option value=\"\">---Select Country---</option>";
                                            if ($country == "Afghanistan") $ret .= "<option value=\"Afghanistan\" selected>Afghanistan</option>"; else $ret .= "<option value=\"Afghanistan\">Afghanistan</option>";
                                            if ($country == "Åland Islands") $ret .= "<option value=\"Åland Islands\" selected>Åland Islands</option>"; else $ret .= "<option value=\"Åland Islands\">Åland Islands</option>";
                                            if ($country == "Albania") $ret .= "<option value=\"Albania\" selected>Albania</option>"; else $ret .= "<option value=\"Albania\">Albania</option>";
                                            if ($country == "Algeria") $ret .= "<option value=\"Algeria\" selected>Algeria</option>"; else $ret .= "<option value=\"Algeria\">Algeria</option>";
                                            if ($country == "American Samoa") $ret .= "<option value=\"American Samoa\" selected>American Samoa</option>"; else $ret .= "<option value=\"American Samoa\">American Samoa</option>";
                                            if ($country == "Andorra") $ret .= "<option value=\"Andorra\" selected>Andorra</option>"; else $ret .= "<option value=\"Andorra\">Andorra</option>";
                                            if ($country == "Angola") $ret .= "<option value=\"Angola\" selected>Angola</option>"; else $ret .= "<option value=\"Angola\">Angola</option>";
                                            if ($country == "Anguilla") $ret .= "<option value=\"Anguilla\" selected>Anguilla</option>"; else $ret .= "<option value=\"Anguilla\">Anguilla</option>";
                                            if ($country == "Antarctica") $ret .= "<option value=\"Antarctica\" selected>Antarctica</option>"; else $ret .= "<option value=\"Antarctica\">Antarctica</option>";
                                            if ($country == "Antigua and Barbuda") $ret .= "<option value=\"Antigua and Barbuda\" selected>Antigua and Barbuda</option>"; else $ret .= "<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>";
                                            if ($country == "Argentina") $ret .= "<option value=\"Argentina\" selected>Argentina</option>"; else $ret .= "<option value=\"Argentina\">Argentina</option>";
                                            if ($country == "Armenia") $ret .= "<option value=\"Armenia\" selected>Armenia</option>"; else $ret .= "<option value=\"Armenia\">Armenia</option>";
                                            if ($country == "Aruba") $ret .= "<option value=\"Aruba\" selected>Aruba</option>"; else $ret .= "<option value=\"Aruba\">Aruba</option>";
                                            if ($country == "Australia") $ret .= "<option value=\"Australia\" selected>Australia</option>"; else $ret .= "<option value=\"Australia\">Australia</option>";
                                            if ($country == "Austria") $ret .= "<option value=\"Austria\" selected>Austria</option>"; else $ret .= "<option value=\"Austria\">Austria</option>";
                                            if ($country == "Azerbaijan") $ret .= "<option value=\"Azerbaijan\" selected>Azerbaijan</option>"; else $ret .= "<option value=\"Azerbaijan\">Azerbaijan</option>";
                                            if ($country == "Bahamas") $ret .= "<option value=\"Bahamas\" selected>Bahamas</option>"; else $ret .= "<option value=\"Bahamas\">Bahamas</option>";
                                            if ($country == "Bahrain") $ret .= "<option value=\"Bahrain\" selected>Bahrain</option>"; else $ret .= "<option value=\"Bahrain\">Bahrain</option>";
                                            if ($country == "Bangladesh") $ret .= "<option value=\"Bangladesh\" selected>Bangladesh</option>"; else $ret .= "<option value=\"Bangladesh\">Bangladesh</option>";
                                            if ($country == "Barbados") $ret .= "<option value=\"Barbados\" selected>Barbados</option>"; else $ret .= "<option value=\"Barbados\">Barbados</option>";
                                            if ($country == "Belarus") $ret .= "<option value=\"Belarus\" selected>Belarus</option>"; else $ret .= "<option value=\"Belarus\">Belarus</option>";
                                            if ($country == "Belgium") $ret .= "<option value=\"Belgium\" selected>Belgium</option>"; else $ret .= "<option value=\"Belgium\">Belgium</option>";
                                            if ($country == "Belize") $ret .= "<option value=\"Belize\" selected>Belize</option>"; else $ret .= "<option value=\"Belize\">Belize</option>";
                                            if ($country == "Benin") $ret .= "<option value=\"Benin\" selected>Benin</option>"; else $ret .= "<option value=\"Benin\">Benin</option>";
                                            if ($country == "Bermuda") $ret .= "<option value=\"Bermuda\" selected>Bermuda</option>"; else $ret .= "<option value=\"Bermuda\">Bermuda</option>";
                                            if ($country == "Bhutan") $ret .= "<option value=\"Bhutan\" selected>Bhutan</option>"; else $ret .= "<option value=\"Bhutan\">Bhutan</option>";
                                            if ($country == "Bolivia, Plurinational State of") $ret .= "<option value=\"Bolivia, Plurinational State of\" selected>Bolivia, Plurinational State of</option>"; else $ret .= "<option value=\"Bolivia, Plurinational State of\">Bolivia, Plurinational State of</option>";
                                            if ($country == "Bonaire, Sint Eustatius and Saba") $ret .= "<option value=\"Bonaire, Sint Eustatius and Saba\" selected>Bonaire, Sint Eustatius and Saba</option>"; else $ret .= "<option value=\"Bonaire, Sint Eustatius and Saba\">Bonaire, Sint Eustatius and Saba</option>";
                                            if ($country == "Bosnia and Herzegovina") $ret .= "<option value=\"Bosnia and Herzegovina\" selected>Bosnia and Herzegovina</option>"; else $ret .= "<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>";
                                            if ($country == "Botswana") $ret .= "<option value=\"Botswana\" selected>Botswana</option>"; else $ret .= "<option value=\"Botswana\">Botswana</option>";
                                            if ($country == "Bouvet Island") $ret .= "<option value=\"Bouvet Island\" selected>Bouvet Island</option>"; else $ret .= "<option value=\"Bouvet Island\">Bouvet Island</option>";
                                            if ($country == "Brazil") $ret .= "<option value=\"Brazil\" selected>Brazil</option>"; else $ret .= "<option value=\"Brazil\">Brazil</option>";
                                            if ($country == "British Indian Ocean Territory") $ret .= "<option value=\"British Indian Ocean Territory\" selected>British Indian Ocean Territory</option>"; else $ret .= "<option value=\"British Indian Ocean Territory\">British Indian Ocean Territory</option>";
                                            if ($country == "Brunei Darussalam") $ret .= "<option value=\"Brunei Darussalam\" selected>Brunei Darussalam</option>"; else $ret .= "<option value=\"Brunei Darussalam\">Brunei Darussalam</option>";
                                            if ($country == "Bulgaria") $ret .= "<option value=\"Bulgaria\" selected>Bulgaria</option>"; else $ret .= "<option value=\"Bulgaria\">Bulgaria</option>";
                                            if ($country == "Burkina Faso") $ret .= "<option value=\"Burkina Faso\" selected>Burkina Faso</option>"; else $ret .= "<option value=\"Burkina Faso\">Burkina Faso</option>";
                                            if ($country == "Burundi") $ret .= "<option value=\"Burundi\" selected>Burundi</option>"; else $ret .= "<option value=\"Burundi\">Burundi</option>";
                                            if ($country == "Cambodia") $ret .= "<option value=\"Cambodia\" selected>Cambodia</option>"; else $ret .= "<option value=\"Cambodia\">Cambodia</option>";
                                            if ($country == "Cameroon") $ret .= "<option value=\"Cameroon\" selected>Cameroon</option>"; else $ret .= "<option value=\"Cameroon\">Cameroon</option>";
                                            if ($country == "Canada") $ret .= "<option value=\"Canada\" selected>Canada</option>"; else $ret .= "<option value=\"Canada\">Canada</option>";
                                            if ($country == "Cape Verde") $ret .= "<option value=\"Cape Verde\" selected>Cape Verde</option>"; else $ret .= "<option value=\"Cape Verde\">Cape Verde</option>";
                                            if ($country == "Cayman Islands") $ret .= "<option value=\"Cayman Islands\" selected>Cayman Islands</option>"; else $ret .= "<option value=\"Cayman Islands\">Cayman Islands</option>";
                                            if ($country == "Central African Republic") $ret .= "<option value=\"Central African Republic\" selected>Central African Republic</option>"; else $ret .= "<option value=\"Central African Republic\">Central African Republic</option>";
                                            if ($country == "Chad") $ret .= "<option value=\"Chad\" selected>Chad</option>"; else $ret .= "<option value=\"Chad\">Chad</option>";
                                            if ($country == "Chile") $ret .= "<option value=\"Chile\" selected>Chile</option>"; else $ret .= "<option value=\"Chile\">Chile</option>";
                                            if ($country == "China") $ret .= "<option value=\"China\" selected>China</option>"; else $ret .= "<option value=\"China\">China</option>";
                                            if ($country == "Christmas Island") $ret .= "<option value=\"Christmas Island\" selected>Christmas Island</option>"; else $ret .= "<option value=\"Christmas Island\">Christmas Island</option>";
                                            if ($country == "Cocos (Keeling) Islands") $ret .= "<option value=\"Cocos (Keeling) Islands\" selected>Cocos (Keeling) Islands</option>"; else $ret .= "<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>";
                                            if ($country == "Colombia") $ret .= "<option value=\"Colombia\" selected>Colombia</option>"; else $ret .= "<option value=\"Colombia\">Colombia</option>";
                                            if ($country == "Comoros") $ret .= "<option value=\"Comoros\" selected>Comoros</option>"; else $ret .= "<option value=\"Comoros\">Comoros</option>";
                                            if ($country == "Congo") $ret .= "<option value=\"Congo\" selected>Congo</option>"; else $ret .= "<option value=\"Congo\">Congo</option>";
                                            if ($country == "Congo, the Democratic Republic of the") $ret .= "<option value=\"Congo, the Democratic Republic of the\" selected>Congo, the Democratic Republic of the</option>"; else $ret .= "<option value=\"Congo, the Democratic Republic of the\">Congo, the Democratic Republic of the</option>";
                                            if ($country == "Cook Islands") $ret .= "<option value=\"Cook Islands\" selected>Cook Islands</option>"; else $ret .= "<option value=\"Cook Islands\">Cook Islands</option>";
                                            if ($country == "Costa Rica") $ret .= "<option value=\"Costa Rica\" selected>Costa Rica</option>"; else $ret .= "<option value=\"Costa Rica\">Costa Rica</option>";
                                            if ($country == "Côte d&rsquo;Ivoire") $ret .= "<option value=\"Côte d&rsquo;Ivoire\" selected>Côte d&rsquo;Ivoire</option>"; else $ret .= "<option value=\"Côte d&rsquo;Ivoire\">Côte d&rsquo;Ivoire</option>";
                                            if ($country == "Croatia") $ret .= "<option value=\"Croatia\" selected>Croatia</option>"; else $ret .= "<option value=\"Croatia\">Croatia</option>";
                                            if ($country == "Cuba") $ret .= "<option value=\"Cuba\" selected>Cuba</option>"; else $ret .= "<option value=\"Cuba\">Cuba</option>";
                                            if ($country == "Curaçao") $ret .= "<option value=\"Curaçao\" selected>Curaçao</option>"; else $ret .= "<option value=\"Curaçao\">Curaçao</option>";
                                            if ($country == "Cyprus") $ret .= "<option value=\"Cyprus\" selected>Cyprus</option>"; else $ret .= "<option value=\"Cyprus\">Cyprus</option>";
                                            if ($country == "Czech Republic") $ret .= "<option value=\"Czech Republic\" selected>Czech Republic</option>"; else $ret .= "<option value=\"Czech Republic\">Czech Republic</option>";
                                            if ($country == "Denmark") $ret .= "<option value=\"Denmark\" selected>Denmark</option>"; else $ret .= "<option value=\"Denmark\">Denmark</option>";
                                            if ($country == "Djibouti") $ret .= "<option value=\"Djibouti\" selected>Djibouti</option>"; else $ret .= "<option value=\"Djibouti\">Djibouti</option>";
                                            if ($country == "Dominica") $ret .= "<option value=\"Dominica\" selected>Dominica</option>"; else $ret .= "<option value=\"Dominica\">Dominica</option>";
                                            if ($country == "Dominican Republic") $ret .= "<option value=\"Dominican Republic\" selected>Dominican Republic</option>"; else $ret .= "<option value=\"Dominican Republic\">Dominican Republic</option>";
                                            if ($country == "Ecuador") $ret .= "<option value=\"Ecuador\" selected>Ecuador</option>"; else $ret .= "<option value=\"Ecuador\">Ecuador</option>";
                                            if ($country == "Egypt") $ret .= "<option value=\"Egypt\" selected>Egypt</option>"; else $ret .= "<option value=\"Egypt\">Egypt</option>";
                                            if ($country == "El Salvador") $ret .= "<option value=\"El Salvador\" selected>El Salvador</option>"; else $ret .= "<option value=\"El Salvador\">El Salvador</option>";
                                            if ($country == "Equatorial Guinea") $ret .= "<option value=\"Equatorial Guinea\" selected>Equatorial Guinea</option>"; else $ret .= "<option value=\"Equatorial Guinea\">Equatorial Guinea</option>";
                                            if ($country == "Eritrea") $ret .= "<option value=\"Eritrea\" selected>Eritrea</option>"; else $ret .= "<option value=\"Eritrea\">Eritrea</option>";
                                            if ($country == "Estonia") $ret .= "<option value=\"Estonia\" selected>Estonia</option>"; else $ret .= "<option value=\"Estonia\">Estonia</option>";
                                            if ($country == "Ethiopia") $ret .= "<option value=\"Ethiopia\" selected>Ethiopia</option>"; else $ret .= "<option value=\"Ethiopia\">Ethiopia</option>";
                                            if ($country == "Falkland Islands (Malvinas)") $ret .= "<option value=\"Falkland Islands (Malvinas)\" selected>Falkland Islands (Malvinas)</option>"; else $ret .= "<option value=\"Falkland Islands (Malvinas)\">Falkland Islands (Malvinas)</option>";
                                            if ($country == "Faroe Islands") $ret .= "<option value=\"Faroe Islands\" selected>Faroe Islands</option>"; else $ret .= "<option value=\"Faroe Islands\">Faroe Islands</option>";
                                            if ($country == "Fiji") $ret .= "<option value=\"Fiji\" selected>Fiji</option>"; else $ret .= "<option value=\"Fiji\">Fiji</option>";
                                            if ($country == "Finland") $ret .= "<option value=\"Finland\" selected>Finland</option>"; else $ret .= "<option value=\"Finland\">Finland</option>";
                                            if ($country == "France") $ret .= "<option value=\"France\" selected>France</option>"; else $ret .= "<option value=\"France\">France</option>";
                                            if ($country == "French Guiana") $ret .= "<option value=\"French Guiana\" selected>French Guiana</option>"; else $ret .= "<option value=\"French Guiana\">French Guiana</option>";
                                            if ($country == "French Polynesia") $ret .= "<option value=\"French Polynesia\" selected>French Polynesia</option>"; else $ret .= "<option value=\"French Polynesia\">French Polynesia</option>";
                                            if ($country == "French Southern Territories") $ret .= "<option value=\"French Southern Territories\" selected>French Southern Territories</option>"; else $ret .= "<option value=\"French Southern Territories\">French Southern Territories</option>";
                                            if ($country == "Gabon") $ret .= "<option value=\"Gabon\" selected>Gabon</option>"; else $ret .= "<option value=\"Gabon\">Gabon</option>";
                                            if ($country == "Gambia") $ret .= "<option value=\"Gambia\" selected>Gambia</option>"; else $ret .= "<option value=\"Gambia\">Gambia</option>";
                                            if ($country == "Georgia") $ret .= "<option value=\"Georgia\" selected>Georgia</option>"; else $ret .= "<option value=\"Georgia\">Georgia</option>";
                                            if ($country == "Germany") $ret .= "<option value=\"Germany\" selected>Germany</option>"; else $ret .= "<option value=\"Germany\">Germany</option>";
                                            if ($country == "Ghana") $ret .= "<option value=\"Ghana\" selected>Ghana</option>"; else $ret .= "<option value=\"Ghana\">Ghana</option>";
                                            if ($country == "Gibraltar") $ret .= "<option value=\"Gibraltar\" selected>Gibraltar</option>"; else $ret .= "<option value=\"Gibraltar\">Gibraltar</option>";
                                            if ($country == "Greece") $ret .= "<option value=\"Greece\" selected>Greece</option>"; else $ret .= "<option value=\"Greece\">Greece</option>";
                                            if ($country == "Greenland") $ret .= "<option value=\"Greenland\" selected>Greenland</option>"; else $ret .= "<option value=\"Greenland\">Greenland</option>";
                                            if ($country == "Grenada") $ret .= "<option value=\"Grenada\" selected>Grenada</option>"; else $ret .= "<option value=\"Grenada\">Grenada</option>";
                                            if ($country == "Guadeloupe") $ret .= "<option value=\"Guadeloupe\" selected>Guadeloupe</option>"; else $ret .= "<option value=\"Guadeloupe\">Guadeloupe</option>";
                                            if ($country == "Guam") $ret .= "<option value=\"Guam\" selected>Guam</option>"; else $ret .= "<option value=\"Guam\">Guam</option>";
                                            if ($country == "Guatemala") $ret .= "<option value=\"Guatemala\" selected>Guatemala</option>"; else $ret .= "<option value=\"Guatemala\">Guatemala</option>";
                                            if ($country == "Guernsey") $ret .= "<option value=\"Guernsey\" selected>Guernsey</option>"; else $ret .= "<option value=\"Guernsey\">Guernsey</option>";
                                            if ($country == "Guinea") $ret .= "<option value=\"Guinea\" selected>Guinea</option>"; else $ret .= "<option value=\"Guinea\">Guinea</option>";
                                            if ($country == "Guinea-Bissau") $ret .= "<option value=\"Guinea-Bissau\" selected>Guinea-Bissau</option>"; else $ret .= "<option value=\"Guinea-Bissau\">Guinea-Bissau</option>";
                                            if ($country == "Guyana") $ret .= "<option value=\"Guyana\" selected>Guyana</option>"; else $ret .= "<option value=\"Guyana\">Guyana</option>";
                                            if ($country == "Haiti") $ret .= "<option value=\"Haiti\" selected>Haiti</option>"; else $ret .= "<option value=\"Haiti\">Haiti</option>";
                                            if ($country == "Heard Island and McDonald Islands") $ret .= "<option value=\"Heard Island and McDonald Islands\" selected>Heard Island and McDonald Islands</option>"; else $ret .= "<option value=\"Heard Island and McDonald Islands\">Heard Island and McDonald Islands</option>";
                                            if ($country == "Holy See (Vatican City State)") $ret .= "<option value=\"Holy See (Vatican City State)\" selected>Holy See (Vatican City State)</option>"; else $ret .= "<option value=\"Holy See (Vatican City State)\">Holy See (Vatican City State)</option>";
                                            if ($country == "Honduras") $ret .= "<option value=\"Honduras\" selected>Honduras</option>"; else $ret .= "<option value=\"Honduras\">Honduras</option>";
                                            if ($country == "Hong Kong") $ret .= "<option value=\"Hong Kong\" selected>Hong Kong</option>"; else $ret .= "<option value=\"Hong Kong\">Hong Kong</option>";
                                            if ($country == "Hungary") $ret .= "<option value=\"Hungary\" selected>Hungary</option>"; else $ret .= "<option value=\"Hungary\">Hungary</option>";
                                            if ($country == "Iceland") $ret .= "<option value=\"Iceland\" selected>Iceland</option>"; else $ret .= "<option value=\"Iceland\">Iceland</option>";
                                            if ($country == "India") $ret .= "<option value=\"India\" selected>India</option>"; else $ret .= "<option value=\"India\">India</option>";
                                            if ($country == "Indonesia") $ret .= "<option value=\"Indonesia\" selected>Indonesia</option>"; else $ret .= "<option value=\"Indonesia\">Indonesia</option>";
                                            if ($country == "Iran, Islamic Republic of") $ret .= "<option value=\"Iran, Islamic Republic of\" selected>Iran, Islamic Republic of</option>"; else $ret .= "<option value=\"Iran, Islamic Republic of\">Iran, Islamic Republic of</option>";
                                            if ($country == "Iraq") $ret .= "<option value=\"Iraq\" selected>Iraq</option>"; else $ret .= "<option value=\"Iraq\">Iraq</option>";
                                            if ($country == "Ireland") $ret .= "<option value=\"Ireland\" selected>Ireland</option>"; else $ret .= "<option value=\"Ireland\">Ireland</option>";
                                            if ($country == "Isle of Man") $ret .= "<option value=\"Isle of Man\" selected>Isle of Man</option>"; else $ret .= "<option value=\"Isle of Man\">Isle of Man</option>";
                                            if ($country == "Israel") $ret .= "<option value=\"Israel\" selected>Israel</option>"; else $ret .= "<option value=\"Israel\">Israel</option>";
                                            if ($country == "Italy") $ret .= "<option value=\"Italy\" selected>Italy</option>"; else $ret .= "<option value=\"Italy\">Italy</option>";
                                            if ($country == "Jamaica") $ret .= "<option value=\"Jamaica\" selected>Jamaica</option>"; else $ret .= "<option value=\"Jamaica\">Jamaica</option>";
                                            if ($country == "Japan") $ret .= "<option value=\"Japan\" selected>Japan</option>"; else $ret .= "<option value=\"Japan\">Japan</option>";
                                            if ($country == "Jersey") $ret .= "<option value=\"Jersey\" selected>Jersey</option>"; else $ret .= "<option value=\"Jersey\">Jersey</option>";
                                            if ($country == "Jordan") $ret .= "<option value=\"Jordan\" selected>Jordan</option>"; else $ret .= "<option value=\"Jordan\">Jordan</option>";
                                            if ($country == "Kazakhstan") $ret .= "<option value=\"Kazakhstan\" selected>Kazakhstan</option>"; else $ret .= "<option value=\"Kazakhstan\">Kazakhstan</option>";
                                            if ($country == "Kenya") $ret .= "<option value=\"Kenya\" selected>Kenya</option>"; else $ret .= "<option value=\"Kenya\">Kenya</option>";
                                            if ($country == "Kiribati") $ret .= "<option value=\"Kiribati\" selected>Kiribati</option>"; else $ret .= "<option value=\"Kiribati\">Kiribati</option>";
                                            if ($country == "Korea, Democratic People&rsquo;s Republic of") $ret .= "<option value=\"Korea, Democratic People&rsquo;s Republic of\" selected>Korea, Democratic People&rsquo;s Republic of</option>"; else $ret .= "<option value=\"Korea, Democratic People&rsquo;s Republic of\">Korea, Democratic People&rsquo;s Republic of</option>";
                                            if ($country == "Korea, Republic of") $ret .= "<option value=\"Korea, Republic of\" selected>Korea, Republic of</option>"; else $ret .= "<option value=\"Korea, Republic of\">Korea, Republic of</option>";
                                            if ($country == "Kuwait") $ret .= "<option value=\"Kuwait\" selected>Kuwait</option>"; else $ret .= "<option value=\"Kuwait\">Kuwait</option>";
                                            if ($country == "Kyrgyzstan") $ret .= "<option value=\"Kyrgyzstan\" selected>Kyrgyzstan</option>"; else $ret .= "<option value=\"Kyrgyzstan\">Kyrgyzstan</option>";
                                            if ($country == "Lao People&rsquo;s Democratic Republic") $ret .= "<option value=\"Lao People&rsquo;s Democratic Republic\" selected>Lao People&rsquo;s Democratic Republic</option>"; else $ret .= "<option value=\"Lao People&rsquo;s Democratic Republic\">Lao People&rsquo;s Democratic Republic</option>";
                                            if ($country == "Latvia") $ret .= "<option value=\"Latvia\" selected>Latvia</option>"; else $ret .= "<option value=\"Latvia\">Latvia</option>";
                                            if ($country == "Lebanon") $ret .= "<option value=\"Lebanon\" selected>Lebanon</option>"; else $ret .= "<option value=\"Lebanon\">Lebanon</option>";
                                            if ($country == "Lesotho") $ret .= "<option value=\"Lesotho\" selected>Lesotho</option>"; else $ret .= "<option value=\"Lesotho\">Lesotho</option>";
                                            if ($country == "Liberia") $ret .= "<option value=\"Liberia\" selected>Liberia</option>"; else $ret .= "<option value=\"Liberia\">Liberia</option>";
                                            if ($country == "Libya") $ret .= "<option value=\"Libya\" selected>Libya</option>"; else $ret .= "<option value=\"Libya\">Libya</option>";
                                            if ($country == "Liechtenstein") $ret .= "<option value=\"Liechtenstein\" selected>Liechtenstein</option>"; else $ret .= "<option value=\"Liechtenstein\">Liechtenstein</option>";
                                            if ($country == "Lithuania") $ret .= "<option value=\"Lithuania\" selected>Lithuania</option>"; else $ret .= "<option value=\"Lithuania\">Lithuania</option>";
                                            if ($country == "Luxembourg") $ret .= "<option value=\"Luxembourg\" selected>Luxembourg</option>"; else $ret .= "<option value=\"Luxembourg\">Luxembourg</option>";
                                            if ($country == "Macao") $ret .= "<option value=\"Macao\" selected>Macao</option>"; else $ret .= "<option value=\"Macao\">Macao</option>";
                                            if ($country == "Macedonia, the former Yugoslav Republic of") $ret .= "<option value=\"Macedonia, the former Yugoslav Republic of\" selected>Macedonia, the former Yugoslav Republic of</option>"; else $ret .= "<option value=\"Macedonia, the former Yugoslav Republic of\">Macedonia, the former Yugoslav Republic of</option>";
                                            if ($country == "Madagascar") $ret .= "<option value=\"Madagascar\" selected>Madagascar</option>"; else $ret .= "<option value=\"Madagascar\">Madagascar</option>";
                                            if ($country == "Malawi") $ret .= "<option value=\"Malawi\" selected>Malawi</option>"; else $ret .= "<option value=\"Malawi\">Malawi</option>";
                                            if ($country == "Malaysia") $ret .= "<option value=\"Malaysia\" selected>Malaysia</option>"; else $ret .= "<option value=\"Malaysia\">Malaysia</option>";
                                            if ($country == "Maldives") $ret .= "<option value=\"Maldives\" selected>Maldives</option>"; else $ret .= "<option value=\"Maldives\">Maldives</option>";
                                            if ($country == "Mali") $ret .= "<option value=\"Mali\" selected>Mali</option>"; else $ret .= "<option value=\"Mali\">Mali</option>";
                                            if ($country == "Malta") $ret .= "<option value=\"Malta\" selected>Malta</option>"; else $ret .= "<option value=\"Malta\">Malta</option>";
                                            if ($country == "Marshall Islands") $ret .= "<option value=\"Marshall Islands\" selected>Marshall Islands</option>"; else $ret .= "<option value=\"Marshall Islands\">Marshall Islands</option>";
                                            if ($country == "Martinique") $ret .= "<option value=\"Martinique\" selected>Martinique</option>"; else $ret .= "<option value=\"Martinique\">Martinique</option>";
                                            if ($country == "Mauritania") $ret .= "<option value=\"Mauritania\" selected>Mauritania</option>"; else $ret .= "<option value=\"Mauritania\">Mauritania</option>";
                                            if ($country == "Mauritius") $ret .= "<option value=\"Mauritius\" selected>Mauritius</option>"; else $ret .= "<option value=\"Mauritius\">Mauritius</option>";
                                            if ($country == "Mayotte") $ret .= "<option value=\"Mayotte\" selected>Mayotte</option>"; else $ret .= "<option value=\"Mayotte\">Mayotte</option>";
                                            if ($country == "Mexico") $ret .= "<option value=\"Mexico\" selected>Mexico</option>"; else $ret .= "<option value=\"Mexico\">Mexico</option>";
                                            if ($country == "Micronesia, Federated States of") $ret .= "<option value=\"Micronesia, Federated States of\" selected>Micronesia, Federated States of</option>"; else $ret .= "<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>";
                                            if ($country == "Moldova, Republic of") $ret .= "<option value=\"Moldova, Republic of\" selected>Moldova, Republic of</option>"; else $ret .= "<option value=\"Moldova, Republic of\">Moldova, Republic of</option>";
                                            if ($country == "Monaco") $ret .= "<option value=\"Monaco\" selected>Monaco</option>"; else $ret .= "<option value=\"Monaco\">Monaco</option>";
                                            if ($country == "Mongolia") $ret .= "<option value=\"Mongolia\" selected>Mongolia</option>"; else $ret .= "<option value=\"Mongolia\">Mongolia</option>";
                                            if ($country == "Montenegro") $ret .= "<option value=\"Montenegro\" selected>Montenegro</option>"; else $ret .= "<option value=\"Montenegro\">Montenegro</option>";
                                            if ($country == "Montserrat") $ret .= "<option value=\"Montserrat\" selected>Montserrat</option>"; else $ret .= "<option value=\"Montserrat\">Montserrat</option>";
                                            if ($country == "Morocco") $ret .= "<option value=\"Morocco\" selected>Morocco</option>"; else $ret .= "<option value=\"Morocco\">Morocco</option>";
                                            if ($country == "Mozambique") $ret .= "<option value=\"Mozambique\" selected>Mozambique</option>"; else $ret .= "<option value=\"Mozambique\">Mozambique</option>";
                                            if ($country == "Myanmar") $ret .= "<option value=\"Myanmar\" selected>Myanmar</option>"; else $ret .= "<option value=\"Myanmar\">Myanmar</option>";
                                            if ($country == "Namibia") $ret .= "<option value=\"Namibia\" selected>Namibia</option>"; else $ret .= "<option value=\"Namibia\">Namibia</option>";
                                            if ($country == "Nauru") $ret .= "<option value=\"Nauru\" selected>Nauru</option>"; else $ret .= "<option value=\"Nauru\">Nauru</option>";
                                            if ($country == "Nepal") $ret .= "<option value=\"Nepal\" selected>Nepal</option>"; else $ret .= "<option value=\"Nepal\">Nepal</option>";
                                            if ($country == "Netherlands") $ret .= "<option value=\"Netherlands\" selected>Netherlands</option>"; else $ret .= "<option value=\"Netherlands\">Netherlands</option>";
                                            if ($country == "New Caledonia") $ret .= "<option value=\"New Caledonia\" selected>New Caledonia</option>"; else $ret .= "<option value=\"New Caledonia\">New Caledonia</option>";
                                            if ($country == "New Zealand") $ret .= "<option value=\"New Zealand\" selected>New Zealand</option>"; else $ret .= "<option value=\"New Zealand\">New Zealand</option>";
                                            if ($country == "Nicaragua") $ret .= "<option value=\"Nicaragua\" selected>Nicaragua</option>"; else $ret .= "<option value=\"Nicaragua\">Nicaragua</option>";
                                            if ($country == "Niger") $ret .= "<option value=\"Niger\" selected>Niger</option>"; else $ret .= "<option value=\"Niger\">Niger</option>";
                                            if ($country == "Nigeria") $ret .= "<option value=\"Nigeria\" selected>Nigeria</option>"; else $ret .= "<option value=\"Nigeria\">Nigeria</option>";
                                            if ($country == "Niue") $ret .= "<option value=\"Niue\" selected>Niue</option>"; else $ret .= "<option value=\"Niue\">Niue</option>";
                                            if ($country == "Norfolk Island") $ret .= "<option value=\"Norfolk Island\" selected>Norfolk Island</option>"; else $ret .= "<option value=\"Norfolk Island\">Norfolk Island</option>";
                                            if ($country == "Northern Mariana Islands") $ret .= "<option value=\"Northern Mariana Islands\" selected>Northern Mariana Islands</option>"; else $ret .= "<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>";
                                            if ($country == "Norway") $ret .= "<option value=\"Norway\" selected>Norway</option>"; else $ret .= "<option value=\"Norway\">Norway</option>";
                                            if ($country == "Oman") $ret .= "<option value=\"Oman\" selected>Oman</option>"; else $ret .= "<option value=\"Oman\">Oman</option>";
                                            if ($country == "Pakistan") $ret .= "<option value=\"Pakistan\" selected>Pakistan</option>"; else $ret .= "<option value=\"Pakistan\">Pakistan</option>";
                                            if ($country == "Palau") $ret .= "<option value=\"Palau\" selected>Palau</option>"; else $ret .= "<option value=\"Palau\">Palau</option>";
                                            if ($country == "Palestinian Territory, Occupied") $ret .= "<option value=\"Palestinian Territory, Occupied\" selected>Palestinian Territory, Occupied</option>"; else $ret .= "<option value=\"Palestinian Territory, Occupied\">Palestinian Territory, Occupied</option>";
                                            if ($country == "Panama") $ret .= "<option value=\"Panama\" selected>Panama</option>"; else $ret .= "<option value=\"Panama\">Panama</option>";
                                            if ($country == "Papua New Guinea") $ret .= "<option value=\"Papua New Guinea\" selected>Papua New Guinea</option>"; else $ret .= "<option value=\"Papua New Guinea\">Papua New Guinea</option>";
                                            if ($country == "Paraguay") $ret .= "<option value=\"Paraguay\" selected>Paraguay</option>"; else $ret .= "<option value=\"Paraguay\">Paraguay</option>";
                                            if ($country == "Peru") $ret .= "<option value=\"Peru\" selected>Peru</option>"; else $ret .= "<option value=\"Peru\">Peru</option>";
                                            if ($country == "Philippines") $ret .= "<option value=\"Philippines\" selected>Philippines</option>"; else $ret .= "<option value=\"Philippines\">Philippines</option>";
                                            if ($country == "Pitcairn") $ret .= "<option value=\"Pitcairn\" selected>Pitcairn</option>"; else $ret .= "<option value=\"Pitcairn\">Pitcairn</option>";
                                            if ($country == "Poland") $ret .= "<option value=\"Poland\" selected>Poland</option>"; else $ret .= "<option value=\"Poland\">Poland</option>";
                                            if ($country == "Portugal") $ret .= "<option value=\"Portugal\" selected>Portugal</option>"; else $ret .= "<option value=\"Portugal\">Portugal</option>";
                                            if ($country == "Puerto Rico") $ret .= "<option value=\"Puerto Rico\" selected>Puerto Rico</option>"; else $ret .= "<option value=\"Puerto Rico\">Puerto Rico</option>";
                                            if ($country == "Qatar") $ret .= "<option value=\"Qatar\" selected>Qatar</option>"; else $ret .= "<option value=\"Qatar\">Qatar</option>";
                                            if ($country == "Réunion") $ret .= "<option value=\"Réunion\" selected>Réunion</option>"; else $ret .= "<option value=\"Réunion\">Réunion</option>";
                                            if ($country == "Romania") $ret .= "<option value=\"Romania\" selected>Romania</option>"; else $ret .= "<option value=\"Romania\">Romania</option>";
                                            if ($country == "Russian Federation") $ret .= "<option value=\"Russian Federation\" selected>Russian Federation</option>"; else $ret .= "<option value=\"Russian Federation\">Russian Federation</option>";
                                            if ($country == "Rwanda") $ret .= "<option value=\"Rwanda\" selected>Rwanda</option>"; else $ret .= "<option value=\"Rwanda\">Rwanda</option>";
                                            if ($country == "Saint Barthélemy") $ret .= "<option value=\"Saint Barthélemy\" selected>Saint Barthélemy</option>"; else $ret .= "<option value=\"Saint Barthélemy\">Saint Barthélemy</option>";
                                            if ($country == "Saint Helena, Ascension and Tristan da Cunha") $ret .= "<option value=\"Saint Helena, Ascension and Tristan da Cunha\" selected>Saint Helena, Ascension and Tristan da Cunha</option>"; else $ret .= "<option value=\"Saint Helena, Ascension and Tristan da Cunha\">Saint Helena, Ascension and Tristan da Cunha</option>";
                                            if ($country == "Saint Kitts and Nevis") $ret .= "<option value=\"Saint Kitts and Nevis\" selected>Saint Kitts and Nevis</option>"; else $ret .= "<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>";
                                            if ($country == "Saint Lucia") $ret .= "<option value=\"Saint Lucia\" selected>Saint Lucia</option>"; else $ret .= "<option value=\"Saint Lucia\">Saint Lucia</option>";
                                            if ($country == "Saint Martin (French part)") $ret .= "<option value=\"Saint Martin (French part)\" selected>Saint Martin (French part)</option>"; else $ret .= "<option value=\"Saint Martin (French part)\">Saint Martin (French part)</option>";
                                            if ($country == "Saint Pierre and Miquelon") $ret .= "<option value=\"Saint Pierre and Miquelon\" selected>Saint Pierre and Miquelon</option>"; else $ret .= "<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>";
                                            if ($country == "Saint Vincent and the Grenadines") $ret .= "<option value=\"Saint Vincent and the Grenadines\" selected>Saint Vincent and the Grenadines</option>"; else $ret .= "<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>";
                                            if ($country == "Samoa") $ret .= "<option value=\"Samoa\" selected>Samoa</option>"; else $ret .= "<option value=\"Samoa\">Samoa</option>";
                                            if ($country == "San Marino") $ret .= "<option value=\"San Marino\" selected>San Marino</option>"; else $ret .= "<option value=\"San Marino\">San Marino</option>";
                                            if ($country == "Sao Tome and Principe") $ret .= "<option value=\"Sao Tome and Principe\" selected>Sao Tome and Principe</option>"; else $ret .= "<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>";
                                            if ($country == "Saudi Arabia") $ret .= "<option value=\"Saudi Arabia\" selected>Saudi Arabia</option>"; else $ret .= "<option value=\"Saudi Arabia\">Saudi Arabia</option>";
                                            if ($country == "Senegal") $ret .= "<option value=\"Senegal\" selected>Senegal</option>"; else $ret .= "<option value=\"Senegal\">Senegal</option>";
                                            if ($country == "Serbia") $ret .= "<option value=\"Serbia\" selected>Serbia</option>"; else $ret .= "<option value=\"Serbia\">Serbia</option>";
                                            if ($country == "Seychelles") $ret .= "<option value=\"Seychelles\" selected>Seychelles</option>"; else $ret .= "<option value=\"Seychelles\">Seychelles</option>";
                                            if ($country == "Sierra Leone") $ret .= "<option value=\"Sierra Leone\" selected>Sierra Leone</option>"; else $ret .= "<option value=\"Sierra Leone\">Sierra Leone</option>";
                                            if ($country == "Singapore") $ret .= "<option value=\"Singapore\" selected>Singapore</option>"; else $ret .= "<option value=\"Singapore\">Singapore</option>";
                                            if ($country == "Sint Maarten (Dutch part)") $ret .= "<option value=\"Sint Maarten (Dutch part)\" selected>Sint Maarten (Dutch part)</option>"; else $ret .= "<option value=\"Sint Maarten (Dutch part)\">Sint Maarten (Dutch part)</option>";
                                            if ($country == "Slovakia") $ret .= "<option value=\"Slovakia\" selected>Slovakia</option>"; else $ret .= "<option value=\"Slovakia\">Slovakia</option>";
                                            if ($country == "Slovenia") $ret .= "<option value=\"Slovenia\" selected>Slovenia</option>"; else $ret .= "<option value=\"Slovenia\">Slovenia</option>";
                                            if ($country == "Solomon Islands") $ret .= "<option value=\"Solomon Islands\" selected>Solomon Islands</option>"; else $ret .= "<option value=\"Solomon Islands\">Solomon Islands</option>";
                                            if ($country == "Somalia") $ret .= "<option value=\"Somalia\" selected>Somalia</option>"; else $ret .= "<option value=\"Somalia\">Somalia</option>";
                                            if ($country == "South Africa") $ret .= "<option value=\"South Africa\" selected>South Africa</option>"; else $ret .= "<option value=\"South Africa\">South Africa</option>";
                                            if ($country == "South Georgia and the South Sandwich Islands") $ret .= "<option value=\"South Georgia and the South Sandwich Islands\" selected>South Georgia and the South Sandwich Islands</option>"; else $ret .= "<option value=\"South Georgia and the South Sandwich Islands\">South Georgia and the South Sandwich Islands</option>";
                                            if ($country == "South Sudan") $ret .= "<option value=\"South Sudan\" selected>South Sudan</option>"; else $ret .= "<option value=\"South Sudan\">South Sudan</option>";
                                            if ($country == "Spain") $ret .= "<option value=\"Spain\" selected>Spain</option>"; else $ret .= "<option value=\"Spain\">Spain</option>";
                                            if ($country == "Sri Lanka") $ret .= "<option value=\"Sri Lanka\" selected>Sri Lanka</option>"; else $ret .= "<option value=\"Sri Lanka\">Sri Lanka</option>";
                                            if ($country == "Sudan") $ret .= "<option value=\"Sudan\" selected>Sudan</option>"; else $ret .= "<option value=\"Sudan\">Sudan</option>";
                                            if ($country == "Suriname") $ret .= "<option value=\"Suriname\" selected>Suriname</option>"; else $ret .= "<option value=\"Suriname\">Suriname</option>";
                                            if ($country == "Svalbard and Jan Mayen") $ret .= "<option value=\"Svalbard and Jan Mayen\" selected>Svalbard and Jan Mayen</option>"; else $ret .= "<option value=\"Svalbard and Jan Mayen\">Svalbard and Jan Mayen</option>";
                                            if ($country == "Swaziland") $ret .= "<option value=\"Swaziland\" selected>Swaziland</option>"; else $ret .= "<option value=\"Swaziland\">Swaziland</option>";
                                            if ($country == "Sweden") $ret .= "<option value=\"Sweden\" selected>Sweden</option>"; else $ret .= "<option value=\"Sweden\">Sweden</option>";
                                            if ($country == "Switzerland") $ret .= "<option value=\"Switzerland\" selected>Switzerland</option>"; else $ret .= "<option value=\"Switzerland\">Switzerland</option>";
                                            if ($country == "Syrian Arab Republic") $ret .= "<option value=\"Syrian Arab Republic\" selected>Syrian Arab Republic</option>"; else $ret .= "<option value=\"Syrian Arab Republic\">Syrian Arab Republic</option>";
                                            if ($country == "Taiwan, Province of China") $ret .= "<option value=\"Taiwan, Province of China\" selected>Taiwan, Province of China</option>"; else $ret .= "<option value=\"Taiwan, Province of China\">Taiwan, Province of China</option>";
                                            if ($country == "Tajikistan") $ret .= "<option value=\"Tajikistan\" selected>Tajikistan</option>"; else $ret .= "<option value=\"Tajikistan\">Tajikistan</option>";
                                            if ($country == "Tanzania, United Republic of") $ret .= "<option value=\"Tanzania, United Republic of\" selected>Tanzania, United Republic of</option>"; else $ret .= "<option value=\"Tanzania, United Republic of\">Tanzania, United Republic of</option>";
                                            if ($country == "Thailand") $ret .= "<option value=\"Thailand\" selected>Thailand</option>"; else $ret .= "<option value=\"Thailand\">Thailand</option>";
                                            if ($country == "Timor-Leste") $ret .= "<option value=\"Timor-Leste\" selected>Timor-Leste</option>"; else $ret .= "<option value=\"Timor-Leste\">Timor-Leste</option>";
                                            if ($country == "Togo") $ret .= "<option value=\"Togo\" selected>Togo</option>"; else $ret .= "<option value=\"Togo\">Togo</option>";
                                            if ($country == "Tokelau") $ret .= "<option value=\"Tokelau\" selected>Tokelau</option>"; else $ret .= "<option value=\"Tokelau\">Tokelau</option>";
                                            if ($country == "Tonga") $ret .= "<option value=\"Tonga\" selected>Tonga</option>"; else $ret .= "<option value=\"Tonga\">Tonga</option>";
                                            if ($country == "Trinidad and Tobago") $ret .= "<option value=\"Trinidad and Tobago\" selected>Trinidad and Tobago</option>"; else $ret .= "<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>";
                                            if ($country == "Tunisia") $ret .= "<option value=\"Tunisia\" selected>Tunisia</option>"; else $ret .= "<option value=\"Tunisia\">Tunisia</option>";
                                            if ($country == "Turkey") $ret .= "<option value=\"Turkey\" selected>Turkey</option>"; else $ret .= "<option value=\"Turkey\">Turkey</option>";
                                            if ($country == "Turkmenistan") $ret .= "<option value=\"Turkmenistan\" selected>Turkmenistan</option>"; else $ret .= "<option value=\"Turkmenistan\">Turkmenistan</option>";
                                            if ($country == "Turks and Caicos Islands") $ret .= "<option value=\"Turks and Caicos Islands\" selected>Turks and Caicos Islands</option>"; else $ret .= "<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>";
                                            if ($country == "Tuvalu") $ret .= "<option value=\"Tuvalu\" selected>Tuvalu</option>"; else $ret .= "<option value=\"Tuvalu\">Tuvalu</option>";
                                            if ($country == "Uganda") $ret .= "<option value=\"Uganda\" selected>Uganda</option>"; else $ret .= "<option value=\"Uganda\">Uganda</option>";
                                            if ($country == "Ukraine") $ret .= "<option value=\"Ukraine\" selected>Ukraine</option>"; else $ret .= "<option value=\"Ukraine\">Ukraine</option>";
                                            if ($country == "United Arab Emirates") $ret .= "<option value=\"United Arab Emirates\" selected>United Arab Emirates</option>"; else $ret .= "<option value=\"United Arab Emirates\">United Arab Emirates</option>";
                                            if ($country == "United Kingdom") $ret .= "<option value=\"United Kingdom\" selected>United Kingdom</option>"; else $ret .= "<option value=\"United Kingdom\">United Kingdom</option>";
                                            if ($country == "United States") $ret .= "<option value=\"United States\" selected>United States</option>"; else $ret .= "<option value=\"United States\">United States</option>";
                                            if ($country == "United States Minor Outlying Islands") $ret .= "<option value=\"United States Minor Outlying Islands\" selected>United States Minor Outlying Islands</option>"; else $ret .= "<option value=\"United States Minor Outlying Islands\">United States Minor Outlying Islands</option>";
                                            if ($country == "Uruguay") $ret .= "<option value=\"Uruguay\" selected>Uruguay</option>"; else $ret .= "<option value=\"Uruguay\">Uruguay</option>";
                                            if ($country == "Uzbekistan") $ret .= "<option value=\"Uzbekistan\" selected>Uzbekistan</option>"; else $ret .= "<option value=\"Uzbekistan\">Uzbekistan</option>";
                                            if ($country == "Vanuatu") $ret .= "<option value=\"Vanuatu\" selected>Vanuatu</option>"; else $ret .= "<option value=\"Vanuatu\">Vanuatu</option>";
                                            if ($country == "Venezuela, Bolivarian Republic of") $ret .= "<option value=\"Venezuela, Bolivarian Republic of\" selected>Venezuela, Bolivarian Republic of</option>"; else $ret .= "<option value=\"Venezuela, Bolivarian Republic of\">Venezuela, Bolivarian Republic of</option>";
                                            if ($country == "Viet Nam") $ret .= "<option value=\"Viet Nam\" selected>Viet Nam</option>"; else $ret .= "<option value=\"Viet Nam\">Viet Nam</option>";
                                            if ($country == "Virgin Islands, British") $ret .= "<option value=\"Virgin Islands, British\" selected>Virgin Islands, British</option>"; else $ret .= "<option value=\"Virgin Islands, British\">Virgin Islands, British</option>";
                                            if ($country == "Virgin Islands, U.S.") $ret .= "<option value=\"Virgin Islands, U.S.\" selected>Virgin Islands, U.S.</option>"; else $ret .= "<option value=\"Virgin Islands, U.S.\">Virgin Islands, U.S.</option>";
                                            if ($country == "Wallis and Futuna") $ret .= "<option value=\"Wallis and Futuna\" selected>Wallis and Futuna</option>"; else $ret .= "<option value=\"Wallis and Futuna\">Wallis and Futuna</option>";
                                            if ($country == "Western Sahara") $ret .= "<option value=\"Western Sahara\" selected>Western Sahara</option>"; else $ret .= "<option value=\"Western Sahara\">Western Sahara</option>";
                                            if ($country == "Yemen") $ret .= "<option value=\"Yemen\" selected>Yemen</option>"; else $ret .= "<option value=\"Yemen\">Yemen</option>";
                                            if ($country == "Zambia") $ret .= "<option value=\"Zambia\" selected>Zambia</option>"; else $ret .= "<option value=\"Zambia\">Zambia</option>";
                                            if ($country == "Zimbabwe") $ret .= "<option value=\"Zimbabwe\" selected>Zimbabwe</option>"; else $ret .= "<option value=\"Zimbabwe\">Zimbabwe</option>"; $ret .= '
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="genderId" value='; if ($gender == 0) $ret .= "\"Male\""; else $ret .= "\"Female\""; $ret .= '>
                                            <option value=\"\" selected>---Select Gender---</option>
                                            '; if ($gender == 0) $ret .= "<option value=\"Male\" selected>Male</option>
                                            <option value=\"Female\">Female</option>";
                                            else if ($gender == 1) $ret .= "<option value=\"Male\">Male</option>
                                            <option value=\"Female\" selected>Female</option>";
                                            else $ret .= "<option value=\"Male\">Male</option>
                                            <option value=\"Female\">Female</option>"; $ret .= '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 rightSide">
                                    <div class="form-group">
                                        <label class="sr-only" for="state">State</label>
                                        <input name="state" type="text" class="form-control" id="stateId" placeholder="State" value='; if ($state != "") $ret .= "\"".$state."\""; else $ret .= "\"\""; $ret .= ' />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="zip">Zip Code</label>
                                        <input name="zip" type="number" class="form-control" id="zipId" placeholder="Zip" value='; if ($zip != "") $ret .= "\"".$zip."\""; else $ret .= "\"\""; $ret .= ' />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="age">Age</label>
                                        <input name="age" type="number" class="form-control" id="ageId" placeholder="Age" value='; if ($age != "") $ret .= "\"".$age."\""; else $ret .= "\"\""; $ret .= ' />
                                    </div>
                                </div>
                                <center><button onclick="subm(0)" class="btn btn-primary editSelect" style="margin-top: 25px;">Update Profile</button></center>';
            return $ret;
        }
    }
?>
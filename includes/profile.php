<?php
require 'server.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href="../images/ben_favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <title>London Tours</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">London Tours</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Things to do</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Information
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Traveller Information</a>
                        <a class="dropdown-item" href="#">London Maps and Guides</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Oyster, Travelcards and London passes</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link" href="contacts.php">Contact us</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <!-- <a class="form-control btn btn-outline-info m-2" data-toggle="modal" data-target="#LoginModalCenter" role="button">Sign In</a> -->

                <a class="nav-link dropdown-toggle btn btn-outline-info ml-2" id="accountSettings" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountSettings">
                    <a class="dropdown-item" href="#">Manage Bookings</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="self" href="logout.php"><span id="logout">Logout</span></a>
                </div>
            </form>
        </div>

    </nav>

    <div class="container">
        <div class="jumbotron" id="profileJumbotron">
            <h1 class="display-4">Welcome
                <?php 
                        if($_SESSION['logged_in']==true)
                        {   
                            echo $_SESSION['firstname']. " " .$_SESSION['lastname'];
                                                   }
                        elseif($_SESSION['logged_in']==false)
                        {
                            echo'<h1> NOT WELCOME </h1>';
                        }
                        ?>
            </h1>
            <p class="lead">Don't miss our amazing deals for this weekend !</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DiscountDeals">
                Learn More
            </button>
        </div>

        <hr class="myStyle">

        <div id="#bodyInformation">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://www.cityxplora.com/media/_versions/products/original_london_bus_tour/new_pictures/original-london-tour-bus-at-big-ben_feat_block.jpg" class="img-thumbnail" alt="LondonTourBus">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>London Tour Busses</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://countrygirlexplores.com/wp-content/uploads/2018/04/img_0369.jpg" class="img-thumbnail" alt="LondonEye">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>The London Eye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="http://macfarlanetravel.co.uk/wp-content/uploads/2018/08/london-bridge-night-macfarlane-travel.jpg" class="img-thumbnail" alt="LondonBridge">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>London Bridge</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">

                        <img src="https://fullfact.org/media/uploads/buckingham-palace-19-09-2018.jpg" class="img-thumbnail" alt="BuckinghamPalace">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Buckingham Palace</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">

                        <img src="https://www.studentflights.com.au/sites/studentflights.com.au/files/london-tours.jpg" class="img-thumbnail" alt="TrafalgarSquare">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>National Gallery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">

                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Tower.bridge.2.fromonriver.london.arp.jpg" class="img-thumbnail" alt="RiverCruise">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Thames River Cruise</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">

                        <img src="https://media.timeout.com/images/103812554/image.jpg" class="img-thumbnail" alt="Helicopter Tour">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Fly Over London</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://aws-tiqets-cdn.imgix.net/images/content/28ef32e164f94fa682ffd5a0528e6ef5.jpg?auto=format&fit=crop&ixlib=python-1.1.2&q=25&s=55d96ae978fcc7f6b43d04840ea4dd88&w=400&h=320&dpr=2.625" class="img-thumbnail" alt="Ghost Bus Tour">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Ghost Bus Tour</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://www.montagu-place.co.uk/wp-content/uploads/2016/05/2209912003_956bf77643_z.jpg" class="img-thumbnail" alt="Sherlock holmes tour">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Sherlock Holems museum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://www.experiencedays.co.uk/images/Climb-The-O2-Experience-1920x1080-resize.jpg" class="img-thumbnail" alt="The O2 arena">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>The 02 Arena</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://fever.imgix.net/plan/photo/3d05a5d2-89c7-11e8-81ec-067dfd978c4d.jpg?auto=compress&auto=format&fm=jpg&w=550&h=550" class="img-thumbnail" alt="The Shard">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>The Shard</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="thumbnail text-center">
                        <img src="https://www.designinsiderlive.com/wp-content/uploads/2015/03/Rhubarb-at-Sky-Garden-800x600.jpg" class="img-thumbnail" alt="Sky Garden">
                        <div class="caption post-content">
                            <a class="deal" href="#">
                                <h3>Sky Garden </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>

                </div>



            </div>

        </div>

    </div>
    <div class="modal fade" id="DiscountDeals" tabindex="-1" role="dialog" aria-labelledby="DiscountDealsTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Anton'; color: #007bff;">Weekend Deals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h2 style="text-align: center; font-family: 'Anton'; ">Exclusive Madame Tussauds tour ! </h2>
                    <hr class="myStyle">
                    <img class="float-right img-thumbnail" src="https://dws2fz4z8ntt9.cloudfront.net/wp-content/uploads/sites/5/2018/02/12125641/Madame-Tussauds-24-hour-River-Pass.png" alt="Madame Tussauds">
                    <h5>Big <span class="badge badge-danger"> SALE </span> up to <span class="badge badge-danger"> 50% </span> for a limited time ! </h5>

                    <p> Lorem repudiandae iste suscipit nemo nulla dicta autem, quisquam vero maxime necessitatibus quos ea. Quaerat molestias a nesciunt at, dolor autem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga culpa, maiores cumque fugit, iste quidem quo tenetur necessitatibus repellat, enim libero velit porro obcaecati quae atque vitae sed ratione excepturi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem ut consectetur explicabo dignissimos, iure delectus voluptatibus neque est nulla nesciunt amet, officia distinctio molestiae soluta vero, laborum facere necessitatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium expedita sequi maiores consequatur, corrupti repudiandae numquam molestiae dolorum sed illo doloremque ab corporis, rerum totam enim inventore amet nostrum rem!veritatis iusto accusamus nulla, eum repellendus a ipsa aperiam totam temporibus quasi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book now!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RegisterModalCenter" tabindex="-1" role="dialog" aria-labelledby="RegisterModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RegisterModalCenterTitle">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="exampleInputName">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="exmapleInputName" aria-describedby="nameHelp" placeholder="First name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLastName">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="exampleInputLastName" aria-describedby="LastnameHelp" placeholder="Surname" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneNumber">Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="exampleInputPhoneNumber" aria-describedby="PhoneNumberHelp" placeholder="Phone number" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLastName">Address</label>
                            <input type="text" name="address" class="form-control mb-2" id="exmapleInputAddressLine1" aria-describedby="AddressHelpLine1" placeholder="Address Line 1" required="required">
                            <input type="text" class="form-control mb-2" id="exmapleInputAddressLine2" aria-describedby="AddressHelpLine2" placeholder="Address Line 2">
                            <input type="text" class="form-control mb-2" id="exmapleInputAddressCity" aria-describedby="AddressHelpCity" placeholder="City" required="required">
                            <input type="text" class="form-control mb-2" id="exmapleInputAddressState" aria-describedby="AddressHelpState" placeholder="State/Province/Region">
                            <input type="text" name="postcode" class="form-control mb-2" id="exmapleInputAddressCode" aria-describedby="AddressHelpCode" placeholder="ZIP/Postal Code" required="required">
                            <select id="exampleInputAddressCountry" aria-describedby="AddressHelpCountry" class="form-control mb-2" required="required">
                                <option value="">Choose Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
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
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
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
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
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
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
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
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
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
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">I have read and agree to the <a target="_blank" href="javascript:void window.open('http://termsandconditionlondontours.free.bg/terms.html','London Tours | Terms & Conditions' ,'scrollbars=yes,menubar=yes,resizable=yes,left=30,top=30,height=500,width=650')">terms and conditions!</a> </label>
                            </div>

                            <small id="accountHelp" class="form-text">Already have an account? <a href="#" data-toggle="modal" data-target="#DiscountDeals" role="button">Sign In!</a></small>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="register">Sign Up</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wizard-v4</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/css_form_entrada_veiculos/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="css/css_form_entrada_veiculos/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/fonts_form_entrada_veiculos/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="css/css_form_entrada_veiculos/query-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/css_form_entrada_veiculos/style.css" />
</head>

<body>
    <div class="page-content" style="background-image: url('images/images_form_entrada_veiculos/wizard-v4.jpg')">
        <div class="wizard-v4-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">PORTARIA TESSIN</h3>
                    <p>Controle de entrada de veículos</p>
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-text">Visitante</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Informação do Visitante:</h3>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                                            <span class="label">Nome</span>
                                            <span class="border"></span>
                                        </label><br>
                                    </div>

                                    <div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last-name" name="last-name" required>
											<span class="label">RG</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>

                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                                            <span class="label">CPF</span>
                                            <span class="border"></span>
                                        </label><br>
                                    </div>




                                   

                                <!--
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="address" name="address" required>
											<span class="label">Address Location</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="code" name="code" required>
											<span class="label">Zip Code</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Phone Number</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
							</div> -->
                        </section>
                        <!-- SECTION 2 -->




                      
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">Entrada</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Informações de entrada de visitantes</h3> <br>

                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="time" class="form-control" id="first-name-1" name="first-name-1" required>
                                        </label>
                                    </div>
                                </div>


                                <div class="inner">
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="date" class="form-control" id="first-name-1" name="first-name-1" required>
                                                <span class="label"></span>
                                                <span class="border"></span>
                                            </label>
                                        </div>
                                    </div>

<!--

			                <div class="inner">
			                	<h3>Do you have an account?</h3>
								<div class="form-row">
									<div id="radio">
										<input type="radio" name="gender" value="male" checked class="radio-1"> I already have an account.
  										<input type="radio" name="gender" value="female"> I'm newbie
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="your_email_1" id="your_email_1" class="form-control" required>
											<span class="label">E-Mail</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="password_1" id="password_1" class="form-control" required>
											<span class="label">Password</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
											<span class="label">Comfirm Password</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
							</div> --> 
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">Saída</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Informações de Saída de visitantes</h3>

                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="time" class="form-control" id="first-name-1" name="first-name-1" required>
                                        </label>
                                    </div>
                                </div>


                                <div class="inner">
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="date" class="form-control" id="first-name-1" name="first-name-1" required>
                                                <span class="label"></span>
                                                <span class="border"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<select name="date" id="date">
											<option value="Day" disabled selected>Day</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="month" id="month">
											<option value="Month" disabled selected>Month</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year" id="year">
											<option value="Year" disabled selected>Year</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div> -->
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-money"></i></span>
                            <span class="step-text">Liberação</span>
                        </h2>
                        <section>
                        <div class="inner">
                                <h3>Liberado por:</h3> <br>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                                            <span class="label">Nome</span>
                                            <span class="border"></span>
                                        </label><br>
                                    </div>


                              

                                <!--	<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="inventory" id="inventory">
											<option value="Buy Inventory" disabled selected>Buy Inventory</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div id="checkbox">
										<span>Do you have existing business financing?: </span>
										<input type="checkbox" name="vehicle1" value="Yes"> Yes
  										<input type="checkbox" name="vehicle2" value="No"> No
									</div>
								</div> 
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="business" id="business" class="form-control" required>
                                            <span class="label">Notas Fiscais</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="balance" id="balance" class="form-control" required>
                                            <span class="label">Peso da Balança</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="balance" id="balance" class="form-control" required>
                                            <span class="label">Peso da Nfs</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="file" name="balance" id="balance" class="form-control" required>
                                            <span class="label"></span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>-->
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--
	<script src="js/js_form_entrada_veiculos/jquery-3.3.1.min.js"></script>
	<script src="js/js_form_entrada_veiculos/query.steps.js"></script>
	<script src="js/js_form_entrada_veiculos/jquery-ui.min.js"></script>
	<script src="js/js_form_entrada_veiculos/main.js"></script>
-->
    <script src="js/js_form_entrada_veiculos/jquery-3.3.1.min.js"></script>
    <script src="js/js_form_entrada_veiculos/jquery.steps.js"></script>
    <script src="js/js_form_entrada_veiculos/jquery-ui.min.js"></script>
    <script src="js/js_form_entrada_veiculos/main.js"></script>
</body>

</html>
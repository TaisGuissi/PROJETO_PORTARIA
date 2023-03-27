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
    <link rel="stylesheet" href="css/css_form_entrada_veiculos/style.css"/>
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
			            	<span class="step-text">Motorista</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Informações do motorista:</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">Nome</span>
					  						<span class="border"></span>
										</label>
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
									<div class="form-holder form-holder-2">
										<select name="position" id="position">
											<option value="Position" disabled selected>Autonomo</option>
											<option value="Manager">Transportadora
											</option>
										</select>
									</div>
								</div>
							</div> 
			            </section>


						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Veículo</span>
			            </h2>
			            <section>
						 <div class="inner">
			                	<h3>Informações do Veicúlo:</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">Placa</span>
					  						<span class="border"></span>
										</label>
									</div>
								
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">Tara</span>
					  						<span class="border"></span>
										</label>
									</div>	
			            </section>






						<!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Veículo</span>
			            </h2>
			            <section>
						 <div class="inner">
			                	<h3>Informações do Veicúlo:</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">Placa</span>
					  						<span class="border"></span>
										</label>
									</div>
								
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">Tara</span>
					  						<span class="border"></span>
										</label>
									</div>
			            </section>


						<!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">Cliente</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Informações de Entrada</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="time" class="form-control" id="first-name-1" name="first-name-1" required>
											<span class="label"></span>
											<span class="border"></span>
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
			            </section>


			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Entrada</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Informações de Entrada</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="time" class="form-control" id="first-name-1" name="first-name-1" required>
											<span class="label"></span>
											<span class="border"></span>
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
			            </section>



			            <!-- SECTION 5 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-money"></i></span>
			            	<span class="step-text">Notas Fiscais</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Informações das notas fiscais</h3>
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
											<input type="text" name="balance" id="balance" class="form-control" required>
											<span class="label">Situação</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="balance" id="balance" class="form-control" required>
											<span class="label">Liberação</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
                                      <figure>
                                      <img src="images/1.jpg" width="200px">
                                      </figure>
										</label>
									</div>
								</div>
									</div>
								</div>
							</div>
			            </section>
						 <!-- SECTION 4 -->
						 <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Entrada</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Informações de Entrada</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="time" class="form-control" id="first-name-1" name="first-name-1" required>
											<span class="label"></span>
											<span class="border"></span>
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
			            </section>
						
		        	
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
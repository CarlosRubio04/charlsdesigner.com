<div class="cta" id="menu">
	<button class="close" id="close"><i class="fa fa-times" aria-hidden="true"></i></button>
	<div class="cta-form-wrapper">
		<div class="cta-form-header">
			<h2>Asesoría personalizada</h2>
		</div>
		<div class="cta-form-content">
			<form name="contacto" id="contacto2" novalidate>
				<div class="form-group">
					<input type="hidden" name="campaignId" value="<?php echo $campaignId ?>">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="empresa" placeholder="Empresa" required/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="cargo" placeholder="Cargo" required/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="empleados" placeholder="# De empleados" required/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="telefono" placeholder="Teléfono" required/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="correo" placeholder="Email" required/>
				</div>
				<div class="checkbox">
					<label for="terminos">
						<input type="checkbox" name="terminos" checked required> 
						<a href="http://www.sintecto.com/sites/default/files/Poli%CC%81tica%20Tratamiento%20Datos%20Sintecto%20Ltda_0.pdf" target="_blank">Estoy de acuerdo con la Política de tratamiento de datos personales.</a>
					</label>
				</div>
				<div class="form-group">
					<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
					<input type="hidden" name="type" value="<?php echo $type ?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-sub center-block">Contáctanos</button>
				</div>
			</form>
		</div>
	</div>
</div>
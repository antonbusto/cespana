$(document).ready(function() {

$('#contactoForm').bootstrapValidator({
 
	 message: 'Este valor no es valido',
 
	 feedbackIcons: {
 
		 valid: 'glyphicon glyphicon-ok',
 
		 invalid: 'glyphicon glyphicon-remove',
 
		 validating: 'glyphicon glyphicon-refresh'
 
	 },
 
	 fields: {
 
		 nombre: {
 
			 validators: {
 
				 notEmpty: {
 
					 message: 'El nombre es requerido'
 
				 }
 
			 }
 
		 },
 
		 email: {
 
			 validators: {
 
				 notEmpty: {
 
					 message: 'El correo es requerido'
 
				 },
				 emailAddress: {
 
					 message: 'El correo electronico no es valido'
 
				 }
 
			 }
 
		 }
 
	 }
 
});
});
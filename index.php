<style type="text/css">
	*{
		font-family: Arial;
	}	
</style>

<form action="proceso.php" method="post" id="form">
	Nombres:<br>
	<input type="text" name="name"><br>
	Apellidos:<br>
	<input type="text" name="lname"><br>
	Dni:<br>
	<input type="number" name="dni"><br>
	Sexo:<br>
	<input type="radio" name="sexo" value="f">F
	<input type="radio" name="sexo" value="m">M<br>
	<button type="submit">Guardar</button>
</form>

<script type="text/javascript">
	form.addEventListener("submit",(e)=>{
		e.preventDefault();

		let frm=new FormData(form);//POST

		let Ajax=new XMLHttpRequest();//2.0

		Ajax.addEventListener("load",(i)=>{
			if(Ajax.status==200 & Ajax.readyState==4){
				alert("Registro guardado correctamente");
				form.reset();
			}
		});

		Ajax.open("post","proceso.php");
		Ajax.send(frm);
	});

</script>
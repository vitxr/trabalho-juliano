function fctLogin()
{
	$.post('../modelos/login2.php',
	{
		email:$('#eLogin').val(),
		senha:$('#sLogin').val(),
	},function(res)
	{
		alert(res),
	});
}

function display()
{
	let url = new URL(window.location.href);
	let searchParams = new URLSearchParams(url.search);
	var result = searchParams.get('result');

	if(result == 1)
	{
		swal("", "Task Created Successfullly", "success");
	}

	else if(result == 2)
	{
		swal("", "Error Creating task", "error");
	}
}

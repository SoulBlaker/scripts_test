	function ChangeFilter( value )
	{
		return window.open('?filter='+value, '_self');
	}
		
	function ChangePage( value )
	{
		return window.open('?filter='+document.getElementById('filter').value+'&page='+value, '_self');
	}
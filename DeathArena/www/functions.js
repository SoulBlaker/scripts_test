	function ChangeFilter( value )
	{
		return window.open('?filter='+value+'&page='+document.getElementById('page').value, '_self');
	}
		
	function ChangePage( value )
	{
		return window.open('?filter='+document.getElementById('filter').value+'&page='+value, '_self');
	}
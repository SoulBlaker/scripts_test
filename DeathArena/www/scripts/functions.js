	function ChangeFilter( value )
	{
		return window.open('?type='+document.getElementById('type').value+'&filter='+value, '_self');
	}
		
	function ChangePage( value )
	{
		return window.open('?type='+document.getElementById('type').value+'&filter='+document.getElementById('filter').value+'&page='+value, '_self');
	}
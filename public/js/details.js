$('#back').click(function () {

	console.log("clicked back");
	window.location.href = '/browseItems';

});

function buyClicked(button_id)
{
    //alert(button_id);
    window.location.href = '/receipt/' + button_id;
}

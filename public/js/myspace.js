
console.log("hello again");

function itemClicked(button_id)
{
    //alert(button_id);
    window.location.href = '/itemDetails/' + button_id;
}

function makePublic(button_id)
{

    window.location.href = '/browseItems/' + button_id;

}

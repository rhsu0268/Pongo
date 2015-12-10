
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

function transactionClicked(button_id)
{
    console.log("<<<<<>>>>hello");
    window.location.href = '/transactionDetails/' + button_id;

}


// document.onload(function(){

//     var elements = document.body.getElementsByTagName('div');

//     for (var i = 0; i < elements.length; i++) {
//         elements[i].innerHTML = "foo";
//     }​
// });
function deleteitem(id)
{
  
  $.ajax({
      
    url:'myitems.php',
    type:'POST',
    data: { 
        'value':id
    },
    success: function(data)
    {
      location.reload();
    }
});
}
function modifyorder(id)
{
  $.ajax({
      
    url:'myitems.php',
    type:'POST',
    data: { 
        'modifyid':id
    },
    success: function(data)
    {
      location.reload();
    }
});
}
function ValidateOrder(id)
{
  
  $.ajax({
    url:'myitems.php',
    type:'POST',
    data: { 
        'validid':id,
        'quantity' : document.getElementById(id).value
    },
    success: function(data)
    {
        document.getElementById('prix').innerText = data;
        
        document.getElementById('sous-prix').innerText = data;

        document.getElementsByClassName('addbutton').style.borderColor = "red";
    }
});
}
    
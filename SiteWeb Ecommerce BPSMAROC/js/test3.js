function test(value){
    $.ajax({
    
            url:'test.php',
            type:'POST',
            data: { 
                'value':value
            },
    
            success: function(data) {
              document.getElementById('items').innerHTML = data;
            }
        });
}
// function loadstuff(){
//   $.ajax({
    
//     url:'test.php',
//     type:'POST',
//     data: { 
//         'load':"on"
//     },
  
//     success: function(data) {
//       document.getElementById('items').innerHTML = data;
//     }
//   });
// }

function add(id)
    {
      $.ajax({
    
        url:'test.php',
        type:'POST',
        data: { 
            'checklog':1
        },

        success: function(data) {
          if(data =='no')
          {
            window.location.href ="index.php?success=1";
          }
          else{
            document.getElementById(id).innerText = "Bien ajouté";
            document.getElementById(id).style.backgroundColor = "white";
            document.getElementById(id).style.borderColor = "#F80981";
            document.getElementById(id).style.color = "#2F8872";
            document.getElementById(id).disabled = true;
            addincart(id);
          }
        }
    });
      
    }
    function addincart(id)
    {
      
        $.ajax({
      
          url:'myitems.php',
          type:'POST',
          data: { 
              'iditem':id
          }
      });
    }

    function validateatlast()
    {
      $.ajax({
      
        url:'myitems.php',
        type:'POST',
        data: { 
            'offyougo':'tahoo',
            'tel':document.getElementById('tel').value,
            'adresse':document.getElementById('adresse').value
        },
        success: function(data) {
          alert(data);
          location.reload();
        }
    });
    }
// //Here is the dsired colore section

//     // Function to change the product image color
//     function changeColor(color) {
//         var img = document.getElementById('img');
//         img.style.filter = "saturate(200%) hue-rotate(" + color + "deg)";
//     }

  
//     function click() {
//         alert("Button clicked!");
//     }


// //Here is my size's section
//     function generateSizeButtons() {
//       var sizesContainer = document.getElementById('sizesContainer');
//       var sizes = [41, 42, 43,44];  

//       sizes.forEach(function (size) {
//           var button = document.createElement('button');
//           button.className = 'size';
//           button.textContent = size;
//           sizesContainer.appendChild(button);
//       });
//   }

//   //Here is limited offer' Section
//   function showOffers() {
    
//     alert("Special Offers:\n1. 20% off on selected items\n2. Free shipping on orders over $50");
// }


// //User login form
//         function validateForm() {
//           var firstName = document.getElementById('firstName').value;
//           var lastName = document.getElementById('lastName').value;
//           var email = document.getElementById('email').value;
//           var quantity = document.getElementById('quantity').value;
//           var size = document.getElementById('size').value;
//           var category = document.getElementById('category').value;
    
//           if (!firstName || !lastName || !email || !quantity || !size || !category) {
//             alert("Please fill in all fields.");
//             return false; // Prevent form submission
//           }
    
       
    
//           return true; // Allow form submission
//         }
      
// Function to change the product image color
function changeColor(color) {
  var img = $('#img');
  img.css('filter', 'saturate(200%) hue-rotate(' + color + 'deg)');
}

function click() {
  alert("Button clicked!");
}
// Function to generate size buttons with click event listener
function generateSizeButtons() {
  var sizesContainer = $('#sizesContainer');
  var sizes = [41, 42, 43, 44];

  $.each(sizes, function (index, size) {
      var button = $('<button>').addClass('size').text(size);
      sizesContainer.append(button);

      // Add click event listener to each button
      button.click(function () {
          // Display alert when a specific size button is clicked
          if (size === 41) {
              alert("Size 41 selected!");
          }
          if (size === 42) {
            alert("Size 42 selected!");
        }
        if (size === 43) {
          alert("Size 43 selected!");
      }
      if (size === 44) {
        alert("Size 44 selected!");
    }
      });
  });
}


// Function to show limited offers
function showOffers() {
  alert("Special Offers:\n1. 20% off on selected items\n2. Free shipping on orders over $50");
}

// User login form validation using jQuery
function validateForm() {
  var firstName = $('#firstName').val();
  var lastName = $('#lastName').val();
  var email = $('#email').val();
  var quantity = $('#quantity').val();
  var size = $('#size').val();
  var category = $('#category').val();

  if (!firstName || !lastName || !email || !quantity || !size || !category) {
      alert("Please fill in all fields.");
      return false; // Prevent form submission
  }

  return true; // Allow form submission
}

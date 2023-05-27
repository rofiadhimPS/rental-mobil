// const dropdownMenu = document.getElementById('orderStatus');
// const dropdownToggle = document.getElementById('dropdownMenuButton1');

// dropdownMenu.addEventListener('click', function(e) {

//   // Get the clicked menu item's text content
//   const clickedMenuItem = e.target.textContent;

//   // Set the text content of the dropdown toggle to the clicked menu item's text content
//   dropdownToggle.textContent = clickedMenuItem;

//   // Get the selected option's text content
//   const selectedOption = e.target.textContent;

//   // Set the background color of the dropdown toggle based on the selected option
//   if (selectedOption === 'Konfirmasi') {
//     dropdownToggle.style.backgroundColor = '#FFD000';
//   } else if (selectedOption === 'Batalkan') {
//     dropdownToggle.style.backgroundColor = 'red';
//   } else if (selectedOption === 'Selesai') {
//     dropdownToggle.style.backgroundColor = 'green';
//   } else if (selectedOption === 'Penjemputan') {
//     dropdownToggle.style.backgroundColor = 'blue';
//   }
// });

// const dropdownMenu = document.getElementById('orderStatus');
// const dropdownToggle = document.getElementById('dropdownMenuButton1');

// dropdownMenu.addEventListener('click', function(e) {
//   // Get the clicked menu item's text content
//   const clickedMenuItem = e.target.textContent;

//   // Set the text content of the dropdown toggle to the clicked menu item's text content
//   dropdownToggle.textContent = clickedMenuItem;

//   // Remove any existing classes from the dropdown toggle
//   dropdownToggle.classList.remove('confirm', 'cancel', 'done', 'pickup', 'default');

//   // Add the appropriate class based on the clicked menu item
//   switch (clickedMenuItem) {
//     case 'Konfirmasi':
//       dropdownToggle.classList.add('confirm');
//       break;
//     case 'Batalkan':
//       dropdownToggle.classList.add('cancel');
//       break;
//     case 'Selesai':
//       dropdownToggle.classList.add('done');
//       break;
//     case 'Penjemputan':
//       dropdownToggle.classList.add('pickup');
//       break;
//     default:
//       dropdownToggle.classList.add('default');
//   }
// });

// // Get the dropdown button element and the dropdown menu element
// const dropdownBtn = document.querySelector('.btn-dropdown');
// const dropdownMenu = document.querySelector('#orderStatus');

// // Add a click event listener to each option in the dropdown menu
// dropdownMenu.querySelectorAll('.dropdown-item').forEach((option) => {
//   option.addEventListener('click', (event) => {
//     // Get the text content of the selected option
//     const selectedOption = event.target.textContent;

//     // Set the background color of the dropdown button based on the selected option
//     if (selectedOption === 'Konfirmasi') {
//       dropdownBtn.style.backgroundColor = 'green';
//     } else if (selectedOption === 'Batalkan') {
//       dropdownBtn.style.backgroundColor = 'red';
//     } else if (selectedOption === 'Selesai') {
//       dropdownBtn.style.backgroundColor = 'blue';
//     } else if (selectedOption === 'Penjemputan') {
//       dropdownBtn.style.backgroundColor = 'orange';
//     }
//   });
// });

// Set "Konfirmasi" as the default option
document.querySelector('.dropdown-menu.orderStatus li:nth-child(1) a').setAttribute('selected', 'selected');

const dropdownMenus = document.querySelectorAll('.dropdown-menu');
const dropdownToggles = document.querySelectorAll('.btn-dropdown');

dropdownMenus.forEach(function(dropdownMenu) {
  dropdownMenu.addEventListener('click', function(e) {
    const clickedMenuItem = e.target.textContent;
    const dropdownToggle = this.parentNode.querySelector('.btn-dropdown');

    dropdownToggle.textContent = clickedMenuItem;
    dropdownToggle.classList.remove('confirm', 'cancel', 'done', 'pickup', 'default');

    switch (clickedMenuItem) {
      case 'Konfirmasi':
        dropdownToggle.classList.add('confirm');
        break;
      case 'Batalkan':
        dropdownToggle.classList.add('cancel');
        break;
      case 'Selesai':
        dropdownToggle.classList.add('done');
        break;
      case 'Penjemputan':
        dropdownToggle.classList.add('pickup');
        break;
      default:
        dropdownToggle.classList.add('default');
    }
  });
});

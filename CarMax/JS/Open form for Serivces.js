function openPopup(ServicesID) {
    document.getElementById('popupOverlay').style.display = 'flex';
  }

  function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
  }

function updateServiceID() {
    var serviceDropdown = document.getElementById("service");
    var serviceIDInput = document.getElementById("serviceID");

    var selectedOption = serviceDropdown.options[serviceDropdown.selectedIndex];
    var selectedServiceID = selectedOption.value;

    serviceIDInput.value = selectedServiceID;
}
let carData = {
    'Audi': ['A4', 'A6', 'Q5', 'Q7'],
    'BMW': ['3 Series', '5 Series', 'X5', 'i3'],
    'Chevrolet': ['Camaro', 'Malibu', 'Equinox', 'Silverado'],
    'Ford': ['Mustang', 'Focus', 'Explorer', 'F-150'],
    'Honda': ['Civic', 'Accord', 'CR-V', 'Pilot'],
    'Hyundai': ['Elantra', 'Sonata', 'Tucson', 'Santa Fe'],
    'Mercedes-Benz': ['C-Class', 'E-Class', 'GLE', 'S-Class'],
    'Nissan': ['Altima', 'Sentra', 'Rogue', 'Pathfinder'],
    'Toyota': ['Camry', 'Corolla', 'Prius', 'RAV4'],
    'Volkswagen': ['Golf', 'Passat', 'Tiguan', 'Atlas']
};

let dateDropdown = document.getElementById('year');

let currentYear = new Date().getFullYear();
let earliestYear = 1970;
while (currentYear >= earliestYear) {
    let dateOption = document.createElement('option');
    dateOption.text = currentYear;
    dateOption.value = currentYear;
    dateDropdown.add(dateOption);
    currentYear -= 1;
}

document.getElementById('manufacturer').addEventListener('change', function() {
    var modelSelect = document.getElementById('model');
    modelSelect.disabled = this.value === '';

});




let manufacturerDropdown = document.getElementById('manufacturer');
for (let manufacturer in carData) {
    let option = document.createElement('option');
    option.value = manufacturer;
    option.text = manufacturer;
    manufacturerDropdown.appendChild(option);
}

// Add event listener to the manufacturer dropdown
document.getElementById('manufacturer').addEventListener('change', function() {
    var modelSelect = document.getElementById('model');
    modelSelect.disabled = this.value === '';
    var manufacturer = this.value;

    modelSelect.innerHTML = '';

    let blankOption = document.createElement('option');
    blankOption.value = '';
    blankOption.text = '';
    modelSelect.appendChild(blankOption);

    if (manufacturer in carData) {
        let models = carData[manufacturer];
        models.forEach(function(model) {
            let option = document.createElement('option');
            option.value = model;
            option.text = model;
            modelSelect.appendChild(option);
        });
    }
});


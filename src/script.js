const citySelect = document.getElementById('citySelect');
const mallSelectContainer = document.getElementById('mallSelectContainer');
const mallSelect = document.getElementById('mallSelect');

const malls = {
    jakarta: ['Mall A', 'Mall B', 'Mall C'],
    surabaya: ['Mall D', 'Mall E', 'Mall F'],
    bandung: ['Mall G', 'Mall H', 'Mall I'],
    bali: ['Mall J', 'Mall K', 'Mall L'],
    medan: ['Mall M', 'Mall N', 'Mall O'],
    makassar: ['Mall P', 'Mall Q', 'Mall R']
};

citySelect.addEventListener('change', function() {
    const selectedCity = citySelect.value;
    if (selectedCity) {
        mallSelect.innerHTML = '<option value="" disabled selected>Pilih Mall</option>';
        malls[selectedCity].forEach(mall => {
            const option = document.createElement('option');
            option.value = mall.toLowerCase().replace(/\s+/g, '-');
            option.textContent = mall;
            mallSelect.appendChild(option);
        });
        mallSelectContainer.classList.remove('hidden');
    } else {
        mallSelectContainer.classList.add('hidden');
    }
});
const selectRole = document.getElementById('role');
const blocParticulier = document.getElementById('form-particulier');
const blocPro = document.getElementById('form-professionnel');

// Action au chargement : masquer les deux blocs par défaut
blocParticulier.style.display = "none";
blocPro.style.display = "none";

selectRole.addEventListener('change', (e) => {
    // e.target.value contient la valeur de l'option (<option value="particulier">)
    const roleChoisi = e.target.value;
    
    // On compare la valeur textuelle, pas les éléments HTML
    if (roleChoisi === 'particulier') {
        blocParticulier.style.display = "block";
        blocPro.style.display = "none";
    } else if (roleChoisi === 'professionnel') {
        blocPro.style.display = "block";
        blocParticulier.style.display = "none";
    } else {
        // Choix vide ou par défaut
        blocParticulier.style.display = "none";
        blocPro.style.display = "none";
    }
});
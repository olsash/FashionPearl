async function fetchAboutSections() {
    const response = await fetch('api.php');
    const sections = await response.json();
    const container = document.getElementById('about-sections');
    container.innerHTML = sections.map(section => `
        <div class="about-section">
            <span class="about-icon">${section.icon}</span>
            <h2>${section.title}</h2>
            <p>${section.content}</p>
        </div>
    `).join('');
}

fetchAboutSections();

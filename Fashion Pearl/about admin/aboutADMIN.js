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
function checkLogin() {
    fetch('../profile/checkLogin.php')
        .then(response => response.json())
        .then(data => {
            if (data.loggedIn) {
                openSidebar();
            } else {
                window.location.href = '../login/login.php';
            }
        })
        .catch(error => console.error('Gabim gjatë kontrollit të login:', error));
  }
  
  
  function openSidebar() {
      document.getElementById('sidebar').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
  
      fetch('../profile/profile.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('sidebar').innerHTML = data;
        })
        .catch(error => console.error('Error loading sidebar:', error));
    }
  
    function closeSidebar() {
      document.getElementById('sidebar').style.display = 'none';
      document.getElementById('overlay').style.display = 'none';
    }
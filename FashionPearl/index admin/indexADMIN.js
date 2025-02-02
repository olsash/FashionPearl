class Auth {
    static checkLogin() {
        fetch('../profile/checkLogin.php')
            .then(response => response.json())
            .then(data => {
                if (data.loggedIn) {
                    Sidebar.open();
                } else {
                    window.location.href = '../login/login.php';
                }
            })
            .catch(error => console.error('Error checking login:', error));
    }
  }
  document.querySelectorAll('.filter-toggle').forEach(toggle => {
    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
    });
  });
  
  class Sidebar {
    static open() {
        document.getElementById('sidebar').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
  
        fetch('../profile/profile.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('sidebar').innerHTML = data;
            })
            .catch(error => console.error('Error loading sidebar:', error));
    }
  
    static close() {
        document.getElementById('sidebar').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
  }
<form action="submit_form.php" method="POST">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
  
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
  
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
  
    <input type="submit" value="Submit">
  </form>
  

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #53657c;
      margin: 0;
      padding: 0;
    }
  
    form {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transform: translateY(20px);
      animation: fadeInUp 1s ease-out;
    }
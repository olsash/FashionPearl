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

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  
    label {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 12px;
      display: block;
      color: #96a7b5;
    }
  
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 16px;
      margin: 12px 0 24px 0;
      border: 1px solid #052034;
      border-radius: 12px;
      font-size: 16px;
      color: #021728;
      background-color: #f1f3f6;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }
  
    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
      border-color: #0d3044;
      background-color: #f0f4f6;
      box-shadow: 0 0 10px rgba(229, 234, 246, 0.3);
      outline: none;
    }
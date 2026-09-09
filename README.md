<div align="center">

# 🔐 Decrypto

[![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)

*A web-based cryptography application built in PHP that allows users to encrypt, store, and decrypt secret messages using various classic cipher algorithms.*

</div>

## 🖥️ Application Workflow

<div align="center">
  <img width="1920" height="1080" alt="Decrypto_1" src="https://github.com/user-attachments/assets/e35cd904-611c-4886-9870-eed3d400fbda" />
  <br>
  <em>Step 1: Input a secret message and select an encryption method.</em>
  <br><br>
  <img width="49%" height="1080" alt="Decrypto_2" src="https://github.com/user-attachments/assets/bd23944d-ed40-46bd-9a3d-5107d9e95b60" />
  <img width="49%" height="1080" alt="Decrypto_3" src="https://github.com/user-attachments/assets/c4d95770-6641-4225-89c9-9fb7f6271128" />
  <br>
  <em>Step 2 & 3: The encrypted message is saved to the database. Retrieve it by its unique ID to view both the ciphertext and the decrypted plaintext.</em>
</div>

---

## 📖 About The Project

**Decrypto** is a full-stack PHP application designed to demonstrate data processing, database management, and the implementation of classic cryptographic algorithms. 

Users can input a plaintext message (e.g., "Arbuz") and select an encryption method. The backend PHP logic processes the string according to the chosen algorithm, generates the ciphertext (e.g., "FWGZE"), and logs the record into a MySQL database with a unique ID. Users can later query the database using this ID to retrieve and decrypt the message back to its original form.

### ✨ Key Features
*   **Multiple Cipher Implementations:** The application supports several classic cryptographic methods, including:
    *   Caesar Cipher (*Szyfr Cezara*)
    *   Substitution Cipher (*Szyfr Podstawieniowy*)
    *   Transposition Cipher (*Szyfr Przestawieniowy*)
    *   Fractional Cipher (*Szyfr Ułamkowy*)
*   **Database Integration:** Encrypted messages are securely saved as records in a relational database, allowing for persistent storage and retrieval across sessions.
*   **Automated Decryption:** The system remembers which cipher was applied to which database record, automatically applying the correct reverse-algorithm upon retrieval.

---

## 💻 Tech Stack
*   **Backend:** PHP
*   **Frontend:** HTML, CSS
*   **Database:** MySQL

---

## ⚙️ Installation & Execution (Localhost)

This application requires a local server environment with PHP and MySQL support, such as **XAMPP**.

### Setup Instructions
1.  **Clone the repository** into your local server's root directory (e.g., `C:\xampp\htdocs` for XAMPP):
    ```bash
    cd C:\xampp\htdocs
    git clone https://github.com/AirNicolas54382/Decrypto
    ```
2.  **Database Configuration:**
    *   Start **Apache** and **MySQL** from your XAMPP Control Panel.
    *   Navigate to `http://localhost/phpmyadmin` in your web browser.
    *   Create a new database named exactly **`decrypto`**.
    *   Import the included **`secret.sql`** file into the newly created database to set up the necessary tables.
    *   *Note: Ensure your database connection credentials in the PHP files (usually `localhost`, `root`, and an empty password) match your local setup.*
3.  **Run the Application:**
    *   Open your browser and navigate to the application:
    ```text
    http://localhost/Decrypto-main/1.php
    ```

---

## 👤 Author

*   **GitHub:** [AirNicolas54382](https://github.com/AirNicolas54382)

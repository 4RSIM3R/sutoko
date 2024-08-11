### Sutoko: A Dead Simple Satu Sehat Integration Interface

**Overview:**
Sutoko is an intuitive and straightforward interface designed for seamless integration with Satu Sehat. Unlike previous solutions, Sutoko provides enhanced integration capabilities, allowing for more efficient data handling and communication. It eliminates the need for triggers and manual interventions, offering a more automated approach with the ability to submit, send, and retrieve data smoothly.

**What Makes Sutoko Different:**
- **Enhanced Integration:** Sutoko provides a more robust and seamless integration process without relying on triggers. It automates the submission, sending, and retrieval of data, making the process faster and more reliable.
- **No Need for Virtual Machines:** Unlike previous solutions, Sutoko can run effortlessly on your local machine using XAMPP, eliminating the need for complex VM setups.

**Getting Started with Sutoko:**

1. **Download Sutoko:**
   - [Download Link for Sutoko](#) (Replace this with the actual download link)

2. **Setting Up Sutoko with XAMPP:**
   - **Step 1: Install XAMPP**
     - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
     - After installation, start Apache and MySQL from the XAMPP Control Panel.

   - **Step 2: Setting Up the Project**
     - Extract the Sutoko files into the `htdocs` folder of your XAMPP installation.
     - Open a terminal and navigate to the Sutoko directory, for example: `cd C:\xampp\htdocs\sutoko`.

   - **Step 3: Install Dependencies**
     - Run `composer install` to install the necessary dependencies.

   - **Step 4: Configure the .env File**
     - Copy the `.env.example` file to `.env` using the command `cp .env.example .env`.
     - Open the `.env` file and update the database credentials to match your XAMPP MySQL setup.

     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=sutoko
     DB_USERNAME=root
     DB_PASSWORD=your_password_here

    SATUSEHAT_ENV=PROD
    SATUSEHAT_BASE_URL_PROD=https://api-satusehat.kemkes.go.id
    CLIENTID_PROD=CLIENT_ID
    CLIENTSECRET_PROD=CLIENT_SECRET
    ORGID_PROD=ORG_ID
     ```

   - **Step 5: Generate the Application Key**
     - Run the command `php artisan key:generate` to generate an application key.

   - **Step 6: Migrate and Seed the Database**
     - Run the following commands to migrate and seed the database:

     ```
     php artisan migrate
     php artisan db:seed
     ```

3. **Running Sutoko:**
   - Open your browser and go to `http://localhost/sutoko` to access the Sutoko interface.

4. **Additional Configuration:**
   - Ensure that the required PHP extensions are enabled in your XAMPP setup, such as `openssl`, `pdo_mysql`, `mbstring`, and `tokenizer`.

5. **Support:**
   - For further assistance, check the [documentation](#) (replace this with the actual documentation link) or contact our support team.
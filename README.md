# Phonebook Web Application

A simple **Phonebook** built using **HTML**, **CSS**, and **PHP**, with **XAMPP** as the local server and **MySQL** database to store user entries.

---

## Overview

Lets users register their contact details including:

- First & Last Name
- Address
- Phone Number
- Email
- Gender
- Country

Upon form submission, the data is securely inserted into a MySQL database using **prepared statements**.

---

## Tech Stack

| Technology | Purpose |
|------------|---------|
| HTML       | Structure of the form |
| CSS        | Styling the form and layout |
| PHP        | Backend logic to process form data |
| MySQL      | Database to store contact entries |
| XAMPP      | Local server environment for Apache + MySQL |

---

## 📁 Project Structure

```bash
phonebook/
│
├── index.html         # User input form
├── index.php          # PHP logic to handle form submission
├── indexstyle.css     # Styling for the form
└── phonebook.sql      # SQL schema for the database


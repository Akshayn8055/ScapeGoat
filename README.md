This is a deliberately insecure web application designed for security testing and vulnerability assessment. The site contains multiple security flaws, including SQL Injection, Cross-Site Scripting (XSS), and Missing Security Headers, making it an ideal environment for learning about common web vulnerabilities.

Features & Vulnerabilities
 Login Page (SQL Injection Vulnerability)

The login form does not use prepared statements, making it susceptible to SQL injection attacks.
Attackers can bypass authentication using crafted SQL queries.
 Search Function (SQL Injection Vulnerability)

The search feature allows direct SQL queries with unsanitized input.
Attackers can extract database contents by injecting SQL payloads.
 Comment Section (XSS Vulnerability)

The comment section does not sanitize user input, making it prone to Cross-Site Scripting (XSS).
Attackers can inject malicious scripts that execute on a visitor’s browser.
 No Security Headers

The application lacks essential security headers like Content Security Policy (CSP), X-Frame-Options, and X-XSS-Protection, making it vulnerable to attacks like Clickjacking and XSS.
Deployment
This site is designed for automated deployment using GitHub Actions and Docker. When changes are pushed to the repository, GitHub Actions will:

Build the Docker image containing the vulnerable web app.
Run the container for testing.
This project is for educational and security research purposes only. It should never be deployed in a production environment. 


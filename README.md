# 🏥 Patient Registration API (Technical Challenge)

## 🤖 AI Usage Disclosure
**AI Generation: 0% | Human Written: 100%**

This project was developed entirely manually for a technical challenge. No AI tools (such as Copilot, Cursor, or ChatGPT) were used in writing this code. It serves as a transparent example of my foundational PHP skills, coding standards, and architectural decision-making.

---

## 📌 Overview
This repository contains a focused REST API designed to handle patient registration flows. It was built to demonstrate clean code practices, separation of concerns, and robust request handling within the Laravel ecosystem.

## 🏗️ Architectural Highlights
While the scope of the endpoint is small, I treated it with enterprise-grade standards:
* **Thin Controllers:** The `PatientController` is kept strictly clean, delegating all business logic to external classes.
* **Service Layer Pattern:** Implementation of isolated services (`RegisterPatientService`, `EmailNotificationService`, `SmsNotificationService`) to strictly adhere to the Single Responsibility Principle (SRP).
* **Robust Validation:** Payload validation is handled cleanly via Laravel Form Requests (`PatientRegistrationRequest`) rather than being hardcoded inside the controller.
* **Database Migrations:** Version-controlled database schema definitions to ensure consistent and reproducible database structures across environments.
* **File Handling:** Native and secure handling of document/photo uploads using Laravel's storage facade.

## 🚀 Standard Setup
If you wish to run this project locally:

1. Clone the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and configure your local database.
4. Run `php artisan key:generate`.
5. Run `php artisan migrate`.
6. Start the local server with `php artisan serve`.

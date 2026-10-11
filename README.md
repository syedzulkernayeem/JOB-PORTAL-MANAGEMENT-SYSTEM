# 🧑‍💼 Job Portal Management System

A full-stack **PHP + MySQL** job portal where candidates browse and apply to jobs,
upload CVs, and track their application status, while administrators manage
listings and review candidates from a dedicated admin panel.

> 🎓 **University Course Project** &middot; **CSE384.12 — Database Design Lab**
> **Southeast University** &middot; Department of Computer Science &amp; Engineering

---

## ✨ Features

### Public / Candidate side
- 📋 Browse all open job listings, filter by category &amp; skill keyword
- 👤 Self-registration &amp; secure login (`password_hash` / `password_verify`)
- 📝 Apply to jobs with cover letter &amp; resume upload (PDF / DOC / DOCX)
- 📬 Application tracking by **Application ID** &mdash; see live status
- ✅ Accept / decline an offer &amp; download a printable **Appointment Letter**

### Admin panel (`/admin`)
- 🔐 Dedicated admin authentication (independent `admins` table)
- 📊 Dashboard: total users, jobs, applications by status
- ➕ Create / edit / delete job posts
- 🗂 Manage categories
- 🧑‍💻 Manage job seekers &amp; their resumes
- 🔄 Update application status (Pending &rarr; Shortlisted &rarr; Accepted / Rejected)

### Database
- 🗄 **7 normalised tables** with full FK referential integrity (`ON DELETE CASCADE`)
- 🔁 Transactional INSERTs across 4 tables for application submission
- 👀 Reusable SQL Views &amp; Indexes for reporting (see `Final_Queries.html`)

---

## 🧰 Tech Stack

| Layer    | Technology |
|----------|------------|
| Backend  | PHP 8.x (procedural, MySQLi prepared statements) |
| Database | MySQL / MariaDB 10 (InnoDB) |
| Server   | Apache (XAMPP) |
| Frontend | HTML5 + custom CSS3 (responsive grid + cards) + vanilla JS |
| Auth     | Server-side sessions + bcrypt password hashing |

---

## 🗂 Project Structure

```
job/
├─ config/        # Database connection (database.php)
├─ includes/      # Shared header.php / footer.php / auth.php / functions.php
├─ admin/         # Admin sub-application (login, dashboard, status update)
├─ assets/
│   ├─ css/       # style.css
│   ├─ js/        # app.js
│   └─ img/       # logos &amp; icons
├─ uploads/       # Candidate resume files (git-ignored, git-kept placeholder)
├─ docs/          # GitHub Pages site
├─ database.sql   # Full schema + sample seed data
├─ ENTITY-MAPPING.txt
├─ index.php      # Public landing page
├─ jobs.php       # Job board with search
├─ categories.php # Category list / admin reference
├─ apply.php      # Application form
├─ save_application.php   # Transactional application insert
├─ tracking.php   # Track by Application ID
├─ accept_job.php # Candidate accept / decline
├─ appointment_letter.php # Printable letter
├─ users.php / job_seekers.php / resumes.php
├─ Final_Queries.html     # 📚 22 documented SQL queries (this submission)
├─ Job_Portal_Proposal.pdf # A4 proposal
├─ LICENSE
└─ GITHUB_UPLOAD_GUIDE.md  # Step-by-step push instructions
```

---

## 🚀 Installation (XAMPP)

1. **Copy** this folder into `C:\xampp\htdocs\`.
2. **Start** XAMPP &rarr; click *Start* next to **Apache** &amp; **MySQL**.
3. **Create the DB:** open <http://localhost/phpmyadmin> &rarr; *Import* &rarr;
   pick `database.sql` &rarr; *Go*. The schema `job_portal_db` is created with
   sample data.
4. **Configure connection** (only if your XAMPP has a non-default password) &mdash;
   edit `config/database.php` and update host / user / pass.
5. **Visit** <http://localhost/job/> in your browser.

---

## 🔐 Default Admin

| Field    | Value                  |
|----------|------------------------|
| Email    | `admin@jobportal.local` |
| Password | _(bcrypt hash in DB)_   |

Change this in phpMyAdmin **before deploying anywhere public**.

---

## 🗄 Database Schema (7 tables)

```
users ──┬── job_seekers ── resumes ──┐
        │                            │
        │                            ▼
        └── (auth)              applications ◀──┐
                                              │
categories ──── jobs ─────────────────────────┘
admins (standalone)
```

See `database.sql` for the canonical DDL and `Final_Queries.html` for 22
real queries (joins, aggregates, subqueries, transactions, views, indexes).

---

## 📦 Project Deliverables

| File | Purpose |
|------|---------|
| `Job_Portal_Proposal.pdf` | A4 project proposal (12 sections + ER diagram) |
| `Final_Queries.html` | 22 documented SQL queries across 8 categories |
| `database.sql` | Schema + seed data |
| `docs/index.html` | GitHub Pages landing page |
| `GITHUB_UPLOAD_GUIDE.md` | Step-by-step push to GitHub |

---

## 👥 Project Team

| ID | Name |
|----|------|
| 2023100010139 | **Syed Assaduzzaman** |
| 2023100010141 | **Syed Zulker Nayeem** |

**Course:** CSE384.12 &mdash; Database Design Lab
**Instructor:** Shoeb Mohammad Shahriar [SHSH]
**Department of Computer Science and Engineering**
**Southeast University**

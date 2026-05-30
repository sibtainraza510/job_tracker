# 🗺️ Job Tracker - Complete Routes & Pages Guide

## Quick Navigation Links

All pages are accessible from the navigation bar at the top. Click any link to navigate.

---

## 📍 All Available Routes & Pages

### **Public Pages** (No Login Required)

| Route | URL | Description |
|-------|-----|-------------|
| **Welcome/Home** | `/` | Public landing page with login/register options |
| **Login** | `/login` | User login page |
| **Register** | `/register` | User registration page |
| **Password Reset** | `/forgot-password` | Forgot password form |
| **Verify Email** | `/verify-email` | Email verification prompt |

---

### **Authenticated Pages** (Login Required)

#### Dashboard & Overview
| Route | URL | Description |
|-------|-----|-------------|
| **Dashboard** | `/dashboard` | Main dashboard with statistics and quick actions |

#### Job Applications (CRUD Operations)
| Route | URL | Method | Description |
|-------|-----|--------|-------------|
| **List All Jobs** | `/jobs` | GET | View all your job applications with pagination |
| **Create Job Form** | `/jobs/create` | GET | Form to create a new job application |
| **Store Job** | `/jobs` | POST | Submit new job (form action) |
| **View Job Details** | `/jobs/{id}` | GET | See full details of a specific job |
| **Edit Job Form** | `/jobs/{id}/edit` | GET | Edit form for an existing job |
| **Update Job** | `/jobs/{id}` | PATCH | Submit job updates (form action) |
| **Delete Job** | `/jobs/{id}` | DELETE | Remove a job application |

#### User Profile
| Route | URL | Method | Description |
|-------|-----|--------|-------------|
| **Edit Profile** | `/profile` | GET | Edit user account details |
| **Update Profile** | `/profile` | PATCH | Submit profile changes (form action) |
| **Delete Account** | `/profile` | DELETE | Permanently delete user account |

#### Authentication
| Route | URL | Method | Description |
|-------|-----|--------|-------------|
| **Logout** | `/logout` | POST | Sign out from account |

---

## 🧭 Navigation Bar Quick Reference

The **blue navigation bar** at the top has these buttons:

| Button | Goes To | For |
|--------|---------|-----|
| 🏠 **Home** | `/` | Public welcome page |
| **📊 Dashboard** | `/dashboard` | Overview and statistics |
| **💼 My Jobs** | `/jobs` | View all applications |
| **➕ New Job** | `/jobs/create` | Add new job |
| **👤 Profile** | `/profile` | Edit your account |
| **🚪 Logout** | `/logout` | Sign out |

*(Buttons change based on login status)*

---

## 🎯 How to Use Each Page

### **1️⃣ Dashboard** (`/dashboard`)
- **Purpose:** Overview of your job tracking activity
- **Shows:** Statistics, recent applications, quick actions
- **Quick Actions:** Create job, view jobs, edit profile
- **Access:** Click "📊 Dashboard" in navbar

### **2️⃣ My Jobs - List** (`/jobs`)
- **Purpose:** See all your job applications
- **Shows:** Table with title, company, status, date, action links
- **Features:** Pagination (10 per page), search
- **Access:** Click "💼 My Jobs" in navbar

### **3️⃣ Create New Job** (`/jobs/create`)
- **Purpose:** Add a new job application
- **Required Fields:** 
  - Job Title
  - Company Name
  - Status (Pending, Applied, Interview, Rejected, Offer)
- **Optional Fields:**
  - Location
  - Salary (USD)
- **Access:** Click "➕ New Job" in navbar or button on dashboard

### **4️⃣ View Job Details** (`/jobs/{id}`)
- **Purpose:** See complete information about one job
- **Shows:** Title, company, location, salary, status, interview rounds, skills, notes
- **Actions:** Edit button, Delete button, Back button
- **Access:** Click "View" link from jobs list

### **5️⃣ Edit Job** (`/jobs/{id}/edit`)
- **Purpose:** Update job application details
- **Editable Fields:** Title, company, location, salary, status
- **Access:** Click "Edit Job" button from job details page

### **6️⃣ Profile** (`/profile`)
- **Purpose:** Manage user account
- **Updates:** Name, email, password
- **Danger Zone:** Delete account option
- **Access:** Click "👤 Profile" in navbar

---

## 📊 Job Status Options

When creating or updating a job, choose one of these statuses:

- **Pending** - Not yet applied
- **Applied** - Application submitted
- **Interview** - In interview stage
- **Rejected** - Application rejected
- **Offer** - Received offer

---

## 🔄 Typical Workflow

1. **Login/Register** at `/login` or `/register`
2. **Go to Dashboard** to get an overview
3. **Create New Job** via "➕ New Job" button
4. **View Job Details** to see full information
5. **Edit Job** as status changes through stages
6. **Track Progress** on dashboard with statistics
7. **Manage Profile** via "👤 Profile"

---

## 💡 Tips

- **Navigation Bar** is available on every page at the top
- **All buttons are clickable** - just point and click
- **Status Updates** - keep status updated as you progress through hiring process
- **Search Jobs** - find specific jobs on the list page
- **Recent Applications** - see last 5 applications on dashboard

---

## 🆘 Need Help?

- All form fields are clearly labeled
- Required fields marked with red **\*** asterisk
- Error messages appear below form fields
- Success messages appear at top of page

**Enjoy using Job Tracker! 🚀**

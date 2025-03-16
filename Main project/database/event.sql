USE college_event_management;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    reg_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    city VARCHAR(50),
    college VARCHAR(100),
    current_year INT,
    branch VARCHAR(50),
    course VARCHAR(100),
    eligibility_criteria TEXT,
    user_type ENUM('student', 'coordinator', 'teacher') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Certificate Templates Table
CREATE TABLE IF NOT EXISTS certificate_templates (
    template_id INT AUTO_INCREMENT PRIMARY KEY,
    template_name VARCHAR(100) NOT NULL,
    template_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Events Table
CREATE TABLE IF NOT EXISTS events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    event_date DATETIME NOT NULL,
    location VARCHAR(100),
    registration_fee DECIMAL(10, 2) DEFAULT 0.00,
    is_certificate_available BOOLEAN DEFAULT FALSE,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(reg_id)
);

-- Registrations Table
CREATE TABLE IF NOT EXISTS registrations (
    registration_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    event_id INT,
    payment_status ENUM('pending', 'completed', 'failed') NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(reg_id),
    FOREIGN KEY (event_id) REFERENCES events(event_id)
);

-- Payments Table
CREATE TABLE IF NOT EXISTS payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    registration_id INT,
    amount DECIMAL(10, 2) NOT NULL,
    payment_method ENUM('credit_card', 'debit_card', 'net_banking', 'upi') NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('success', 'failed', 'pending') NOT NULL,
    FOREIGN KEY (registration_id) REFERENCES registrations(registration_id)
);

-- Certificates Table
CREATE TABLE IF NOT EXISTS certificates (
    certificate_id INT AUTO_INCREMENT PRIMARY KEY,
    registration_id INT,
    template_id INT,
    issued_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (registration_id) REFERENCES registrations(registration_id) ON DELETE CASCADE,
    FOREIGN KEY (template_id) REFERENCES certificate_templates(template_id) ON DELETE CASCADE
);

-- Competitions Table
CREATE TABLE IF NOT EXISTS competitions (
    competition_id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    winner_id INT,
    prize VARCHAR(100),
    FOREIGN KEY (event_id) REFERENCES events(event_id) ON DELETE CASCADE,
    FOREIGN KEY (winner_id) REFERENCES users(reg_id) ON DELETE SET NULL
);

-- Seminars Table
CREATE TABLE IF NOT EXISTS seminars (
    seminar_id INT AUTO_INCREMENT PRIMARY KEY,
    seminar_name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    seminar_date DATETIME NOT NULL,
    created_by INT,
    is_certificate_available BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(reg_id) ON DELETE CASCADE
);

-- Notifications Table
CREATE TABLE IF NOT EXISTS notifications (
    notification_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(reg_id) ON DELETE CASCADE
);

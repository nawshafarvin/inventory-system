# Login Trace – Inventory Management System

## 1. Files Used

| File | Purpose |
|---|---|
| routes/web.php | Defines login routes |
| LoginController.php | Handles login and logout |
| login.blade.php | Displays the login form |
| User.php | Handles user authentication data |
| users table | Stores user details and hashed passwords |

## 2. Login Process

1. User opens the login page.
2. The login form displays email and password fields.
3. User enters email and password.
4. The form sends a POST request to `/login`.
5. LoginController receives the request.
6. Auth::attempt() checks the email and password.
7. If credentials are correct, the session ID is regenerated.
8. User is redirected to the products page.
9. If credentials are incorrect, an error message is displayed.

## 3. Logout Process

1. User clicks the Logout button.
2. Auth::logout() logs out the user.
3. The current session is invalidated.
4. A new CSRF token is generated.
5. User is redirected to the login page.

## 4. Login Testing Results

| Test | Result |
|---|---|
| Correct email and password | Passed |
| Incorrect password | Passed |
| Logout functionality | Passed |

## 5. Password Security

- Laravel password hashing is used.
- Passwords are stored as hashes.
- Password and remember token are hidden during serialization.
- Session regeneration is used after successful login.
- CSRF protection is enabled in the login form.

## Conclusion

The login and logout processes were tested successfully. Password hashing and session security features were also checked.v
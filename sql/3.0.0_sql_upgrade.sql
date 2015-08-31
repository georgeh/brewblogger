ALTER TABLE users ADD roles VARCHAR(128);
UPDATE users SET roles='ROLE_ADMIN' WHERE userLevel=1;
UPDATE users SET roles='ROLE_USER' WHERE userLevel=2;

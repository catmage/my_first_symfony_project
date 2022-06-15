CREATE USER 'admin_villagegreen'@'localhost' IDENTIFIED BY 'AZEnbv9?';

GRANT ALL PRIVILEGES ON villagegreen.*
TO 'admin_villagegreen' 
IDENTIFIED BY 'AZEnbv9?'

-- Ne fonctionne qu'avec MySQL 8:

CREATE ROLE 'r_villagegreen_admin'@'localhost'


GRANT ALL 
ON villagegreen.* 
TO 'r_villagegreen_admin'@'localhost'

GRANT r_villagegreen_admin 
TO 'admin_villagegreen'@'localhost'




UPDATE 'user' SET 'roles' = '[\"ROLE_ADMIN\"]' 
WHERE 'user'.'email' = 'admin@villagegreen.com';
SELECT * FROM login_history 
WHERE DAYNAME(login_time) = "Wednesday" 
and MONTHNAME(login_time) = 'September' 
and YEAR(login_time) = 2012
and login_action=2 
GROUP BY `user_id` 
ORDER BY COUNT(*) DESC LIMIT 1


SELECT * FROM login_history 
and MONTHNAME(login_time) = "$month" 
and YEAR(login_time) = "$year"
and login_action=2 
GROUP BY `user_id` 
ORDER BY COUNT(*) DESC LIMIT 1


SELECT user_id, 
SUM(login_action = 1 ) AS total_logins,  
SUM(login_action = 2) AS total_logouts 
FROM login_history 
GROUP by user_id

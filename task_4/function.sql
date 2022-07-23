SELECT clasess.id, clasess.title, COUNT(students.id) AS student_count FROM clasess AS c
JOIN students_classes AS sc ON sc.class_id = c.id
JOIN students AS s ON s.id = sc.student_id
GROUP BY s.id;
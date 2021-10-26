USE gssi;

-- PART 3-A. Get all data of highest paid employees
SELECT * FROM ((employees INNER JOIN salary ON employees.salary_id = salary.salary_id) INNER JOIN departments ON employees.department_id = departments.department_id)
WHERE salary = (SELECT MAX(salary) FROM salary);

-- PART 3-B. Get all employees that are hired from 2017-2018
SELECT * FROM employees WHERE date_hired BETWEEN '2017-01-01' AND '2018-12-31';

-- PART 3-C. Get all employees that belongs to IT department AND hired 2018 onwards
SELECT * FROM employees INNER JOIN departments ON employees.department_id = departments.department_id WHERE date_hired >= '2018-01-01' AND department = 'IT';
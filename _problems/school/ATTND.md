---
category_name: school
problem_code: ATTND
problem_name: Attendance
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 25-04-2019
tags:
    - brute
    - cakewalk
    - kingofnumbers
    - ltime71
    - maps
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ATTND'
time:
    view_start_date: 1556384402
    submit_start_date: 1556384402
    visible_start_date: 1556384402
    end_date: 1735669800
    current: 1559472922
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME71/hindi/ATTND.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME71/bengali/ATTND.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME71/mandarin/ATTND.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME71/russian/ATTND.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME71/vietnamese/ATTND.pdf) as well. Chef is teaching a cooking course. There are $N$ students attending the course, numbered $1$ through $N$. Before each lesson, Chef has to take attendance, i.e. call out the names of students one by one and mark which students are present. Each student has a first name and a last name. In order to save time, Chef wants to call out only the first names of students. However, whenever there are multiple students with the same first name, Chef has to call out the full names (both first and last names) of all these students. For each student that does not share the first name with any other student, Chef may still call out only this student's first name. Help Chef decide, for each student, whether he will call out this student's full name or only the first name. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each valid $i$, the $i$-th of the following $N$ lines contains two space-separated strings denoting the first and last name of student $i$. ### Output For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should describe how Chef calls out the $i$-th student's name ― it should contain either the first name or the first and last name separated by a space. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 100$ - all first and last names contain only lowercase English letters - the lengths of all first and last names are between $1$ and $10$ inclusive ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 4 hasan jaddouh farhod khakimiyon kerim kochekov hasan khateeb ``` ### Example Output ``` hasan jaddouh farhod kerim hasan khateeb ```

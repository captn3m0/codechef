---
category_name: school
problem_code: NW1
problem_name: 'Days in Month'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - kotlin
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: abx_2109
problem_tester: kingofnumbers
date_added: 30-10-2017
tags:
    - abx_2109
    - ad
    - cakewalk
    - ltime55
editorial_url: 'https://discuss.codechef.com/problems/NW1'
time:
    view_start_date: 1514653200
    submit_start_date: 1514653200
    visible_start_date: 1514653200
    end_date: 1735669800
    current: 1514816562
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME55/mandarin/NW1.pdf), [Russian](http://www.codechef.com/download/translated/LTIME55/russian/NW1.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME55/vietnamese/NW1.pdf) as well.

RJ is a very curious observer. On the first day of every month, he tries to figure out, for each of the seven days of the week, how many times that day occurs in the current month.

RJ got confused so badly doing this that he asks for your help! He asks several queries; in each query, he gives you the number of days in the current month and which day of the week is on the 1st of the current month.

For each query, you should tell him how many times each day of the week occurs.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains an integer **W** and a string **S**, separated by a space.
- **W** denotes the number of days in the current month.
- **S** is one of the strings "mon", "tues", "wed", "thurs", "fri", "sat" or "sun", denoting the day of the week on the 1st of the current month.

### Output

For each query, print seven space-separated integers denoting the number of occurrences of Monday, Tuesday, Wednesday, Thursday, Friday, Saturday and Sunday.

### Constraints

- 1 ≤ **T** ≤ 103
- 28 ≤ **W** ≤ 31

### Subtasks

**Subtask #1 (20 points):** **W** = 28

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

2
28 mon
31 wed

<b>Output:</b>

4 4 4 4 4 4 4
4 4 5 5 5 4 4
</pre>
### Example

**Example case 2:** There are 4 Mondays, 4 Tuesdays, 5 Wednesdays, 5 Thursdays, 5 Fridays, 4 Saturdays and 4 Sundays.

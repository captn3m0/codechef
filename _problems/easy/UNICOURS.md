---
category_name: easy
problem_code: UNICOURS
problem_name: 'Courses in an university'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
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
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 4-05-2017
tags:
    - admin2
    - long
    - may17
editorial_url: 'https://discuss.codechef.com/problems/UNICOURS'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284416
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/UNICOURS.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/UNICOURS.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/UNICOURS.pdf) as well.

There are **n** courses in a university being offered. These courses are numbered from 1 to **n** in the increasing order of their difficulty. For each course, you can have some courses as prerequisites. The prerequisite courses for a course should be of lower difficulty than it. You are given an array **a** of size **n**, where **a**i denotes that there should be at least **a**i prerequisite courses for i-th course.

The university wants to estimate the efficiency of the allocation of prerequisites of courses by maximizing the number of courses that are not prerequisites for any other course. Find out what's the maximum such number of courses possible. It is guaranteed that **a**i

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **n**.

The second line of each test case contains **n** space separated integers denoting array **a**.

### Output

For each test case, output a single line containing an integer corresponding to the maximum number of possible courses which are not prerequisite for any other course.

### Constraints

- **1** ≤ **T** ≤ **10**
- 1 ≤ **n** ≤ 105
- 0 ≤ **a**i

### Subtasks

- **Subtask #1** (40 points) : 1 ≤ **n** ≤ 100
- **Subtask #2** (60 points) : original constraints

### Example

<pre><b>Input:</b>
2
3
0 1 1
3
0 1 2

<b>Output:</b>
2
1
</pre>
### Explanation

**Example case 1.** Both the courses 2 and 3 can have course 1 as a prerequisite. In this case, course 2 and course 3 are not prerequisites for any course. So, we have two such courses.

Other possibility could be following. Course 2 has course 1 as a prerequisite, and course 3 has course 2 as a prerequisite. Thus only course 3 is the only course that is not the prerequisite of any other course.

Thus answer is 2.

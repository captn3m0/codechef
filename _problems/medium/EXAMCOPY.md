---
category_name: medium
problem_code: EXAMCOPY
problem_name: 'Exam Copy'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: wittyceaser
problem_tester: null
date_added: 23-06-2016
tags:
    - wittyceaser
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493557641
layout: problem
---
All submissions for this problem are available.**N** students were giving an examination. The students were sitting in a line from **1** to **N** in order. The **ith** student had knowledge **ki** in the subject on which the exam was being conducted. Every student is not confident about his own preparation, so each student wants to find some students (possibly zero), from whom they can copy the answers. Student **i** can copy from student **j** only if **kj** &gt; **ki**.There are **M** teachers who are the exam checkers - **jth** checker will check the answer-sheets of some continuosly sitting students from the index **Li** to **Ri** inclusive. All the students got this information before hand, so they decided that they won't copy the solutions from a person whose answer-sheet is being checked by the same checker as that of himself. Also, each student can see only up to distance **D**, so a student at index **i**, can copy solutions of students in the range **i - D** to **i + D**, both inclusive. From all the candidate students from which a student can copy, the student will copy from the most knowledgeable students.

For each student, print the knowledge of the student(s) from whom he can copy, as well as the number of such students.
If a certain student can not copy, print **"-1"**.

### Input

First line contains 2 space-separated positive integers - **N** and **M** - the total number of students and the number of exam checkers respectively.

Second line contains **N** space-separated integers, where the **ith** integer represents the knowledge of the **ith** student.

**M** lines follow - each line contains 2 space-separated integers - **Lj** and **Rj**, representing the continuous range of indexes whose answer sheet will be checked by the **jth** checker.

The **(M + 3)th** line contains a single integer **D** - the distance upto which each student can see for copying answers.

### Output

Print **N** lines, where **ith** line represents the answer for **ith** student.

On each line, print the knowledge of the student(s) from whom the **ith** student can copy as per the rule mentioned in the statement, and the number of such students, separated by a space.

If the student can not copy from any student, print **"-1"** (without the quotes).

### Constraints

1 ≤ **N** ≤ 10^5

1 ≤ **M** ≤ **N** 

1 ≤ **ki** ≤ 10^8

1 ≤ **Lj** ≤ **Rj** ≤ **N**

1 ≤ **D** ≤ **N**

### Subtasks

Subtask 1: 20 points

**N** ≤ 100



Subtask 2: 20 points

**N** ≤ 1000 



Subtask 3: 60 points

No additional constraint

### Example

**Input**

<pre>
10 5
1 2 1 2 1 2 2 1 2 3
1 2
3 4
5 6
7 8
9 10
2
</pre>


**Output**

<pre>
-1
-1
2 1
-1
2 2
-1
-1
3 1
-1
-1
</pre>
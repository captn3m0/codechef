---
category_name: easy
problem_code: CNTFAIL
problem_name: 'Magic School'
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
problem_author: bipin2
problem_tester: null
date_added: 20-12-2018
tags:
    - bipin2
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.It's year 2018 and it's Christmas time! Before going for vacations, students of Hogwarts School of Witchcraft and Wizardry had their end semester exams. $N$ students attended the semester exam. Once the exam was over, their results were displayed as either "Pass" or "Fail" behind their magic jacket which they wore. A student cannot see his/her result but can see everyone else's results. Each of $N$ students count the number of passed students they can see. Given the number of "Pass" verdicts that each of the $N$ students counted, we have to figure out conclusively, the number of students who failed, or report that there is some inconsistency or that we cannot be sure. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - The first line of each test case will contain $N$, representing the number of students who attended the exam. - Next line contains $N$ spaced integers representing the number of "Pass" counted by each of the $N$ students. ###Output: - For each test case, output the answer in a single line. - If the counts reported by the students are not consistent with each other or if it's not possible to predict the number of failed students from the given input, then print -1. ###Constraints - $1 \\leq T \\leq 50$ - $1 \\leq N \\leq 10^{5}$ - $0 \\leq$ Count given by each Student $\\leq 10^{5}$ ###Sample Input: ``` 1 4 3 2 2 2 ``` ###Sample Output: ``` 1 ``` ###EXPLANATION: There are 4 students, and they counted the number of passed students as 3,2,2,2. The first student can see that all others have passed, and all other students can see only 2 students who have passed. Hence, the first student must have failed, and others have all passed. Hence, the answer is 1.

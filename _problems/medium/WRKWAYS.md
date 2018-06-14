---
category_name: medium
problem_code: WRKWAYS
problem_name: 'Ways to Work'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sanroylozan
problem_tester: mgch
date_added: 11-05-2018
tags:
    - combinatorics
    - factorization
    - june18
    - likecs
    - medium
    - observsations
    - sanroylozan
    - sanroylozan
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985563
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/WRKWAYS.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/WRKWAYS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/WRKWAYS.pdf) as well.

Chef is working at his dream workplace with $N-1$ of his friends! Like any dream workplace, this one also has dream work conditions. To ensure absolute happiness of the employees, there are the following rules at the company: - Each worker works on exactly one day! You heard it right: no more, no less. - On each day, at most one worker may work. This provides the perfect work conditions: no crowd, just the work and you. - Every worker has a \*deadline\*; let's denote the deadline of the $i$-th worker by $d\_i$. (This means that the day on which the $i$-th worker works must not be later than day $d\_i$; the days are numbered starting from $1$.) You thought there weren't any limitations, eh? However, sooner or later, all dream workplaces have to fall. The CLO (Chefland Labour Office) demands that there should be exactly $C$ ways to schedule the work such that the above conditions are fulfilled. Two schedulings are different if there is an employee that works at different days in these schedulings. Chef is asking for your help, since he can't spare any workdays at this company. You should find a sequence of employees' deadlines $d\_1 \\le d\_2 \\le \\dots \\le d\_N$ such that there are exactly $C$ ways to schedule the work. If there are multiple sequences satisfying this condition, do another little favour for Chef: minimise $d\_N$ (his deadline). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $C$. ### Output For each test case, print a single line containing $N$ space-separated integers $d\_1, d\_2, \\dots, d\_N$ that describe your chosen sequence. If there are multiple sequences satisfying all conditions, you may output any one. ### Constraints - $1 \\le T \\le 100$ - the sum of $N$ over all test cases does not exceed $10^7$ - $1 \\le C \\le 10^9$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le N \\le 10$ - $1 \\le C \\le 100$ \*\*Subtask #2 (20 points):\*\* $1 \\le N \\le 100$ \*\*Subtask #3 (70 points):\*\* $1 \\le N \\le 10^6$ ### Example Input ``` 1 2 12 ``` ### Example Output ``` 4 4 ``` ### Explanation \*\*Example case 1:\*\* Each worker can work on any day from day $1$ to day $4$. The 12 possible schedulings (pairs of days on which they work) are $\[1, 2\]$, $\[1, 3\]$, $\[1, 4\]$, $\[2, 3\]$, $\[2, 4\]$, $\[3, 4\]$, $\[2, 1\]$, $\[3, 1\]$, $\[4, 1\]$, $\[3, 2\]$, $\[4, 2\]$, $\[4, 3\]$.

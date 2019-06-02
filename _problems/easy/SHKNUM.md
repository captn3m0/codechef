---
category_name: easy
problem_code: SHKNUM
problem_name: 'Sheokand and Number'
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
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: jitendersheora
problem_tester: null
date_added: 28-07-2018
tags:
    - aug18
    - binary
    - jitendersheora
    - jitendersheora
    - likecs
    - precomputation
    - simple
editorial_url: 'https://discuss.codechef.com/problems/SHKNUM'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/SHKNUM.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/SHKNUM.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/SHKNUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/SHKNUM.pdf) as well.

Sheokand is good at mathematics. One day, to test his math skills, Kaali gave him an integer $N$. To impress Kaali, Sheokand has to convert $N$ into an integer $M$ that can be represented in the form $2^x + 2^y$ (where $x$ and $y$ are non-negative integers such that $x \\neq y$). In order to do that, he can perform two types of operations: - add $1$ to $N$ - subtract $1$ from $N$ However, Sheokand is preparing for his exams. Can you help him find the minimum number of operations required to convert $N$ into a valid integer $M$? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each testcase contains a single integer $N$. ### Output For each test case, print a single line containing one integer — the minimum required number of operations. ### Constraints - $1 \\le T \\le 100,000$ - $1 \\le N \\le 10^9$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le T \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 3 10 22 4 ``` ### Example Output ``` 0 2 1 ``` ### Explanation \*\*Example case 1:\*\* $N=10$ is already in the form $2^x + 2^y$, with $x=3$ and $y=1$. \*\*Example case 2:\*\* $N=22$ can be converted into $M=20=2^2+2^4$ or $M=24=2^3+2^4$ in two operations. \*\*Example case 3:\*\* $N=4$ can be converted into $M=3=2^0+2^1$ or $M=5=2^0+2^2$ in one operation.

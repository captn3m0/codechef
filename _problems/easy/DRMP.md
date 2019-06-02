---
category_name: easy
problem_code: DRMP
problem_name: 'Dream Problem'
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
problem_author: mrkerim
problem_tester: null
date_added: 24-04-2019
tags:
    - easy
    - ltime71
    - mrkerim
    - number
    - pruning
    - recursion
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/DRMP'
time:
    view_start_date: 1556384402
    submit_start_date: 1556384402
    visible_start_date: 1556384402
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME71/hindi/DRMP.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME71/bengali/DRMP.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME71/mandarin/DRMP.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME71/russian/DRMP.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME71/vietnamese/DRMP.pdf) as well. Gorodetskiy is a university student. He is really good at math and really likes solving engaging math problems. In the last exam, his professor gave him really hard math problems to solve, but Gorodetskiy could not solve them and failed the exam, so the professor told him: "These problems are a piece of cake, you should know them from school!" Here is one of the problems from the exam - you can decide if it really was an easy problem or not. You are given a positive integer $M$. Let's call a positive integer $A$ an \*interesting number\* if there is at least one integer $B$ ($A \\le B$) such that $A \\cdot B$ is divisible by $M$ and $\\frac{A \\cdot B}{M} = A+B$. Find all interesting numbers. Let's denote the number of such integers by $K$; it is guaranteed that $K \\le 3\*10^5$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $M$. ### Output For each test case: - First, print a line containing a single integer $K$. - Then, print $K$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the $i$-th interesting number in increasing order. ### Constraints - $1 \\le T \\le 10$ - $1 \\le M \\le 10^{14}$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le M \\le 100$ \*\*Subtask #2 (20 points):\*\* $1 \\le M \\le 10^7$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 2 3 6 ``` ### Example Output ``` 2 4 6 5 7 8 9 10 12 ``` ### Explanation \*\*Example case 1:\*\* There are two interesting numbers, $4$ and $6$. For $A = 4$, we can choose $B = 12$ and for $A = 6$, we can choose $B = 6$.

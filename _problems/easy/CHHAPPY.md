---
category_name: easy
problem_code: CHHAPPY
problem_name: 'Chef and Happiness'
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
problem_author: mgch
problem_tester: null
date_added: 1-11-2018
tags:
    - data
    - implementation
    - mgch
    - nov18
    - simple
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHHAPPY'
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/CHHAPPY.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/CHHAPPY.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/CHHAPPY.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/CHHAPPY.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/CHHAPPY.pdf) as well. "What do you know about happiness?" — Yoda Chef is happy only if three conditions hold: - Chef finished cooking a delicious meal - Chef got AC for a programming problem with an almost correct code - Chef got a new problem with a sequence of integers Today, all three conditions are satisfied. Chef would like you to feel his happiness and provide him with a solution for this new problem with a sequence of integers. The problem is as follows. You are given a sequence $A\_1, A\_2, \\dots, A\_N$. You need to determine if it is possible to choose two indices $i$ and $j$ such that $A\_i \\neq A\_j$, but $A\_{A\_i}$ = $A\_{A\_j}$. (If it was possible, Chef would be truly happy.) ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing the string `"Truly Happy"` if it is possible to choose required indices or `"Poor Chef"` otherwise. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le N$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (27 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #2 (73 points):\*\* original constraints ### Example Input ``` 4 4 1 1 2 3 4 2 1 3 3 5 5 4 4 3 1 5 3 2 1 1 4 ``` ### Example Output ``` Truly Happy Poor Chef Poor Chef Truly Happy ``` ### Explanation \*\*Example case 1:\*\* Chef is truly happy because $A\_{A\_3} = A\_{A\_1}$ and $A\_3 \\neq A\_1$. \*\*Example case 2:\*\* There is no pair of indices which would make Chef truly happy. For instance, $A\_{A\_3} = A\_{A\_4}$, but $A\_3 = A\_4$,

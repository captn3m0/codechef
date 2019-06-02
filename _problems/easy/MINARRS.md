---
category_name: easy
problem_code: MINARRS
problem_name: 'Minimum Sum'
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
date_added: 26-04-2019
tags:
    - bitwise
    - easy
    - greedy
    - kingofnumbers
    - ltime71
    - observations
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/MINARRS'
time:
    view_start_date: 1556384402
    submit_start_date: 1556384402
    visible_start_date: 1556384402
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME71/hindi/MINARRS.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME71/bengali/MINARRS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME71/mandarin/MINARRS.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME71/russian/MINARRS.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME71/vietnamese/MINARRS.pdf) as well. You are given a sequence of non-negative integers $A\_1, A\_2, \\ldots, A\_N$. At most once, you may choose a non-negative integer $X$ and for each valid $i$, change $A\_i$ to $A\_i \\oplus X$ ($\\oplus$ denotes bitwise XOR). Find the minimum possible value of the sum of all elements of the resulting sequence. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer ― the minimum possible sum. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $1 \\le N \\le 10^3$ - $1 \\le A\_i \\le 10^3$ for each valid $i$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 3 5 2 3 4 5 6 4 7 7 7 7 3 1 1 3 ``` ### Example Output ``` 14 0 2 ``` ### Explanation \*\*Example case 1:\*\* If we choose $X = 6$, the sequence becomes $(4, 5, 2, 3, 0)$. \*\*Example case 2:\*\* We can choose $X = 7$ to make all elements of the resulting sequence equal to $0$. \*\*Example case 3:\*\* We can choose $X = 1$. The sequence becomes $(0, 0, 2)$, with sum $2$.

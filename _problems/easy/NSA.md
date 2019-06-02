---
category_name: easy
problem_code: NSA
problem_name: 'No Strings Attached'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: anuj_2106
problem_tester: null
date_added: 3-07-2018
tags:
    - anuj_2106
    - easy
    - july18
editorial_url: 'https://discuss.codechef.com/problems/NSA'
time:
    view_start_date: 1531733410
    submit_start_date: 1531733410
    visible_start_date: 1531733410
    end_date: 1735669800
    current: 1559472953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JULY18/mandarin/NSA.pdf), [Russian](http://www.codechef.com/download/translated/JULY18/russian/NSA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY18/vietnamese/NSA.pdf) as well.

You are given a string $S$ of lowercase English letters with length $N$. You are allowed to (but don't have to) choose one index in this string and change the letter at this index to any other lowercase English letter. The cost of this operation is the absolute value of the difference of ASCII values of the new letter and the original letter; let's denote it by $X$. Next, consider the number of pairs of indices $(i, j)$ in the resulting string (the string after changing one letter, or the original string if no letter was changed) such that $1 \\le i \\lt j \\le N$ and $S\_i \\lt S\_j$. Let's denote it by $Y$. Find the minimum possible value of $X+Y$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single string $S$. ### Output For each test case, print a single line containing one integer — the minimum value of $X+Y$. ### Constraints - $1 \\le T \\le 20$ - $1 \\le N \\le 10^5$ - $S$ contains only lowercase English letters ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 50$ \*\*Subtask #2 (20 points):\*\* $1 \\le N \\le 250$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 3 abcd dbca dcba ``` ### Example Output ``` 6 1 0 ```

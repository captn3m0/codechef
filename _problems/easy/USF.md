---
category_name: easy
problem_code: USF
problem_name: 'Useful Number'
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
problem_author: nots0fast
problem_tester: null
date_added: 21-11-2018
tags:
    - easy
    - ltime66
    - nots0fast
    - sieve
editorial_url: 'https://discuss.codechef.com/problems/USF'
time:
    view_start_date: 1543078801
    submit_start_date: 1543078801
    visible_start_date: 1543078801
    end_date: 1735669800
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME66/mandarin/USF.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME66/bengali/USF.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME66/hindi/USF.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME66/russian/USF.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME66/vietnamese/USF.pdf) as well. You are given an integer sequence $A\_1, A\_2, \\dots, A\_N$. Let's define the \*useful number\* of a subsequence of $A$ as the number of distinct primes $p$ such that $p$ divides each member of the subsequence, multiplied by the length of the subsequence. Find the maximum of useful numbers of all subsequences of $A$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-seperated integers $A\_1, A\_2, \\dots, A\_N$. ### Output Print a single line containing one integer — the maximum useful number. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 15$ - $1 \\le A\_i \\le 100$ for each valid $i$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 5 2 2 4 17 8 ``` ### Example Output ``` 4 ``` ### Explanation \*\*Example case 1:\*\* The subsequence $\[2, 2, 4, 8\]$ has the maximum useful number. The number of distinct primes that divide each member of the subsequence is $1$ (only the prime $2$) and the length of the subsequence is $4$, so the useful number of this subsequence is $1\\cdot 4 = 4$.

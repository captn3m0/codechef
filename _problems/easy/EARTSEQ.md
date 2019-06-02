---
category_name: easy
problem_code: EARTSEQ
problem_name: 'Yet Another Problem About Sequences'
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
problem_author: eartemov
problem_tester: null
date_added: 31-08-2015
tags:
    - constructive
    - eartemov
    - easy
    - jan19
    - number
    - sieve
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/EARTSEQ'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/EARTSEQ.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/EARTSEQ.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/EARTSEQ.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/EARTSEQ.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/EARTSEQ.pdf) as well. For a set of positive integers $S$, let's define $\\mathrm{gcd}(S)$ as the greatest integer which divides each element of $S$. If $\\mathrm{gcd}(S) = 1$, the set $S$ is called \*coprime\*. For example, the set $\\{7, 12, 15\\}$ is coprime, but $\\{6, 12, 15\\}$ is not coprime, since every element of this set is divisible by $3$. Your task is to find an integer sequence $A\_0, A\_1, \\ldots, A\_{N-1}$ such that: - for each valid $i$, $1 \\le A\_i \\le 10^9$ - $A\_0, A\_1, \\ldots, A\_{N-1}$ are pairwise distinct - for each valid $i$, the set $\\{A\_i, A\_{(i+1)\\%N}\\}$ is not coprime ($\\%$ denotes the modulo operator) - for each valid $i$, the set $\\{A\_i, A\_{(i+1)\\%N}, A\_{(i+2)\\%N}\\}$ is coprime It is possible that there is no solution. If there are multiple solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $N$. ### Output For each test case: - If there is no solution, print a single line containing the integer $-1$. - Otherwise, print a single line containing $N$ space-separated integers $A\_0, A\_1, \\ldots, A\_{N-1}$. ### Constraints - $1 \\le T \\le 1,000$ - $3 \\le N \\le 50,000$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (19 points):\*\* $3 \\le N \\le 3,333$ \*\*Subtask #2 (81 points):\*\* original constraints ### Example Input ``` 2 3 4 ``` ### Example Output ``` 6 10 15 374 595 1365 858 ``` ### Explanation \*\*Example case 1:\*\* Let's check the answer: $\\mathrm{gcd}(6, 10) = 2$, $\\mathrm{gcd}(10, 15) = 5$, $\\mathrm{gcd}(15, 6) = 3$, $\\mathrm{gcd}(6, 10, 15) = 1$. Every two cyclically consecutive numbers are not coprime, but every three cyclically consecutive numbers are coprime. \*\*Example case 2:\*\* - $\\mathrm{gcd}(374, 595) = 17$, $\\mathrm{gcd}(595, 1365) = 35$, $\\mathrm{gcd}(1365, 868) = 39$, $\\mathrm{gcd}(858, 374) = 22$ - $\\mathrm{gcd}(374, 595, 1365) = 1$, $\\mathrm{gcd}(595, 1365, 858) = 1$, $\\mathrm{gcd}(1365, 858, 374) = 1$, $\\mathrm{gcd}(858, 374, 595) = 1$

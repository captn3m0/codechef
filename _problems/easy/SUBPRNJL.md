---
category_name: easy
problem_code: SUBPRNJL
problem_name: 'Yet Again a Subarray Problem'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: prnjl_rai
problem_tester: null
date_added: 23-02-2019
tags:
    - binary
    - easy
    - march19
    - partial
    - prnjl_rai
    - segment
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/SUBPRNJL'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/SUBPRNJL.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/SUBPRNJL.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/SUBPRNJL.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/SUBPRNJL.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/SUBPRNJL.pdf) as well. "It does not matter how slowly you go as long as you do not stop." - Confucius You are given an array $A\_1, A\_2, \\ldots, A\_N$ and an integer $K$. For each subarray $S = \[A\_l, A\_{l+1}, \\ldots, A\_r\]$ ($1 \\le l \\le r \\le N$): - Let's define an array $B$ as $S$ concatenated with itself $m$ times, where $m$ is the smallest integer such that $m(r-l+1) \\ge K$. - Next, let's sort $B$ and define $X = B\_K$, i.e. as a $K$-th smallest element of $B$. Note that $|B| \\ge K$. - Then, let's define $F$ as the number of occurrences of $X$ in $S$. - The subarray $S$ is \*beautiful\* if $F$ occurs in $S$ at least once. Find the number of beautiful subarrays of $A$. Two subarrays $A\_l, A\_{l+1}, \\ldots, A\_r$ and $A\_p, A\_{p+1}, \\ldots, A\_q$ are different if $l \\neq p$ or $r \\neq q$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer - the number of beautiful subarrays. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 2,000$ - $1 \\le K \\le 10^9$ - $1 \\le A\_i \\le 2000$ for each valid $i$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N \\le 200$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 3 3 1 2 3 ``` ### Example Output ``` 3 ``` ### Explanation \*\*Example case 1:\*\* There are six subarrays of $A$: $\[1\]$, $\[2\]$, $\[3\]$, $\[1, 2\]$, $\[2, 3\]$, $\[1, 2, 3\]$. The corresponding arrays $B$ are $\[1, 1, 1\]$, $\[2, 2, 2\]$, $\[3, 3, 3\]$, $\[1, 2, 1, 2\]$, $\[2, 3, 2, 3\]$, $\[1, 2, 3\]$. Three of the subarrays are beautiful: $\[1\]$, $\[1, 2\]$ and $\[1, 2, 3\]$. For these subarrays, $X$ is $1$, $2$ and $3$ respectively (for example, for $S = \[1, 2\]$, $B = \[1, 2, 1, 2\]$ is sorted to $\[1, 1, 2, 2\]$ and $X = 2$ is the $3$-rd element). Then, $F = 1$ for each of these subarrays, and each of these subarrays contains $1$.

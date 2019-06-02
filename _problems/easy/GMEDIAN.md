---
category_name: easy
problem_code: GMEDIAN
problem_name: 'Good Median'
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
problem_author: teja349
problem_tester: null
date_added: 28-10-2018
tags:
    - combinatorics
    - easy
    - factorial
    - modular
    - nov18
    - taran_1407
    - teja349
editorial_url: 'https://discuss.codechef.com/problems/GMEDIAN'
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472945
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/GMEDIAN.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/GMEDIAN.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/GMEDIAN.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/GMEDIAN.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/GMEDIAN.pdf) as well. Raja only participates in contests and does not upsolve, but he claims that he has been upsolving. Chef wants to test if he is really improving, so he asks Raja to solve the following problem. The median of a sequence of numbers is computed in the following way: - sort the sequence in non-decreasing order - if the number of elements of this sequence is odd, the median is its middle element - if the number of elements is even, the median is the average (arithmetic mean) of its two middle elements For example, the median of $\[1, 3, 2\]$ is $2$ and the median of $\[2, 3, 3, 2\]$ is $(2+3)/2 = 5/2$. You are given a sequence $A\_1, A\_2, \\dots, A\_N$. Let's call a subsequence $A\_{i\_1}, A\_{i\_2}, \\dots, A\_{i\_k}$ (for any $k \\gt 0$, $1 \\le i\_1 \\lt i\_2 \\lt \\ldots \\lt i\_k \\le N$) \*good\* if the median of this subsequence is an element of this subsequence. Find the number of good subsequences. Since this number may be large, compute it modulo $1000000007$ ($10^9+7$). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of good subsequences modulo $10^9+7$. ### Constraints - $1 \\le T \\le 30$ - $1 \\le N \\le 1,000$ - $1 \\le A\_i \\le 2N$ for each valid $i$ ### Subtasks \*\*Subtask #1 (5 points):\*\* $A$ is a permutation of integers $1$ through $N$ \*\*Subtask #2 (25 points):\*\* $1 \\le N \\le 100$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 1 3 2 3 2 ``` ### Example Output ``` 5 ``` ### Explanation \*\*Example case 1:\*\* The good subsequences are $\[2\]$, $\[3\]$, $\[2\]$, $\[2,2\]$, $\[2,3,2\]$.

---
category_name: easy
problem_code: CHSIGN
problem_name: 'Change the Signs'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: isaf27
problem_tester: null
date_added: 19-03-2018
tags:
    - dynamic
    - easy
    - isaf27
    - may18
editorial_url: 'https://discuss.codechef.com/problems/CHSIGN'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1528985556
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/CHSIGN.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/CHSIGN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/CHSIGN.pdf) as well.

You are given a sequence of integers $A\_1, A\_2, \\dots, A\_N$. You should choose an arbitrary (possibly empty) subsequence of $A$ and multiply each element of this subsequence by $-1$. The resulting sequence should satisfy the following condition: the sum of elements of any \*\*contiguous\*\* subsequence with length greater than 1 is strictly positive. You should minimise the sum of elements of the resulting sequence. Find one such sequence with the minimum possible sum. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$. For each valid $i$, $B\_i$ must be equal to either $A\_i$ (the sign of this element did not change) or $-A\_i$ (the sign of this element changed). If there is more than one answer, you may output any one. ### Constraints - $1 \\le T \\le 10^5$ - $2 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $1 \\le T \\le 200$ - $2 \\le N \\le 10$ \*\*Subtask #2 (30 points):\*\* - $1 \\le T \\le 1,000$ - $N \\le 2,000$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 4 4 4 3 1 2 6 1 2 2 1 3 1 5 10 1 2 10 5 4 1 2 1 2 ``` ### Example Output ``` 4 3 -1 2 -1 2 2 -1 3 -1 10 -1 2 10 -5 1 2 -1 2 ``` ### Explanation \*\*Example case 1:\*\* If we change only the sign of $A\_3$, we get a sequence $\\{4, 3, -1, 2\\}$ with sum $8$. This sequence is valid because the sums of all its contiguous subsequences with length $&gt; 1$ are positive. (For example, the sum of elements of the contiguous subsequence $\\{A\_3, A\_4\\}$ equals $-1 + 2 = 1 &gt; 0$.) There are only two valid sequences $\\{4, 3, -1, 2\\}$ and $\\{4, 3, 1, 2\\}$ with sums $8$ and $10$ respectively, so this sequence has the smallest possible sum. For instance, the sequence $\\{4, -3, 1, 2\\}$ isn't valid, because the sum of $\\{A\_2, A\_3, A\_4\\}$ equals $-3 + 1 + 2 = 0 \\le 0$.

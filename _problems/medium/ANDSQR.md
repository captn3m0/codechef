---
category_name: medium
problem_code: ANDSQR
problem_name: 'AND Square Subsegments'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: shavelv
problem_tester: null
date_added: 30-03-2018
tags:
    - and
    - bit
    - fenwick
    - lazy
    - observation
    - pre
    - seg
    - sept18
    - shavelv
editorial_url: 'https://discuss.codechef.com/problems/ANDSQR'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/ANDSQR.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/ANDSQR.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/ANDSQR.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/ANDSQR.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/ANDSQR.pdf) as well. You are given a sequence of non-negative integers $A\_1, A\_2, \\dots, A\_N$ and $Q$ queries. A sequence is \*good\* if the bitwise AND of all its elements is a perfect square. In each query: - you are given two parameters $L$ and $R$ - consider the subsequence $B = A\_L, A\_{L+1}, \\dots, A\_R$ - you should find the number of good \*\*contiguous\*\* subsequences of $B$ ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - Each of the following $Q$ lines contains two space-separated integers $L$ and $R$ describing one query. ### Output For each query, print a single line containing one integer — the number of good contiguous subsequences. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $0 \\le A\_i \\lt 2^{30}$ for each valid $i$ - $1 \\le Q \\le 5 \\cdot 10^5$ - $1 \\le L \\le R \\le N$ - the sum of $N$ over all test cases does not exceed $10^5$ - the sum of $Q$ over all test cases does not exceed $5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - the sum of $N$ over all test cases does not exceed $100$ - the sum of $Q$ over all test cases does not exceed $100$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 1 3 2 1 2 3 2 2 1 3 ``` ### Example Output ``` 0 3 ``` ### Explanation \*\*Example case 1:\*\* For the first query, there is only one possible subsequence, $\[2\]$. The AND of its elements is equal to its only element $2$, which is not a perfect square. For the second query, there are six contiguous subsequences: - $\[1\]$; its AND is 1, a perfect square - $\[1, 2\]$; its AND is 0, a perfect square - $\[1, 2, 3\]$; its AND is 0, a perfect square - $\[2\]$; its AND is 2, not a perfect square - $\[2, 3\]$; its AND is 2, not a perfect square - $\[3\]$; its AND is 3, not a perfect square

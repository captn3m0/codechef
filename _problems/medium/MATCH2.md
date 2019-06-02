---
category_name: medium
problem_code: MATCH2
problem_name: 'Match the Streams'
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
problem_author: teja349
problem_tester: null
date_added: 29-09-2018
tags:
    - binary
    - data
    - ltime64
    - medium
    - mergesort
    - taran_1407
    - teja349
editorial_url: 'https://discuss.codechef.com/problems/MATCH2'
time:
    view_start_date: 1538240402
    submit_start_date: 1538240402
    visible_start_date: 1538240402
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/LTIME64/bengali/MATCH2.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/LTIME64/mandarin/MATCH2.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME64/russian/MATCH2.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME64/vietnamese/MATCH2.pdf) as well. You are given two integer sequences $A\_1, A\_2, \\dots, A\_N$ and $B\_1, B\_2, \\dots, B\_N$. We define the \*similarity\* of the sequences $A$ and $B$ as the number of indices $i$ such that $A\_i = B\_i$. You should process $Q$ queries. In each query, you are given parameters $l$, $r$ and $c$; you should change each of the elements $A\_l, A\_{l+1}, \\dots, A\_r$ to $c$, and then compute the similarity of the sequences $A$ and $B$. Chef knows that this is simple, so he asks you to answer the queries online. Note that the input is given in a special format to ensure that. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$. - Each of the next $Q$ lines contains three space-separated integers $x$, $y$ and $z$ describing a query in the following format: - Let's denote the similarity of $A$ and $B$ before this query by $P\_r$ (for the first query, $P\_r$ is the similarity of the initial sequences). - For this query, $l = x \\oplus P\_r$, $r = y \\oplus P\_r$ and $c = z \\oplus P\_r$. ### Output For each query, print a single line containing one integer — the similarity after this query. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N, Q \\le 10^5$ - $1 \\le A\_i, B\_i \\le 10^9$ for each valid $i$ - $1 \\le c \\le 10^9$ - $1 \\le l \\le r \\le N$ ### Subtasks \*\*Subtask 1 (20 points):\*\* $1 \\le N, Q \\le 2,000$ \*\*Subtask 2 (80 points):\*\* original constraints ### Example Input ``` 1 4 3 1 2 3 4 1 1 3 5 0 1 0 0 5 3 1 4 1 ``` ### Example Output ``` 1 0 2 ``` ### Explanation \*\*Example case 1:\*\* The similarity before any query is applied is $2$ (the sequences match at positions $1$ and $3$). In the first query, $l = 2$, $r=3$, $c=2$. The similarity after this query is $1$ (the only match is at position $1$). In the second query, $l = 1$, $r=4$, $c=2$. The similarity after this query is $0$ (no match at any position). In the third query, $l = 1$, $r=4$, $c=1$. The similarity after this query is $2$ (two matches at positions $1$ and $2$).

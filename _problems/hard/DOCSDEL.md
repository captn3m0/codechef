---
category_name: hard
problem_code: DOCSDEL
problem_name: 'Permutation Composition Queries'
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
problem_author: isaf27
problem_tester: null
date_added: 23-06-2018
tags:
    - complexity
    - isaf27
    - isaf27
    - likecs
    - ltime61
    - medium
    - prefix
    - queries
editorial_url: 'https://discuss.codechef.com/problems/DOCSDEL'
time:
    view_start_date: 1530378005
    submit_start_date: 1530378005
    visible_start_date: 1530378005
    end_date: 1735669800
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME61/mandarin/DOCSDEL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME61/russian/DOCSDEL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME61/vietnamese/DOCSDEL.pdf) as well.

You are given $N$ sequences $P\_1, P\_2, \\dots, P\_N$. Each of them is a permutation of numbers $1$ through $M$. Let's define a product of two permutations $X$ and $Y$ of numbers $1$ through $M$ as a permutation $Z = X\\cdot Y$ such that $Z\_i=Y\_{X\_i}$ for each valid $i$. You should answer $Q$ queries. Each query is described by two numbers $L$ and $R$. Let's define a permutation $B = P\_L \\cdot P\_{L+1} \\cdot \\,\\dots\\, \\cdot P\_R$; the multiplication of permutations is evaluated left to right, i.e. as $((P\_L \\cdot P\_{L+1}) \\cdot \\dots) \\cdot P\_R$. The answer to a query is $\\sum\_{i=1}^M i \\cdot B\_i$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $P\_{i, 1}, P\_{i, 2}, \\dots, P\_{i, M}$ denoting the permutation $P\_i$. - The next line contains a single integer $Q$. - Each of the following $Q$ lines contains two space-separated integers $L$ and $R$ describing one query. ### Output For each test case, print $Q$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer — the answer to the $i$-th query. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N, M \\le 10^5$ - $1 \\le N \\cdot M \\le 2 \\cdot 10^5$ - $1 \\le P\_{i, j} \\le M$ for each valid $i$ and $j$ - $1 \\le Q \\le 2 \\cdot 10^5$ - $1 \\le L \\le R \\le N$ - for each valid $i$, $P\_i$ is permutation of numbers $1$ through $M$ - the sum of $N \\cdot M$ for all test cases does not exceed $2 \\cdot 10^5$ - the sum of $Q$ for all test cases does not exceed $2 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (15 points):\*\* - $1 \\le T \\le 100$ - $1 \\le Q \\le 50$ - $1 \\le N \\cdot M \\le 200$ \*\*Subtask #2 (25 points):\*\* - $1 \\le T \\le 100$ - $1 \\le M \\le 10$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 1 4 3 3 2 1 1 3 2 1 2 3 2 3 1 5 1 1 1 4 3 4 3 3 1 3 ``` ### Example Output ``` 10 11 11 14 11 ``` ### Explanation \*\*Example case 1:\*\* - query 1: $B = \[3, 2, 1\]$, so the answer is $1\\cdot 3 + 2\\cdot 2 + 3\\cdot 1 = 10$ - query 2: $B = \[3, 1, 2\]$, the answer is $11$ - query 3: $B = \[2, 3, 1\]$, the answer is $11$ - query 4: $B = \[1, 2, 3\]$, the answer is $14$ - query 5: $B = \[2, 3, 1\]$, the answer is $11$

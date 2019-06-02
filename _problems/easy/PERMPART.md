---
category_name: easy
problem_code: PERMPART
problem_name: 'Partition into Permutations'
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
date_added: 29-03-2019
tags:
    - dynamic
    - greedy
    - kingofnumbers
    - ltime70
    - observations
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/PERMPART'
time:
    view_start_date: 1553965200
    submit_start_date: 1553965200
    visible_start_date: 1553965200
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME70/mandarin/PERMPART.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME70/bengali/PERMPART.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME70/hindi/PERMPART.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME70/russian/PERMPART.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME70/vietnamese/PERMPART.pdf) as well. You are given an array of integers $\[A\_1, A\_2, \\ldots, A\_N\]$. Let's call adding an element to this array at any position (including the beginning and the end) or removing an arbitrary element from it a \*modification\*. It is not allowed to remove an element from the array if it is empty. Find the minimum number of modifications which must be performed so that the resulting array can be partitioned into permutations. Formally, it must be possible to partition elements of the resulting array into zero or more groups (multisets; not necessarily identical) in such a way that each element belongs to exactly one group and for each group, if it contains $L$ elements, then it must contain only integers $1$ through $L$, each of them exactly once. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer ― the minimum required number of modifications. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^6$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $1 \\le N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $10,000$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 5 1 4 1 2 2 4 2 3 2 3 ``` ### Example Output ``` 1 2 ```

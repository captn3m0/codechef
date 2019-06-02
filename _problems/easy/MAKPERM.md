---
category_name: easy
problem_code: MAKPERM
problem_name: 'Make a Permutation'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 21-09-2018
tags:
    - cook98
    - kingofnumbers
    - observations
    - permutation
    - simple
    - taran_1407
time:
    view_start_date: 1537727402
    submit_start_date: 1537727402
    visible_start_date: 1537727402
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/COOK98/bengali/MAKPERM.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK98/mandarin/MAKPERM.pdf) , \[Russian\](http://www.codechef.com/download/translated/COOK98/russian/MAKPERM.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/COOK98/vietnamese/MAKPERM.pdf) as well. You are given an integer sequence $A$ with length $N$. In one move, you are allowed to choose one element of this sequence and change it to an arbitrary integer. Compute the minimum number of moves needed to make the sequence a permutation of the integers $1$ through $N$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the minimum required number of moves. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^5$ - the sum of $N$ for all test cases does not exceed $2 \\cdot 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ ### Example Input ``` 2 4 1 2 3 3 3 2 6 2 ``` ### Example Output ``` 1 2 ``` ### Explanation \*\*Example case 1:\*\* One possible way is to change the last element to $4$. This creates the sequence $1, 2, 3, 4$, which is a permutation. \*\*Example case 2:\*\* We can change the first element to $1$ and the second element to $3$, creating the permutation $1, 3, 2$.

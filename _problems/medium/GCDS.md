---
category_name: medium
problem_code: GCDS
problem_name: 'GCD Subsequences'
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
max_timelimit: '1.2'
source_sizelimit: '50000'
problem_author: allllekssssa
problem_tester: null
date_added: 29-03-2019
tags:
    - allllekssssa
    - branch
    - hard
    - ltime70
    - number
    - partial
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/GCDS'
time:
    view_start_date: 1553965202
    submit_start_date: 1553965202
    visible_start_date: 1553965202
    end_date: 1735669800
    current: 1559472973
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME70/mandarin/GCDS.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME70/bengali/GCDS.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME70/hindi/GCDS.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME70/russian/GCDS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME70/vietnamese/GCDS.pdf) as well. Pantelija was given a sequence of positive integers $a\_1, a\_2, \\ldots, a\_N$. Let's define the \*gcd value\* of this sequence as the number of its non-empty contiguous subsequences with greatest common divisor strictly greater than $1$. The greatest common divisor of any contiguous subsequence $a\_l, a\_{l+1}, \\ldots, a\_r$ ($1 \\le l \\le r \\le N$) is the greatest positive integer which divides each element of this subsequence. Pantelija wants to maximise the gcd value of this sequence. In order to do that, he may choose a valid index $i$, an integer $b$ ($1 \\le b \\le 5 \\cdot 10^5$, since he does not like large numbers) and change the element $a\_i$ to $b$. What is the maximum possible gcd value he can obtain? ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output Print a single line containing one integer ― the largest possible gcd value. ### Constraints - $1 \\le N \\le 5 \\cdot 10^4$ - $1 \\le a\_i \\le 5 \\cdot 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (15 points):\*\* - $1 \\le N \\le 100$ - $1 \\le a\_i \\le 100$ for each valid $i$ \*\*Subtask #2 (35 points):\*\* - $1 \\le N \\le 5 \\cdot 10^4$ - $1 \\le a\_i \\le 500$ for each valid $i$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 5 4 5 10 3 7 ``` ### Example Output ``` 9 ```

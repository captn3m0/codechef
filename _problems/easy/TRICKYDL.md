---
category_name: easy
problem_code: TRICKYDL
problem_name: 'The Tricky Deal'
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
date_added: 22-02-2019
tags:
    - cakewalk
    - kingofnumbers
    - ltime69
editorial_url: 'https://discuss.codechef.com/problems/TRICKYDL'
time:
    view_start_date: 1550941202
    submit_start_date: 1550941202
    visible_start_date: 1550941202
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME69/mandarin/TRICKYDL.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME69/bengali/TRICKYDL.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME69/hindi/TRICKYDL.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME69/russian/TRICKYDL.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME69/vietnamese/TRICKYDL.pdf) as well. One of Chef's friends offered him a deal: during $D$ days, they are going to exchange money. For each $i$ ($1 \\le i \\le D$), on the $i$-th day, Chef's friend would give Chef $A$ rupees, while Chef would give his friend $2^{i-1}$ rupees ($1$ rupee on day $1$, $2$ rupees on day $2$, $4$ rupees on day $3$, and so on). Chef's profit from the deal is the total number of rupees he received from his friend minus the total number of rupees he gave his friend. Chef decided to ask for your advice before accepting the deal. You want to help him by telling him two numbers $D\_1$ and $D\_2$, where $D\_1$ is the maximum value of $D$ such that Chef should accept the deal, i.e. his profit from the deal is positive if $D = D\_1$, and $D\_2$ is the value of $D$ that leads to the maximum possible profit for Chef. If there are multiple values of $D$ that lead to the maximum profit, $D\_2$ is the smallest of these values. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $A$. ### Output For each test case, print a single line containing two space-separated integers $D\_1$ and $D\_2$. ### Constraints - $1 \\le T \\le 100,000$ - $5 \\le A \\le 10^9$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 4 5 8 9 1000000000 ``` ### Example Output ``` 4 3 5 3 5 4 35 30 ```

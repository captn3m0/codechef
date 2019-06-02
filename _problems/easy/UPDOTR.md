---
category_name: easy
problem_code: UPDOTR
problem_name: 'Learning Dishes'
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
problem_author: dolabmoon
problem_tester: null
date_added: 19-09-2018
tags:
    - binary
    - cook98
    - dolabmoon
    - easy
    - taran_1407
    - tree
time:
    view_start_date: 1537727402
    submit_start_date: 1537727402
    visible_start_date: 1537727402
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Bengali\](http://www.codechef.com/download/translated/COOK98/bengali/UPDOTR.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK98/mandarin/UPDOTR.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/COOK98/vietnamese/UPDOTR.pdf) as well. In Chefland, there are $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads in such a way that it is possible to reach any city from any other city. Each city has its own traditional dish for which it is famous; let's denote the tastiness of the dish in city $i$ by $A\_i$. Chef is currently learning how to prepare tastier dishes. At any point, he can only remember how to cook one dish. Initially, the tastiness of the dish he can cook is $W$. Chef is going to travel from city $1$ to city $v$. In each city he visits (including $1$ and $v$), if the tastiness of the traditional dish of this city is strictly greater than the tastiness of the dish he can currently cook, then he forgets the dish he can currently cook and learns the traditional dish of this city. Now, Chef is wondering how many times he is going to learn a new dish during his trip. You should answer $Q$ independent queries. In each query, you are given the initial tastiness $W$ and Chef's final destination $v$; compute the number of times Chef learns a new dish. Note that the input is given in a special format, so you have to answer the queries online. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains one integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $N-1$ space-separated integers $P\_2, P\_3, \\dots, P\_N$, meaning there's an edge between $i$ and $P\_i$. - The fourth line contains one integer $Q$. - Each of the following $Q$ lines contains two space-separated integers $A$ and $B$ describing a query in the following format: - Let's denote the answer to the previous query by $Pr$ ($Pr=0$ if this is the first query). - For this query, $v = A \\oplus Pr$ and $W = B \\oplus Pr$. ### Output For each query, print a single line containing one integer — the number of times Chef learns a new dish. ### Constraints - $1 \\le T \\le 1000$ - $2 \\le N \\le 10^6$ - $1 \\le Q \\le 10^6$ - $1 \\le A\_i \\le 10^8$ for each valid $i$ - $1 \\le P\_i \\le i-1$ for each valid $i$ - $1 \\le W \\le 10^8$ - $1 \\le v \\le N$ - the sum of $N$ for all test cases does not exceed $10^6$ - the sum of $Q$ for all test cases does not exceed $10^6$ ### Example Input ``` 1 5 2 3 1 4 5 1 2 2 3 2 2 1 1 0 ``` ### Example Output ``` 2 1 ```

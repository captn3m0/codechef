---
category_name: easy
problem_code: PUMPWAT
problem_name: 'Pumping Water'
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
problem_author: alei
problem_tester: null
date_added: 17-10-2018
tags:
    - alei
    - cook99
    - easy
    - observations
    - preprocessing
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/PUMPWAT'
time:
    view_start_date: 1540146602
    submit_start_date: 1540146602
    visible_start_date: 1540146602
    end_date: 1735669800
    current: 1559472957
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK99/hindi/PUMPWAT.pdf), \[Spanish\](http://www.codechef.com/download/translated/COOK99/spanish/PUMPWAT.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK99/mandarin/PUMPWAT.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK99/russian/PUMPWAT.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK99/vietnamese/PUMPWAT.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK99/bengali/PUMPWAT.pdf) as well. In ChefLand, there is a mountain range consisting of $N$ hills (numbered $1$ through $N$) in a straight line. Let's denote the height of the $i$-th hill from the left by $h\_i$. Ada is working on the water supply system of ChefLand. On some of the hills, she wants to place water reservoirs; then, for each reservoir, she will decide in which direction the water should flow from it — either to the left or to the right (water may not flow in both directions from the same reservoir). From a reservoir on a hill with height $h$, water flows in the chosen direction until it reaches the first hill that is strictly higher than $h$; all hills before this hill (including the hill containing the reservoir) are therefore supplied with water. For example, suppose we have hills with heights $\[7, 2, 3, 5, 8\]$. If we place a reservoir on the hill with height $5$, and pump water from it to the left, then the hills with heights $2$, $3$ and $5$ are supplied with water. Help Ada find the minimum numer of reservoirs needed to provide water to all the hills if she chooses the directions optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $h\_1, h\_2, \\dots, h\_N$. ### Output For each test case, print a single line containing one integer — the minimum required number of reservoirs. ### Constraints - $2 \\le N \\le 10^5$ - $1 \\le h\_i \\le 10^9$ for each valid $i$ - $h\_i \\neq h\_j $ for any valid $i \\neq j$ - the sum of $N$ over all test cases does not exceed $5 \\cdot 10^5$ ### Example Input ``` 1 6 4 16 32 6 8 2 ``` ### Example Output ``` 2 ``` ### Explanation \*\*Example case 1:\*\* We can place reservoirs on the second and third hill, pumping water to the left and right respectively.

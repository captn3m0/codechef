---
category_name: school
problem_code: ADASTAIR
problem_name: 'Ada and the Staircase'
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
    - cakewalk
    - cook99
    - maths
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ADASTAIR'
time:
    view_start_date: 1540146602
    submit_start_date: 1540146602
    visible_start_date: 1540146602
    end_date: 1735669800
    current: 1559472922
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK99/hindi/ADASTAIR.pdf), \[Spanish\](http://www.codechef.com/download/translated/COOK99/spanish/ADASTAIR.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/COOK99/mandarin/ADASTAIR.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK99/russian/ADASTAIR.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK99/vietnamese/ADASTAIR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK99/bengali/ADASTAIR.pdf) as well. There is a big staircase with $N$ steps (numbered $1$ through $N$) in ChefLand. Let's denote the height of the top of step $i$ by $h\_i$. Chef Ada is currently under the staircase at height $0$ and she wants to reach the top of the staircase (the top of the last step). However, she can only jump from height $h\_i$ to the top of a step at height $h\_f$ if $h\_f-h\_i \\le K$. To help Ada, we are going to construct some intermediate steps; each of them may be constructed between any two steps, or before the first step, and have any height. What is the minimum number of steps that need to be added to the staircase so that Ada could reach the top? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-seperated integers $h\_1, h\_2, \\dots, h\_N$. ### Output For each test case, print a single line containing one integer — the minimum required number of steps. ### Constraints - $1 \\le T \\le 64$ - $1 \\le N \\le 128$ - $1 \\le K \\le 1,024$ - $1 \\le h\_i \\le 1,024$ for each valid $i$ - $h\_i \\lt h\_{i+1}$ for each valid $i$ ### Example Input ``` 1 4 3 2 4 8 16 ``` ### Example Output ``` 3 ```

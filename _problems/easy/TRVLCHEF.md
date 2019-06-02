---
category_name: easy
problem_code: TRVLCHEF
problem_name: 'Travelling Saleschef'
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
    - easy
    - kingofnumbers
    - ltime70
    - observations
    - optimal
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TRVLCHEF'
time:
    view_start_date: 1553965202
    submit_start_date: 1553965202
    visible_start_date: 1553965202
    end_date: 1735669800
    current: 1559472962
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME70/mandarin/TRVLCHEF.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME70/bengali/TRVLCHEF.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME70/hindi/TRVLCHEF.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME70/russian/TRVLCHEF.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME70/vietnamese/TRVLCHEF.pdf) as well. Chef works in a similar way to a travelling salesman ― he always travels to new cities in order to sell his delicious dishes. Today, Chef is planning to visit $N$ cities (numbered $1$ through $N$). There is a direct way to travel between each pair of cities. Each city has a specific temperature; let's denote the temperature in the $i$-th city by $C\_i$. Chef has a fixed temperature tolerance $D$ with the following meaning: for each pair of cities $a$ and $b$, he may travel from city $a$ directly to city $b$ only if $|C\_a-C\_b| \\le D$, otherwise he would catch a heavy flu because of the sudden change in temperature. Chef starts from city $1$. Is he able to visit all $N$ cities in such a way that each city is visited \*\*exactly once\*\*? Notes: - Chef is not able to travel through a city without visiting it. - City $1$ is visited at the beginning. - It is not necessary to be able to travel directly to city $1$ from the last city Chef visits. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $D$. - The second line contains $N$ space-separated integers $C\_1, C\_2, \\ldots, C\_N$. ### Output For each test case, print a single line containing the string `"YES"` (without quotes) if Chef can visit all cities or `"NO"` (without quotes) if he cannot. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^5$ - $0 \\le D \\le 10^9$ - $0 \\le C\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $10,000$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 5 3 3 2 1 4 5 5 4 10 1 3 2 9 ``` ### Example Output ``` YES NO ```

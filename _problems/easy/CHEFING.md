---
category_name: easy
problem_code: CHEFING
problem_name: 'Chef and Secret Ingredients'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: adityad1998
problem_tester: null
date_added: 24-01-2019
tags:
    - adityad1998
    - data
    - feb19
    - simple
    - string
editorial_url: 'https://discuss.codechef.com/problems/CHEFING'
time:
    view_start_date: 1550050202
    submit_start_date: 1550050202
    visible_start_date: 1550050202
    end_date: 1735669800
    current: 1559472939
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/FEB19TST/hindi/CHEFING.pdf), \[Bengali\](http://www.codechef.com/download/translated/FEB19TST/bengali/CHEFING.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/FEB19TST/mandarin/CHEFING.pdf), \[Russian\](http://www.codechef.com/download/translated/FEB19TST/russian/CHEFING.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/FEB19TST/vietnamese/CHEFING.pdf) as well. Chef recently visited ShareChat Cafe and was highly impressed by the food. Being a food enthusiast, he decided to enquire about the ingredients of each dish. There are $N$ dishes represented by strings $S\_1, S\_2, \\ldots, S\_N$. Each ingredient used for making dishes in ShareChat Cafe is represented by a lowercase English letter. For each valid $i$, the ingredients used to make dish $i$ correspond to characters in the string $S\_i$ (note that ingredients may be used multiple times). A \*special ingredient\* is an ingredient which is present in each dish at least once. Chef wants to know the number of special ingredients in ShareChat Cafe. Since Chef is too busy with work, can you help him? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains a single string $S\_i$. ### Output For each test case, print a single line containing one integer ― the number of special ingredients in the dishes. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 1,000$ - $1 \\le |S\_i| \\le 200$ for each valid $i$ - $S\_1, S\_2, \\ldots, S\_N$ contain only lowercase English letters - The sum of length of strings over all test cases $\\le$ 3500000 ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 2 3 abcaa bcbd bgc 3 quick brown fox ``` ### Example Output ``` 2 0 ``` ### Explanation \*\*Example case 1:\*\* Ingredients 'b' and 'c' are present in all three dishes, so there are two special ingredients. \*\*Example case 2:\*\* No ingredient is common to all three dishes.

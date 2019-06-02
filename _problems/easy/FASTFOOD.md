---
category_name: easy
problem_code: FASTFOOD
problem_name: 'Fast Food'
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
date_added: 25-04-2019
tags:
    - greedy
    - kingofnumbers
    - ltime71
    - partial
    - simple
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/FASTFOOD'
time:
    view_start_date: 1556384402
    submit_start_date: 1556384402
    visible_start_date: 1556384402
    end_date: 1735669800
    current: 1559472944
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME71/hindi/FASTFOOD.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME71/bengali/FASTFOOD.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME71/mandarin/FASTFOOD.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME71/russian/FASTFOOD.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME71/vietnamese/FASTFOOD.pdf) as well. Chef owns a fast food shop that is currently located in a city called Chefland. He is planning to move his shop to a bigger city called Chefabad. There are $N$ consecutive days (numbered $1$ through $N$) such that the move can be done before day $1$, after day $N$ or between any two consecutive days. Moving the shop takes zero time. Chef wants to time the move in a way thay maximises his profit during these $N$ days. For each $i$ ($1 \\le i \\le N$), we know that if Chef's shop is in Chefland on the $i$-th day, he earns $A\_i$ coins, while if it is in Chefabad on this day, he earns $B\_i$ coins. Find the maximum profit Chef can make if he optimally chooses the time when the shop should move. Note that once the shop has moved to Chefabad, it cannot return to Chefland. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\ldots, B\_N$. ### Output For each test case, print a single line containing one integer ― the maximum profit. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i, B\_i \\le 10^4$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $1 \\le N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $10,000$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 3 3 2 3 2 10 3 4 4 7 5 3 4 2 3 1 3 2 10 1 1 10 ``` ### Example Output ``` 17 19 20 ``` ### Explanation \*\*Example case 1:\*\* The best time to move is before the first day. \*\*Example case 2:\*\* The best time to move is after the last day. \*\*Example case 3:\*\* The best time to move is after the first day.

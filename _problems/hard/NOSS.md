---
category_name: hard
problem_code: NOSS
problem_name: 'Maximize the NOSS'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: arpa
problem_tester: null
date_added: 25-12-2018
tags:
    - arpa
    - dynamic
    - knapsack
    - ltime67
editorial_url: 'https://discuss.codechef.com/problems/NOSS'
time:
    view_start_date: 1546103100
    submit_start_date: 1546103100
    visible_start_date: 1546103100
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTM67TST/mandarin/NOSS.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTM67TST/bengali/NOSS.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTM67TST/hindi/NOSS.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTM67TST/russian/NOSS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTM67TST/vietnamese/NOSS.pdf) as well. You are given a sequence of positive integers $a\_1, a\_2, \\ldots, a\_N$. You may change up to two elements of this sequence, each of them to any positive integer (not necessarily the same for two elements). Let's denote the resulting sequence by $b\_1, b\_2, \\ldots, b\_N$. Consider all $2^N$ subsequences of $b\_1, b\_2, \\ldots, b\_N$. For each subsequence, compute the sum of its elements ($0$ for the empty subsequence). Let's denote the set of these sums by $S$; note that a set contains each integer at most once. Finally, NOSS is the size of set $S$. For example, if $\[b\_1, b\_2, b\_3\] = \[17, 23, 40\]$, then $S = \\{0, 17, 23, 40, 57, 63, 80\\}$ and NOSS is $7$. Find the maximum possible NOSS. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output For each test case, print a single line containing one integer — the maximum possible NOSS. ### Constraints - $1 \\le T \\le 3$ - $2 \\le N \\le 10,000$ - $1 \\le a\_i \\le 10,000$ for each valid $i$ - $1 \\le \\sum\_{i=1}^N a\_i \\le 10,000$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $1 \\le \\sum\_{i=1}^N a\_i \\le 100$ \*\*Subtask #2 (20 points):\*\* - $1 \\le \\sum\_{i=1}^N a\_i \\le 1000$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 3 5 1 2 3 4 5 6 1 1 1 1 1 1 3 1 5 7 ``` ### Example Output ``` 32 20 8 ``` ### Explanation \*\*Example case 1:\*\* One possible way is to change $3$ to $10$ and $5$ to $20$. Then $S = \\{0 \\ldots 7, 10 \\ldots 17, 20 \\ldots 27, 30 \\ldots 37\\}$ ($a \\ldots b$ denotes all integer from $a$ to $b$ inclusive) and NOSS is $32$. \*\*Example case 2:\*\* One possible way is to change one element of the initial sequence from $1$ to $10$ and another from $1$ to $20$. \*\*Example case 3:\*\* The optimal NOSS is achieved even if nothing is changed.

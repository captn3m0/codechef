---
category_name: medium
problem_code: WEAKMID
problem_name: 'Weak in the Middle'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 24-05-2018
tags:
    - array
    - easy
    - kingofnumbers
    - kingofnumbers
    - looping
    - simulation
    - stack
editorial_url: 'https://discuss.codechef.com/problems/WEAKMID'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1528987027
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/WEAKMID.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/WEAKMID.pdf) as well.

You are given an array $A$ with length $N$. On each day, the following process was performed: - a new array $R$ is created; this array contains all elements $A\_i$ such that $i=1$, $i=N$ or $\\mathop{\\rm min}(A\_{i-1}, A\_{i+1}) \\le A\_i$ ($2 \\le i \\lt N$), in the original order - $A$ is replaced by $R$ and $N$ is replaced by the length of $R$ In other words, all elements of $A$ that are between two bigger elements disappear. For each element of the original array, calculate the number of the day on which it disappeared (the process starts with day $1$), or determine that it never disappeared. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of the day on which the $i$-th element of the original array disappeared, or $0$ if it never disappeared. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - the sum of $N$ in all test cases does not exceed $10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (20 points):\*\* the sum of $N$ in all test cases does not exceed $1,000$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 6 3 2 5 4 1 7 ``` ### Example Output ``` 0 1 0 2 1 0 ``` ### Explanation

---
category_name: medium
problem_code: BINARY
problem_name: 'Binary Movements'
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
problem_author: iamabjain
problem_tester: null
date_added: 18-04-2019
tags:
    - iamabjain
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472969
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/BINARY.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/BINARY.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/BINARY.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/BINARY.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/BINARY.pdf) as well. "Out of 6 billion humans, the troublemakers are just a handful." - Dalai Lama Nikitasha and Mansi are best friends. They have a binary sequence $A\_1, A\_2, \\ldots, A\_N$ (each element of this sequence is $0$ or $1$). Their friend Sakshi always finds ways to trouble them. This time, Sakshi altered their sequence by performing the following operation $Z$ times: - Create a new sequence $B\_1, B\_2, \\ldots, B\_N$. Initially, $A\_i = B\_i$ for each valid $i$. - For each valid $i$ such that $A\_i = 0$ and $A\_{i+1} = 1$, swap $B\_i$ and $B\_{i+1}$, i.e. set $B\_i = 1$ and $B\_{i+1} = 0$. Note that the order of swaps does not matter. - Replace the sequence $A$ by the sequence $B$. Now, Sakshi challenges Nikitasha And Mansi to find the altered sequence (the resulting sequence $A$ after $Z$ steps). Help Nikitasha and Mansi find this sequence. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Z$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing $N$ space-separated integers — the altered sequence. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N, Z \\le 10^6$ - $0 \\le A\_i \\le 1$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le N, Z \\le 3,000$ - the sum of $N$ over all test cases does not exceed $3,000$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 2 6 2 0 1 1 0 1 1 4 4 0 1 0 1 ``` ### Example Output ``` 1 1 0 1 1 0 1 1 0 0 ``` ### Explanation \*\*Example case 1:\*\* After the first step, the sequence becomes $(1, 0, 1, 1, 0, 1)$. After the second step, it becomes $(1, 1, 0, 1, 1, 0)$. \*\*Example case 2:\*\* After the first step, the sequence becomes $(1, 0, 1, 0)$. After the second step, the sequence becomes $(1, 1, 0, 0)$. Applying more steps does not alter the sequence anymore, so after the third and fourth step, the sequence remains $(1, 1, 0, 0)$.

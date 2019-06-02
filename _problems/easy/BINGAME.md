---
category_name: easy
problem_code: BINGAME
problem_name: '1-2 Game'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 13-12-2018
tags:
    - admin2
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472936
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are two players $P\_1$, $P\_2$ playing a game on an array $A$ which has $n$ positive integers: $A\_1, A\_2, \\ldots, A\_n$. Both the players takes turns alternatively, and $P\_1$ goes first. Rules of the game are as follows. - In $P\_1$’s turn, he should choose any element $A\_i$ which is $\\ge 1$, and subtract $1$ from it. - In $P\_2$’s turn, he should choose any element $A\_i$ which is $\\ge 2$, and subtract $2$ from it. - The player who is not able to make a move loses. Given the array $A$, find the number of different indices $i$ such that that $P\_1$ can subtract from $A\_i$ in his first turn, and end up winning the game, if both the players play optimally after this. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains an integer $n$. - The second line of each test case contains $n$ space-separated integers denoting the array $A$. ### Output For each test case, output an integer corresponding to the number of possible first moves of $P\_1$ that lead him to win. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le n \\leq 10^5$ - $1 \\le A\_i \\leq 10^5$ - Sum of $n$ over all the test cases doesn't exceed $10^6$ ### Example Input ``` 3 1 1 1 3 2 1 2 ``` ### Example Output ``` 1 0 1 ``` ###Explanation \*\*Testcase 1\*\*: The array is {1}. $P\_1$ has no choice but to pick the element and subtract 1 from it. The resulting array is {0}, and now $P\_2$ is unable to make a move. Hence $P\_1$ wins, and there was only one winning first move. Hence the answer is 1. \*\*Testcase 2\*\*: The array is {3}. $P\_1$ has no choice but to pick the element and subtract 1 from it. The resulting array is {2}, and now $P\_2$ has no choice but to subtract 2 from it. The resulting array is {0}, and now $P\_1$ is unable to make a move. Hence $P\_1$ loses.There is no starting move for $P\_1$ which leads to his victory. Hence the answer is 0. \*\*Testcase 3\*\*: The array is {1, 2}. $P\_1$ has two choices. Either subtract 1 from 1 or subtract 1 from 2. - Suppose he subtracts 1 from the first element, then the resulting array is {0, 2}, and now $P\_2$ has no choice but to subtract 2 from the second element. The resulting array is {0, 0}, and now $P\_1$ is unable to make a move. Hence $P\_1$ loses in this case. - But suppose he subtracts 1 from the second element, then the resulting array is {1, 1}, and now $P\_2$ is unable to make a move. Hence $P\_1$ wins in this case. Thus, there is exactly one starting move for $P\_1$ which leads to his victory. Hence the answer is 1.

---
category_name: easy
problem_code: CLKLZM
problem_name: 'Killing Zombies'
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
problem_author: meooow
problem_tester: null
date_added: 4-04-2018
tags:
    - cole2018
    - easy
    - heap
    - meooow
editorial_url: 'https://discuss.codechef.com/problems/CLKLZM'
time:
    view_start_date: 1524062940
    submit_start_date: 1524062940
    visible_start_date: 1524062940
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available. The zombie apocalypse is here and Chef is stuck at an old construction site. The site is surrounded by walls on three sides. On the fourth side is a fence where $N$ zombies are standing in a row. The zombies are numbered from $1$ to $N$ from left to right. Zombie $i$ has $Z\_i$ health points initially. Luckily there are $M$ cranes Chef has access to. The $i^{th}$ crane carries $K\_i$ construction beams. Chef can drop any number $\\ge 0$ and $\\le K\_i$ of these beams from crane $i$ and they will hit all zombies whose numbers lie between $L\_i$ to $R\_i$ both inclusive. A single beam decreases the health of all zombies it hits by $1$ point. If a zombie's health equals $0$ after being hit it is considered dead. Can Chef kill all the zombies using the beams? If yes, what is the minimum number of beams that Chef has to drop to achieve this? \*\*Warning: Large I/O, it is advisable to use fast I/O methods.\*\* ### Input: - The first line contains $T$, number of testcases. - The first line of each test case contains two integers $N$ and $M$. - The second line of each test case contains $N$ integers $Z\_1, Z\_2, ..., Z\_N$. - $M$ lines follow. The $i^{th}$ line contains $3$ integers $L\_i$, $R\_i$ and $K\_i$. ### Output: - For each test case, if it is possible for Chef to kill all the zombies print a single line containing "\*\*YES\*\*" followed by the minimum number of beams he needs to drop. If it is impossible, print "\*\*NO\*\*" instead. (Note that the judge is case-sensitive) ### Constraints - $1 \\leq T \\leq 10$ - $1 \\leq N, M \\leq 10^5$ - Sum of $N$ over all test cases $\\leq 3 \\cdot 10^5$ - Sum of $M$ over all test cases $\\leq 3 \\cdot 10^5$ - $1 \\leq Z\_i \\leq 10^9$ - $1 \\leq L\_i \\leq R\_i \\leq N$ - $1 \\leq K\_i \\leq 10^9$ ### Sample Input: 2 5 5 1 2 3 4 5 1 2 3 1 5 1 2 4 3 3 5 3 4 5 3 3 2 2 5 2 1 2 2 2 3 2 ### Sample Output: YES 6 NO ### Explanation: - \*\*Case 1\*\*: One possible way is for Chef to drop the only beam from crane 2, 1 beam from crane 3, 1 beam from crane 4 and all 3 beams from crane 5. - \*\*Case 2\*\*: Zombie 1 and 3 can be killed but zombie 2 remains at health 1 even if all the beams are dropped.

---
category_name: easy
problem_code: RECVSEQ
problem_name: 'Recover the Sequence'
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
problem_author: anachor
problem_tester: null
date_added: 14-05-2019
tags:
    - anachor
    - cook
    - cook106
editorial_url: 'https://discuss.codechef.com/problems/RECVSEQ'
time:
    view_start_date: 1558290720
    submit_start_date: 1558290720
    visible_start_date: 1558290720
    end_date: 1735669800
    current: 1559472958
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK106/hindi/RECVSEQ.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK106/mandarin/RECVSEQ.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK106/russian/RECVSEQ.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK106/vietnamese/RECVSEQ.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK106/bengali/RECVSEQ.pdf) as well. Istiak is learning about arithmetic progressions. Today, he wrote an arithmetic sequence on a piece of paper. Istiak was very happy that he managed to write an arithmetic sequence and went out for lunch. Istiak's friend Rafsan likes to irritate him by playing silly pranks on him. This time, he could have chosen one element of Istiak's sequence and changed it. When Istiak came back, he was devastated to see his sequence ruined — it became a sequence $a\_1, a\_2, \\ldots, a\_N$ (possibly identical to the original sequence, if Rafsan did not change anything, in which case Istiak is just overreacting). Help him recover the original sequence. Formally, you have to find an arithmetic sequence $b\_1, b\_2, \\ldots, b\_N$ which differs from $a$ in at most one position. $b$ is said to be an arithmetic sequence if there is a real number $d$ such that $b\_i - b\_{i-1} = d$ for each $i$ ($2 \\le i \\le N$). If there are multiple valid solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output For each test case, print a single line containing $N$ space-separated integers $b\_1, b\_2, \\ldots, b\_N$. It is guaranteed that a valid solution exists. ### Constraints - $4 \\le N \\le 10^5$ - $|a\_i| \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $5 \\cdot 10^5$ ### Example Input ``` 3 4 1 3 10 7 5 -10 -5 0 5 10 4 2 2 2 10 ``` ### Example Output ``` 1 3 5 7 -10 -5 0 5 10 2 2 2 2 ``` ### Explanation \*\*Example case 1:\*\* Rafsan changed the third element from $5$ to $10$. \*\*Example case 2:\*\* No elements were changed. \*\*Example case 3:\*\* Rafsan changed the fourth element from $2$ to $10$.

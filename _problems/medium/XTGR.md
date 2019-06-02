---
category_name: medium
problem_code: XTGR
problem_name: 'X and Two Groups'
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
problem_author: allllekssssa
problem_tester: null
date_added: 24-08-2018
tags:
    - allllekssssa
    - greedy
    - ltime63
    - numbertheory
editorial_url: 'https://discuss.codechef.com/problems/XTGR'
time:
    view_start_date: 1535216402
    submit_start_date: 1535216402
    visible_start_date: 1535216402
    end_date: 1735669800
    current: 1559472987
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME63/mandarin/XTGR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME63/russian/XTGR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME63/vietnamese/XTGR.pdf) as well.

Tumut, the best programmer in his village Applidz, invented a problem and decided to share it with you: You are given two integer sequences $S\_1, S\_2, \\dots, S\_N$ and $T\_1, T\_2, \\dots, T\_M$ and an integer $x$. You are allowed to perform the following operation any number of times: - choose an element of $S$ and an element of $T$ (let's denote them by $S\_i$ and $T\_j$ respectively) - decrease both $S\_i$ and $T\_j$ by $x$, i.e. replace $S\_i$ by $S\_i-x$ and $T\_j$ by $T\_j-x$ Let's denote the minimum and maximum value in the sequence $S$ after performing the chosen operations (possibly none) by $minS$ and $maxS$ respectively. Similarly, let's denote the minimum and maximum value in $T$ after performing the chosen operations by $minT$ and $maxT$ respectively. The goal is minimizing the expression $(maxS+maxT) - (minS+minT)$. Compute the minimum value of this expression. ### Input - The first line of the input contains three space-separated integers $N$, $M$ and $x$. - The second line contains $N$ space-separated integers $S\_1, S\_2 \\dots S\_N$. - The third line contains $M$ space-separated integers $T\_1, T\_2 \\dots T\_M$. ### Output Print a single line containing one integer — the minimum possible value of the expression $(maxS+maxT) - (minS+minT)$. ### Constraints - $1 \\le N, M \\le 5\\cdot 10^5$ - $1 \\le S\_i \\le 10^9$ for each valid $i$ - $1 \\le T\_i \\le 10^9$ for each valid $i$ - $1 \\le x \\le 10^9$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $N, M \\le 20$ - $S\_i \\le 20$ for each valid $i$ - $T\_i \\le 20$ for each valid $i$ \*\*Subtask #2 (30 points):\*\* - $N, M \\le 1,000$ - $S\_i \\le 1,000$ for each valid $i$ - $T\_i \\le 1,000$ for each valid $i$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 2 2 3 1 8 2 3 ``` ### Example Output ``` 2 ``` ### Explanation We can perform these two operations: 1. decrease $S\_2$ and $T\_1$ by $x$ 2. decrease $S\_2$ and $T\_2$ by $x$ Afterwards, the sequence $S$ will be $\[1, 2\]$ and the sequence $T$ will be $\[-1, 0\]$. The resulting value of the given expression is $(2+0)-(1+(-1)) = 2$. It is impossible to obtain a smaller value no matter how many operations are performed.

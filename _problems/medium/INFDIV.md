---
category_name: medium
problem_code: INFDIV
problem_name: 'Make it Zero'
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
problem_author: jtnydv25
problem_tester: null
date_added: 11-12-2018
tags:
    - jtnydv25
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given two integers, $n$ and $m$. You want to make $m$ equal to $0$. You decide to keep repeating the following operation until $m$ becomes $0$ : - Choose an integer $r$, uniformly at random from the range $\[1, n\]$. Set $m$ equal to the remainder obtained on dividing it by $r$. That is, replace $m$ with $m \\% r$, where $\\%$ denotes the modulo operator. Find the expected number of operations after which $m$ becomes $0$. Let the answer be equal to $E = \\dfrac{P}{Q}$ for some integers $P$ and $Q$ such that gcd($P$, $Q$) = 1. Output the value of $P Q^{-1} $ modulo $10^9 + 7$, where $Q^{-1}$ denotes the modular inverse of $Q$ modulo $10^9 + 7$. ###Input: - The only line of the input contains two integers $n$ and $m$. ###Output: - Output one line containing the value of $P Q^{-1}$ modulo $10^9 + 7$ as described above. ###Constraints - $1 \\leq n \\leq 200000$ - $1 \\leq m \\leq 10^{18}$ ###Sample Input: 3 2 ###Sample Output: 500000005 ###EXPLANATION: $m$ is initially $2$. In each operation, we choose a random number $r$ from {$1, 2, 3$}. If $r = 1$, then $m \\% r = 0$, and we stop. If $r = 2$, then $m \\% r = 0$, and we stop. If $r = 3$, then $m \\% r = 2$, and we continue the process. Hence, we will repeat the procedure until we get a $1$ or $2$. You can check that the expected number of steps needed to get this is $\\frac{3}{2}$. Hence, we output $3 \\times 2^{-1} = 3 \\times 500000004 = 500000005 \\mod 10^9 + 7$

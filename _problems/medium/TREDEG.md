---
category_name: medium
problem_code: TREDEG
problem_name: 'Trees and Degrees'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: vivek_1998299
problem_tester: null
date_added: 18-04-2019
tags:
    - vivek_1998299
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472985
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/TREDEG.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/TREDEG.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/TREDEG.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/TREDEG.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/TREDEG.pdf) as well. Vivek is quite fond of expected values. One day, he stumbled upon the following problem. He cannot solve it, so he is asking you for help. Consider all trees with $N$ vertices (numbered $1$ through $N$); two trees are different if there is a pair of vertices $u$ and $v$ such that there is an edge between vertices $u$ and $v$ in exactly one of these trees. For a uniformly randomly chosen tree $T$, let's denote the degrees of vertices $1$ through $N$ in this tree by $d\_1, d\_2, \\ldots, d\_N$. Then, let's denote $A = (d\_1 \\cdot d\_2 \\cdot \\ldots \\cdot d\_N)^K$. Find the expected value of $A$. It can be proved that the expected value of $A$ can be expressed as a fraction $P/Q$, where $P$ and $Q$ are coprime positive integers and $Q$ is coprime to $998,244,353$. You should compute the value of $P \\cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $K$. ### Output For each test case, print a single line containing one integer ― $P \\cdot Q^{-1} \\pmod{998244353}$. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 2,000,000$ - $1 \\le K \\le 10^9$ - the sum of $N$ over all test cases does not exceed $2,000,000$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $T = 10$ - $2 \\le N \\le 7$ \*\*Subtask #2 (30 points):\*\* the sum of $N$ over all test cases does not exceed $100,000$ \*\*Subtask #3 (50 points):\*\* $K = 1$ ### Example Input ``` 2 3 1 4 2 ``` ### Example Output ``` 2 748683279 ``` ### Explanation \*\*Example case 1:\*\* There are $3$ labelled trees with size $3$: the paths $\[1-2-3\]$, $\[1-3-2\]$ and $\[3-1-2\]$. The expected value is $\\left((1 \\cdot 2 \\cdot 1)^1 + (1 \\cdot 1 \\cdot 2)^1 + (2 \\cdot 1 \\cdot 1)^1\\right) / 3 = 2$, so $P = 2$, $Q = 1$, $Q^{-1} = 1$ and the answer is $2$.

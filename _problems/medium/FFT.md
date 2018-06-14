---
category_name: medium
problem_code: FFT
problem_name: 'Fast forward travelling'
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
problem_author: altruist_
problem_tester: kingofnumbers
date_added: 21-04-2018
tags:
    - altruist_
editorial_url: 'https://discuss.codechef.com/problems/FFT'
time:
    view_start_date: 1524934802
    submit_start_date: 1524934802
    visible_start_date: 1524934802
    end_date: 1735669800
    current: 1525454398
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME59/mandarin/FFT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME59/russian/FFT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME59/vietnamese/FFT.pdf) as well.

Gritukan likes to take cyclic trips around the world. There are $N$ countries numbered $1$ through $N$ in the world. Before starting his travels, Gritukan chooses a permutation $P$ of all $N$ countries. Then, he visits all countries (some countries may be visited multiple times) using the following algorithm: - for each $v$ from $1$ to $N$ inclusive: - travel to country $v$ - travel from country $v$ to country $P\_v$, then from country $P\_v$ to country $P\_{P\_v}$, and so on until he reaches country $v$ again; let's call this sequence of visited countries a \*cyclic route\* (Each country appears at most once in a cyclic route. It is also possible for a route to contain only one country if $v=P\_v$, in which case Gritukan's travel along this route consists of staying in country $v$.) Unfortunately, Gritukan does not remember the routes he took. He only remembers a sequence $A\_{1..N}$ with the following meaning: for each country $v$, the number of cyclic routes which contained this country is $A\_v$. Given the sequence $A$, Gritukan asks you to calculate the number of permutations $P$ consistent with this sequence, modulo $998244353$ (it's prime). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of possible permutations modulo $998244353$ (it's prime). ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^6$ - $1 \\le A\_i \\le N$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (40 points):\*\* $1 \\le N \\le 5000$ \*\*Subtask #2 (60 points):\*\* original constraints ### Example Input ``` 2 6 1 1 1 1 1 1 6 6 6 6 6 6 6 ``` ### Example Output ``` 1 120 ```

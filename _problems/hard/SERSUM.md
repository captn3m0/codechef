---
category_name: hard
problem_code: SERSUM
problem_name: 'Series Sum'
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
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 28-02-2018
tags:
    - chemthan
    - convolution
    - fft
    - may18
    - power
editorial_url: 'https://discuss.codechef.com/problems/SERSUM'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1528985564
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/SERSUM.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/SERSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/SERSUM.pdf) as well.

You are given $N$ integers $a\_1, a\_2, \\dots, a\_N$. Let's define functions $f$ and $g$: $$f(x, k) = (x + a\_1)^k + (x + a\_2)^k + \\dots + (x + a\_N)^k$$ $$g(t, k) = f(0, k) + f(1, k) + \\dots + f(t, k)$$ You are also given integers $T$ and $K$. Calculate $g(T, i)$ modulo $10^9 + 7$ for each $i$ between $0$ and $K$ inclusive. ### Input - The first line of the input contains three space-separated integers $N$, $K$ and $T$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$. ### Output Print a single line containing $K+1$ space-separated integers — the values of $g(T, 0), g(T, 1), \\dots, g(T, K)$ modulo $10^9 + 7$. ### Constraints - $1 \\le N \\le 10^5$ - $1 \\le K \\le 5 \\cdot 10^4$ - $1 \\le T \\le 10^{18}$ - $0 \\le a\_i \\lt 10^9 + 7$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $N = 1$ \*\*Subtask #2 (10 points):\*\* $a\_i = a\_1 ^ i$ modulo $10^9 + 7$ for each valid $i$ \*\*Subtask #3 (10 points):\*\* $a\_i = a\_1 + i - 1$ modulo $10^9 + 7$ for each valid $i$ \*\*Subtask #4 (70 points):\*\* original constraints ### Example Input ``` 2 3 4 0 1 ``` ### Example Output ``` 10 25 85 325 ```

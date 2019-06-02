---
category_name: easy
problem_code: NBONACCI
problem_name: 'XOR N-bonacci Sequence'
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
problem_author: erfaniaa
problem_tester: null
date_added: 16-03-2019
tags:
    - cook104
    - easye
    - erfaniaa
editorial_url: 'https://discuss.codechef.com/problems/NBONACCI'
time:
    view_start_date: 1553452200
    submit_start_date: 1553452200
    visible_start_date: 1553452200
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK104/hindi/NBONACCI.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK104/mandarin/NBONACCI.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK104/vietnamese/NBONACCI.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK104/bengali/NBONACCI.pdf) as well. An \*$N$-bonacci sequence\* is an infinite sequence $F\_1, F\_2, \\ldots$ such that for each integer $i \\gt N$, $F\_i$ is calculated as $f(F\_{i-1}, F\_{i-2}, \\ldots, F\_{i-N})$, where $f$ is some function. A \*XOR $N$-bonacci sequence\* is an $N$-bonacci sequence for which $f(F\_{i-1}, F\_{i-2}, \\ldots, F\_{i-N}) = F\_{i-1} \\oplus F\_{i−2} \\oplus \\ldots \\oplus F\_{i−N}$, where $\\oplus$ denotes the \[bitwise XOR operation\](https://en.wikipedia.org/wiki/Bitwise\_operation#XOR). Recently, Chef has found an interesting sequence $S\_1, S\_2, \\ldots$, which is obtained from prefix XORs of a XOR $N$-bonacci sequence $F\_1, F\_2, \\ldots$. Formally, for each positive integer $i$, $S\_i = F\_1 \\oplus F\_2 \\oplus \\ldots \\oplus F\_i$. You are given the first $N$ elements of the sequence $F$, which uniquely determine the entire sequence $S$. You should answer $Q$ queries. In each query, you are given an index $k$ and you should calculate $S\_k$. It is guaranteed that in each query, $S\_k$ does not exceed $10^{50}$. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $F\_1, F\_2, \\ldots, F\_N$. - The following $Q$ lines describe queries. Each of these lines contains a single integer $k$. ### Output For each query, print a single line containing one integer $S\_k$. ### Constraints - $1 \\le N, Q \\le 10^5$ - $0 \\le F\_i \\le 10^9$ for each $i$ such that $1 \\le i \\le N$ - $1 \\le k \\le 10^9$ ### Example Input ``` 3 4 0 1 2 7 2 5 1000000000 ``` ### Example Output ``` 3 1 0 0 ```

---
category_name: hard
problem_code: DANYANUM
problem_name: 'Danya and Numbers'
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
problem_author: barenuz
problem_tester: null
date_added: 14-06-2018
tags:
    - barenuz
    - cook95
    - med
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/DANYANUM'
time:
    view_start_date: 1529260205
    submit_start_date: 1529260205
    visible_start_date: 1529260205
    end_date: 1735669800
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK95/mandarin/DANYANUM.pdf), [Russian](http://www.codechef.com/download/translated/COOK95/russian/DANYANUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK95/vietnamese/DANYANUM.pdf) as well.

Danya has a sequence $A$ of non-negative integers. Initially, $A$ has length $N$. Let's define a function $f(x, A)$, where $x$ is a positive integer $\\le |A|$, as the maximum of bitwise ANDs of all subsequences of $A$ with length equal to $x$. Kostya gives Danya $M$ requests. There are three types of requests: - $1\\;v$: append an integer $v$ to $A$ - $2\\;v$: delete an element equal to $v$ from $A$; it is guaranteed that $A$ contains $v$ at least once, but if there are more elements equal to $v$, you should only delete one of them - $3\\;x$: calculate $f(x, A)$ Also, Kostya knows that at any time, all elements of $A$ are smaller than $2^k$ for a fixed $k$. Help Danya process all of Kostya's requests. ### Input - The first line of the input contains three space-separated integers $N$, $M$ and $k$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$ denoting the initial sequence $A$. - Each of the following $M$ lines contains two space-separated integers describing a request in the format $1\\;v$, $2\\;v$ or $3\\;x$. ### Output For each request of type 3, print a single line containing one integer — the value of $f(x, A)$. ### Constraints - $1 \\le N, M \\le 75,000$ - $1 \\le k \\le 18$ - $0 \\le v \\lt 2^k$ - $1 \\le x \\le |A|$ ### Example Input ``` 4 7 3 6 7 5 2 3 2 3 3 1 7 3 3 2 7 2 6 3 2 ``` ### Example Output ``` 6 4 6 5 ``` ### Explanation Subsequences giving optimal answers for the requests of type 3 are, in order: $(6, 7)$; $(6, 7, 5)$; $(6, 7, 7)$; $(7, 5)$.

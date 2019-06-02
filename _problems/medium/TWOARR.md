---
category_name: medium
problem_code: TWOARR
problem_name: 'The Most Amazing Dish'
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
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: deva2802
problem_tester: null
date_added: 14-02-2019
tags:
    - cook103
    - deva2802
    - medium
    - persistence
editorial_url: 'https://discuss.codechef.com/problems/TWOARR'
time:
    view_start_date: 1550428202
    submit_start_date: 1550428202
    visible_start_date: 1550428202
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK103/hindi/TWOARR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK103/mandarin/TWOARR.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK103/russian/TWOARR.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK103/vietnamese/TWOARR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK103/bengali/TWOARR.pdf) as well. Chef has recently learnt about the most amazing dish. The recipe for this dish lists two sequences $A\_1, A\_2, \\ldots, A\_N$ and $B\_1, B\_2, \\ldots, B\_N$, and $Q$ tasks. Chef noticed that there are only three types of tasks: 1. `Z Y`: set $B\_Z = Y$ 2. `L R X`: for each $i$ such that $L \\le i \\le R$, set $A\_i = B\_{X+i-L}$ 3. `L R`: compute the sum $A\_L + A\_{L+1} + \\ldots + A\_R$ Chef must perform all the tasks in the given order if he wants to master cooking the most amazing dish. He set out to perform all the tasks, but soon realised that there are too many of them! Since Chef does not want to miss his favourite TV show, you should help him perform all the tasks written on the recipe. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\ldots, B\_N$. - The next $Q$ lines describe the tasks. Each of these lines contains an integer $T$ denoting the type of the current task, followed by a space and the parametres of this task in the following format: - if $T = 1$, two space-separated integers $Z$ and $Y$ - if $T = 2$, three space-separated integers $L$, $R$ and $X$ - if $T = 3$, two space-separated integers $L$ and $R$ ### Output For each task of type 3, print a single line containing one integer — the required sum. ### Constraints - $1 \\le N \\le 2 \\cdot 10^5$ - $1 \\le Q \\le 2 \\cdot 10^5$ - $0 \\le A\_i, B\_i \\le 10^9$ for each valid $i$ - $0 \\le Y \\le 10^9$ - $1 \\le L \\le R \\le N$ - $1 \\le Z, X \\le N$ - $X+R-L \\le N$ ### Example Input ``` 5 6 0 0 0 0 0 1 2 3 4 5 2 2 3 1 3 1 5 1 3 2 3 1 5 2 1 5 1 3 1 5 ``` ### Example Output ``` 3 3 14 ``` ### Explanation In the second, fourth and sixth task, you should compute the current sum of all elements of $A$. After performing the first task, $A = \[0, 1, 2, 0, 0\]$ and $B = \[1, 2, 3, 4, 5\]$. After the third task, $A = \[0, 1, 2, 0, 0\]$ and $B = \[1, 2, 2, 4, 5\]$. After the fifth task, $A = \[1, 2, 2, 4, 5\]$ and $B = \[1, 2, 2, 4, 5\]$.

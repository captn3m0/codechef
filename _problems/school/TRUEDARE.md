---
category_name: school
problem_code: TRUEDARE
problem_name: 'Truth and Dare'
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
problem_author: admin2
problem_tester: null
date_added: 13-11-2018
tags:
    - admin2
    - cakewalk
    - cook100
    - data
    - sets
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/TRUEDARE'
time:
    view_start_date: 1542565802
    submit_start_date: 1542565802
    visible_start_date: 1542565802
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK100TST/hindi/TRUEDARE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK100TST/mandarin/TRUEDARE.pdf), \[Russian\](http://www.codechef.com/download/translated/CK100TST/russian/TRUEDARE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK100TST/vietnamese/TRUEDARE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK100TST/bengali/TRUEDARE.pdf) as well. Ram and Shyam are playing a game of Truth and Dare. In this game, Shyam will ask Ram to perform tasks of two types: - Truth task: Ram has to truthfully answer a question. - Dare task: Ram has to perform a given task. Each task is described by an integer. (If a truth task and a dare task are described by the same integer, they are still different tasks.) You are given four lists of tasks: - $T\_{r, 1}, T\_{r, 2}, \\dots, T\_{r, t\_r}$: the truth tasks Ram can perform. - $D\_{r, 1}, D\_{r, 2}, \\dots, D\_{r, d\_r}$: the dare tasks Ram can perform. - $T\_{s, 1}, T\_{s, 2}, \\dots, T\_{s, t\_s}$: the truth tasks Shyam can ask Ram to perform. - $D\_{s, 1}, D\_{s, 2}, \\dots, D\_{s, d\_s}$: the dare tasks Shyam can ask Ram to perform. Note that the elements of these lists are not necessarily distinct, each task may be repeated any number of times in each list. Shyam wins the game if he can find a task Ram cannot perform. Ram wins if he performs all tasks Shyam asks him to. Find the winner of the game. Let's take an example where Ram can perform truth tasks $3$, $2$ and $5$ and dare tasks $2$ and $100$, and Shyam can give him truth tasks $2$ and $3$ and a dare task $100$. We can see that whichever truth or dare tasks Shyam asks Ram to perform, Ram can easily perform them, so he wins. However, if Shyam can give him dare tasks $3$ and $100$, then Ram will not be able to perform dare task $3$, so Shyam wins. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $t\_r$. - The second line contains $t\_r$ space-separated integers $T\_{r, 1}, T\_{r, 2}, \\dots, T\_{r, t\_r}$. - The third line contains a single integer $d\_r$. - The fourth line contains $d\_r$ space-separated integers $D\_{r, 1}, D\_{r, 2}, \\dots, D\_{r, d\_r}$. - The fifth line contains a single integer $t\_s$. - The sixth line contains $t\_s$ space-separated integers $T\_{s, 1}, T\_{s, 2}, \\dots, T\_{s, t\_s}$. - The seventh line contains a single integer $d\_s$. - The eighth line contains $d\_s$ space-separated integers $D\_{s, 1}, D\_{s, 2}, \\dots, D\_{s, d\_s}$. ### Output For each test case, print a single line containing the string `"yes"` if Ram wins the game or `"no"` otherwise. ### Constraints - $1 \\le T \\le 100$ - $1 \\le t\_r, d\_r, t\_s, d\_s \\le 100$ - $1 \\le T\_{r, i} \\le 100$ for each valid $i$ - $1 \\le D\_{r, i} \\le 100$ for each valid $i$ - $1 \\le T\_{s, i} \\le 100$ for each valid $i$ - $1 \\le D\_{s, i} \\le 100$ for each valid $i$ ### Example Input ``` 4 2 1 2 3 1 3 2 1 2 2 3 2 2 1 2 3 1 3 2 1 2 3 3 2 4 3 3 2 5 2 2 100 1 2 1 100 2 1 2 3 1 3 2 1 2 3 3 2 2 ``` ### Example Output ``` yes no yes yes ``` ### Explanation \*\*Example case 1:\*\* Ram's truth tasks are $\[1, 2\]$ and his dare tasks are $\[1, 3, 2\]$. Shyam's truth tasks are $\[2\]$ and his dare tasks are $\[3, 2\]$. Ram can perform all tasks Shyam gives him. \*\*Example case 2:\*\* Ram's truth tasks are $\[1, 2\]$ and his dare tasks are $\[1, 3, 2\]$. Shyam's truth tasks are $\[2\]$ and his dare tasks are $\[3, 2, 4\]$. If Shyam asks Ram to perform dare task $4$, Ram will not be able to do it.

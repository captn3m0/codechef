---
category_name: easy
problem_code: SPREAD2
problem_name: 'Spread the Word'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 10-10-2018
tags:
    - easy
    - kingofnumbers
    - prefix
    - snckql19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/SPREAD2'
time:
    view_start_date: 1539698400
    submit_start_date: 1539698400
    visible_start_date: 1539698400
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19QLTST/hindi/SPREAD2.pdf), \[Mandarin chinese\](http://www.codechef.com/download/translated/S19QLTST/mandarin/SPREAD2.pdf), \[Russian\](http://www.codechef.com/download/translated/S19QLTST/russian/SPREAD2.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19QLTST/vietnamese/SPREAD2.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19QLTST/bengali/SPREAD2.pdf) as well. Snackdown 2019 is coming! People have started to spread the word and tell other people about the contest. There are $N$ people numbered $1$ through $N$. Initially, only person $1$ knows about Snackdown. On each day, everyone who already knows about Snackdown tells other people about it. For each valid $i$, person $i$ can tell up to $A\_i$ people per day. People spread the information among the people who don't know about Snackdown in the ascending order of their indices; you may assume that no two people try to tell someone about Snackdown at the same moment. Each person is only allowed to start telling other people about Snackdown since the day after he/she gets to know about it (person $1$ can start telling other people already on day $1$). How many days does it take for all people to know about Snackdown? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of days. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^5$ - the sum of $N$ for all test cases does not exceed $10^6$ - $0 \\le A\_i \\le N$ for each valid $i$ - $1 \\le A\_1$ ### Example Input ``` 2 7 2 1 1 5 5 5 5 5 5 1 3 2 1 ``` ### Example Output ``` 2 1 ``` ### Explanation \*\*Example case 1:\*\* On day $1$, person $1$ tells people $2$ and $3$ about Snackdown. On day $2$, the first three people know about Snackdown, so they can tell $2+1+1 = 4$ people about it in a single day. That means the last four people get to know about Snackdown on day $2$, so the total number of days is $2$. \*\*Example case 2:\*\* On each day, person $1$ can tell up to $5$ people about Snackdown, so on the first day, he simply tells all people about it and the total number of days is $1$.

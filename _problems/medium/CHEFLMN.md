---
category_name: medium
problem_code: CHEFLMN
problem_name: 'Delivery Problems'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: hloya_ygrt
problem_tester: null
date_added: 15-05-2018
tags:
    - cook94
    - dynamic
    - hloya_ygrt
    - modular
editorial_url: 'https://discuss.codechef.com/problems/CHEFLMN'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528985561
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/CHEFLMN.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/CHEFLMN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFLMN.pdf) as well.

Chef decided to order $N$ lemons for a future Lemon Festival. The company "LemEx" that delivers lemons provides $3,000$ yellow trucks and one red truck, and Chef wants to fully use them all. The trucks have identical capacities, so Chef wants each truck to transfer the same number of lemons. You are given a string $M$ and an integer $K$. The decimal representation of the number $N$ can be obtained by concatenating $M$ with itself $K$ times, e.g. if $M = 903$ and $K = 3$, it means that $N = 903903903$. You are not allowed to add any leading zeroes to this decimal representation, however, it may initially contain leading zeroes. It could be possible that $N$ lemons cannot be delivered while satisfying the given rule. Therefore, Chef may change an arbitrary number of digits (possibly zero) in the decimal representation of $N$, i.e. choose a number of positions in this string and change each of the digits at these positions to a different digit. However, it is not allowed to change two or more digits with identical original values (at different positions). There are no restrictions on the resulting values of any digits; specifically, the resulting number is also allowed to contain leading zeroes. Find the number of ways to change the number $N$ so that all lemons can be delivered by LemEx. Since this number can be very large, we ask you to compute it modulo $10^9 + 7$. ### Input The first and only line of the input contains a string $M$, followed by a space and an integer $K$. ### Output Print a single line containing one integer — the number of ways to change the number of lemons modulo $10^9 + 7$. ### Constraints - $1 \\le |M| \\le 1,000,000$ - $1 \\le K \\le 10^9$ - each character of $M$ is a digit between '0' and '9' inclusive - $M$ may contain leading zeroes ### Example Input ``` 3012 1 ``` ### Example Output ``` 4 ``` ### Explanation We have $M$ equal to "3012" and $K = 1$, so $N = 3012$ (once repeated $M$). The decimal representation of $N$ can be changed to "0000" (the number $0$), "3001", "6002" or "9003".

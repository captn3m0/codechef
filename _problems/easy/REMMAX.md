---
category_name: easy
problem_code: REMMAX
problem_name: 'Reverse Maximisation'
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
problem_author: abdullah768
problem_tester: null
date_added: 15-05-2019
tags:
    - abdullah768
    - cases
    - easy
    - implementation
    - ltime72
    - taran_1407
time:
    view_start_date: 1558803600
    submit_start_date: 1558803600
    visible_start_date: 1558803600
    end_date: 1735669800
    current: 1559472958
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME72/hindi/REMMAX.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME72/bengali/REMMAX.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME72/mandarin/REMMAX.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME72/russian/REMMAX.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME72/vietnamese/REMMAX.pdf) as well. Abdullah has invented a machine for converting money. When $X$ units of money are inserted into this machine, it produces $\\mathrm{Reverse}\\,(X)$ units of money. where $\\mathrm{Reverse}\\,(X)$ denotes the decimal number obtained by reversing the decimal representation of $X$ (without leading zeroes). For example: - $\\mathrm{Reverse}\\,(123) = 321$, since the reverse of "123" is "321" - $\\mathrm{Reverse}\\,(460) = 64$, since the reverse of "460" is "064", which is $64$ in decimal representation The machine is highly unstable and it can be used only once. Abdullah has $N$ units of money, so he is wondering: how much money should he insert into the machine such that the amount of money produced by the machine is maximum possible? The amount of money inserted into the machine must be an integer between $1$ and $N$ inclusive. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $N$. ### Output For each test case, print a single line containing one integer ― the amount of money Abdullah should insert into the machine. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^{10,000}$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N \\le 10^4$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 23 7 ``` ### Example Output ``` 19 7 ``` ### Explanation \*\*Example case 1:\*\* Inserting $X=19$ units of money gives Abdullah $91$ units of money. \*\*Example case 2:\*\* Inserting $X=7$ units of money gives Abdullah $7$ units of money.

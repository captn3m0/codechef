---
category_name: hard
problem_code: WKPLAN
problem_name: 'Chef and Working Plan'
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
max_timelimit: '1 - 18'
source_sizelimit: '50000'
problem_author: whzzt
problem_tester: null
date_added: 5-12-2018
tags:
    - whzzt
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472994
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/WKPLAN.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/WKPLAN.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/WKPLAN.pdf), \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/WKPLAN.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/WKPLAN.pdf) as well. These days, Chef is working on opening a restaurant. Obviously, Chef dislikes running the restaurant by himself. In order to avoid such a terrible thing, he decided to hire exactly $M$ workers (numbered $1$ through $M$) to help him. The workers will choose some positive integer constants $a\_1, a\_2, \\dots, a\_M$. A worker with a constant $a$ wants to be paid a fixed salary after each $a$ days. Chef is very orderly, so he wants to choose a \*Chef-year\* — a period of $x$ days, and a \*Chef-week\* — a period of $y$ days, where $x$ and $y$ depend on the workers' constants in such a way that Chef can always pay each worker's salary at the end of a Chef-week and all the workers are paid their salaries at once at the end of a Chef-year. Chef also wants a Chef-year to be as short as possible and a Chef-week to be as long as possible. It can be shown that these conditions are satisfied when $x$ is the lowest common multiple of $a\_1, a\_2, \\dots, a\_M$ and $y$ is the greatest common divisor of $a\_1, a\_2, \\dots, a\_M$. For a group of $M$ workers with known $a\_1, a\_2, \\dots, a\_M$, Chef then defines the \*value\* of the group as $x^p f(y)$，where $f(x) = \\sum\_{i = 0}^q f\_i x^{q-i}$ is a polynomial of degree $q$. Now, Chef wants to know the sum of values of the group of $M$ workers over all possible sequences $a\_1, a\_2, \\dots, a\_M$ which meet the constraint $x \\le N$. Since the answer may be extremely large, you should compute it modulo $10^9 + 7$. \*\*Note\*\*: This problem has a stricter submission limit, each user may only submit this problem at most 50 times during the contest. ### Input - The first line of the input contains four space-separated integers $N$, $M$, $p$ and $q$. - The second line contains $q+1$ space-separated integers $f\_0, f\_1, \\ldots, f\_q$ — the coefficients of the polynomial $f$. ### Output Print a single line containing one integer — the sum of values for all possible groups of workers modulo $10^9 + 7$. ### Constraints - $1 \\le N \\le 5 \\times 10^{12}$ - $1 \\le M \\le 10^9$ - $0 \\le p, q \\le 20$ - $0 \\le f\_i

---
category_name: easy
problem_code: MAXEP
problem_name: 'Max and Electrical Panel'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: barenuz
problem_tester: null
date_added: 18-11-2018
tags:
    - barenuz
    - dec18
    - simple
editorial_url: 'https://discuss.codechef.com/problems/MAXEP'
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/MAXEP.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/MAXEP.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/MAXEP.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/MAXEP.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/MAXEP.pdf) as well. \*\*This is an interactive problem.\*\* Max has an electrical panel. He knows that there is an integer $x$ ($1 \\le x \\le N$) such that if the panel is connected to voltage greater or equal to $x$, it will break. However, he does not know the exact value of $x$. You must help Max determine $x$. You may perform operations of two types: - Connect the panel to voltage $y$, where $y$ is an arbitrary integer between $1$ and $N$ inclusive. This operation costs $1$ coin, and you may only perform it if the panel is not broken. After this operation, you find out whether the panel is broken. - Fix the broken panel. This operation costs $c$ coins. Each operation may be performed any number of times as long as you have enough coins. Initially, you have $1,000$ coins. ### Interaction - First, you should read a line containing two space-separated integers $N$ and $c$. - To perform an operation of the first type, you should print a line containing two space-separated integers $1$ and $y$. Then, you must read a line containing a single integer: $0$ if the panel is not broken after this operation, $1$ if it is broken or $-1$ if the operation was invalid (you could also get a direct WA if the operation is invalid). - To perform an operation of the second type, you should print a line containing a single integer $2$. - Finally, you should print a line containing two space-separated integers $3$ and $x$. Don't forget to flush the output after printing each line! ### Constraints - $1 \\le N \\le 150,000$ - $1 \\le c \\le 150$ ### Subtasks \*\*Subtask #1 (15 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #2 (25 points):\*\* $1 \\le c \\le 50$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example ``` You Grader 10 8 1 7 1 2 1 5 1 2 1 3 0 1 4 1 2 3 4 ```

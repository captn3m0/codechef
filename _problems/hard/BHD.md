---
category_name: hard
problem_code: BHD
problem_name: 'Before Having Donuts'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: dolabmoon
problem_tester: null
date_added: 24-07-2018
tags:
    - dolabmoon
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/BHD.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/BHD.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/BHD.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/BHD.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/BHD.pdf) as well. When Chef was cooking donuts, thunder suddenly came across the gray-blue sky. That's how Lemon came to Earth, and that's also why she loves DONUTS! Since Lemon is a clever person, she often thinks about some problem before having donuts. This time, she thought about the following problem: There are $N$ donuts. Each donut is a torus described by parameters $x$, $y$, $z$, $R$, $r$, where the center of the torus has Cartesian coordinates $(x, y, z)$, $R$ is the distance from the center of the torus to the center of its tube and $r$ is the radius of the tube. The rotational axis of each torus is parallel with the $z$-axis. The tori may touch or intersect each other. What is the total volume they take up, i.e. the volume of the union of all $N$ tori? ### Input - The first line of the input contains a single integer $N$. - Each of the following $N$ lines contains five space-separated real numbers $x$, $y$, $z$, $R$ and $r$ describing one torus. ### Output - Print a single line containing one real number — the total volume of the $N$ tori. Your answer will be considered correct if its absolute error does not exceed $10^{-2}$. ### Constraints - $1\\leq N \\le 20$ - $-900 \\leq x, y, z \\leq 600$ - $ 0.1 \\leq r \\leq R \\leq 50$ ### Example Input ``` 1 0 0 0 5 2 ``` ### Example Output ``` 394.78417590 ```

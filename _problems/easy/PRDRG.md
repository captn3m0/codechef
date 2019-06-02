---
category_name: easy
problem_code: PRDRG
problem_name: 'Chef and Ridges'
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
problem_author: sshhhh
problem_tester: null
date_added: 27-09-2018
tags:
    - gcd
    - nov18
    - pattern
    - simple
    - simulation
    - sshhhh
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/PRDRG'
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/PRDRG.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/PRDRG.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/PRDRG.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/PRDRG.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/PRDRG.pdf) as well. We have a rectangular piece of cardboard with width $1$ (its height is not important). We are going to fold it in the following way: - pick up the right side of the piece of cardboard and move it to the left until it touches the left side - this way, a smaller piece of cardboard with width $1/2$ is created; if we unfolded it, we could see a vertical ridge formed in the middle - pick up the left side of this new piece of cardboard and move it to the right until it touches the (new) right side - pick up the right side of the resulting piece of cardboard and move it to the left until it touches the left side, etc. Whenever the cardboard is folded, exactly one of its new sides is a newly formed ridge (there may be more, internal ridges formed, but we do not consider these). Let's denote such a ridge created in the $k$-th folding by $R\_k$. In total, we fold the piece of cardboard $N$ times. Afterwards, we unfold it and look at the formed ridges. Let's denote the distance of ridge $R\_N$ (i.e. the last formed outer ridge) from the left side of the original piece of cardboard by $D\_N$. For example, $D\_1 = 1/2$ and $D\_2 = 1/4$. It is possible to express $D\_N$ as an irreducible fraction $x/y$. Find this fraction. Assume that it is possible to fold the piece of cardboard as many times as we want. ### Input The first and only line of the input contains a single integer $T$ denoting the number of test cases. For each test case, a space and an integer $N$ follows. ### Output Print a single line containing $2T$ space-separated integers. For the $i$-th test case ($1 \\le i \\le T$), the $2i-1$-th and $2i$-th integer should denote $x$ and $y$ — the position of the last ridge as an irreducible fraction. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 25$ \*\*Subtask #1 (10 points):\*\* - $1 \\le T \\le 5$ - $1 \\le N \\le 5$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 2 1 2 ``` ### Example Output ``` 1 2 1 4 ``` ### Explanation \*\*Example case 1:\*\* We only fold once, so $x=1$ and $y=2$. \*\*Example case 2:\*\* We fold the piece of cardboard twice. The last edge is at $1/4$, so $x=1$ and $y=4$.

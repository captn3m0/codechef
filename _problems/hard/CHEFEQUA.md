---
category_name: hard
problem_code: CHEFEQUA
problem_name: 'Chef and Equations'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: wxh010910
problem_tester: null
date_added: 12-09-2018
tags:
    - divide
    - generating_functions
    - interpolation
    - medium
    - nov18
    - ntt
    - taran_1407
    - wxh010910
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/CHEFEQUA.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/CHEFEQUA.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/CHEFEQUA.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/CHEFEQUA.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/CHEFEQUA.pdf) as well. You are given a sequence of positive integers $A\_0, A\_1, \\ldots, A\_{N-1}$ and a sequence of non-negative integers $C\_0, C\_1, \\ldots, C\_{N-1}$. Let's denote $M = 998244353$. You know that for $$C\_i = \\sum\_{j = 0}^{N-1} B\_j A\_j^i \\mod M$$ holds for each valid $i$, with some coefficients $B\_0, B\_1, \\dots, B\_{N-1}$ (such that $0 \\le B\_i \\lt M$ for each $i$). Your task is to find these coefficients. It is possible to prove that under the given constraints, the solution is unique. ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_0, A\_1, \\ldots, A\_{N-1}$. - The third line contains $N$ space-separated integers $C\_0, C\_1, \\ldots, C\_{N-1}$. ### Output Print a single line containing $N$ space-separated integers $B\_0, B\_1, \\ldots, B\_{N-1}$. ###Constraints - $1 \\le N \\le 60,000$ - $1 \\le A\_i \\lt M$ for each valid $i$ - $0 \\le C\_i \\lt M$ for each valid $i$ - $A\_i \\neq A\_j$ for each valid $i, j$ ($i \\neq j$) ### Subtasks \*\*Subtask #1 (5 points):\*\* $1 \\le N \\le 300$ \*\*Subtask #2 (15 points):\*\* $1 \\le N \\le 3,000$ \*\*Subtask #3 (20 points):\*\* $C\_i = C\_1^i\\;\\mathrm{mod}\\;M$ for each valid $i$ \*\*Subtask #4 (60 points):\*\* original constraints ### Example Input ``` 3 1 2 3 3 6 14 ``` ### Example Output ``` 1 1 1 ``` ### Explanation The relations between $A$, $B$ and $C$ hold: - $C\_0 = 3 = 1^0 + 2^0 + 3^0$ - $C\_1 = 6 = 1^1 + 2^1 + 3^1$ - $C\_2 = 14 = 1^2 + 2^2 + 3^2$

---
category_name: easy
problem_code: HMAPPY
problem_name: 'Appy and Balloons '
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
problem_author: hmrockstar
problem_tester: null
date_added: 11-09-2018
tags:
    - binary
    - easy
    - hmrockstar
    - oct18
editorial_url: 'https://discuss.codechef.com/problems/HMAPPY'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472947
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/HMAPPY.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/HMAPPY.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/HMAPPY.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/HMAPPY.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/HMAPPY.pdf) as well. Appy loves balloons! She wants you to give her balloons on each of $N$ consecutive days (numbered $1$ through $N$); let's denote the number of balloons Appy wants on day $i$ by $A\_i$. The problem is that you only have $M$ balloons. Fortunately, you can give her candies instead of balloons as well. On each day $i$, Appy accepts $B\_i$ candies per each balloon you do not give her — formally, if you give Appy $X\_i$ balloons on day $i$, then you have to give her $C\_i = \\mathrm{max}(0, A\_i - X\_i) \\cdot B\_i$ candies as well. Your task is to minimize the maximum number of candies you give Appy on some day — find the minimum possible value of $\\mathrm{max}(C\_1, C\_2, C\_3, ..., C\_N)$. ### Input - The first line of the input contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$. ### Output Print a single line containing one integer — the minimum value of $\\mathrm{max}(C\_1, C\_2, C\_3, ..., C\_N)$. ### Constraints - $1 \\le N \\le 10^5$ - $0 \\le M \\le 10^{18}$ - $0 \\le A\_i \\le 10^{9}$ for each valid $i$ - $0 \\le B\_i \\le 10^{9}$ for each valid $i$ ### Subtasks \*\*Subtask #1 (27 points):\*\* - $1 \\le A\_i \\le 10$ for each valid $i$ - $1 \\le B\_i \\le 10$ for each valid $i$ \*\*Subtask #2 (73 points):\*\* original constraints ### Example Input ``` 5 3 1 2 3 4 5 1 2 3 4 5 ``` ### Example Output ``` 15 ``` ### Explanation If you give Appy $0, 0, 0, 1, 2$ balloons on days $1$ through $5$, then the required numbers of candies on each day are $1, 4, 9, 12, 15$. The maximum number of candies is $15$, required on day $5$.

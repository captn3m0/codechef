---
category_name: medium
problem_code: CPCOMP
problem_name: 'Coprime Components'
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
problem_author: bciobanu
problem_tester: null
date_added: 16-09-2018
tags:
    - bciobanu
    - dsu
    - graphs
    - medium
    - number
    - oct18
editorial_url: 'https://discuss.codechef.com/problems/CPCOMP'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472971
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/CPCOMP.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/CPCOMP.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/CPCOMP.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/CPCOMP.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/CPCOMP.pdf) as well. Consider an undirected graph $G$ with $N$ vertices, numbered $1$ through $N$. You are given an integer sequence $A\_1, A\_2, \\dots, A\_N$ describing the edges of this graph — for each pair of vertices $u$ and $v$, there is an edge between those vertices if and only if $A\_u$ and $A\_v$ are coprime. Find the number of connected components of $G$. ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output Print a single line containing one integer — the number of connected components. ### Constraints - $1 \\le N \\le 2 \\cdot 10^5$ - $1 \\le A\_i \\le 2 \\cdot 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (5 points):\*\* $1 \\le N \\le 500$ \*\*Subtask #2 (25 points):\*\* $1 \\le N \\le 5,000$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 5 6 2 3 24 10 ``` ### Example Output ``` 3 ``` ### Explanation There are two edges $(2, 3)$ and $(3, 5)$. There are $3$ connected components $(1)$, $(2, 3, 5)$ and $(4)$.

---
category_name: easy
problem_code: DPAIRS
problem_name: 'Distinct Pairs'
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
problem_author: sanroylozan
problem_tester: null
date_added: 31-12-2018
tags:
    - data
    - easy
    - jan19
    - observations
    - sanroylozan
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/DPAIRS'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/DPAIRS.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/DPAIRS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/DPAIRS.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/DPAIRS.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/DPAIRS.pdf) as well. Chef has two integer sequences $A\_1, A\_2, \\ldots, A\_N$ and $B\_1, B\_2, \\ldots, B\_M$. You should choose $N+M-1$ pairs, each in the form $(A\_x, B\_y)$, such that the sums $A\_x + B\_y$ are all pairwise distinct. It is guaranteed that under the given constraints, a solution always exists. If there are multiple solutions, you may find any one. ### Input - The first line of the input contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The third line contains $M$ space-separated integers $B\_1, B\_2, \\ldots, B\_M$. ### Output Print $N+M-1$ lines. Each of these lines should contain two space-separated integers $x$ and $y$ denoting that you chose a pair $(A\_{x+1}, B\_{y+1})$. ### Constraints - $1 \\le N, M \\le 2 \\cdot 10^5$ - $|A\_i| \\le 10^9$ for each valid $i$ - $|B\_i| \\le 10^9$ for each valid $i$ - $A\_1, A\_2, \\ldots, A\_N$ are pairwise distinct - $B\_1, B\_2, \\ldots, B\_M$ are pairwise distinct ### Subtasks \*\*Subtask #1 (25 points):\*\* $1 \\le N, M \\le 10^3$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` 3 2 10 1 100 4 3 ``` ### Example Output ``` 2 1 0 0 1 0 0 1 ``` ### Explanation The chosen pairs and their sums are: - $A\_3 + B\_2 = 100+3 = 103$ - $A\_1 + B\_1 = 10+4 = 14$ - $A\_2 + B\_1 = 1+4 = 5$ - $A\_1 + B\_2 = 10+3 = 13$ Since all sums are distinct, this is a correct output.

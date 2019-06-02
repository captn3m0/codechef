---
category_name: medium
problem_code: MATPER
problem_name: 'Matchable Permutations'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: triplem5ds
problem_tester: null
date_added: 26-02-2019
tags:
    - kmp
    - march19
    - medium
    - meet
    - partial
    - taran_1407
    - triplem5ds
editorial_url: 'https://discuss.codechef.com/problems/MATPER'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/MATPER.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/MATPER.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/MATPER.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/MATPER.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/MATPER.pdf) as well. Chef has a string $S$ with length $N$. He also has $M$ other strings $P\_1, P\_2, \\ldots, P\_M$, which are called \*patterns\*. The characters in the strings are indexed from $1$. Chef was wondering if he could find the $M$ patterns in the string $S$ in the given order. That is, he wanted to know whether it is possible to choose $M$ ranges, denoted by $\[l\_i, r\_i\]$ for each $i$ ($1 \\le i \\le M$), such that $1 \\le l\_1 \\le r\_1 \\lt l\_2 \\le r\_2 \\lt \\ldots \\lt l\_M \\le r\_M \\le N$ and for each valid $i$, the substring $S\_{l\_i}, S\_{l\_i + 1}, \\ldots, S\_{r\_i}$ equals $P\_i$. As this problem was too easy for Chef, he decided to make a harder one. A permutation $p = (p\_1, p\_2, \\ldots, p\_M)$ of integers $1$ through $M$ is called a \*matchable permutation\* if Chef can reorder the $M$ patterns into $P\_{p\_1}, P\_{p\_2}, \\ldots, P\_{p\_M}$ and then find them in $S$, in this order (in the same way as described above). Can you help Chef find the number of matchable permutations? ### Input - The first line of the input contains two space-separated integers $N$ and $M$. - The second line contains a single string $S$. - $M$ lines follow. For each $i$ ($1 \\le i \\le M)$, the $i$-th of these lines contains a single string $P\_i$. ### Output Print a single line containing one integer - the number of matchable permutations. ### Constraints - $1 \\le N \\le 10^5$ - $1 \\le M \\le 14$ - $1 \\le |P\_i| \\le 10^5$ for each valid $i$ - $S, P\_1, P\_2, \\ldots, P\_M$ contain only lowercase English letters ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le M \\le 3$ \*\*Subtask #2 (30 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input 1 ``` 10 3 abbabacbac ab ac b ``` ### Example Output 1 ``` 3 ``` ### Explanation 1 Among the $3! = 6$ possible permutations of $(1, 2, 3)$, the matchable permutations are $(1, 2, 3)$, $(3, 1, 2)$ and $(1, 3, 2)$. These correspond to permutations of patterns ("ab", "ac", "b"), ("b", "ab", "ac") and ("ab", "b", "ac") respectively. Each of them can be found in $S$ in the given order. ### Example Input 2 ``` 3 2 aaa aa aa ``` ### Example Output 2 ``` 0 ``` ### Explanation 2 We cannot match the two patterns in such a way that their ranges do not intersect. ### Example Input 3 ``` 4 2 aaaa aa aa ``` ### Example Output 3 ``` 2 ``` ### Explanation 3 The matchable permutations are $(1, 2)$ and $(2, 1)$.

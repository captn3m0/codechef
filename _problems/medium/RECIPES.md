---
category_name: medium
problem_code: RECIPES
problem_name: 'Chef and Recipes'
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
date_added: 26-07-2018
tags:
    - bciobanu
    - gauss
    - linear
    - medium
    - nov18
    - randomized
    - taran_1407
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472981
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/RECIPES.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/RECIPES.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/RECIPES.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/RECIPES.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/RECIPES.pdf) as well. Chef is making $N$ atomic soups numbered $1$ through $N$. Each soup is either a \*base\* atomic soup or a composition of other atomic soups. For each valid $i$, if soup $i$ is not a base soup, one unit of this soup is made by mixing together one unit of soup $c\_{i, 1}$, one unit of soup $c\_{i, 2}$, and so on to one unit of soup $c\_{i, P\_i}$. Note that these $P\_i$ soup units are not necessarily from distinct soups and that we obtain only $1$ unit of soup by mixing $P\_i$ units. Due to their structure, two units of the same base atomic soup always cancel out and vanish when mixed together. Therefore, we define the \*base decomposition\* of a soup as the set of all base atomic soups that need to be used an odd number of times when making the resulting soup (i.e. a base soup $b$ belongs to the base decomposition if we need to use an odd number of units of soup $b$ in total). The base decomposition of a sequence of atomic soups is the base decomposition of the soup created by mixing together one unit of each of these soups. You should answer $Q$ queries. In each query, you are given a sequence of Chef's soups $s\_1, s\_2, \\dots, s\_K$; you must decide whether it is possible to choose two disjoint subsequences (one of which may be empty) of this sequence which have the same base decomposition. Two subsequences are disjoint if there is no index $i$ such that each subsequence contains soup $s\_i$. ### Input - The first line of the input contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains an integer $P\_i$; if $P\_i \\neq 0$, it is followed by a space and $P\_i$ space-separated integers $c\_{i, 1}, c\_{i, 2}, \\ldots, c\_{i, P\_i}$. - The next line contains a single integer $Q$. - The following $Q$ lines describe queries. Each of these lines contains an integer $K$ followed by a space and $K$ space-separated integers $s\_1, s\_2, \\dots, s\_K$. ### Output Print a single line containing a string with length $Q$. For each valid $i$, the $i$-th character of this string should be '1' if it is possible to choose required subsequences in the $i$-th query or '0' otherwise. ### Constraints - $1 \\le N, Q \\le 2 \\cdot 10^4$ - $1 \\le K \\le 30$ - $1 \\le c\_{i, j} \\lt i$ for each valid $i, j$ - $1 \\le s\_i \\le N$ for each valid $i$ - $P\_1 + P\_2 + \\ldots + P\_N \\leq 5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (13 points):\*\* - $1 \\le N \\le 100$ - $1 \\le K \\le 6$ \*\*Subtask #2 (22 points):\*\* $1 \\le N \\le 500$ \*\*Subtask #3 (65 points):\*\* original constraints ### Example Input ``` 8 0 0 2 1 2 0 3 1 2 4 3 2 2 3 2 2 4 2 1 4 5 3 3 4 5 4 2 4 1 5 3 1 2 4 4 2 4 3 1 4 6 7 8 5 ``` ### Example Output ``` 11011 ``` ### Explanation Soups $1$, $2$ and $4$ are base atomic soups. The base decompositions of the other soups are: - soup $3$: $\\{1, 2\\}$ - soup $5$: $\\{1, 2, 4\\}$ - soup $6$: $\\{1, 2\\}$ (two units of soup $2$ cancel out) - soup $7$: $\\{2, 4\\}$ - soup $8$: $\\{1, 4\\}$ For the first query, we can choose subsequences $\[3, 4\]$ and $\[5\]$. The base decomposition of subsequence $\\{3, 4\\}$ is $\\{1, 2, 4\\}$, which is the same as the base decomposition of soup $5$. For the last query, we can choose subsequences $\[6, 8\]$ and $\[7\]$. The base decomposition of each subsequence is $\\{2, 4\\}$, because two units of soup $1$ cancel out. You may notice that the chosen subsequences do not form a partition of all $K$ given soups, since soup $5$ was not used at all.

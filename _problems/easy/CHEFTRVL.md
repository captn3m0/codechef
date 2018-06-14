---
category_name: easy
problem_code: CHEFTRVL
problem_name: 'Difficult Choice'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: hloya_ygrt
problem_tester: null
date_added: 9-05-2018
tags:
    - cook94
    - hloya_ygrt
    - xor
editorial_url: 'https://discuss.codechef.com/problems/CHEFTRVL'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528985556
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/CHEFTRVL.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/CHEFTRVL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFTRVL.pdf) as well.

Chef and his mother are going travelling. Chef's world consists of $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads such that each city can be reached from any other city using roads. For each city, we know its age — the number of years elapsed since the foundation of the city; let's denote the age of city $i$ by $a\_i$. First of all, Chef and his mother have to decide what city they should visit first. Suppose that Chef chooses a city $c\_c$ and his mother chooses a (not necessarily different) city $c\_m$. The \*difference\* of their choices is the number of different bits in the binary representations of $a\_{c\_c}$ and $a\_{c\_m}$. Chef will not argue with his mother if the parity of this difference is not equal to the parity of the length of the shortest path between cities $c\_c$ and $c\_m$ (the number of roads on the shortest path between them). Find the number of ways to choose the cities $c\_c$ and $c\_m$ such that Chef avoids quarreling with his mother. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - Each of the following $N-1$ lines contains two space-separated integers $A$ and $B$ denoting a road between cities $A$ and $B$. - The last line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$. ### Output For each test case, print a single line containing one integer — the number of valid pairs $c\_c, c\_m$. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A, B \\le N$ - $0 \\le a\_i \\le 10^9$ for each valid $i$ ### Sample Input ``` 1 3 1 2 1 3 1 2 3 ``` ### Sample Output ``` 2 ``` ### Explanation \*\*Example case 1:\*\* The two possible choices are $c\_c=2, c\_m=3$ (their binary representations differ by one bit, the shortest path has length $2$) and $c\_c=1, c\_m=2$ (there are two different bits in their binary representations and the shortest path has length $1$).

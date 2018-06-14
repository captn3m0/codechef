---
category_name: easy
problem_code: AVGPR
problem_name: 'Average of Pairs'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anuj_2106
problem_tester: null
date_added: 2-04-2018
tags:
    - anuj_2106
    - april18
    - array
    - looping
    - math
editorial_url: 'https://discuss.codechef.com/problems/AVGPR'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/AVGPR.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/AVGPR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/AVGPR.pdf) as well.

You are given an integer sequence $A$ with length $N$. Find the number of (unordered) pairs of elements such that the average of these two elements is also present in the sequence. Formally, find the number of pairs $(i,j)$ such that $1 \\le i \\lt j \\le N$ and there is an index $k$ ($1 \\le k \\le N$) for which $2A\_k = A\_i+A\_j$ holds. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number of valid pairs $(i,j)$. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $|A\_i| \\le 10^3$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N \\le 10^3$ \*\*Subtask #2 (70 points):\*\* $1 \\le N \\le 10^5$ ### Example Input ```
<tt>
3
2
2 2
3
2 1 3
6
4 2 5 1 3 5
</tt>
<pre>\### Example Output ```
<tt>
1
1
7
</tt>
</pre>\### Explanation \*\*Example case 1:\*\* We can take $k$ for $A\_k$ to be either 1 or 2, since $A\_k=2$ either way. Since the problem asks for unordered pairs, $(1,2)$ is the only possible valid pair (the same as $(2,1)$). Hence, the answer is 1. \*\*Example case 2:\*\* We see that $A\_1 = 2 = (1+3)/2$. No other valid pair exists.

---
category_name: easy
problem_code: HMAPPY1
problem_name: 'Appy Loves One'
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
date_added: 25-10-2018
tags:
    - deque
    - easy
    - hmrockstar
    - nov18
    - segment
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/HMAPPY1'
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472947
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/HMAPPY1.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/HMAPPY1.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/HMAPPY1.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/HMAPPY1.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/HMAPPY1.pdf) as well. Chef has a sequence $A\_1, A\_2, \\ldots, A\_N$; each element of this sequence is either $0$ or $1$. Appy gave him a string $S$ with length $Q$ describing a sequence of queries. There are two types of queries: - '!': right-shift the sequence $A$, i.e. replace $A$ by another sequence $B\_1, B\_2, \\ldots, B\_N$ satisfying $B\_{i+1} = A\_i$ for each valid $i$ and $B\_1 = A\_N$ - '?': find the length of the longest contiguous subsequence of $A$ with length $\\le K$ such that each element of this subsequence is equal to $1$ Answer all queries of the second type. ### Input - The first line of the input contains three space-separated integers $N$, $Q$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The third line contains a string with length $Q$ describing queries. Each character of this string is either '?', denoting a query of the second type, or '!', denoting a query of the first type. ### Output For each query of the second type, print a single line containing one integer — the length of the longest required subsequence. ### Constraints - $1 \\le K \\le N \\le 10^5$ - $1 \\le Q \\le 3 \\cdot 10^5$ - $0 \\le A\_i \\le 1$ for each valid $i$ - $S$ contains only characters '?' and '!' ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 10^3$ - $1 \\le Q \\le 3 \\cdot 10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 5 5 3 1 1 0 1 1 ?!?!? ``` ### Example Output ``` 2 3 3 ``` ### Explanation - In the first query, there are two longest contiguous subsequences containing only $1$-s: $A\_1, A\_2$ and $A\_4, A\_5$. Each has length $2$. - After the second query, the sequence $A$ is $\[1, 1, 1, 0, 1\]$. - In the third query, the longest contiguous subsequence containing only $1$-s is $A\_1, A\_2, A\_3$. - After the fourth query, $A = \[1, 1, 1, 1, 0\]$. - In the fifth query, the longest contiguous subsequence containing only $1$-s is $A\_1, A\_2, A\_3, A\_4$ with length $4$. However, we only want subsequences with lengths $\\le K$. One of the longest such subsequences is $A\_2, A\_3, A\_4$, with length $3$.

---
category_name: medium
problem_code: BINSTR
problem_name: 'Binary Strings'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: smelskiy
problem_tester: null
date_added: 30-10-2018
tags:
    - implementation
    - medium
    - nov18
    - persistence
    - segment
    - smelskiy
    - taran_1407
    - trie
editorial_url: 'https://discuss.codechef.com/problems/BINSTR'
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472969
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/BINSTR.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/BINSTR.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/BINSTR.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/BINSTR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/BINSTR.pdf) as well. In ShareChat, there is a sequence of binary integers $A\_1, A\_2, \\ldots, A\_N$. You should answer $Q$ queries on this sequence. In each query, you are given two indices $L$ and $R$ and a binary integer $X$. The answer to a query is the smallest index $i$ ($L \\le i \\le R$) such that the value $A\_i \\oplus X$ is maximum possible, i.e. equal to $\\mathrm{max}(A\_L \\oplus X, A\_{L+1} \\oplus X, \\ldots, A\_R \\oplus X)$. Here, $\\oplus$ denotes the bitwise XOR operation. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains a single binary string denoting the number $A\_i$ (in binary representation). - The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $L$ and $R$, followed by a space and a binary string denoting the number $X$ (in binary representation). ### Output For each query, print a single line containing one integer — the answer to that query. ### Constraints - $1 \\le N \\le 10^5$ - $1 \\le Q \\le 10^5$ - $1 \\le A\_i$ for each valid $i$ - $1 \\le L \\le R \\le N$ - $1 \\le X$ - the sum of lengths of strings denoting $A\_1, A\_2, \\ldots, A\_N$ does not exceed $10^6$ - the sum of lengths of strings denoting $X$ over all queries does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (33 points):\*\* all binary strings on the input have equal lengths \*\*Subtask #2 (67 points):\*\* original constraints ### Example Input ``` 5 4 100 101 1 1011 11 2 3 10 1 5 1100 3 5 1010 1 5 11100 ``` ### Example Output ``` 2 5 3 5 ```

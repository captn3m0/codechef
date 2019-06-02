---
category_name: medium
problem_code: MINIMAX2
problem_name: 'Game of Theory'
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
    - R
    - COB
    - FS
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: aashu_k
problem_tester: null
date_added: 31-03-2019
tags:
    - aashu_k
time:
    view_start_date: 1554669000
    submit_start_date: 1554669000
    visible_start_date: 1554669000
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Tyrion is learning game theory to impress the queen.Lord Varys wanted to test the learning of Tyrion so he presented him with a problem on min-max. Help Tyrion in solving the problem. Given a tree with $N$ nodes rooted at node $1$. Each node ($U$) of the tree is associated with a pair of values $(A\_U, B\_U)$. You need to find the value of result ($R$). $ \\\\ R \\qquad = \\qquad \\displaystyle\\sum\\limits\_{U=1}^{N}\\displaystyle\\sum\\limits\_{V=1}^{N} F(U, V) \\\\ $ $ F(U,V) = \\left\\{\\begin{matrix} MIN( MAX(A\_U, A\_V), MAX(B\_U, B\_V) ) & if\\, V\\, lies\\, in\\, subtree\\, of\\, U \\\\ 0 & otherwise \\end{matrix}\\right. $ ###Input: - First line will contain one integer $N$ denoting number of nodes in the tree. - Second line will contain $N$ space separated integers $A\_1, A\_2, A\_3 ...... A\_N$. - Third line will contain $N$ space separated integers $B\_1, B\_2, B\_3 ...... B\_N$. - Each of the next $N - 1$ lines will contain 2 space separated integers $U$ and $V$ denoting that there is an edge between node $U$ and $V$. ###Output: Output in a single line value of result $R$. ###Constraints - $1 \\leq N \\leq 10^5$ - $1 \\leq A\[i\], B\[i\] \\leq 10^9$ - $1 \\leq U, V \\leq N$ - $U \\ne V$ ###Sample Input: ``` 5 1 4 5 2 3 5 2 4 1 3 1 2 1 3 2 4 2 5 ``` ###Sample Output: ``` 30 ``` ###EXPLANATION: $F(1, 1) = MIN(MAX(A\_1, A\_1), MAX(B\_1, B\_1)) = 1$ $F(1, 2) = MIN(MAX(A\_1, A\_2), MAX(B\_1, B\_2)) = 4$ $F(1, 3) = MIN(MAX(A\_1, A\_3), MAX(B\_1, B\_3)) = 5$ $F(1, 4) = MIN(MAX(A\_1, A\_4), MAX(B\_1, B\_4)) = 2$ $F(1, 5) = MIN(MAX(A\_1, A\_5), MAX(B\_1, B\_5)) = 3$ $F(2, 2) = MIN(MAX(A\_2, A\_2), MAX(B\_2, B\_2)) = 2$ $F(2, 4) = MIN(MAX(A\_2, A\_4), MAX(B\_2, B\_4)) = 2$ $F(2, 5) = MIN(MAX(A\_2, A\_5), MAX(B\_2, B\_5)) = 3$ $F(3, 3) = MIN(MAX(A\_3, A\_3), MAX(B\_3, B\_3)) = 4$ $F(4, 4) = MIN(MAX(A\_4, A\_4), MAX(B\_4, B\_4)) = 1$ $F(5, 5) = MIN(MAX(A\_5, A\_5), MAX(B\_5, B\_5)) = 3$ Rest of $F(U, V)$ which are not listed above have value $0$. $R$ = 1 + 4 + 5 + 2 + 3 + 2 + 2 + 3 + 4 + 1 + 3 = 30 Hence the result is 30.

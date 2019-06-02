---
category_name: easy
problem_code: MIRTREE
problem_name: 'Weirwood Trees'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: aashu_k
problem_tester: null
date_added: 4-04-2019
tags:
    - aashu_k
time:
    view_start_date: 1554669000
    submit_start_date: 1554669000
    visible_start_date: 1554669000
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given a Complete Binary Tree of ‘n’ depth, you can perform 4 types of mirror operation on the tree:- Mirror on the right. The tree is mirrored to the right and rightmost node on every level is connected with the mirrored corresponding node. Mirror on the left. The tree is mirrored to the left and leftmost node on every level is connected with the mirrored corresponding node. Mirror on the top. The tree is mirrored to the top and topmost nodes are connected with corresponding nodes. Mirror on the bottom. The tree is mirrored to the bottom and bottom most nodes are connected with the corresponding nodes. See the image for details. Mirror Right: ![Mirror Left](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/ALKH2019/MIRTREE/Mirror%20Right.jpg)Mirror Bottom: ![Mirror Bottom](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/ALKH2019/MIRTREE/Mirror%20Bottom.jpg) You are given ‘q’ queries, each performing this type of operation or asking for the no of edges in the produced graph. Queries are of the form “1 x” or “2” where x is 1 for right, 2 for left, 3 for top or 4 for bottom. 1 x: Perform x operation on the result graph. 2: Print the no of edges in the graph. Since it can be very large, print it modulo 1000000007. ###Input: - First line will contain $n$, the depth of the initial tree and $q$, the number of queries. - Next $q$ lines contain queries of the form "1 $x$" or "2". ###Output: For each query of type "2", output a single line containing the no of edges in the graph modulo 1000000007. ###Constraints - $1 \\leq n \\leq 1000$ - $1 \\leq q \\leq 10^5$ - $1 \\leq x \\leq 4$ ###Sample Input: 2 3 1 1 1 4 2 ###Sample Output: 38 ###EXPLANATION: Initial no of edges = 6 After the operation 1 1, no of edges = 15 After the operation 1 4, no of edges = 38 At operation 2, we print the no of edges that is 38.

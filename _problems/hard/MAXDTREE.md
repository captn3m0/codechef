---
category_name: hard
problem_code: MAXDTREE
problem_name: 'Max-digit Tree'
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
problem_author: altruist_
problem_tester: null
date_added: 22-09-2018
tags:
    - altruist_
time:
    view_start_date: 1542015002
    submit_start_date: 1542015002
    visible_start_date: 1542015002
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/NOV18/hindi/MAXDTREE.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/NOV18/vietnamese/MAXDTREE.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/NOV18/mandarin/MAXDTREE.pdf) , \[Russian\](http://www.codechef.com/download/translated/NOV18/russian/MAXDTREE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/NOV18/bengali/MAXDTREE.pdf) as well. You have a tree with $N$ vertices (numbered $1$ through $N$) rooted at vertex $1$. Each vertex contains a decimal digit; let's denote the digit in vertex $i$ by $d\_i$. A subtree is a non-empty subgraph satisfying the following condition: for any vertex $v$, if $v$ belongs to subtree $S$, then the parent of $v$ also belongs to $S$. Note that each subtree contains the root. The vertices in any subtree $S$ are sorted in DFS-order, i.e. using the following algorithm: - let's denote a \*current vertex\* by $c$; initially, the current vertex is the root - when processing vertex $c$: - $c$ is the next vertex in DFS-order - consider all sons of $c$ which belong to $S$, sorted in increasing order - for each of these sons, change the current vertex $c$ to that son and process it recursively For any subtree $S$ with $k$ vertices, we define the \*digit string\* $D(S)$ as a string with length $k$; for each valid $i$, the $i$-th character of this string is the digit in the $i$-th vertex of $S$ (in DFS-order). $D(S)$ may also be considered an integer in decimal representation. Let's define $\\mathrm{maxDigit}(x)$ as the largest decimal digit in a positive integer $x$. Consider the following infinite recurrent sequence $a$: - $a\_1 = 1$ - $a\_n = a\_{n-1} + \\mathrm{maxDigit}(a\_{n-1})$ for each $n \\gt 1$ For example, the first few members of this sequence are $1, 2, 4, 8, 16, 22$. Next, let's call a subtree $S$ \*good\* if $D(S)$ occurs in sequence $a$. You should find the number of good subtrees of the given tree. Since this number may be large, compute it modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between vertices $u$ and $v$. - The last line contains $N$ space-separated integers $d\_1, d\_2, \\ldots, d\_N$. ### Output For each test case, print a single line containing one integer — the number of good subtrees modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 500$ - $1 \\le u, v \\le N$ - the graph described on the input is a tree - $0 \\le d\_i \\le 9$ for each valid $i$ - $d\_1 \\neq 0$ - the sum of $N$ over all test cases does not exceed $500$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $d\_i = 2$ for each valid $i$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 3 1 2 2 3 1 6 4 5 1 2 1 3 2 4 3 5 2 2 2 2 2 ``` ### Example Output ``` 3 6 ``` ### Explanation \*\*Example case 1:\*\* All valid subtrees are good (their digit strings are $1$, $16$ and $164$).

---
category_name: hard
problem_code: XORSORT2
problem_name: 'Unusual Sorting'
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
problem_author: isaf27
problem_tester: null
date_added: 23-06-2018
tags:
    - binary
    - bitwise
    - isaf27
    - isaf27
    - likecs
    - ltime61
    - medium
    - meet
editorial_url: 'https://discuss.codechef.com/problems/XORSORT2'
time:
    view_start_date: 1530378005
    submit_start_date: 1530378005
    visible_start_date: 1530378005
    end_date: 1735669800
    current: 1559472995
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME61/mandarin/XORSORT2.pdf), [Russian](http://www.codechef.com/download/translated/LTIME61/russian/XORSORT2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME61/vietnamese/XORSORT2.pdf) as well.

You are given a sequence of distinct non-negative integers $A\_1, A\_2, \\dots, A\_N$. For every non-negative integer $x \\lt 2^K$, let's define a function $f(x)$ as the number of inversions in the sequence $A\_1 \\oplus x, A\_2 \\oplus x, \\dots, A\_N \\oplus x$. (An inversion in a sequence $X\_1, X\_2, \\dots, X\_N$ is a pair of indices $(i, j)$ such that $i \\lt j$ and $X\_i \\gt X\_j$.) Consider the sorted sequence of pairs $(f(x), x)$ for all integers $x \\in \[0, 2^K - 1\]$; a pair $(f(x\_1), x\_1)$ is earlier than $(f(x\_2), x\_2)$ in this sequence if $f(x\_1) \\lt f(x\_2)$, or if $f(x\_1) = f(x\_2)$ and $x\_1 \\lt x\_2$. You should find the second element (i.e. the number $x$) of the $P$-th pair in this sequence. The sequence is indexed from 1. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $K$ and $P$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — the number $x$ generating the $P$-th pair in the sorted sequence. ### Constraints - $1 \\le T \\le 20$ - $1 \\le N \\le 10^6$ - $1 \\le K \\le 30$ - $1 \\le P \\le 2^K$ - $0 \\le A\_i \\lt 2^K$ for each valid $i$ - the elements of $A$ are pairwise distinct - the sum of $N$ for all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le T \\le 10$ - $1 \\le K \\le 10$ - $1 \\le N \\le 100$ \*\*Subtask #2 (20 points):\*\* - $1 \\le T \\le 10$ - $1 \\le K \\le 18$ - the sum of $N$ for all test cases does not exceed $10^5$ \*\*Subtask #3 (20 points):\*\* - $1 \\le T \\le 5$ - $1 \\le K \\le 30$ - the sum of $N$ for all test cases does not exceed $10^5$ \*\*Subtask #4 (50 points):\*\* original constraints ### Example Input ``` 2 4 3 5 2 0 3 7 2 2 1 2 0 ``` ### Example Output ``` 4 2 ``` ### Explanation \*\*Example case 1:\*\* The values of $f(x)$ for all $0 \\le x \\le 7$ are as follows: - $x = 0$: $f(0) =$ number of inversions in $\[2, 0, 3, 7\] = 1$ - $x = 1$: $f(1) =$ number of inversions in $\[3, 1, 2, 6\] = 2$ - $x = 2$: $f(2) =$ number of inversions in $\[0, 2, 1, 5\] = 1$ - $x = 3$: $f(3) =$ number of inversions in $\[1, 3, 0, 4\] = 2$ - $x = 4$: $f(4) =$ number of inversions in $\[6, 4, 7, 3\] = 4$ - $x = 5$: $f(5) =$ number of inversions in $\[7, 5, 6, 2\] = 5$ - $x = 6$: $f(6) =$ number of inversions in $\[4, 6, 5, 1\] = 4$ - $x = 7$: $f(7) =$ number of inversions in $\[5, 7, 4, 0\] = 5$ The sorted sequence of pairs $(f(x), x)$ is $\[(1, 0), (1, 2), (2, 1), (2, 3), (4, 4), (4, 6), (5, 5), (5, 7)\]$. We should find the $P=5$-th pair, which is $(4, 4)$, so the answer is $4$.

---
category_name: medium
problem_code: SAFPAR
problem_name: 'Safe Partition'
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
problem_author: allllekssssa
problem_tester: null
date_added: 22-07-2018
tags:
    - allllekssssa
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/SAFPAR.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/SAFPAR.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/SAFPAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/SAFPAR.pdf) as well.

It's summer — the time for holidays! Chef finally finished all university exams. Now he can rest and play with sequences. Today, Chef took a sequence $A$ with $N$ elements. He wants to partition this sequence into an arbitrary number of non-empty contiguous subsequences (i.e. each of the subsequences has to consist of one or more consecutive elements of the original sequence). Each element of the original sequence must belong to exactly one subsequence. This would be easy for Chef, so he is only interested in \*safe partitions\* of $A$. A safe partition is a partition into subsequences $S\_1, S\_2, \\dots, S\_K$ such that for each valid $i$, $\\mathrm{min}(S\_i) \\le |S\_i| \\le \\mathrm{max}(S\_i)$ — that is, for each subsequence in this partition, its length is greater or equal to its smallest element and smaller or equal to its largest element. Finding one safe partition would still be easy for Chef, so he wants to find the number of safe partitions of $A$. Since this number could be very big, please compute it modulo $1000000007$ ($10^9 + 7$). ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output Print a single line containing one integer — the number of safe partitions of $A$ modulo $10^9+7$. ### Constraints - $1 \\le N \\le 5 \\cdot 10^5$ - $1 \\le A\_i \\le N$ for each valid $i$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #2 (10 points):\*\* - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 500$ for each valid $i$ \*\*Subtask #3 (15 points):\*\* there are exactly two different values of elements of $A$ \*\*Subtask #4 (25 points):\*\* $A\_{2i}=N$ for each valid $i$ \*\*Subtask #5 (40 points):\*\* original constraints ### Example Input ``` 7 1 6 2 3 4 3 4 ``` ### Example Output ``` 6 ``` ### Explanation The six safe partitions are: - $\[1\], \[6, 2, 3, 4, 3, 4\]$ - $\[1, 6, 2\], \[3, 4, 3, 4\]$ - $\[1, 6, 2, 3\], \[4, 3, 4 \]$ - $\[1\], \[6, 2\], \[3, 4, 3, 4\]$ - $\[1\], \[6, 2, 3\], \[4, 3, 4\]$ - $\[1, 6\], \[2, 3\], \[4, 3, 4\]$

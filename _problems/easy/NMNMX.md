---
category_name: easy
problem_code: NMNMX
problem_name: 'No Minimum No Maximum'
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
problem_author: shubhscoder
problem_tester: null
date_added: 30-06-2018
tags:
    - easy
    - july18
    - shubhscoder
editorial_url: 'https://discuss.codechef.com/problems/NMNMX'
time:
    view_start_date: 1531733410
    submit_start_date: 1531733410
    visible_start_date: 1531733410
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JULY18/mandarin/NMNMX.pdf), [Russian](http://www.codechef.com/download/translated/JULY18/russian/NMNMX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY18/vietnamese/NMNMX.pdf) as well.

Maheshmati and Sangu are playing a game. First, Maheshmati gives Sangu a sequence of $N$ distinct integers $a\_1, a\_2, \\dots, a\_N$ (not necessarily sorted) and an integer $K$. Sangu has to create all subsequences of this sequence with length $K$. For each subsequence, he has to write down the product of $K-2$ integers: all elements of this subsequence except the minimum and maximum element. Sangu wins the game if he is able to write down all these numbers and tell Maheshmati their product (modulo $10^9+7$, since it can be very large). However, Sangu is a very lazy child and thus wants you to help him win this game. Compute the number Sangu should tell Maheshmati! ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\dots, a\_N$. ### Output For each test case, print a single line containing one integer — the product of all numbers written down by Sangu modulo $10^9+7$. ### Constraints - $1 \\le T \\le 10$ - $3 \\le N \\le 5,000$ - $3 \\le K \\le N$ - $1 \\le a\_i \\le 10,000$ for each valid $i$ - the numbers $a\_1, a\_2, \\dots, a\_N$ are pairwise distinct ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N \\le 10$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 1 4 3 1 2 3 4 ``` ### Example Output ``` 36 ``` ### Explanation \*\*Example case 1:\*\* There are four possible subsequences: - $\[1, 2, 3\]$ (Sangu should write down $2$.) - $\[1, 3, 4\]$ (Sangu should write down $3$.) - $\[1, 2, 4\]$ (Sangu should write down $2$.) - $\[2, 3, 4\]$ (Sangu should write down $3$.) The required product is $2 \\cdot 3 \\cdot 2 \\cdot 3 = 36$.

---
category_name: hard
problem_code: JADUGAR
problem_name: 'Chef and Same Old Recurrence'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 22-03-2018
tags:
    - april18
    - generating_functions
    - hard
    - math
    - usaxena95
editorial_url: 'https://discuss.codechef.com/problems/JADUGAR'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525454405
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/JADUGAR.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/JADUGAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/JADUGAR.pdf) as well.

Chef has started learning to solve dynamic programming problems recently. He has practiced on a lot of problems already, so he wants to try his hands on the hardest problems in this domain. Chef only likes the interesting part of solving dynamic programming problems — specifically, he just likes to divide a problem into beautiful subproblems which consist of solving recurrences; he finds actually solving these recurrences quite boring. Since you are Chef's assistant, your job is solving this boring part for Chef. Let's define a recurrent sequence $\\left\\lbrace{dp(k)}\\right\\rbrace\_{k=1}^\\infty$ with parametres $A$, $B$ and $K$ as follows: - $dp(1) = K$ - for $n \\gt 1$, $dp(n) = A \\cdot dp(n-1) + B\\cdot \\sum\\limits\_{i=1}^{n-1} dp(i) \\cdot dp(n-i)$ Chef would like you to find $dp(N)$. Since this number can be very large, compute it modulo $10^9+7$. ### Input The first and only line of the input contains four space-separated integers $N$, $K$, $A$ and $B$. ### Output Print a single line containing one integer — the value of $dp(N)$ modulo $10^9+7$. ### Constraints - $1 \\le N \\le 10^7$ - $1 \\le B,K \\le 10^9+7$ - $0 \\le A \\le 10^9+7$ ### Subtasks \*\*Subtask #1 (5 points):\*\* $N \\le 5,000$ \*\*Subtask #2 (10 points):\*\* $N \\le 10^5$ \*\*Subtask #3 (10 points):\*\* - $N \\le 10^6$ - $A=0$ \*\*Subtask #4 (25 points):\*\* original constraints ### Example Input ```
<tt>
4 1 2 1
</tt>
<pre>
\### Example Output ```
<tt>
57
</tt>
</pre>
\### Explanation The first four terms of this sequence are: - $dp(1) = 1$ - $dp(2) = 2 \\cdot dp(1) + dp(1) \\cdot dp(1) = 3$ - $dp(3) = 2 \\cdot dp(2) + dp(1) \\cdot dp(2) + dp(2) \\cdot dp(1) = 12$ - $dp(4) = 2 \\cdot dp(3) + dp(1) \\cdot dp(3) + dp(2) \\cdot dp(2) + dp(3) \\cdot dp(1) = 57$

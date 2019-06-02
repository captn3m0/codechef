---
category_name: hard
problem_code: SSPLD
problem_name: 'S Semi-palindromic'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 15-02-2018
tags:
    - april18
    - chemthan
    - dp
    - fft
    - fwt
    - hard
    - palindrome
editorial_url: 'https://discuss.codechef.com/problems/SSPLD'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525454409
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/SSPLD.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/SSPLD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/SSPLD.pdf) as well.

A non-negative number is called "\*$S$ semi-palindromic\*" if it is divisible by $S$ and it is possible to rearrange its digits in such a way that the resulting number is palindromic. If the initial number had $D$ digits (without leading zeroes), consider the number obtained by rearranging to have exactly $D$ digits as well (leading zeroes are allowed). Compute the number of "$S$ semi-palindromic" numbers smaller than $10^K$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $S$ and $K$. ### Output For each test case, print a single line containing one integer — the answer modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 20$ - $1 \\le S \\le 16$ - $1 \\le K \\le 10^{18}$ ### Subtasks \*\*Subtask 1 (10 points):\*\* - $S \\le 2$ - $K \\le 10^5$ \*\*Subtask 2 (20 points):\*\* $S \\le 2$ \*\*Subtask 3 (70 points):\*\* original constraints ### Example Input ```
<tt>
3
1 2
2 3
3 4
</tt>
<pre>
\### Example Output ```
<tt>
19
131
163
</tt>
</pre>
\### Explanation \*\*Example case 1:\*\* The $1$ semi-palindromic numbers are $0,1,2,3,4,5,6,7,8,9,11,22,33,44,55,66,77,88,99$.

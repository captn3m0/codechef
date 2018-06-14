---
category_name: easy
problem_code: GOODPREF
problem_name: 'Count Good Prefixes'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 2-04-2018
tags:
    - admin2
    - april18
    - logic
    - math
    - string
editorial_url: 'https://discuss.codechef.com/problems/GOODPREF'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/GOODPREF.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/GOODPREF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/GOODPREF.pdf) as well.

You are given an integer $n$ and a string $s$ consisting only of characters 'a' and 'b'. Consider a string $t = \\underbrace{s + s + \\dots + s}\_{n\\text{ times}}$, i.e. the string obtained by concatenating $n$ copies of $s$. Find the number of non-empty prefixes of $t$ in which the number of occurrences of 'a' is strictly greater than the number of occurrences of 'b'. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains the string $s$ and the integer $n$, separated by a single space. ### Output For each test case, print a single line containing one integer — the number of valid prefixes. ### Constraints - $1 \\le T \\le 100$ - $1 \\le |s| \\le 10^3$ - $1 \\le n \\le 10^9$ - each character of $s$ is either 'a' or 'b' ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le n \\le 10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Sample Input ```
<tt>
3
aba 2
baa 3
bba 3
</tt>
<pre>\### Sample Output ```
<tt>
5
6
0
</tt>
</pre> ### Explanation \*\*Example case 1:\*\* The string $t$ is "abaaba". It has five prefixes which contain more a-s than b-s: "a", "aba", "abaa", "abaab" and "abaaba". \*\*Example case 2:\*\* The string $t$ is "baabaabaa". The strings "baa", "baaba", "baabaa", "baabaab", "baabaaba" and "baabaabaa" are the six valid prefixes. \*\*Example case 3:\*\* The string $t$ is "bbabbabba". There is no prefix of this string which consists of more a-s than b-s. Therefore, the answer is zero.

---
category_name: medium
problem_code: VAIMIN
problem_name: 'Vaibhav and Ministers'
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
problem_author: vaibhav18197
problem_tester: null
date_added: 3-12-2017
tags:
    - april18
    - combinatorics
    - dynamic
    - generalized
    - medium
    - vaibhav18197
editorial_url: 'https://discuss.codechef.com/problems/VAIMIN'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198960
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/VAIMIN.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/VAIMIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/VAIMIN.pdf) as well.

Shortly after joining the Parliament, our Chef has been elected as the new Prime Minister. Now, being the PM, he can do one good or bad deed per day. Initially, Chef has a \*reputation\* with his cabinet equal to $0$; when he does a good deed, his reputation increases by $1$ and when he does a bad deed, his reputation decreases by $1$. Chef plans to do exactly $p$ good deeds and exactly $q$ bad deeds. However, to do a bad deed, his reputation must be strictly greater than $c$ (before doing this deed) — otherwise, he would lose the confidence of his cabinet and be forced to resign. DGP Vaibhav has been dealing with corrupt ministers for a long time. In the past, he has arrested $M$ corrupt ministers. For each $1 \\le i \\le M$, when the $i$-th minister was arrested, that minister had done $g\_i$ good deeds and $b\_i$ bad deeds. Over time, Vaibhav has become an expert at detecting and arresting corrupt ministers — Chef is certain that immediately after he performs exactly $g\_i$ good deeds and exactly $b\_i$ bad deeds (for some $i$ between $1$ and $M$ inclusive), he will end up arrested by Vaibhav. Since Chef plans to be a good PM, we may assume he won't be arrested by Vaibhav for any other reason. Compute the number of sequences of good and bad deeds Chef can perform in order to execute his plan without getting arrested by Vaibhav or losing the confidence of his cabinet, modulo $10^9 + 7$. ### Input - The first line of the input contains four space-separated integers $p$, $q$, $c$ and $M$ denoting the total number of good deeds, total number of bad deeds, the reputation threshold and the number of previously arrested ministers. - Each of the following $M$ lines contains two space-separated integers $g$ and $b$ denoting the number of good deeds and the number of bad deeds of an arrested minister. ### Output Print a single line containing one integer — the number of possible sequences modulo $10^9 + 7$. ### Constraints - $1 \\le M \\le 3,000$ - $0 \\le p, q, c \\le 2,000,000$ - $0 \\le g, b \\le 2,000,000$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $0 \\le p, q \\le 2,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ```
<tt>
5 2 2 6
3 4
1 5
4 4
5 0
2 2
5 0
</tt>
<pre>
\### Example Output ```
<tt>
4
</tt>
</pre>
\### Explanation There are only 4 ways to do 5 good and 2 bad deeds without losing the cabinet's confidence and without being caught by Vaibhav: ```
<tt>
- G G G G B G B
- G G G G B B G
- G G G B G G B
- G G G B G B G
</tt>
<pre>
\### Note ```
<tt>
- G G B G G G B is not a valid sequence since after doing G G his reputation
is just 2 units and committing a B after that him lose the confidence of the
cabinet.
- G G G G G B B is not valid since on committing G G G G G Chef will have
committed 5 good deeds and 0 bad deeds which will get him arrested by
Vaibhav.  
</tt>
</pre>
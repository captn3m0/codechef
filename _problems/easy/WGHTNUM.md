---
category_name: easy
problem_code: WGHTNUM
problem_name: 'Weight of Numbers'
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
problem_author: vkrules1104
problem_tester: null
date_added: 12-03-2018
tags:
    - april18
    - easy
    - fast
    - vkrules1104
editorial_url: 'https://discuss.codechef.com/problems/WGHTNUM'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/WGHTNUM.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/WGHTNUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/WGHTNUM.pdf) as well.

VK gave a problem to Chef, but Chef is too lazy, so he asked you to solve the problem for him. The statement of the problem follows. Consider an integer with $N$ digits (in decimal notation, without leading zeroes) $D\_1, D\_2, D\_3, \\dots, D\_N$. Here, $D\_1$ is the most significant digit and $D\_N$ the least significant. The \*weight\* of this integer is defined as $$\\sum\_{i=2}^N (D\_i - D\_{i-1})\\,.$$ You are given integers $N$ and $W$. Find the number of positive integers with $N$ digits (without leading zeroes) and weight equal to $W$. Compute this number modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $W$ denoting the number of digits and the required weight. ### Output For each test case, print a single line containing one integer — the number of $N$-digit positive integers with weight $W$, modulo $10^9+7$. ### Constraints - $1 \\le T \\le 10^5$ - $2 \\le N \\le 10^{18}$ - $|W| \\le 300$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $1 \\le T \\le 10^3$ - $2 \\le N \\le 10^3$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ```
<tt>
1
2 3
</tt>
<pre>\### Example Output ```
<tt>
6
</tt>
</pre>\### Explanation \*\*Example case 1:\*\* Remember that the digits are arranged from most significant to least significant as $D\_1, D\_2$. The two-digit integers with weight $3$ are $14, 25, 36, 47, 58, 69$. For example, the weight of $14$ is $D\_2-D\_1 = 4-1 = 3$. We can see that there are no other possible numbers.

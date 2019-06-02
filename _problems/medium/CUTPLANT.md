---
category_name: medium
problem_code: CUTPLANT
problem_name: 'Cutting Plants'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: step_by_step
problem_tester: null
date_added: 30-01-2018
tags:
    - april18
    - data
    - deque
    - medium
    - segment
    - sqrt
    - step_by_step
editorial_url: 'https://discuss.codechef.com/problems/CUTPLANT'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/CUTPLANT.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/CUTPLANT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/CUTPLANT.pdf) as well.

Daniil is a royal gardener. He takes care of a garden with $N$ plants numbered $1$ through $N$. For each $i$ ($1 \\le i \\le N$), the initial height of the $i$-th plant is $A\_i$. Unfortunately, the Queen doesn't like the garden, so she asked Daniil to cut some plants — in order to satisfy the Queen's request, the $i$-th plant should have height $B\_i$ (for each $1 \\le i \\le N$). Daniil is allowed to perform the following operation an arbitrary number of times (including zero): - Let's denote the current heights of plants by $H\_1, H\_2, \\dots, H\_N$. - Choose two indices $L$ and $R$ ($1 \\le L \\le R \\le N$) and a new height $h$ such that $h \\le H\_i$ for each $i$ between $L$ and $R$ inclusive. - Cut plants $L$ through $R$ down to height $h$, i.e. change the height of plant $i$ to $h$ for each $L \\le i \\le R$. Some time ago, Daniil was one of the best competitive programmers. Therefore, he is interested in the minimum number of operations needed to satisfy the Queen's request. Can you help him? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$ denoting the number of plants. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$ denoting the initial heights of plants. - The third line contains $N$ space-separated integers $B\_1, B\_2, \\dots, B\_N$ denoting the final heights of plants. ### Output For each test case, print a single line containing one integer — the minimum number of operations needed to obtain the desired sequence of heights or $-1$ if it is impossible. ### Constraints - $1 \\le T \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i, B\_i \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* - $1 \\le N \\le 1,000$ - the initial heights of all plants are identical \*\*Subtask #2 (30 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #3 (40 points):\*\* original constraints ### Example Input ```
<tt>
4
3
3 1 3
2 1 2
7
1 3 4 5 1 2 3
1 2 1 2 1 1 1
3
2 3 9
2 3 9
2
1 2
2 1
</tt>
<pre>
\### Example Output ```
<tt>
2
3
0
-1
</tt>
</pre>
\### Explanation \*\*Example case 1:\*\* Daniil can perform two operations: reduce the height of the first plant to $2$ and reduce the height of the third plant to $2$. Note that it is not possible to reduce the heights of all three plants to $2$ in one operation, because the second plant's height is less than $2$. We need two operations, thus the answer is $2$. \*\*Example case 2:\*\* In the first operation, cut the plants in the interval $\[2, 4\]$ down to height $2$. Afterwards, cut the third plant down to height $1$. Finally, cut the plants in the interval $\[6, 7\]$. \*\*Example case 3:\*\* All plants already have the desired heights, so the answer is $0$. \*\*Example case 4:\*\* It is impossible to achieve the desired sequence of heights.

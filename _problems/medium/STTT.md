---
category_name: medium
problem_code: STTT
problem_name: 'Standard Tree Task'
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
date_added: 16-08-2018
tags:
    - allllekssssa
    - bitmasking
    - combinatorics
    - cook
    - cook97
    - dynamic
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/STTT'
time:
    view_start_date: 1534703400
    submit_start_date: 1534703400
    visible_start_date: 1534703400
    end_date: 1735669800
    current: 1559472983
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK97/mandarin/STTT.pdf), [Russian](http://www.codechef.com/download/translated/COOK97/russian/STTT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK97/vietnamese/STTT.pdf) as well.

There's no story in this problem, it's time for trees! The company structure of ShareChat can be viewed as a tree with $N$ nodes (numbered $1$ through $N$); node $1$ is the root of this tree. You should choose a (possibly empty) subset of nodes and place one coin in each node from this set. We call the tree \*proper\* if the following condition holds: - Consider two arbitrary disjont subtrees. Let's denote the total number of coins in one subtree by $X$ and the total number of coins in the other subtree by $Y$. - If $X &gt; 0$ and $Y &gt; 0$, the greatest common divisior (GCD) of $X$ and $Y$ must be $1$. Please calculate the number of different assignments of coins to nodes (different sets of nodes containing coins) such that the resulting tree is proper. Since the answer could be very big, compute it modulo $10^9+7$. \*\*Note:\*\* A subtree is the tree formed by some node $v$ and all (direct or indirect) descendants of $v$. Two subtrees are disjont if they do not have any common node. ### Input - The first line of the input contains a single integer $N$ denoting the number of nodes in the tree. - The second line contains $N-1$ space-separated integers $p\_2, p\_3, \\dots, p\_N$, where $p\_i$ denotes the parent of node $i$. ### Output Print a single line containing one integer — the number of assignments of coins to nodes which form a proper tree, modulo $10^9+7$. ### Constraints - $1 \\le N \\le 70$ - $1 \\le p\_i \\lt i$ for each valid $i$ ### Example Input ``` 5 1 1 2 3 ``` ### Example Output ``` 30 ``` ### Explanation There are only two ways to assign coins to nodes such that the resulting tree is not proper. Both contain coins in nodes $2$, $3$, $4$, $5$ and one of them contains a coin in node $1$ too.

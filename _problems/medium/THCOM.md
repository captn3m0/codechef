---
category_name: medium
problem_code: THCOM
problem_name: 'They are COMING'
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
    - R
    - COB
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: shivamg_isc
problem_tester: null
date_added: 5-04-2019
tags:
    - shivamg_isc
time:
    view_start_date: 1554669000
    submit_start_date: 1554669000
    visible_start_date: 1554669000
    end_date: 1735669800
    current: 1559472984
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The \*\*White Walkers\*\* are coming. The Winterfell is the first place to be attacked by the Night King and his army of the dead. Jon Snow with Khaleesi has to take some important decisions to minimize the damage from the White Walkers. Winterfell can be denoted as a graph with $N$ nodes. There are $M$ roads each connecting 2 nodes - $A\_i$ and $B\_i$. The road is \*\*directed from node\*\* $A\_i$ to $B\_i$, \*\*and not vice-versa\*\*. The power required to travel on this road is $C\_i$ \*\*initially\*\*. Also, Winterfell is built in such a way that it is not possible to visit the same node twice using these roads. That is, you cannot start at a node, follow some of the roads and return back to the same node. Jon has to stop the army of the dead. All white walkers are standing at \*\*node\*\* $1$ right now. For this, he decided to carry out $Q$ steps of two different types - - $1$ $K$ Add value $K$ to the power required to travel each road in Winterfell. i.e after this operation $C\_i = C\_i + K$ $ \\forall$ $i$ $\\epsilon \[1,M\]$ . Value $K$ can be negative as well. - $2$ $Y$ Find the minimum power required for the white walkers to reach node $Y$ in Winterfell from node $1$. Help Jon is finding out the answer for each query of type $2$. ###Input: - First line will contain 2 space separated integers - $N$ and $M$, number of nodes , and the number of roads in Winterfell. - M lines follow. Each of the lines comprises 3 space separated integers - $A\_i$, $B\_i$ and $C\_i$, denoting that $i^{th}$ road is directed from node $A\_i$ to $B\_i$ with initial power required to travel this road being $C\_i$. - Next line comprises $Q$ - the number of queries. - Q lines follow. Each query is of the type as described above, and will comprise 2 space separated integers. For type $1$, the second integer will be $K$ - the amount of power added to each road. For type $2$, the second integer will be $Y$ - the node to reach from node $1$. ###Output: For each query of type $2$, output in a single line answer to the minimum power required for white walkers at node $1$ to reach node $Y$. If there is no way to reach node $Y$, output \*\*"No Path Exists" (without quotes)\*\* . ###Constraints - $1 \\leq N \\leq 3000$ - $1 \\leq M \\leq 7000$ - $1 \\leq Q \\leq 5\*10^6$ - $1 \\leq A\_i, B\_i \\leq N, A\_i != B\_i$ - $-10^9 \\leq C\_i, K \\leq 10^9$ - $1 \\leq Y \\leq N$ - At any point of time, the power required to travel on each road will always be $\[-10^{12}, 10^{12}\]$ ###Sample Input: 3 3 1 2 1 1 3 3 2 3 2 3 2 3 1 2 2 3 ###Sample Output: 3 5 ###EXPLANATION: Initially, the road to reach node $3$ with minimum power is either $( 1 \\rightarrow 2, 2 \\rightarrow 3)$ or $( 1 \\rightarrow 3 )$, each amounting to total power = $3$. Then, the power requirement of each edge is increased by $2$. So, now the road $(1 \\rightarrow 2, 2 \\rightarrow 3)$ requires total power = $3+4=7$. The road $(1 \\rightarrow 3)$ requires total power = $5$.

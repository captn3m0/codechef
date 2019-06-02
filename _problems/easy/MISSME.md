---
category_name: easy
problem_code: MISSME
problem_name: 'Sherlock and His Device'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: panik
problem_tester: null
date_added: 25-12-2018
tags:
    - dfs
    - medium
    - panik
    - panik
    - pelt2019
time:
    view_start_date: 1547476200
    submit_start_date: 1547476200
    visible_start_date: 1547476200
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Sherlock has finally caught Jim Moriarty in his own trap. Jim had called Sherlock to the amusement park to play one of his mind games, but he wasn't aware that the Sherlock had beforehand bugged the whole place with his newly invented device, which tells Sherlock the chances of Moriarty being at a particular place in the park. The design of the Amusement park if plotted on a graph is in the form of a tree having no self-loops or multiple edges of $N$ vertices and rooted at index $1$. Sherlock's device returns an array of length $N$ consisting of integers. The Higher the value of integer at $ith$ index the higher is the probability of Moriarty being at Vertex $i$. Let the array be denoted by $K$. Sherlock knows that Jim Moriarty is no fool and he can't just go to each vertex in search of Moriarity as he might run away. He devises a plan of selecting a subset of the nodes in the tree and visiting all vertices of the subset. He wants to select nodes for the subset such that he has the highest chance of catching Moriarty without alerting him. For not alerting Moriarty he says that if he visits a vertex $i$ he would not visit next $J$ levels directly below the vertex $i$. $J$ is calculated by taking the $xor( ⊕ )$ of all the values $K\[a\]$ where $a$ denotes the index of all the selected ancestors of $i$ and $i$ as well. let's say sherlock selected some vertices from the tree by keeping the above condition in mind, then the total value of the subset would be $∑ K\[v\]$ where $v$ denotes all the selected vertices. You know Sherlock is Damn smart and he can find the optimal subset without your help, but for that, Sherlock would have to use his special medicines(You know what I mean) to check all the valid Combinations and chose the best subset of vertices. But as he has promised his friend Dr Watson of not taking these drugs(oops I said that) ever again, he has asked for your help. Help Sherlock maximise the total value. $MISS$ $ME!!!!$ $Note$- $1.)$ if $i$ node is chosen and no ancestors of $i$ are part of the subset of selected vertices, then the value of $J$ at node $i$ will be just $K\[i\]$. $2.)$ the subset of selected vertices should follow Sherlock's strategy, i.e no node should be present in the subset which violates the given condition. ###Input: - First line will contain an integer $N$ denoting the no. of vertices in the tree. - Second line will contain an array $K$ of length $N$ containing the values returned by the special device. Then $N-1$ lines follow denoting the Connections in the Tree. - Each line consists of a single line of input, two integers $X, Y$, denoting a connection between $V$$X$ and $V$$Y$. ###Output: Output a single line containing the maximum possible sum by selecting some/all(if possible) vertices from the tree keeping the above conditions in mind. ###Constraints - $1 \\leq N \\leq 1000$ - $0 \\leq K\[i\] \\leq 1023$ $where$ $K\[i\]$ $denotes$ $the$ $value$ $at$ $vertex$ $i$ ###Sample Input: 8 1 1 1 1 1 1 1 1 1 2 2 3 2 4 3 5 3 6 4 7 4 8 ###Sample Output: 7 ###EXPLANATION: If we select vertices $2,5,6,7,8$ then we get a total of 5. See that the given set does not violate the required condition. If we select vertices $1,3,4,5,6,7,8$ then we get a total of 7. See that even this set does not violate the required condition. the J in this case for vertex 1=1 , vertex 3= 0(1 xor 1), vertex 4=0(1xor1) Vertex 3 and vertex 4 have J=0 because 1 is their ancestor. So the maximum answer is 7.

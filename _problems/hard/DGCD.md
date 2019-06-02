---
category_name: hard
problem_code: DGCD
problem_name: 'Dynamic GCD'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: yellow_agony
problem_tester: laycurse
date_added: 4-12-2011
tags:
    - hard
    - heavy
    - july12
    - number
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/DGCD'
time:
    view_start_date: 1342000242
    submit_start_date: 1342000242
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493556683
layout: problem
---
All submissions for this problem are available.You're given a [tree](http://en.wikipedia.org/wiki/Tree_%28graph_theory%29) on **N** vertices. Each vertex has a positive integer written on it, number on the ith vertex being **vi**. Your program must process two types of queries :

1\. Find query represented by **F u v** : Find out [gcd](http://en.wikipedia.org/wiki/Greatest_common_divisor) of all numbers on the unique path between vertices **u** and **v** in the tree (both inclusive)./> 2. Change query represented by **C u v d** : Add **d** to the number written on all vertices along the unique path between vertices **u** and **v** in the tree (both inclusive).

### Input

First line of input contains an integer **N** denoting the size of the vertex set of the tree. Then follow **N - 1** lines, ith of which contains two integers **ai** and **bi** denoting an edge between vertices **ai** and **bi** in the tree. After this follow **N** space separated integers in a single line denoting initial values **vi** at each of these nodes. Then follows a single integer **Q** on a line by itself, denoting the number of queries to follow. Then follow **Q** queries, each one on a line by itself. Each query is either a find query or a change query with format as given in problem statement. Note that all vertices are 0-based.

### Output

For every find query, print the answer to that query in one line by itself. ### Example

<pre>
<b>Input:</b>
6
0 4
0 5
1 5
5 2
3 5
3 1 3 2 4 2
5
F 3 5
C 1 3 1
C 3 4 4
F 3 0
F 2 5

<b>Output:</b>
2
7
1
</pre>

### Constraints

1 N 1 Q 0 u, **v** N-1 
1 vi 0 d

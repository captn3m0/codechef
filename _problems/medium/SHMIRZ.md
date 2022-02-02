---
category_name: medium
problem_code: SHMIRZ
problem_name: 'Shops in Mirzapur'
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
problem_author: xodiac
problem_tester: null
date_added: 25-12-2018
tags:
    - convex
    - decomposition
    - medium
    - pelt2019
    - squareroot
    - xodiac
    - xodiac
time:
    view_start_date: 1547476200
    submit_start_date: 1547476200
    visible_start_date: 1547476200
    end_date: 1735669800
    current: 1559472982
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Problem description.

There are $N$ shops in a straight line some where in Mirzapur each of them selling same type of chocolate. 
Each shops have their own price of chocolate . Formally , $i$-th shop sells $A\[i\]$ number of chocolates in exchange of $1$ coin . Also each shop will give $B\[i\]$ number of chocolates for free to any customer that buys chocolates from their shop . 
Chef likes chocolates very much so he regularly buys chocolates from any one shopkeeper who will give him maximum number of chocolates . 
Chef also likes playing with intervals . So each time Chef will have $x$ number of coins in his pocket and two integers $L$ and $R$ . Chef will look at every shop that lies between $L$ and $R$ and will buy chocolates from that shop which will give him maximum number of chocolates for $x$ coins . 
Also the position of shops are changing with time . 
 
More formally there are $Q$ actions of two types that are happening in a sequence. 
$1$ $i$ $j$ $i$-th shop is shifted after $j$-th shop. 
$2$ $L$ $R$ $x$ Chef arrives at market to buy chocolates with $x$ coins in his pocket along with two integers $L$ and $R$ as described above. 
 
  **Note that there are only $10$% queries of type $1$ .**



### Input:

- First line will contain $N$, number of shops.
- Next $N$ lines contains two space separated integers $A\[i\]$ and $B\[i\]$ as described above
- Next line contain one integer $Q$ number of queries.
- Next $Q$ line will contain queries of either of two types : $1)$ $1$ $i$ $j$ , $2)$ $2$ $L$ $R$ $x$
 
### Output:

Print the answer for each query of type two in a new line. 
### Constraints


17. $1 \\leq N \\leq 50000$
18. $1 \\leq A\[i\] ,B\[i\] \\leq 10^5$
19. $1 \\leq Q \\leq 10^5$
20. $1 \\leq i \\leq j \\leq N$
21. $1 \\leq L \\leq R \\leq N$
22. $1 \\leq x \\leq 10^5$
### Sample Input:

5 
2 2 
4 5
1 3
3 6
7 1
3
2 2 3 3
1 2 4
2 2 3 3
### Sample Output:

17 
15 
### EXPLANATION:

Before shifting shops in range $\[2,3\]$ are $(4,5) and (1,3)$ out of which $1$-st shop will give maximum chocolate i.e. $4\*3+5=17$. 
After shifting sequence of shop will be as below : 
2 2 
1 3
3 6
4 5
7 1
 Therefore shops in range $\[2,3\]$ are $(1,3) and (3,6)$ out of which $2$-nd shop will give maximum chocolate i.e. $3\*3+6=15$.

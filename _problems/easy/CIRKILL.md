---
category_name: easy
problem_code: CIRKILL
problem_name: 'Circle of death'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: gamabunta
date_added: 9-06-2013
tags:
    - easy
    - geometry
    - july13
    - kaushik_iska
    - maths
editorial_url: 'http://discuss.codechef.com/problems/CIRKILL'
time:
    view_start_date: 1373880892
    submit_start_date: 1373880892
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493558131
layout: problem
---
All submissions for this problem are available.In the land of Chefton there is a trio of killers known as **Team Rocket (TR)**. Chefton is basically a set of tiles, only a single person can stand on a tile at a given instance. Each tile can be described by **X** and **Y** co-ordinates describing the position of the tile. For the purpose of this problem, you may assume that a tile does not have any length of breadth. It is only a point.

**TR** kill in a very unique way. Lets say the three members of the trio stand on the tiles **T1, T2, T3** respectively. If a **unique circle**, say **C**, can be formed using **T1, T2, T3** then all the people standing on the tiles lying within or on the circle **C** will be killed.

Chefton Intelligence Agency **(CIA)** send their top agent **Ash** to Chefton. Let us assume that **TR** and **Ash** are standing on random tiles, satisfying the following constraints

**All four individuals, the three members of TR and Ash are on different tiles.**

There may be several ways in which the four individuals are placed. You may assume that the three members of **TR** are indistinguishable, while considering how many ways can everyone be placed. Any one of these ways now, is equiprobable. For clarity, refer to the explanation section.

What is the probability that **Ash** can be killed by **Team Rocket**.

### Input

The first line of the input contains an integer **T**, the number of test cases. The description of **T** test cases follows. The first line of each test case contains a single integer **N**, the number of tiles in Chefton. The next **N** lines consist of **2** space separated integers each, where the **i'th** line specifies the **X** and **Y** co-ordinates of the **i'th** tile.

### Output

For each test case, output a single line containing the probability that **Team Rocket** kills **Ash**. Your answer is considered correct if it has an absolute error less than **10-6**.

### Constraints

**1 ≤ T ≤ 10**
**4 ≤ N ≤ 30**
**-50 ≤ X, Y ≤ 50**
**All (X,Y) in a test case are unique.**

### Sample

```

<b>Input</b>
2
4
-1 0
0 0
0 1
1 0
5
-1 0
0 -1
0 0
0 1
1 0

<b>Output</b>
0.25
0.4


```
### Explanation

**Test 1:** There are 4 ways TR may be placed. Each one of them has the probability 0.25, of occuring.

- { (-1,0), (0,0), (0,1) }, Ash is at (1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".
- { (-1,0), (0,0), (1,0) }, Ash is at (0,1). Ash cannot be killed because TR does not have a unique "kill circle".
- { (-1,0), (0,1), (1,0) }, Ash is at (0,0). Ash can be killed since he is standing inside TR's "kill circle".
- { (0,0), (0,1), (1,0) }, Ash is at (-1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".

**Test 2:** There are 10 ways TR may be placed. Each one of them has the probability 0.1, of occuring. For each one of those placements, Ash may be placed at one of the 2 remaining positions. Thus, with probability 0.05 each, there are 20 total arrangements to consider. Ash can be killed by TR in 8 of these 20 cases.
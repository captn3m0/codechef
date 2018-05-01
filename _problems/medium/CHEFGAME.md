---
category_name: medium
problem_code: CHEFGAME
problem_name: ChefGame
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: laycurse
date_added: 10-12-2012
tags:
    - Rubanenko
    - april13
    - medium
    - mst
    - prim
editorial_url: 'http://discuss.codechef.com/problems/CHEFGAME'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493557521
layout: problem
---
All submissions for this problem are available.Everyone knows that ChefLand is the best country in the world and all of its people are the happiest. However, nobody knows their secret of being happy.

Suraj is an Indian scientist and his goal is to research the life of ChefLandian people. He has already arrived in ChefTown, the capital of ChefLand, and met Chef. He promised to reveal their secret to Suraj if he gets maximal score in a special ChefLandian game. The game has following rules:

- In **D**-dimensional Euclidean space, **N** lattice points are given. Every pair of points are not connected initially. The points are **not** guaranteed to be distinct.
- Let **(A1, A2, ..., AD)** and **(B1, B2, ..., BD)** be the coordinates of the points **A** and **B** respectively, then the distance between **A** and **B** is defined as **( (A1−B1)2 + (A2−B2)2 + ... + (AD−BD)2 )1/2**.
- The initial Suraj's score is **1**.
- Suraj is allowed to take as many turns as he wants.
- In every turn, Suraj can connect an unconnected pair of two given points, if this new connection does not form a cycle. That is, Suraj cannot connect the pair of points **A** and **B**, if there exist points **X1, X2, ..., Xk** such that **A** connected to **X1**, **X1** connected to **X2**, **X2** connected to **X3**,..., and **Xk** connected to **B**.
- In every time Suraj connects some points, his score is multiplied by the square of the distance between them.

Now Suraj wonders what is the maximal score he can get. Write a program that will find this score. Since this number can be huge you should output it modulo **747474747**.

### Input

The first line of input contains **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains two space-separated-integers **N** and **D**. The next **N** lines contain **D** space-separated integers, denoting the coordinates of the given lattice points.

### Output

For each test case, output the maximal score modulo **747474747**.

### Constrains

- **1 ≤ T ≤ 6666**
- **1 ≤ N ≤ 6666**
- **1 ≤ D ≤ 5**
- The absolute value of any integer given in the input does not exceed **100000000 (108)**.
- The sum of **N** in one input file does not exceed **6666**.

### Example

<pre>
<b>Input:</b>
1
3 2
0 0
-1 -1
1 -1

<b>Output:</b>
8
</pre>### Explanation

The distance between the first point and the second point is **((0−(−1))2+(0−(−1))2)1/2 = 21/2**.
The distance between the first point and the third point is **((0−1)2+(0−(−1))2)1/2 = 21/2**.
The distance between the second point and the third point is **(((−1)−1)2+((−1)−(−1))2)1/2 = 2**.

One of the optimal ways is that Suraj connects the third and the second points, and then connects the first and the second points. The maximum score is **22 \* (21/2)2 = 8**.

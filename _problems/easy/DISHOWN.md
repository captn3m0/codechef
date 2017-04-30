---
category_name: easy
problem_code: DISHOWN
problem_name: 'Dish Owner'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: viv001
problem_tester: null
date_added: 25-04-2014
tags:
    - disjoint
    - easy
    - july14
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/DISHOWN'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/DISHOWN.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/DISHOWN.pdf).

This summer, there is a worldwide competition being held in Chef Town and some of the best chefs of the world are participating. The rules of this competition are quite simple.

 Each participant needs to bring his or her best dish. The judges will initially assign a score to each of the dishes. Now, several rounds will follow. In each round, any two chefs will be called up on the stage. Each of the chefs can then choose any one dish to battle against the other chef and the one having the dish with the higher score will win this round. The winner of the round will also obtain all the dishes of the loser who will then be eliminated. In case both the dishes have equal scores, this round will be considered as a tie and nothing else will happen. Note that initially each chef will have only one dish and all the chefs play the rounds optimally.

 Your task is to simulate and answer some queries related to this. You will be given **N** dishes numbered from **1** to **N** with the **ith** dish belonging to the **ith** chef initially. You will also be given an array **S** where **S\[i\]** denotes the score given by the judges to the **ith** dish before starting the rounds. You will have to answer **Q** queries, each of which can be of the following types : 

/>/>

1\.  **0 x y** : This denotes that the chef containing dish number **x** competes with the chef containing dish number  **y**  currently in this round. If a single chef is the owner of both the dishes, print **"Invalid query!"** (without quotes), otherwise execute and store the result of this round as described by the rules above. 

/>/>

2\.  **1 x**  : You need to output the index of the chef containing dish **x** at this point.

### Input

First line of input contains an integer **T** denoting the number of test cases. For each test case, the first line contains an integer **N** denoting the number of chefs in the contest. The next line contains **N** space separated integers where the **ith** integer represents **S\[i\]**. The next line contains an integer **Q** denoting the number of queries.  **Q**  lines follow where each line can be of the format  **0 x y**  or  **1 x**  as described in the problem statement.

### Output

 For each test, print in each line the answer for the queries as described in the problem statement .

### Constraints

- **1** ≤ **T** ≤ **25**
- **1** ≤ **N** ≤ **10000(104)**
- ≤ **S\[i\]** ≤ **1000000(106)**
- **1** ≤ **Q** ≤ **10000(104)**
- **1** ≤ **x, y** ≤  **N**


/>

### Example

```
<b>Input:</b>
1
2
1 2
2
0 1 2
1 1
<b>Output:</b>
2

```
### Explanation

There are two chefs with scores of dishes  **1**  and  **2**  respectively. After the first query, chef  **2**  acquires dish  **1**  since  **S\[2\] > S\[1\]** . Hence, the answer for the second query, i.e owner of the **first** dish is chef **2**.

/>/>
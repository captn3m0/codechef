---
category_name: challenge
problem_code: DSANTAP
problem_name: 'Santa Delivering Problem'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: null
date_added: 7-11-2017
tags:
    - iscsi
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1525199511
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/DSANTAP.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/DSANTAP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/DSANTAP.pdf) as well.

In Chefland the ChefSanta gets a list of what children ask from him every year. On Christmas Eve, the ChefSanta delivers the presents to the children. This year, after Santa finished delivering all the presents, he realized that he used last year’s list. Now he starts thinking about how he could fix this. We know that

- Santa has an infinite amount of every kind of present at home
- Santa's reindeer can fly, so he doesn't need roads
- Santa has a bag which has a maximum capacity; this capacity is given
- Santa can leave an infinite amount of presents at every child's house at any moment except the end
- At the end, the Santa has to go to his house, and every house should contain just the present the child from this house wished for.

Santa would like to minimize the total distance that he needs to travel to fix things. Can you help him?

You are not required to find the optimal solution. However, the better your solution is, the more you will get points

### Input

The first line contains **T** the number of test cases.

The next lines contain the descriptions of each test case.

The first line of each test case contains five space-separated integers **N, G, B, X, Y**, where **N** is the number of children in Chefland, **G** is the number of different presents, **B** is Santa's bag volume and **X**, **Y** are Santa's house coordinates.

The next line contains **G** integers **P1, ..., PG** denoting the volume of each present.

The i-th of the next **N** lines contains four space-separated integers **Xi, Yi, Ki, Li**, where **Xi, Yi** are the coordinates of the i-th child's house, **Ki** is last year's present id and **Li** is this year's present id.

### Output

For each test case (in the order given in the input) the output consists of a sequence of commands for Santa (one command per line).

You can give the following commands to Santa:

- 0 — end of the communication
- **1 K** — travel to **XK, YK**, where **K=0** means travel to Santa's house
- **2 K** — put one of the presents of type **PK** to the bag
- **3 K** — take one of the presents of type **PK** out from the bag

### Constraints

- **T** = 3
- **N** = 500
- 10 ≤ **G** ≤ 50
- 50 ≤ **B** ≤ 200
- 1 ≤ **Pi** ≤ 20
- 0 ≤ **X**, **Y**, **Xi**, **Yi**  ≤ 10000
- 1 ≤  **Ki**, **Li**  ≤ **G**
- **Ki != Li**
- The coordinates of houses of all children and Santa's house are pairwise distinct.

### Example

<pre><b>Input:</b>
1
3 3 10 0 0
3 5 7
1 0 2 1 
0 1 3 2
1 1 1 3

<b>Output:</b>
1 1
2 2
1 3
2 1
1 2
3 2
2 3
1 3
3 3
1 1
3 1
1 0
0
</pre>### Explanation:

start with empty bag from 0, 0

1 1 2 2 1 3 2 1 1 2 3 2 2 3 1 3 3 3 1 1 3 1 1 0 0 
Another possible output:

start with empty bag from 0, 0

2 1 1 1 3 1 2 2 1 2 3 2 2 3 1 3 3 3 2 1 1 0 0 ### Scoring

The score for each test case is the (Euclidean) distance traveled by Santa. Your total score will be the sum of your scores over all the test cases in all the test files. There will be 10 official test files. During the contest you will be able to get your score on the first 2 test files. After the contest the score for the full test set will be shown. ### Test Case Generation

When we say a number is chosen from **(a,b)**, it means an integer number chosen randomly and uniformly between **a** and **b** inclusive. - **T** is **3** (except sample)
- **N** is **500**
- **G** is chosen from **(10, 50)**
- **B** is chosen from **(50, 200)**
- Every coordinate is chosen uniquely from **(0, 10000)**.
- We choose a **minP** from **(1, 5)**, and **maxP** from **(5, 20)**. Every **Pi** is chosen from **(minP, maxP)**.
- For each **i**, distinct  **Ki** and **Li**  are chosen from **(1, G)**.

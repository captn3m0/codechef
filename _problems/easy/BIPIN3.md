---
category_name: easy
problem_code: BIPIN3
problem_name: 'Help Watson Escape'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: bipin2
problem_tester: xcwgf666
date_added: 8-01-2016
tags:
    - april16
    - bipin2
    - fastmodexp
    - simple
editorial_url: 'http://discuss.codechef.com/problems/BIPIN3'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493558111
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/BIPIN3.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/BIPIN3.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/BIPIN3.pdf) as well.

**Zombies zombies everywhere!!**

In a parallel world of zombies, there are **N** zombies. There are infinite number of unused cars, each of same model only differentiated by the their colors. The cars are of **K** colors.

A zombie parent can give birth to any number of zombie-children (possibly zero), i.e. each zombie will have its parent except the _head_ zombie which was born in the winters by combination of ice and fire.

Now, zombies are having great difficulties to commute to their offices without cars, so they decided to use the cars available. Every zombie will need only one car. _Head_ zombie called a meeting regarding this, in which he will allow each zombie to select a car for him.

Out of all the cars, the _head_ zombie chose one of cars for him. Now, he called his children to choose the cars for them. After that they called their children and so on till each of the zombie had a car. Head zombie knew that it won't be a good idea to allow children to have cars of same color as that of parent, as they might mistakenly use that. So, he enforced this rule during the selection of cars.

Professor James Moriarty is a criminal mastermind and has trapped Watson again in the zombie world. Sherlock somehow manages to go there and met the _head_ zombie. Head zombie told Sherlock that they will let Watson free if and only if Sherlock manages to tell him the maximum number of ways in which the cars can be selected by **N** Zombies among all possible hierarchies. A hierarchy represents parent-child relationships among the **N** zombies. Since the answer may be large, output the answer modulo **109 + 7**. Sherlock can not compute big numbers, so he confides you to solve this for him.

### Input

The first line consists of a single integer **T**, the number of test-cases.
Each test case consists of two space-separated integers **N** and **K**, denoting number of zombies and the possible number of colors of the cars respectively.

### Output

For each test-case, output a single line denoting the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **10^9**
- **1** ≤ **K** ≤ **10^9**

### Subtasks

**Subtask #1 : (10 points)**

**1. **1** ≤ **T** ≤ **20**
2. 1 ≤ N, K ≤ 10** 
**Subtask 2 : (20 points)**

**1. **1** ≤ **T** ≤ **10**
2. 1 ≤ N, K ≤ 10000** 
**Subtask 3 : (70 points)**

**1. **1** ≤ **T** ≤ **100**
2. 1 ≤ N, K ≤ 10^9** 
### Example

<pre><b>Input</b>
2
2 2
3 3
<b>Output:</b>
2
12
</pre>### Explanation 

In the first sample test case, there are 2 zombies. Let us name them Z1 and Z2. Let one hierarchy be one in which Z1 is parent of Z2. There are 2 colors, suppose red and blue. If Z1 takes red, then Z2 should take a blue. If Z1 takes blue, then Z2 should take red. 
Note that one other possible hierarchy could be one in which Z2 is a parent of Z1. In that hierarchy also, number of possible ways of assigning cars is 2.
So there maximum number of possible ways is 2.

In the second example, we have 3 Zombies say Z1, Z2, Z3 and cars of 3 colors, suppose red, blue and green.
A hierarchy to maximize the number of possibilities is Z1 is the parent of Z2, Z2 is the parent of Z3.
Zombie Z1 can choose one of red, blue or green cars. Z2 can choose one of the remaining two colors (as its car's color can not be same as its parent car.). Z3 can also choose his car in two colors, (one of them could be color same as Z1, and other being the color which is not same as cars of both Z1 and Z2.). This way, there can be 12 different ways of selecting the cars.

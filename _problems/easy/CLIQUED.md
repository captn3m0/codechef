---
category_name: easy
problem_code: CLIQUED
problem_name: 'Bear and Clique Distances'
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
problem_author: errichto
problem_tester: null
date_added: 3-04-2017
tags:
    - april17
    - errichto
editorial_url: 'https://discuss.codechef.com/problems/CLIQUED'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497284070
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/CLIQUED.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/CLIQUED.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/CLIQUED.pdf) as well.

Bearland consists of **N** cities, numbered 1 through **N**. Cities are connected with bidirectional roads.

Cities 1 through **K** were built a long time ago, when citizens liked order and regularity. Each pair of those old cities is connected with a road of length **X**. Note that this description generates **K**\*(**K**-1)/2 roads.

There are **M** newer roads, not necessarily of the same lengths. The i-th of them connects cities **a**i and **b**i and has length **c**i.

There is no road that connects a city to itself. All **M**+**K**\*(**K**-1)/2 roads are distinct (ie. no two of them connects the same pair of cities). It's guaranteed that it's possible to get from every city to every other city, using one or more roads.

Limak, a bear, lives in the city **S**. In order to plan a trip to some other city, for every city he wants to know how quickly he can get there. Can you help him and find the distance from **S** to every city?

The distance between two cities is the minimum total length of a path (sequence of roads) between the two cities.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains five integers **N**, **K**, **X**, **M** and **S**, denoting the number of cities, the number of old cities, the length of a road between every two old cities, the number of newer roads, and the city where Limak lives, respectively.

Each of the following **M** lines contains three integers **a**i, **b**i and **c**i, denoting a road of length **c**i between cities **a**i and **b**i.

As guaranteed above: no two cities are connected with more than one road, no road connects a city to itself, and it's possible to get from every city to every other city.

### Output

For each test case, output a single line containing **N** integers. The i-th of them should denote the distance from the city **S** to the city i. The distance from **S** to **S** is simply 0.

### Constraints

- 1 ≤ **T** ≤ 3
- 2 ≤ **K** ≤ **N** ≤ 105
- 0 ≤ **M** ≤ 105
- 1 ≤ **S**, **a**i, **b**i ≤ **N**
- 1 ≤ **X**, **c**i ≤ 109

### Subtasks

- Subtask #1 (45 points): 2 ≤ **K** ≤ 500
- Subtask #2 (55 points): Original constraints.

### Example

<pre><b>Input:</b>
3
5 4 100 2 3
1 5 50
5 3 160
5 4 100 2 3
1 5 50
5 3 140
8 3 15 7 5
3 4 10
4 5 20
5 6 10
6 1 7
3 7 1000
7 8 50
3 5 1000000000

<b>Output:</b>
100 100 0 100 150 
100 100 0 100 140 
17 32 30 20 0 10 1030 1080

</pre>### Explanation
**Test case 1.** There are **N** = 5 cities. The first **K** = 4 of them are all connected with each other with roads of length **X** = 100. There are **M** = 2 extra roads:

- Cities 1 and 5 are connected with a road of length 50.
- Cities 5 and 3 are connected with a road of length 160.

We are asked to compute distances to all cities from the city **S** = 3. Note that the distance from a city to itself is 0, and this is why the third number in the ouput is 0.

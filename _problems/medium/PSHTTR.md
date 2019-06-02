---
category_name: medium
problem_code: PSHTTR
problem_name: 'Pishty and tree'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: fekete
problem_tester: null
date_added: 30-03-2017
tags:
    - datastructure
    - fekete
    - july17
    - medium
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/PSHTTR'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816323
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/PSHTTR.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/PSHTTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/PSHTTR.pdf) as well.

A little boy Pishty lives in Khust - an ancient town in Uzhlyandia with their medieval castles and smart bears.

The gem of Khust is a very valuable castle because it protects the citizens of Uhzlyandia from the Durdom kingdom's army. Pishty also like this castle because it hides old secrets in long halls and high towers...

The castle can be described as an undirected tree with **N** vertices and **N - 1** edges. Each edge has a magic number **C**.

When a group of tourists visit the castle, they are interested in a path between vertices **U** and **V**. They think that an edge is *interesting* if its magic number is less than or equal to **K**. The total *attractivity* of the path is the [xor](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of all interesting edges on it.

The emperor of Uzhlyandia is interested in tourism development, and so he wants to find the total attractivity of the paths for each group. Because Pishty wants to become the emperor's knight, he wants to know all of this information too. But he can't do it on his own because there are a large number of groups. Please help Pishty to solve this unthinkable problem.

Given **M** groups of tourists, find the total attractivity of the path for each group.

### Input

First line contains one integer **T**, denoting the number of test cases. Then **T** test case descriptions follow.

The first line of each testcase contains one integer **N**, denoting the number of vertices.

The next **N** - 1 lines contain information about the tree. Each line contains three integers **U**, **V** and **C**, which denote that between vertices **U** and **V** is an edge with magical number **C**.

The next line contains one integer **M**, which denotes the number of requests.

The next **M** lines contain information about the requests. Each line contains three integers **U**, **V** and **K**.

### Output

 For each request output one integer in a new line - the total attractivity of the path.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N**, **M** ≤ 105
- 1 ≤ **U**, **V** ≤ **N**
- 1 ≤ **C**, **K** ≤ 109

###  Subtasks : 

- Subtask 1 : 1 ≤ **N**, **M** ≤ 10 (10 pts)
- Subtask 2 : 1 ≤ **N**, **M** ≤ 103 (20 pts)
- Subtask 3 : 1 ≤ **N**, **M** ≤ 105 (70 pts)

### Example

<pre><b>Input:</b>
1
5
1 2 1
2 3 2 
2 4 5
3 5 10
6
5 4 5
5 4 10
5 4 1
1 2 1
4 1 10
1 5 8

<b>Output:</b>
7
13
0
1
4
3
</pre>
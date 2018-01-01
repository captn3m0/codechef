---
category_name: hard
problem_code: SUBGRAPH
problem_name: 'Counting Subgraphs'
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
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: shangjingbo
date_added: 25-07-2015
tags:
    - cook62
    - dynamic
    - graph
    - kostya_by
    - medium
    - tree
editorial_url: 'http://discuss.codechef.com/problems/SUBGRAPH'
time:
    view_start_date: 1442773800
    submit_start_date: 1442773800
    visible_start_date: 1442773800
    end_date: 1735669800
    current: 1493556860
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/COOK62/mandarin/SUBGRAPH.pdf) and [Russian](/download/translated/COOK62/russian/SUBGRAPH.pdf) as well.

Kostya recently began his internship in a very big and famous IT company. His first project is dedicated to visualization of graphs, but his manager wanted to make sure Kostya is good enough for this project before he starts writing any code. As it usually goes, Kostya was given an algorithmic problem and was asked to come up with a solution. After struggling with the problem for a couple of days, he finally managed to solve it. Now Kostya wants to challenge the participants of the September Cook-Off 2015 Contest with this problem. Unfortunately, you don't have a couple of days to solve it, and you'll have to make do with 2.5 hours. Are you ready to be challenged? :)

You are given an undirected graph **G** of **N** nodes and **M** edges. The nodes of **G** are labeled with unique integer numbers of the range \[1, 2, ... , **N**\]. It's guaranteed that no multiple edges or self-loops appear in the graph as well as that the graph is connected. There's one more restriction on the graph: any node of **G** belongs to at most one simple cycle in **G**.

Your task is to count the subsets of nodes in **G**, such that the nodes in the subset are connected (you can reach any node of the subset from any other node of the subset only by moving to adjacent nodes that belong to the subset) and contain no more than **K** nodes. Since the answer may exceed the limits of usual primitive integer types, you are asked to do all the calculations modulo 109 + 7.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of a test case description contains three integers **N**, **M** and **K**.

Each of the next **M** lines contains two integers **U** and **V** denoting a single edge in **G** between the vertices labeled **U** and **V**.

### Output

For each test case, output a single line containing one integer: the number of described subsets modulo 109 + 7.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 5000
- 0 ≤ **M** ≤ 10000
- 1 ≤ **K** ≤ min(**N**, 30)
- 1 ≤ **U** ≠ **V** ≤ **N**
- The size of any simple cycle in **G** does not exceed **L** = 50
 
### Example

 ```
<b>Input:</b>
3
3 2 1
2 1
3 1
5 5 4
5 4
4 3
1 5
3 2
2 5
3 2 2
2 3
1 3

<b>Output:</b>
3
20
5


<pre>
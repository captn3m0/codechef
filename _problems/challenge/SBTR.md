---
category_name: challenge
problem_code: SBTR
problem_name: 'Saboteur (Challenge)'
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
    - SCALA
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
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: alexvaleanu
problem_tester: null
date_added: 24-04-2017
tags:
    - alexvaleanu
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1525454422
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Russian](http://www.codechef.com/download/translated/JUNE17/russian/SBTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/SBTR.pdf) as well.

 Sean Devlin is trying to free France by destroying some radio towers used by Kurt Dierker's intelligence division.

The whole network of radio towers can be modeled using a graph where each vertex is a radio tower. Between some radio towers, there is a bi-directional cable. Being a state of the art network, any two towers are connected, either directly or indirectly by a series of cables.

There is an advanced mechanism implemented that detects if the network has been **disconnected** (i.e. there are at least two active towers that are not connected).

Sean's goal is to destroy some radio towers in order to cripple Kurt's communication network. There is a cost that has to be paid (soldiers to be bribed, TNT to be purchased, etc) in order to bring down a tower. Sean's plan must respect a few constraints:

- The remaining set of towers (possibly empty) **must be connected**. Kurt can easily find out if a message can't reach its destination.
- The remaining set of towers (possibly empty) **must not contain a cycle**. Cycles are quite easy to detect in a radio network.
- The total cost of the plan (i.e. total sum of costs to destroy the set of towers in the plan) has to be **minimised** because the Resistance's funds are not what they used to be.

Having this very important task, Sean asks you to help him create the plan that's supposed to defeat Kurt Dierker's army.

### Input

The first line of the input file contains two integers, **N** and **M**, separated by a single space, where **N** is the number of radio towers and **M** is the number of cables.

On the next line, there are **N** integers, **cost1**, **cost2** ... **costN** where **costi** = the cost of destroying the i-th tower.

Each of the next **M** lines contains a pair of integers representing a pair of towers that are directly connected by a bidirectional cable.

### Output

The first line contains an integer **K** representing the number of towers you think that Sean should destroy.

The next contains **must** contain **K** different integers, **t1**, **t2** ... **tK** where **ti** = the id of the i-th tower to be destroyed. The order in which the ids are printed doesn't matter.

### Constraints

- **1** ≤ **N** ≤ **104**
- **N - 1** ≤ **M** ≤ **5 \* 104**
- **1** ≤ **costi** ≤ **105**
- The given network is **connected**.
- Between any pair of towers there is **at most** one cable.
- There is no cable from a tower to itself.
- Note: an empty graph is connected and doesn't contain any cycles.

### Test generation

There are several types of datasets:

- Dataset #0: small network 
    - **N** ≤ **20**
- Dataset #1: smallish network 
    - **N** ≤ **40**
- Dataset #2: almost tree 
    - **M** = **N**
- Dataset #3: close-enough tree 
    - **M** ≤ **N + 3**
- Dataset #4: complete network 
    - The network is a [complete graph](https://en.wikipedia.org/wiki/Complete_graph).
    - **M** = **N \* (N - 1) ⁄ 2**
- Dataset #5: wheel network 
    - The network is a [wheel graph](https://en.wikipedia.org/wiki/Wheel_graph).
- Dataset #6: random network 
    - The network is a randomly generated graph.

Distribution (20 tests):

- small network: 1 test
- smallish network: 2 tests
- almost tree: 3 tests
- close-enough tree: 3 tests
- complete network: 2 tests
- wheel network: 3 tests
- random network: 6 tests

**Note: During the contest your code will run against only one test from each type of dataset.**

Some notes about how the tests were generated:

- For each test, the **N** and the **M** were chosen 'by hand'.
- All tests start with a tree (so that the nodes are connected) which is modified (if needed).
- Close-enough, almost tree and random network add random edges (if they don't already exist).
- For the wheel network, **N-1** nodes are connected in a cycle and then **N-1** edges are added in order to connect the **N**-th node.
- All edges are generated with the same probability.

### Scoring

Your score for one test is the sum of costs for all the towers in your plan. The final score is the sum of scores in all tests. The goal is to **minimise** that score.

If your program works incorrectly (e.g. it exceeds the time limit or the plan is not valid) on any of the tests, you will get a suitable verdict (e.g. TLE or WA). Otherwise, you will get AC and your score will be decided by only a part of the tests (see test generation). The final score will be revealed after the contest.

### Example

<pre><b>Input:</b>
10 10
1 2 5 1 3 2 4 3 1 2
2 1
8 1
5 1
10 2
6 2
9 5
6 10
3 10
4 6
7 8

<b>Output:</b>
2
6 4
</pre>
<pre><b>Input:</b>
2 1
5 9
1 2

<b>Output:</b>
0
</pre>
<pre><b>Input:</b>
3 2
6 7 8
1 3
2 3

<b>Output:</b>
3
1 2 3
</pre>
**Explanation for the first example**There is only one cycle containing the nodes 2, 6, and 10. One can remove any of them but should make sure that the resulting network is connected. For example, you can remove 6 but you'd also have to remove 4; Another valid solution: 3 and 10 (higher cost). A valid solution can also include other nodes: 7, 3, 10, 5, and 9.

[![sbtr](https://image.ibb.co/j2Db5v/sbtr.png)](https://imgbb.com/)
**Explanation for the last two examples**As both of them are trees, almost any subset of nodes will be a valid solution. The suggested output is not intended to be unique or optimal.

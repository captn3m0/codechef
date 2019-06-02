---
category_name: hard
problem_code: IRONISL
problem_name: 'Iron Islands'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 27-07-2014
tags:
    - bfs
    - bitmasking
    - graph
    - kostya_by
    - ltime15
    - medium
editorial_url: 'http://discuss.codechef.com/problems/IRONISL'
time:
    view_start_date: 1409473800
    submit_start_date: 1409473800
    visible_start_date: 1409473800
    end_date: 1735669800
    current: 1493556738
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME15/mandarin/IRONISL.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME15/russian/IRONISL.pdf).

*The Iron Islands is one of the constituent regions of the Seven Kingdoms, and it was formerly a sovereign nation under the same name, until the War of Conquest. The Iron Islands are home to a fierce people who call themselves the ironborn and are ruled by House Greyjoy from the castle of Pyke.*

(c) A Wiki of Ice and Fire

![](https://codechef_shared.s3.amazonaws.com/download/LTIME15/ironisland.jpg)

The main problem of the Iron Islands is that there are a lot of them and it's not that easy to get from one island to another.

In this problem we assume, that the Iron Islands can be described as an unweighted directed graph **G**, which consists **N** vertices. **G** doesn't have self-loops and multiple arcs.

The Ironborns(the people of the Iron Islands) are trying to improve the arc infastructure. They have a big project, which is splited into **Q** phases. Each phase starts with changing **M** arcs(adding/deleting some of the arcs of **G**). After that, in order to collect some statistics, the phase continues with caculating the sum of the minimal distances for all reachable vertices from some vertex **V**.

Your task is pretty simple: write an algorithm to perform all the phases, correctly and quickly.

### Note

Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:

- Directed graph: [http://en.wikipedia.org/wiki/Directed\_graph](http://en.wikipedia.org/wiki/Directed_graph)

### Input

The first line of the input contains an integer **T**, denoting the number of testcases. The description of **T** testcases follows.

The first line of each testcase contains an integer **N**, denoting the number of vertices in **G**.

Each of the next **N** lines contains a string **Ei**, consisting of **N** symbols(only *'0'* and *'1'* are allowed). If **j**'th symbol of **Ei** equals to *'1'*, then the arc from vertex **i** to vertex **j** belongs to **G**, otherwise there's no such arc.

The next line contains an integer **Q**, denoting the number of phases of the big project. The description of the phases follows.

The first line of a phase desription contains two integers **V** and **M**, denoting the vertex for caculating the sum of the minimal distances for all reachable vertices and the number of arcs to change.

The next **M** lines of a phase desription contains two integers **A** and **B** each, denoting the next arc **A -> B** to change(it means, that if there's no **A -> B** arc in **G** by that moment, then you should add it; if there's **A -> B** arc in **G**, then you should delete it).

**IMPORTANT:** you should not roll back all the edges after each of the phases. It's ok for the graph to be changed during the big project.

### Output

The output of each testcase should contain **Q** lines, **i**'th should contain one integer: the sum of the minimal distances for all reachable vertices from the corresponding vertex **V**.

Do not add any newlines between different testcases.

### Constraints

- 0 ≤ sum of **M** ≤ 250000, for each testcase.
- 1 ≤ **V**, **A**, **B** ≤ **N**
- Subtask 1(20 points): 1 ≤ **T** ≤ 4, 1 ≤ **N** ≤ 100, 1 ≤ **Q** ≤ 100;
- Subtask 2(30 points): 1 ≤ **T** ≤ 3, 1 ≤ **N** ≤ 500, 1 ≤ **Q** ≤ 1000;
- Subtask 3(50 points): **T** = 1, 1 ≤ **N** ≤ 1000, 1 ≤ **Q** ≤ 10000.

### Example

<pre><b>Input:</b>
2
2
01
00
2
1 0
2 0
5
00101
00111
11011
11001
10100
5
1 3
1 4
2 5
5 3
2 1
1 2
3 1
2 1
4 1
1 2
5 3
2 4
4 2
2 4

<b>Output:</b>
1
0
5
6
4
5
8

</pre>
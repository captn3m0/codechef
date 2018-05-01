---
category_name: hard
problem_code: TACTQUER
problem_name: 'Shortest path queries'
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
problem_author: tuananh93
problem_tester: errichto
date_added: 9-09-2016
tags:
    - cook74
    - dynamic
    - graph
    - hard
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TACTQUER'
time:
    view_start_date: 1474223400
    submit_start_date: 1474223400
    visible_start_date: 1474223400
    end_date: 1735669800
    current: 1493556860
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK74/mandarin/TACTQUER.pdf), [Russian](http://www.codechef.com/download/translated/COOK74/russian/TACTQUER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK74/vietnamese/TACTQUER.pdf) as well.

With the impressive achievement in competitive programming Jem was offered an internship at IBER - a tech company that provides an alternative to tradditional taxi service.

Jem first task was help IBER quickly calculate the distance between two arbitrary locations in Jem's city. As an experienced competitive programmer Jem understand that this is not a trivial problem with general graph. Fortunately after investigate the city map Jem found out that the roads system is have a special form which may make Jem's problem easier to deal with.

There are **N** locations in the city and **M** bidirectional road connecting them. Each road **i** have the length of **Ci** and no two road connect the same pair of locations. The roads system is designed in a way that from a specific location one can travel to any other locations. The most important point is that there is no location belong to more than one cycle in the graph corresponding to road network.

So Jem already got his solution. If you want to secure an internship at IBER maybe you can try to solve this problem too!

### Input

- The first line of the input contains two number **N** and **M**
- In the next **M** line each line contains three numbers **u**, **v** and **c** represent a road of length **c** connects location **u** and **v**.
- Next line contains a single number **Q** represents the number of queries.
- In the next **Q** lines each line contains two numbers **u** and **v** corresponding to a query of the length of the shortest path between location **u** and **v**.

### Output

For each query print out the corresponding result in one line.

### Constraint

- 2 ≤ **N** ≤ 105
- 1 ≤ **M** ≤ 2 × 105
- 1 ≤ **Q** ≤ 105
- 1 ≤ **c** ≤ 104
 

### Example

<pre>
<b>Input 1</b>:
4 3
1 2 2
2 3 3
2 4 4
2
1 4
4 3

<b>Output 1</b>:
6
7

<b>Input 2</b>:
7 8
1 2 2
1 3 4
2 3 1
3 4 1
4 5 1
4 7 1
5 6 2
6 7 1
3
1 4
5 7
1 6


<b>Output 2</b>:
4
2
6
</pre>### Explaination

**Test 2:** the graph is shown in the picture below.

![](http://www.codechef.com/download/upload/tactquer-example-2.png)

The shortest path for each query are:

- From 1 to 4: 1 -> 2 -> 3 -> 4
- From 5 to 7: 5 -> 4 -> 7
- From 1 to 6: 1 -> 2 -> 3 -> 4 -> 7 -> 6

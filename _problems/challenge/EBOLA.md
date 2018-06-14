---
category_name: challenge
problem_code: EBOLA
problem_name: 'Fighting Ebola'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: nssprogrammer
problem_tester: xcwgf666
date_added: 20-04-2015
tags:
    - aug16
    - challenge
    - nssprogrammer
    - researching
editorial_url: 'http://discuss.codechef.com/problems/EBOLA'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1525199510
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/EBOLA.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/EBOLA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/EBOLA.pdf) as well.

An analysis of the ongoing [Ebola](http://en.wikipedia.org/wiki/Ebola_virus_disease) outbreak reveals that transmission of the virus occurs in social networks. Usually a social network is represented as an undirected graph **G = (V, E)**, where **V** denotes the set of nodes and **E** denotes the set of edges. Each node in the graph is assigned an integer weight for it.

At time **t = 0**, all the nodes of the graph are vulnerable. Node **S** of the graph has just been infected by Ebola. At each instant of time **t > 0**, any vulnerable node **v** which is connected to some infected node **u** (i.e. **(u, v) ∈ E**) also gets infected, unless it was vaccinated at some time **t' . A node once infected always remains infected and a vaccinated node can never be infected. Obviously once a node is infected, there is no point of vaccinating it. A node is called **saved** if it is not infected till the end (at **t = infinity**, a long time afterwards).**

You, being in-charge of biggest hospital in the area, have been given the responsibility of vaccinating the nodes of the graph. There are total **K** units of supply of vaccines in the hosptial. Your target is to vaccinate certain number of nodes using these **K** units of vaccines. You will start vaccinating the nodes from time **t = 1**, up to time **t = K**. Note that you can not vaccinate more than one node a particular time. Also notice that it is better to not skip a vaccination at any time instance between **t = 1** to **t = K**, so we enforce you to vaccinate at least some node at each instant. You can choose to vaccinate a node more than once, but it will be pointless. You can also choose to try to vaccinate an already infected node, but it will also be pointless.

### What needs to be optimized?

Your score will be the sum of weights of all the nodes those are not infected (at **t = inf**, after a long time). You have to maximize value of score.

### Input

The first line contains four space separated integers **N**, **M**, **K** and **S**, denoting the number of nodes, the number of edges,the number of units of the vaccines available and the index of the node at which the Ebola virus starts infecting the social network respectively.

The next line contains **N** space separated integers **wi** , each integer specifying the weight of **ith** node, where **1 ≤ i ≤ N**.

Then **M** lines follow.

The **ith** of such lines contains two space separated integers **x** and **y** representing the edge joining nodes **x** and **y**.

### Output

Output **K** space separated integers denoting the indices of the nodes in the order of their vaccination. Note that if you don't have any uninfected node to vaccinate, you can print any dummy node to try to vaccinate.

### Constraints

- **1** ≤ **S** ≤ **N** ≤ **104**
- **1** ≤ **M** ≤ **5\*104**
- **1** ≤ **K** ≤ **500**
- **1** ≤ **wi** ≤ **103**
- Graph **G** is connected. It does not have multi-edges and self loops.

### Example

<pre><b>Input:</b>
<tt>15 22 3 1
2 3 1 4 5 3 6 8 2 4 8 1 4 8 9
1 2
1 7
1 12
2 3
2 4
2 5
2 6
3 4
3 9
4 6
5 6
5 8
5 10
6 10
7 8
7 11
8 10
9 14
12 13
12 14
12 15
14 15</tt>

<b>Output:</b>
<tt>2 14 6</tt>
</pre>### Explanation

The above example is well illustrated through following figures. Infection is represented by red circle and vaccination is represented by green circle. At the end of the process nodes 2, 3, 4, 6, 9 and 14 are saved. The sum of the weights of these nodes is 21. So, the score is 21.

**t = 0** ![](http://www.codechef.com/download/upload/AUG16/E1.jpg)

**t = 1** ![](http://www.codechef.com/download/upload/AUG16/E2.jpg)

**t = 2** ![](http://www.codechef.com/download/upload/AUG16/E3.jpg)

**t = 3** ![](http://www.codechef.com/download/upload/AUG16/E4.jpg)

### Test Case Generation

All the test cases have been divided into broadly 4 groups.

### Description of groups of test cases

Each group has 5 test files. All the test files in the group will follow these constraints.

- **minN** ≤ **N** ≤ **maxN**
- **minM** ≤ **M** ≤ **maxM**
- **minK** ≤ **K** ≤ **maxK**
- **N, M, K** will be choosen uniformly randomly in the above described ranges.
- **S** will choosen uniformly randomly in the range **\[1..N\]**.

In one test file, Graph **G** will be a 4-regular graph. Please ignore the constraints on **M** displayed above in that case. All other constraints will be applicable on **G**.

In one of the test files, the graph will be a connected biparite graph following the given constraints.

In other remaining three files, the graph will be random connected graphs satisfying the given constraints.

### Group 1

- **minN = 290** & **maxN = 300**
- **minM = 900** & **maxM = 1000**
- **minK = 35** & **maxK = 50**

### Group 2

- **minN = 970** & **maxN = 1000**
- **minM = 9900** & **maxM = 10000**
- **minK = 35** & **maxK = 50**

### Group 3

- **minN = 9990** & **maxN = 10000**
- **minM = 35000** & **maxM = 40000**
- **minK = 35** & **maxK = 50**

### Group 4

- **minN = 9990** & **maxN = 10000**
- **minM = 35000** & **maxM = 40000**
- **minK = 350** & **maxK = 500**

During the contest, your submissions will be evaluated on the test files. If you get a non-AC verdict in any of the test files, you will be notified about that. However, if you get an AC verdict, then the score displayed will be only of 20% of the test files. Those 20% of the test files will be 4-regular, bipartite and 2 random connected graphs of group 4. After the contest, your submission will be rejudged and score will correspond to all the test files.

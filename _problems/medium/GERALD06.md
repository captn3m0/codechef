---
category_name: medium
problem_code: GERALD06
problem_name: 'Chef and Strange Graph'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: null
date_added: 12-12-2013
tags:
    - cook41
    - gerald
    - medium
editorial_url: 'http://discuss.codechef.com/problems/GERALD06'
time:
    view_start_date: 1387737000
    submit_start_date: 1387737000
    visible_start_date: 1387737000
    end_date: 1735669800
    current: 1493557671
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/COOK41/mandarin/GERALD06.pdf)

###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK41/russian/GERALD06.docx)

### Problem Statement

Chef has a connected undirected graph **G** without multiedges and self-loops. A graph is called connected if there exists a path between any two vertices of the graph. This graph, **G** has an awesome property: it contains at least one vertex with degree at least 4. 
 One day Chef was playing with his graph. He constructed a graph **L(G)** based on the graph **G**.
The vertices of graph **L(G)** are the edges of graph **G**. Two vertices in the graph **L(G)** are connected with an undirected edge if and only if the
corresponding edges in graph **G** share a common vertex.

Today Chef has lost his favorite graph **G**. But he has the graph **L(G)**. Please help Chef, restore the graph **G** from the graph **L(G)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **M** - the number of vertices in **L(G)** and the number of edges in it. The next **M** lines
contain description of the edges. Each line contains two integers **Ai**, **Bi** - indices of vertices, connecting by the current edge. Consider **L(G)**
vertices are numbered from **1** to **N**.

### Output

For each test case in the first line output an integer **K** - the number of vertices in the graph **G**. The next **N** lines should contain the description of the edges of the graph **G** (the **i**-th edge of **G** should correspond to the **i**-th vertex of **L(G)**).
You should number vertices in graph **G** from **1** to **K**. If there are multiple answers you can print any of them. Also you can insert whitespaces in your output if you want.

### Constraints

- **1** ≤ **T, N, M** ≤ **5000**;
- **1** ≤ **Ai, Bi** ≤ **N**;
- Given graph **L(G)** is connected and doesn't contain multiedges and self-loops.
- It's guaranteed that sum of all **M** values for all test cases doesn't exceed **5000**.
- It's guaranteed that for each test the answer exists.

### Example

<pre><b>Input:</b>
2
4 6
1 2
2 3
3 4
4 1
1 3
2 4
5 8
1 2
2 3
3 4
4 1
1 3
2 4
1 5
2 5

<b>Output:</b>
5
2 1
1 3
1 4
1 5
5
1 2
1 3
1 4
1 5
2 3
</pre>
---
category_name: medium
problem_code: CHEFGRPH
problem_name: 'Time to Study Graphs with Chef'
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
problem_author: malinovsky239
problem_tester: shangjingbo
date_added: 31-05-2014
tags:
    - combinatorics
    - dynamic
    - feb15
    - graph
    - malinovsky239
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CHEFGRPH'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493557528
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB15/mandarin/CHEFGRPH.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/CHEFGRPH.pdf).

Consider directed graph which has **n + 2** layers numbered from left to right by integers from 0 up to **n + 1**. The leftmost (0) and the rightmost (**n + 1**) layers both contain **only one** vertex while every other layer contains exactly **m** vertices. Vertices are numbered independently in each layer by integers from 0 to **m - 1**. For each pair of vertices which are in the adjacent layers (**i** and **i + 1** for any **i (0 &lt;= i &lt;= n)**), there exists an edge. The vertex which is in the layer with smaller number is the initial vertex for such edge and the other one is the terminal vertex.

Based on a graph as described above, Chef added **k** more edges. Each edge connects two vertices which are in the different layers, no matter the adjacent layers or not. Also, each edge is directed from left to right (as well as all previously existing edges).

Chef is interested in the number of ways to get from the leftmost layer to the rightmost one. Two paths are considered different if there is, at least, one edge which belongs to exactly one path. However, they are allowed to traverse the same set of vertices. In that case, there should be a multiple edge in the graph. It is also possible if some edge added by Chef connects two adjacent layers.

### Input

The first line of the input contains three space-separated integers: **n**, **m** and **k**.

**k** lines follow. Each of them describes one of the **k** additional edges and contains four space-separated integers **edgei** (where 0 &lt;= **i** &lt;= **3**). First two integers are for the initial vertex and the other two - for the terminal one. Two integers each vertex is described by are the number of the layer (**edge0** and **edge2** respectively) and number of the vertex in its layer (**edge1** and **edge3** respectively).

### Output

Output a single integer: the number of ways to reach the last layer from the initial one modulo **109+7**.

### Constraints

- **1** &lt;= **n** &lt;= **1012**
- **1** &lt;= **m** &lt;= **105**
- 0 &lt;= **k** &lt;= **5 \* 104**
- for each added edge: 
    - Layers: 0 &lt;= **edge0** &lt; **edge2** &lt;= **n+1**
    - Numbers inside the layer:
    - In general: 0 &lt;= **edge1**, **edge3** &lt;= **m-1**
    - When **edge0** = 0, **edge1** = 0
    - When **edge2** = **n + 1**, **edge3** = 0

### Subtasks

- Subtask #1: **n**, **m** &lt;= **6**, **k** &lt;= **2** (20 points)
- Subtask #2: **n**, **m** &lt;= **110**, **k** &lt;= **30** (30 points)
- Subtask #3: original constraints (50 points)

### Example

<pre><b>Input:</b>
4 2 2
2 1 5 0
0 0 4 0

<b>Output:</b>
19
</pre>
### Explanation

Consider the graph without **2** edges added by Chef. There are **16** ways to get from the layer **\#0** to the layer **\#5**. Now recall added edges. There are **2** ways to get from the layer **\#0** to the layer **\#5** using the edge **2 1 5 0** (0, 0 -&gt; 1, 0 -&gt; 2, 1 -&gt; 5, 0 and 0, 0 -&gt; 1, 1 -&gt; 2, 1 -&gt; 5, 0) and also **1** way to do it using the edge **0 0 4 0** (0, 0 -&gt; 4, 0 -&gt; 5, 0). Note, that there is no path traversing both added edges.

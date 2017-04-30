---
category_name: hard
problem_code: SPSHORT
problem_name: 'Special Shortest Walk'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: anudeep2011
date_added: 11-11-2014
tags:
    - cook55
    - devuy11
    - dijkstra
    - graph
    - medium
    - paths
    - shortest
editorial_url: 'http://discuss.codechef.com/problems/SPSHORT'
time:
    view_start_date: 1424025000
    submit_start_date: 1424025000
    visible_start_date: 1424025000
    end_date: 1735669800
    current: 1493556996
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK55/mandarin/SPSHORT.pdf) and [Russian](http://www.codechef.com/download/translated/COOK55/russian/SPSHORT.pdf) as well.

You are given an **undirected graph**, you need to find the shortest walk in the graph from **source** to **sink** which satisfies the following property:

Let the shortest walk from source to sink be through edges E1 -> E2 -> ... -> Ek, then Weight(E1) > Weight(E2) < Weight(E3) > Weight(E4) .....and so on.

Formally, the difference between adjacent edge weights in shortest walk should keep on switching from positive to negative and from negative to positive. And the first difference should be positive.

### Input Format

First Line contains **T**, the number of Test cases.

First line of each test case contains **N** the number of nodes and **M** the number of edges. 

Next **M** lines follows, each line contains 3 integers **X**, **Y** and **Z**, which denotes that there is an edge from **X** to **Y** with weight **Z**. 

Next line contains 2 integer **source** and **sink**.

### Output Format

For each test case, print the shortest walk satisfying the property. If no such walk exists then print "No Solution".

```

<h3>Constraints</h3>
1 ≤ Sum of <b>N</b> over all test cases ≤ 100000 
1 ≤ Sum of <b>M</b> over all test cases ≤ 500000 
3 ≤ <b>N</b> ≤ 100000   
2 ≤ <b>M</b> ≤ 500000   
1 ≤ <b>T</b> ≤ 2000 
1 ≤ <b>Z</b> ≤ 100000000  
1 ≤ <b>X,Y</b> ≤ <b>N</b>  
<b> X != Y </b>
<b>source !=  sink</b> and there are no multi edges.
<b>source and sink</b> will not be connected by a direct edge

<h3>Sample Input</h3>
3
5 6
4 2 8
1 4 6
2 3 10
3 1 10
1 2 3
3 5 3
4 3
4 3
1 4 4
2 4 5
2 3 6
4 3
5 5
1 2 100
2 3 80
3 4 90
4 2 85
2 5 120
1 5
    
<h3>Sample Output</h3>
19
No Solution
475

<h3>Explanation</h3>
For First Test Case: Shortest Valid Walk: 4->1->2->3  
For Second Test Case: There is no valid Walk satisfying the constraints.

```
**Warning: Large Input files, some files are upto 10 MB**
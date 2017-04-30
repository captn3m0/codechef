---
category_name: hard
problem_code: QPOINT
problem_name: 'Queries With Points'
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
problem_author: tuananh93
problem_tester: null
date_added: 26-09-2013
tags:
    - data
    - geometry
    - hard
    - interactive
    - nov13
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/QPOINT'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493556801
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/QPOINT.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/QPOINT.PDF).

Let's solve a realistic problem now! You are given the world map where each country is a polygon on the 2D plane. You may already now that the Global Positioning System can help you to know your current coordinate. So how can you determine which country are you in? That what you need to figure out in this problem. We will give you more detail about input and output description now

There are **N** countries which are numbered from **1** to **N**. Each country is represented by a single simple polygon on the 2D plane. Simple polygon means the boundary of the polygon does not cross itself. You should not confuse simple polygon with convex polygon. There are no two countries share a common point.

You have to answer **Q** queries, each query requires you to find the polygon that contain a specific point. Note that a point on the boundary of the polygon is considered to be inside the polygon. This problem is set in **interactive mode**  that means you need to answer each query right after you read it.

### Input

- The first line of input contains a single integer **N** which is the number of countries
- The **ith** line in the next **N** lines describes the boundary of the **ith** country. It starts with an integer **k** and then **k** pairs of integers (where each pair represent a vextex in 2D) follow. A country's boundary can be drawn by connecting these pairs of vertices in the same order as supplied using straight lines (Finally connect last vertex with first vertex).
- The next line contains a single integer **Q** which is the number of queries.
- Each line in the next **Q** lines contains a pair of integer which is the coordinate in the query.

### Output

For each query you print out one number which is the index of the country that contains the query point. Print out **-1** if there is no country contains that point.

 **_Attention:_** the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout).

### Constraints

- **1** ≤ **N** ≤ **100,000**
- **3** ≤ **K** ≤ **300,000**
- Sum of all values of **K** is less than **300,000**
- **1** ≤ **Q** ≤ **100,000**
- All coordinates are non-negative integer which are not exceed **109**

### Example

```
<b>Input:</b>
2
4 1 4 1 7 7 7 7 4
3 1 1 5 3 7 1
3
2 3
3 6
6 2
<b>Output:</b>
-1
1
2

```
### Explanation

**Example case 1.** The test case is represented in figure below.
The first country is the rectangle ABCD and the second country is a triangle EFG. Notice that the point J at coordinate (6, 2) is considered to be inside the second country when it is on the boundary of this country

[![Image and video hosting by TinyPic](http://i39.tinypic.com/x3wh13.png)](http://tinypic.com?ref=x3wh13)
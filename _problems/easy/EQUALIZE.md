---
category_name: easy
problem_code: EQUALIZE
problem_name: Equalize
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: null
date_added: 7-06-2016
tags:
    - kevinsogo
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/EQUALIZE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/EQUALIZE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/EQUALIZE.pdf) as well.

Chef is creating a map for a certain real-time strategy video game. In this game, a map is a 2D rectangle of dimensions **N × M** tiles. Initially, the tile at row **i** and column **j** has a height of **Hi,j**. Heights are always integers.

Before creating the map, Chef first wants to make the heights of all the tiles equal. But he can only change height values using the **equalize** tool. The equalize tool is rectangular in shape, with dimensions **K × L**, and upon application, it replaces the height values of all the affected cells by their **median**. The equalize tool cannot be rotated. For example, in the following **5 × 9** grid of heights:

```
<tt>9 8 8 8 7 7 7 8 7
1 1 1 4 4 5 2 4 4
2 3 1 2 1 2 1 1 9
3 2 8 8 9 9 7 7 7
7 7 7 7 7 7 8 8 8
</tt>
```
Suppose the dimensions of the equalize tool is **3 × 7**, and we apply it in the middle **3 × 7** region. The median of the values in that region is **3**, so after application, the grid becomes:

```
<tt>9 8 8 8 7 7 7 8 7
1 3 3 3 3 3 3 3 4
2 3 3 3 3 3 3 3 9
3 3 3 3 3 3 3 3 7
7 7 7 7 7 7 8 8 8
</tt>
```
Note that **K** and **L** are odd integers, so that the median is always an integer.

Chef wants to make all height values equal by repeatedly applying the equalize tool. Furthermore, he also wants the final (common) height to be as large as possible. What is the maximum final (common) height that he can obtain?

Furthermore, you have to answer **Q** queries, where each query denotes a different set of values for **K** and **L**.

### Input

The first line of input contains three integers, **N**, **M**, **Q**.

The following **N** lines describe the height values. Each line contains **M** integers. The **jth** value in the **ith** line contains **Hi,j**.

The following **Q** lines describe the queries. The **jth** line contains two integers, **Kj** and **Lj**.

### Output

For each query, output a single integer, the maximum final (common) height that Chef can obtain, assuming the size of the equalize tool is **Kj × Lj**.

### Constraints

- **3** ≤ **N**, **M** ≤ **1000**
- **1** ≤ **Q** ≤ **25**
- ≤ **Hi,j** ≤ **107**
- **3** ≤ **Kj** ≤ **N**
- **3** ≤ **Lj** ≤ **M**
- **Kj** and **Lj** are odd.

### Example

```
<b>Input:</b>
<tt>3 7 3
8 5 5 5 8 6 8
8 9 5 5 5 9 8
8 6 8 5 5 5 8
3 3
3 5
3 7
</tt>
<b>Output:</b>
<tt>8
5
6</tt>

```
### Explanation

In the first query, Chef can obtain a final height of **8** by first applying the equalizer on the leftmost **3 × 3** region:

```
<tt>8 8 8 5 8 6 8
8 8 8 5 5 9 8
8 8 8 5 5 5 8
</tt>
```
then the rightmost **3 × 3** region:

```
<tt>8 8 8 5 8 8 8
8 8 8 5 8 8 8
8 8 8 5 8 8 8
</tt>
```
and then finally the middlemost **3 × 3** region:

```
<tt>8 8 8 8 8 8 8
8 8 8 8 8 8 8
8 8 8 8 8 8 8
</tt>
```
It can be shown that this is the largest final height that can be obtained.
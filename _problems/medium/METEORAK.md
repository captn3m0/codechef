---
category_name: medium
problem_code: METEORAK
problem_name: Meteor
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
problem_author: Rubanenko
problem_tester: white_king
date_added: 13-11-2013
tags:
    - Rubanenko
    - dynamic
    - jan14
    - medium
editorial_url: 'http://discuss.codechef.com/problems/METEORAK'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493557792
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN14/mandarin/METEORAK.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/METEORAK.pdf).

A meteor fell on Andrew's house. That's why he decided to build a new home and chose a site where he wanted to build it. Let the whole area be a rectangular field of size **N**x**M**. Naturally, Andrew wanted to build a house on the entire area of the site. However, the Hazardous Construction Prevention Bureau did not let Andrew's plans come true. The Bureau said that some of the cells of the field are dangerous for the foundation. There are exactly **K** such cells.

Andrew's not a poor man. And as anyone who has money, he saves money. Therefore, he is willing to buy not the whole area, but only a stripe of the same width. The house will occupy a rectangular area in this stripe with sides parallel to the sides of the original site.

Andrew is asking for your help: for each **Li**, **Hi** - the lowest and the highest boundaries (inclusive), respectively - find the maximum area of ​​the house that Andrew can build on the relevant site.

### Input

In the first line you are given three integers **N**, **M** and **K**.
In the following **K** lines you are given different pairs of integers **xi**, **yi** - the coordinates of the dangerous cells.
Next line contains an integer **Q** - the number of Andrew's queries
The last **Q** lines describe the queries: each line contains two integers **L** and **H** - the lowest and the highest boundaries.

### Output

In the output file, print **Q** lines, where i-th line contains the answer for **i**-th query. If you cannot build the house, then output 0.

### Constraints

- **1** ≤ **N, M** ≤ **1000**
- **1** ≤ **K** ≤ **N \* M**
- **1** ≤ **xi** ≤ **N**
- **1** ≤ **yi** ≤ **M**
- **1** ≤ **Q** ≤ **106**
- **1** ≤ **Li** ≤ **Hi ≤ **N****

### Example

<pre><b>Input:</b>
4 5 5
2 1
3 2
1 3
2 4
1 4
4
1 1
3 4
2 3
1 4

<b>Output:</b>
2
6
3
6
</pre>
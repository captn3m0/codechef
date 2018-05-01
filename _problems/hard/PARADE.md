---
category_name: hard
problem_code: PARADE
problem_name: 'Annual Parade'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: cgy4ever
problem_tester: laycurse
date_added: 3-08-2012
tags:
    - binary
    - cgy4ever
    - floyd
    - min
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/PARADE'
time:
    view_start_date: 1347355978
    submit_start_date: 1347355978
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493556787
layout: problem
---
All submissions for this problem are available.In the magic land, there is an annual parade hold on each spring. 

There are **N** cities in magic land, and **M** directed roads between cities. 
On the parade, there will be some(may be 0) heroes travel in this land, for each hero: He start at city begin\[i\], traveling to some cities, and finish at city end\[i\]. Note that: begin\[i\] may be equals to end\[i\], but he must at least moved to another city during this travel. He can go on one road many times, but it will have a cost for each time. 

The cost of this parade is the sum of these items: 
1\. The sum of costs by traveling on roads. (If a road is passed by k heroes, then it must be count k times.) 
2\. If for a hero, he ended at a city that not equals to his start city, i.e. begin\[i\] != end\[i\], then it will cost **C** dollars to move him back to his home. 
3\. If for a city, there is no heroes visited, then we must pay for the citizen **C** dollars as compensate. 

The value of **C** may change every year, and we can predict this value in the following **K** years. Your task is: calculate the minimal cost of each year.

### Input

In the first line, there are 3 integers: **N**, **M** and **K**. 
In the following **M** lines: 
there will be 3 integers: **S\[i\]**, **T\[i\]**, and **V\[i\]**, describing a directed road from **S\[i\]** to **T\[i\]**, cost **V\[i\]** dollars. 
In the next **K** lines: There will be an integer: **C\[i\]**, describing the value of **C** in that year.

### Output

Output **K** lines: each line contain an integer, corresponding to the minimal cost of each year.

### Constraints

2 N 1 M 1 K **S**\[i\] != **T**\[i\], 1 S\[i\], **T**\[i\] N 
1 V\[i\] 1 C Note that: there may be more than 1 road between a certain pair of cities. ### Example

<pre>
<b>Input:</b>
6 5 3
1 3 2
2 3 2
3 4 2
4 5 2
4 6 2
1
5
10

<b>Output:</b>
6
21
32
</pre>
**Explanation**
In the first year, since **C** is very small, an optimal solution is: no hero travel, we pay 1 dollar for each city as compensate. 
In the second year, an optimal solution is: One hero traveling in the path: 1->3->4->5. We pay 2+2+2=6 dollars for the roads, 5 dollars for taking him back to city 1, and pay 5 dollars for city 2 and 6 as compensate. 
In the third year, one optimal solution is: One hero traveling in the path: 1->3->4->5, and another hero traveling in the path: 2->3->4->6.

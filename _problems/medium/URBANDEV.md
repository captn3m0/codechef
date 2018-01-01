---
category_name: medium
problem_code: URBANDEV
problem_name: 'Urban Development'
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
problem_author: cenadar
problem_tester: xcwgf666
date_added: 20-11-2015
tags:
    - cenadar
    - line
    - medium
    - nov16
    - segment
editorial_url: 'http://discuss.codechef.com/problems/URBANDEV'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493557953
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/URBANDEV.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/URBANDEV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/URBANDEV.pdf) as well.

Chef is working with the development of a new city Krewsko. He and other city planners are designing the transportation system of Krewsko. They are using Cartesian coordinates and Krewsko will only have roads that are parallel to either the x-axis or the y-axis.

It is clear that we need to add one set of traffic lights at every intersection of roads where a person has at least two other directions to continue their trip when arriving at the intersection. Your task is to count how many traffic light sets should be deployed. In particular, for each road you want to know how many traffic light sets will appear on that road.

Let's formalize how a road in the city is defined. A road is a segment on the plane with endpoints in **Xi,1**, **Yi,1** and **Xi,2**, **Yi,2** for **ith** line. You are guaranteed that each line segment is either a vertical line or a horizontal line. An intersection is a point that belongs to two line segments: one horizontal and another vertical. We guarantee that no two vertical lines will share a point and no two horizontal lines share a point.

You must put a set of lights at each intersection of a horizontal and a vertical line segment where the point of intersection is not an endpoint of both segments.

### Input

The first line of the input contains an integer **N** indicating number of roads.

The next **N** lines contain **4** integers each. The **ith** line contain **Xi,1**, **Yi,1** and **Xi,2**, **Yi,2**.

### Output

The output consists of two lines. The first line contains a single integer indicating the number of sets of lights that will be used throughout all of Krewsko. The second line consists of **N**integers. The **i**'th such integer indicates the number of traffic light sets that will be deployed to the **i**'th road. There should be a single space between consecutive integers on this line.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **Xi,1** ≤ **105**
- **1** ≤ **Yi,1** ≤ **105**
- **1** ≤ **Xi,2** ≤ **105**
- **1** ≤ **Yi,2** ≤ **105**
- The length of each road is positive and each road will either be a horizontal line segment or a vertical line segment.

### Subtasks

- **Subtask #1 \[40 points\]: N ≤ 10000**
- **Subtask #2 \[60 points\]: No additional constraints**

### Example

<pre><b>Input:</b>
<tt>4
2 1 2 6
1 3 5 3
4 1 4 4
1 5 5 5</tt>
<b>Output:</b>
<tt>3
2 2 1 1</tt>

</pre>
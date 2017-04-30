---
category_name: easy
problem_code: CIELMAP
problem_name: 'Ciel and Map'
languages_supported:
    - ADA
    - ASM
    - BASH
    - C
    - 'C99 strict'
    - CAML
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - GO
    - HASK
    - ICON
    - JAVA
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PHP
    - PIKE
    - PYTH
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: null
date_added: 4-07-2012
tags:
    - cook24
    - easy
    - geometry
    - laycurse
editorial_url: 'http://discuss.codechef.com/problems/CIELMAP'
time:
    view_start_date: 1342982925
    submit_start_date: 1342982925
    visible_start_date: 1342982428
    end_date: 1735669800
    current: 1493558130
layout: problem
---
All submissions for this problem are available.Tomya is a girl. She loves Chef Ciel very much.

Tomya writes a tetragon (see the below **Notes 1** for details) in her map. The map has **N** points, whose coordinate are (**Xi**, **Yi**), denoting Ciel's restaurants. Each vertex of the tetragon written by Tomya is one of the Ciel's restaurants.

Tomya doesn't show her tetragon in the map, but she says that she draws a long segment. To guess her tetragon, please tell the maximum length of a segment which can be one of the sides in her tetragon. (See **Notes 2** for the definition of length)

**Notes 1**:
A tetragon means a polygon with 4 sides.
A tetragon must be simple, that is, the boundary of the tetragon does not cross itself.
A tetragon does not have to be convex.

![](http://www.codechef.com/download/CIELMAP2.png)
**Notes 2**:
The length of a segment is defined as the Euclidean distance between the endpoints. That is, the length of the segment (**x**1, **y**1) - (**x**2, **y**2) is the square root of (**x**1 - **x**2)2 + (**y**1 - **y**2)2.

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line of each test case contains an integers **N**. Then next **N** lines follow. The **i**-th line contains 2 integers denoting **Xi** and **Yi**.

### Output

For each test case, print the maximum length of a segment which can be one of sides in her tetragon. This value must have an absolute error no more than 0.000001 (10-6).

### Constraints

1 ≤ **T** ≤ 1250
4 ≤ **N** ≤ 1000
1 ≤ **Xi**, **Yi** ≤ 5000
The sum of **N** in one test file does not exceed 5000.
No three points (**Xi**, **Yi**), (**Xj**, **Yj**), (**Xk**, **Yk**) lie in the same line (1 ≤ **i** < **j** < **k** ≤ **N**)

### Sample Input

```
1
6
3 1
5 2
3 3
6 3
6 6
5 6
```
### Sample Output

`5.8309518948`### Explanations

The below figure denotes one of the valid tetragons for the sample input. The red segment is the longest segment which can be one of the sides in her tetragon.

![](http://www.codechef.com/download/CIELMAP.png)
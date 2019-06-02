---
category_name: easy
problem_code: TAXITURN
problem_name: 'Taxi Making Sharp Turns'
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
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 11-12-2017
tags:
    - acm17kgp
    - admin2
    - easy
    - geometry
    - kgp17rol
editorial_url: 'https://discuss.codechef.com/problems/TAXITURN'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454371
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Taxis of Kharagpur are famous for making sharp turns. You are given the coordinates where a particular taxi was on a 2-D planes at **N** different moments: (**x1, y1**), (**x2, y2**), ..., (**xN, yN**). In between these coordinates, the taxi moves on a straight line. A turn at the i-th (2 ≤ i ≤ **N**-1) coordinate is said to be a *sharp* turn if the angle by which it turns at Point B = (**xi, yi**) when going from coordinates A = (**xi-1, yi-1**) to C = (**xi+1, yi+1**) via (**xi, yi**) is greater than 45 degrees. ie. suppose you extend the line segment AB further till a point D, then the angle DBC would be greater than 45 degrees.

You have to identify whether the taxi made a sharp turn somewhere or not (Please look at Output section for details). If it made a sharp turn, also identify whether it is possible to change the coordinates at one of the **N** moments to make sure that the taxi doesn't make any sharp turn. Note that all the **N** pairs of coordinates (including the new coordinates) should be integers and distinct and should have their x and y coordinates at least 0 and at most 50.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of moments at which you are given the information of the taxi's coordinates.
- Each of the next **N** lines contains two space-separated integers **xi** and **yi** denoting the x and y coordinates of the taxi at i-th moment.

### Output

- For each test case, print a single line containing two space-separated strings, either of which can be a "yes" or "no" (without quotes). If there was no sharp turn, the first string should be "yes", and if there was a sharp turn, the first string should be "no". For the second string, you should tell whether it is possible to modify at most one coordinate in such a way that taxi doesn't make a sharp turn. Note that if the first string is "yes", then the second string would always be "yes".

### Constraints

- 1 ≤ **T** ≤ 50
- 3 ≤ **N** ≤ 50
- 0 ≤ **xi**, **yi** ≤ 50
- It's guaranteed that all (**xi**, **yi**) pairs are distinct.

### Example

<pre>
<b>Input</b>
5
3
0 0
1 1
2 1
3
0 0
1 0
6 1
3
0 0
1 0
1 1
4
0 0
1 0
1 1
6 1
6
0 0
1 0
1 1
2 1
2 2
3 2

<b>Output</b>
yes yes
yes yes
no yes
no yes
no no

</pre>
### Explanation

**Example 1**.

![](https://codechef_shared.s3.amazonaws.com/upfiles/example_.png
)

You can see that taxi is never making a sharp turn.

**Example 3**

![](https://discuss.codechef.com/upfiles/taxi_figure2.png)

You can see that taxi is making a sharp turn of 90 degrees, an angle greater than 45'. However, you can change the coordinates of the third points to (2, 1) to ensure that the angle remains

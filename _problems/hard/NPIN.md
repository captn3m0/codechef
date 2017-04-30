---
category_name: hard
problem_code: NPIN
problem_name: 'Needles and Pins'
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
problem_author: 'vinayak garg'
problem_tester: gamabunta
date_added: 30-12-2012
tags:
    - geometry
    - hard
    - july13
    - line
    - line
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/NPIN'
time:
    view_start_date: 1373880600
    submit_start_date: 1373880600
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493556780
layout: problem
---
All submissions for this problem are available.Few people know that the Chef is also a modern artist. In his spare time, he makes paintings which do not stink of traditions. They are like whiffs of fresh air, full of experimentation. So, now you know all those err.. beautiful pieces of art in the Chef’s restaurant, are his own works!

Here is how he makes a piece of modern art - First he takes a large thin wooden board. Then he draws a big polygon on it, using crayons. Then in several wild swings, he draws several lines on the board. You may think it is simple, but it is not so. After so many years of experience in slicing potatoes and tomatoes he has become very accurate in marking points on the board. So what is remarkable is, that every corner of the polygon, and every starting and ending point of the line is an integral point, i.e can be represented as <x, y> where x and y both are integers. Another point worth pointing out is that Chef believes in symmetry. This is visible from following fact- "If we divide entire wooden board into 16 square shaped (virtual) regions, the difference in number of lines _contained_ in the region with maximum lines and the region with minimum lines does not exceed 50%". A region is said to _contain_ a line if at least one end point of line is inside it.

It doesn't end here. Then the Chef takes colourful (sewing) needles and nails them on every point on the line traced by crayon, such that the point is integral and it lies either on or inside the polygon. As polygon boundaries are also lines, needles are pinned on them as well. Finally he takes board pins with colourful heads and pins them inside the polygon such that the point is not already occupied by needle and the point is integral. Lo and behold! The painting is ready!

The needles and board pins are rather costly, so the Chef neither wants to buy the needles and pins in excess, nor does he want to run short of them. Now, he needs your help to tell him the exact number of needles and pins that he would require. We can hear the Chef singing “..and still it begins, needles and pins ♪♫...” slowly.

### Input

First line contains an integer **T**, the number of test cases. For each test case - first line contains two integers **N**, number of vertices of polygon and **M**, number of lines. Then **N** lines follow, each containing 2 space separated integers **X Y** denoting the ith vertex. The vertices are given anti-clockwise. Next **M** lines contains 4 space separated integers **X1 Y1 X2 Y2** denoting 2 end points of the jth line. No line is longer than 10000 units in length.

### Output

For each test case - output on a single line the number of needles required and the number of pins required.

### Constraints

**1 ≤ T ≤ 5**
**3 ≤ N ≤ 50**
**0 ≤ M ≤ 10000**
**-500000 ≤ X, Y, X1, Y1, X2, Y2 ≤ 500000**/>/>/>

### Sample

```

<b>Input</b>
1
4 4
0 0
6 0
4 2
2 2
1 0 4 0
2 4 2 -1
0 0 -1 -1
0 1 3 1

<b>Output</b>
14 1


```
### Note

1\) The symmetry constraint - "If we divide entire wooden board into 16 square shaped (virtual) regions .... " is enforced only if number of lines (**M**) is ≥ 1000.

2\) The polygon is convex.
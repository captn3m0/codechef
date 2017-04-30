---
category_name: hard
problem_code: DIVIDEN
problem_name: 'Divide or die'
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
problem_author: pavel1996
problem_tester: shiplu
date_added: 24-07-2014
tags:
    - angles
    - binary
    - dec14
    - geometry
    - medium
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/DIVIDEN'
time:
    view_start_date: 1418643354
    submit_start_date: 1418643354
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1493556690
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC14/mandarin/DIVIDEN.pdf) and [Russian](http://www.codechef.com/download/translated/DEC14/russian/DIVIDEN.pdf).

Many of you know about a popular logic game called [Euclid: The Game](http://euclidthegame.com/). Everything was fine, but then the game came into the real world because of a horrible mistake of one of the players. Now the whole world is in danger! The world can be described as the Cartesian plane where each point has two real coordinates **x** and **y**. In order to save the world you are to complete the following task.

### Task

Suppose you are given an angle which measures exactly **N** degrees, where **N** is an integer with 0 < **N** < 360.

You are to answer the question: is it possible to construct, [using only a straightedge and compass](http://en.wikipedia.org/wiki/Compass-and-straightedge_construction), **N-1** rays which divide this angle into **N** equal angles of size 1 degree?

If the answer is **YES**, you must demonstrate this by listing the steps you would take to generate these rays.

### Instructions

You will be given three points: **V**, **R1**, and **R2**. The angle you are to consider is the clockwise angle from the ray **VR1** to the ray **VR2**. This angle, in degrees, will always be an integer **N** with 0 < **N** < 360.

If the above construction is possible, you are able to perform two types of operations:

1. Construct a line that connects two known points **A** and **B**.
2. Construct a circle with center at a known point **C**, and radius equal to the distance between two known points **A** and **B**.

A point **P** is called _known_ if it satisfies one of these two statements:

- **P** is equal to one of **V**, **R1**, or **R2**.
- **P** is one of the points of intersection of any lines or circles constructed in previous steps.

The construction is complete once you have found **N-1** known points: **D1**, **D2**, ..., **DN-1**, such that the rays **VD1**, **VD2**, ..., **VDN-1**, divide the given angle into **N** equal angles of size 1 degree.

### Input

The first line of the input files contains two space-separated real numbers with precision at least 1e-6: the **x** and **y** coordinates of **V**. The second and third lines contain the coordinates of **R1** and **R2** similarly.

### Output

The first line of the output should contain a single word: **YES** or **NO** - whether it is theoretically possible to perform the construction described above with a straightedge and compass only.

If your answer is **NO**, do not output anything else.

If your answer is **YES**, the following lines should describe your operations, one per line, as follows.

If you want to construct a line between known points **A** and **B**, output the word **Line** followed by 4 space-separated numbers - the coordinates of **A**, followed by the coordinates of **B**. **A** and **B** must not be the same point.

If you want to construct a circle with center at the known point **C**, and radius equal to the distance between known points **A** and **B**, output the word **Circle** followed by 6 space-separated numbers - the coordinates of **C**, followed by the coordinates of **A** and **B**. **A** and **B** must not be the same point, but there are no such restrictions on **C**.

Once you have performed all necessary operations, output a single line with the word **Answer**. In each of the next **N-1** lines, output two space-separated numbers - the coordinates of **D1**, **D2**, ..., **DN-1**, listed in clockwise order. Each of these must be known points.

### Constraints

The absolute value of any coordinate given in the input does not exceed **1000**.

All input coordinates have a precision of at least **1e-6**. Prior to precision adjustments, the clockwise angle formed by the input points, in degrees, is guaranteed to be an integer **N** with 0 < **N** < 360.

All coordinates in the output are compared for equality with precision **1e-5**. This means that you can use point **H** as a known point if there is a true known point **K** with **|Hx-Kx|** and **|Hy-Ky|** no more than **1e-5** each.

Your solution must not output more than **1000** operations.

### Subtasks

**Subtask #1**  \[25 points\]: **N** ≤ **4**
**Subtask #2** \[75 points\]: maximum constraints 
### Example

```
<b>Input:</b>
-679.6073275406 -315.6362656580
-844.0655568007 -298.0169842162
-841.1364219780 -292.6039079355

<b>Output:</b>
YES
Line -679.6073275406 -315.6362656580 -844.0655568007 -298.0169842162
Line -679.6073275406 -315.6362656580 -841.1364219780 -292.6039079355
Circle -679.6073275406 -315.6362656580 -679.6073275406 -315.6362656580 -844.0655
568007 -298.0169842162
Line -679.6073275406 -315.6362656580 -841.1364219780 -292.6039079355
Line -844.0655568007 -298.0169842162 -843.3504692364 -292.2882079766
Circle -844.0655568007 -298.0169842162 -844.0655568007 -298.0169842162 -843.3504
692364 -292.2882079766
Circle -843.3504692364 -292.2882079766 -844.0655568007 -298.0169842162 -843.3504
692364 -292.2882079766
Line -848.6692787746 -294.5333120998 -838.7467472625 -295.7718800931
Answer
-843.7080130185 -295.1525960964
```
_There are other acceptable solutions._

_The line breaks inside the second to last coordinates for each circle are for website display reasons only, and should not exist in your output._

### Explanation

The measure of the given angle is 2 degrees. It is well known that we can bisect _any_ angle with a compass and straightedge, so we can certainly do so for a 2 degree angle. This divides the angle into two 1-degree angles as required. The method presented is one way of doing so and looks like this:

![](/download/extimages/18803cb00817e914893a22e99f054829.png)
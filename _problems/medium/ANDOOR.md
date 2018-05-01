---
category_name: medium
problem_code: ANDOOR
problem_name: 'A New Door'
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
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: anton_lunyov
date_added: 9-08-2012
tags:
    - geometry
    - jan13
    - medium
    - precision
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/ANDOOR'
time:
    view_start_date: 1358247831
    submit_start_date: 1358247831
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493557912
layout: problem
---
All submissions for this problem are available.Now Chef is very good in cooking; his dishes are the best in the city, so he wants to make his restaurant prettier. The first, what customer sees, when comes to his restaurant is the door. So he will start with it. He has found a new design last night. Hi will cut out some circles from the door and fill the holes by the glass to make windows of peculiar form.

Formally, we can model the process Chef will perform to create the windows as follows. Let the door be a rectangle at the coordinate plane with corners at the points **(0, 0)**, **(W, 0)**, **(0, H)**, **(W, H)**. Initially the door is colored white, while the remaining part of the coordinate plane is colored black. At each step Chef colors in black some circle including all its inner points. After Chef will color all required circles, the black part of the door (that is, black regions that lie in the rectangle corresponding to the door) is cut out and replaced by the glass.

The main measure of peculiarity of the door is the perimeter of all the windows considering only those parts of windows borders lying inside the door (see example case 2 for clarity). Chef is very tired after coloring so many circles and asks you to find this number.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains 3 space-separated integers **W, H, N**, denoting the measurements of the door, and the number of circles. The description of **N** circles follows in the next **N** lines. Namely, the **i**-th line among them contains **3** space-separated real numbers **X**, **Y**, **R** with exactly two digits after the decimal point, denoting the coordinates of the center and the radius of the circle that Chef will cut out at the **i**-th step.

### Output

For each test case, output a single line containing the sum of the perimeters of all windows as described above. Your answer will be considered as correct if it has an absolute error less than **10-6**.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **W** ≤ **1000**
- **1** ≤ **H** ≤ **1000**
- **1** ≤ **N** ≤ **1000**
- The sum of all values of **N** over the input does not exceed **5000**
- 0 < **R** ≤ **1000**
- 0 ≤ **X**, **Y** ≤ **1000**
- **X**, **Y**, **R** have exactly two digits after the decimal point
- All circles are different, that is, every two circles have either different radii or different centers (or both)

### Example

<pre><b>Input:</b>
2
8 10 8
2.00 2.00 1.00
4.00 2.00 0.50
6.00 2.00 1.00
4.00 5.00 1.50
3.00 6.00 0.50
3.00 7.00 0.75
5.00 7.00 1.00
4.00 8.00 1.00
7 7 3
1.00 1.00 2.00
3.00 3.00 1.50
6.00 5.00 1.50

<b>Output:</b>
33.6404284
17.2058395
</pre>### Explanation

**Example case 1.** The answer is the length of the bold lines on the following picture:

![](http://www.codechef.com/download/ANDOOR_Ex2.jpg)

**Example case 2.** The answer is the length of the bold lines on the following picture:

![](http://www.codechef.com/download/ANDOOR_Ex1.jpg)

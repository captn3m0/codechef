---
category_name: challenge
problem_code: SMPAINT
problem_name: 'Art in Digital Age'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: gerald
date_added: 22-09-2013
tags:
    - challenge
    - dec13
    - dynamic
    - greedy
    - heuristic
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/SMPAINT'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1525454426
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/SMPAINT.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/SMPAINT.pdf).

Being a CS student, Ron really don't understand why he has to take a compulsory course called "Art in Digital Age".
The objective of this course from what his school said is to help the CS students release the stress by doing something new other from coding/programming. The problem is Ron really love coding and he doesn't care about other stuff. This course even gives him
more stress. However, like it or not Ron still need to try his best not to let this course ruins his great GPA.
Can you help him with his first assignment which is described below.

In this assignment, Ron is given an **N**×**N** pixels image called sample image. Ron is required to create a copy of the
sample image using an simple graphic painting program called SMPaint. Only two types of operation can be used in SMPaint:

- Init: Make the new image with the specific size, all the pixels of the new image are white.
- Paint: User gives 5 integers **C**, **U**, **D**, **L**, **R** and SMPaint will change colour to **C** at all the pixels (**x**, **y**) such that (**U** ≤ **x** ≤ **D** and **L** ≤ **y** ≤ **R**).
  The pixel (**x**, **y**) is the pixel at the **xth** row (from the top, 1-indexed) and the **yth** column (from the left side, 1-indexed).

[![Image and video hosting by TinyPic](http://i40.tinypic.com/33wa5wo.png)](http://tinypic.com?ref=33wa5wo)

We can see that the Paint operation actually is painting a specific rectangle in the image by one specific colour.
The image in the **figure 1** can be drawn using 3 calls of the second function if we paint the red rectangle first and then paint two
green rectangles. Notice that if a pixel is changed colour several time, it final colour is corresponding to the last time it is painted.
This help us save some calls of the second function. For the image in figure 1 we can paint a large green rectangle first and then paint the red rectangle.
Your mission is help Ron finish the assignment with using as least as possible number of calls of the second function.

### Input

The first line of the input contains integer **N**. Each of the next **N** lines contains **N** integers. The **yth** number in the **xth** line
represent the colour of the pixel (**x**, **y**) in the sample image.

### Output

The first line of the output must contain integer **M** that is the number of calls of the second function you need.
The next **M** lines represent the calls to the second function in chronological order.
Each line must contain 5 integers which are the values (they must be in this order) **C**, **U**, **D**, **L**, **R** for the corresponding call. The following conditions must be held:

12. 0 ≤ **C** ≤ **100**
13. **1** ≤ **U** ≤ **D** ≤ **N**
14. **1** ≤ **L** ≤ **R** ≤ **N**
### Constraints

- **1** ≤ **N** ≤ **1000**
- The colours are represented by integers from 0 to **100** where 0 means white colour.

### Example

<pre>
<b>Input:</b>
5
0 0 0 0 0
0 1 2 1 0
0 1 2 1 0
0 1 2 1 0
0 0 0 0 0

<b>Output:</b>
2
1 2 4 2 4
2 2 4 3 3
</pre>###  Scoring & the test data generation 

Your solution will not get point if it performs more than **N2** Paint operations or the final image is different
with the sample one. Your solution will be marked as Wrong Answer for that two cases.

If the number of Paint operations does not exceed **N2** and the final image is the same as the sample one
you will get the score which is equal to the number of Paint operations. Smaller score means your solution is better.

The test data is generated randomly by simulating the process of making an image in SMPaint using no more than **500** Paint operations. But please note that, the value of **N** is picked manually.

We have 25 official test files. You must correctly solve all test files to receive OK.
During the contest, your overall score is the sum of the scores on the first 7 test files.
After the contest, all solutions will be rescored by the sum of the scores on the rest 18 test files.
Note, that public part of the tests can not contain some border cases. For example, we should say that
in all public tests **10 ≤ N** holds.

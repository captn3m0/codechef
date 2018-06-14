---
category_name: challenge
problem_code: CHEFNIL
problem_name: 'Chef and Intersection Line'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 8-09-2014
tags:
    - berezin
    - challenge
    - nov17
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1525199506
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/CHEFNIL.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/CHEFNIL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/CHEFNIL.pdf) as well.

Chef is playing a game that lasts **M** seconds. She has a matrix **A**\[**M**\]\[**N**\]\[**N**\] which contains a single integer in each of the **M** \* **N** \* **N** cells. For each k such that 1 ≤ k ≤ **M**, on the k-th second, she chooses some pair (i, j) such that 1 ≤ i, j ≤ **N**. This will fetch her **A**\[k\]\[i\]\[j\] points. She also has a 2-D Cartesian plane which is empty initially. Then for each second k, where k > 1, she will draw a line segment in the plane which joins the coordinates (i, j) and the coordinates chosen in the previous second. She can only select the pair (i, j) if this segment doesn't intersect with any already drawn segment (the touching of the newly drawn segment at the previous second segment point is allowed). So, the segments shouldn't intersect with each other at any point (except two consecutive segments touching at a single point). She is also not allowed to choose a pair (i, j) more than once. If Chef is not able to select a pair, or doesn't wish to play the game any longer, she can exit the game at any point. The aim is to maximize the sum of the points scored.

Can you please play the game on behalf of Chef?

### Input

The first line of each test case contains two space-separated integers **N**, **M**.

Next, you will provided matrix **A**\[k\] for each k from 1 to **M**.

The k-th matrix is given by **N** lines each containing **N** space separated integers.

### Output

You should output at least 1 and at most **M** lines with two integers in each, denoting the r (for row index) and c (for column index) of the cells selected (1-based indexing) or "-1 -1" in order to exit the game.

### Constraints

- **N** = 50
- 1 ≤ **A**\[k\]\[i\]\[j\] ≤ 100
- Constraints on **M** given below.

### Example

<pre><b>Input:</b>
3 4
1 3 2
3 4 2
1 1 3
2 2 5
1 4 2
3 3 3 
2 3 1
2 3 4
1 8 1
1 1 1
1 1 1
1 1 1

<b>Output:</b>
2 2
3 1
2 3
1 1
</pre>### Scoring

Let **P** denote the total number of points that you receive during the game. Let **S** be the sum of all the **M** \* **N** \* **N** integers in the matrix **A**\[**M**\]\[**N**\]\[**N**\]. Then the score obtained will be 1000 \* (**N** \* **N** \* **P**) / (sqrt(**M**) \* **S**). Your total score will be the sum of your scores over all the test files.

### Test Distribution

There are four kind of test files.

First, we describe two probability distributions for generating the value in the cell **A**\[k\]\[i\]\[j\].

Type 1 distribution is **int(100 \* ed - 100)) + 1**, where the real number **d** is drawn from an uniform real distribution with range from 0 to 100.

Type 2 distribution is minimum of **(100 \* 2-X + d) + 1** over 10 iterations, where **d** is drawn from an uniform real distribution with range from 0 to 20, and X denotes the minimum of the Manhattan distances of cell (k, i, j) from the cells (k, 1, 1), (k, 1, **N**), (k, **N**, 1), (k, **N**, **N**), and (k, **N**/2, **N**/2). Note that if the value of the element exceeds 100, we keep it to 100.

- Test 1 tests: Type 1 distribution and **M** = 50.
- Test 2 tests: Type 1 distribution and **M** = 500.
- Test 3 tests: Type 2 distribution and **M** = 50.
- Test 4 tests: Type 2 distribution and **M** = 500.

There are 3 files of each type of tests. During the contest, your score will be calculated over one-third of the test files, i.e. 1 file from each of these types. However, your submission will be run on all the test files and AC/Non AC verdict will be given by running across all the test files.

### Example Explanation

First second: Chef chooses the point **(2, 2)**, gets **A**\[1\]\[2\]\[2\] = 4 points.

Second second: Chef chooses the point **(3, 1)**, gets **A**\[2\]\[3\]\[1\] = 3 points. A segment is drawn between points (2, 2) and (3, 1).

Third second: Chef chooses the point **(2, 3)**, gets **A**\[3\]\[2\]\[3\] = 4 points. The newly drawn segment is between (3, 1) and (2, 3) which doesn't intersect with the already drawn segment between (2, 2) and (3, 1) (note that it's allowed to touch at the endpoint).

Fourth second: Chef chooses the point **(1, 1)**, gets **A**\[4\]\[1\]\[1\] = 1 points. The newly drawn segment is between (2, 3) and (1, 1) which doesn't intersect with the already drawn segments.

So total number of points obtained is **P** = 12. The final score obtained will be 683.544.

For the given input, one could have also had the following output.

<pre>
1 1
3 1
2 1
-1 -1

</pre>But this will give a WA, because the segment (1, 1) -> (3, 1) has many common points with (3, 1) -> (2, 1).

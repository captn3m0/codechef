---
category_name: challenge
problem_code: CHPUZZLE
problem_name: 'Jigsaw Puzzle Solving'
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 16-01-2015
tags:
    - challenge
    - feb15
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/CHPUZZLE'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1525199659
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Imagine a usual jigsaw puzzle. Let its picture be a completely white rectangle with the width of **W** pixels and the height of **H** pixels.

The puzzle was splitted into **K** pieces, then they've got mixed up. Now you want to restore it again. Ideally, you'd like merge these pieces in such a way that they'd form a rectangle **W** pixels wide and **H** pixels tall, again. However, it can be very hard. Therefore, even reconstructing a part of a puzzle will make you happy.

Let's formalize the things a bit. You have an empty matrix of **H** x **W** cells and **K** pieces, every piece is a connected component (see the further illustration for better understanding). By connected component, we mean that a piece is a figure where you can reach any pixel of a figure by going through side-adjacent pixels from the figure. You can place a piece anywhere in the matrix, in case it doesn't overlap with other pieces and doesn't crosses the border of the matrix. You can skip the piece and not to place it at all. You **cannot rotate** the pieces. Given that it is possible to place all the the pieces in such a way that the every cell of the matrix is exactly covered by one piece.

Your goal is to place some (maybe, all) of the pieces in such a way that no two pieces overlap, no piece crosses the border of the matrix, and the number of the cells that are covered by placed pieces is maximized.

Here is the example of the puzzle, splitted into pieces:

9 9 9 9 9 9 8 8 8 1 
9 9 9 9 9 9 8 8 8 1 
9 5 5 5 5 9 9 9 4 1 
5 5 5 5 5 9 9 4 4 1 
5 3 5 5 4 4 4 4 7 1 
3 3 5 5 4 2 2 7 7 1 
3 3 3 2 2 2 7 7 1 1 
3 3 3 2 7 7 7 7 7 7 
3 3 3 2 6 7 7 7 6 6 
2 2 2 2 6 6 6 6 6 6

### Input

The first line of input contains three space separated integers **H**, **W** and **K** - the number of rows, columns and pieces respectively.

Then **K** blocks, describing a piece follow.

Each description starts with a line, containing a single integer **P**, denoting the number of cells that this piece cover.

Then there are **P** lines, each contains a pair of integers **X, Y (1 <= X <= H, 1 <= Y <= W)**, denoting **1-based** coordinates of piece's cell in its' bounding box. That is, the minimal **X**-coordinate and the minimal **Y**-coordinate in each piece's description are both 1.

All the pieces are identified by consecutive positive integers (starting from 1) in the order of input.

### Output

Output **H** lines of **W** integers separated by a single space. The **j**-th integer in the **i**-th line should denote the identification number of piece that covers the respective cell, or 0 if the cell is not covered by any piece.

### Test data information

There will be several groups in this problem (**20** test cases in total):

- The first group will contain **5** test cases. In these test cases, **W** and **H** will be chosen randomly between **10** and **50**. **K** will be chosen randomly between **W \* H / 10** and **W \* H / 2**, inclusively.
- The second group will contain **8** test cases. In these test cases, **W** and **H** will be chosen randomly between **100** and **200**. **K** will be chosen randomly between **W \* H / 100** and **W \* H / 34**, inclusively.
- The third group will contain **3** test cases. In these test cases, **W** and **H** will be chosen randomly between **600** and **800**. **K** will be chosen randomly between **W \* H / 100** and **W \* H / 34**, inclusively.
- The fourth group will contain **4** test cases. In these test cases, **W** and **H** will be chosen randomly between **500** and **1000**. **K** will be chosen randomly between **W \* H / 50** and **W \* H / 5**, inclusively.

In the test data provided, the maximal number of pixels in a piece and the minimal number of pixels in a piece will differ in no more than 3 times. That is, the **max\_P - min\_P <= 3 \* min\_P**.

### Scoring

Your score for the test case equals to the percentage of the matrix that is covered by pieces. Your score for the problem is the average of your scores for all the test cases. Pay attention that during the contest only the score on 20% of the test cases will be revealed. These 20% will contain **a single test case from each of the groups**.

### Example

<pre><b>Input:</b>
10 10 9
8
1 2
2 2
3 2
4 2
5 2
6 2
7 2
7 1
11
1 7
1 6
2 5
2 6
5 3
5 1
5 2
2 4
3 4
4 4
5 4
12
4 3
5 3
5 1
5 2
1 2
2 2
2 1
3 1
3 2
3 3
4 1
4 2
8
1 5
2 5
2 4
3 4
3 1
4 1
3 2
3 3
14
2 4
3 4
2 3
3 3
4 3
4 4
1 2
2 2
2 1
3 1
1 3
1 4
1 5
2 5
9
1 1
2 1
2 2
2 3
2 4
2 5
2 6
1 6
1 5
14
5 2
5 3
4 4
5 4
4 5
4 6
1 5
2 5
2 4
3 4
4 2
4 1
3 3
4 3
6
1 2
1 1
1 3
2 3
2 1
2 2
18
1 1
1 2
2 1
3 1
2 2
2 3
2 4
2 5
3 8
3 7
4 7
4 6
2 6
3 6
1 4
1 3
1 6
1 5

<b>Output:</b>
0 1 8 8 8 0 0 2 2 0 
0 1 8 8 8 2 2 2 3 0 
0 1 0 0 0 2 0 3 3 0 
0 1 0 0 0 2 0 3 3 3 
0 1 2 2 2 2 4 3 3 3 
0 1 0 0 0 4 4 3 3 3 
1 1 4 4 4 4 5 5 5 5 
0 0 4 0 0 5 5 5 5 5 
0 0 0 0 0 5 0 5 5 0 
0 0 0 0 0 0 0 5 5 0 
</pre>
### Explanation

**How to assign coordinates to the pieces. ?**

Let us consider the 6th piece. Its coordinates will be (1, 1), (1, 5), (1, 6), (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6). You can notice that x coordinate will increase when you go towards south direction, your y coordinate will increase when you towards east direction.

**Another example:** 
Let us consider this piece. 
010 
110 
011

Its actual coordinates will be given you in row major in following way.
(1 2), (2 1), (2 2), (3 2), (3 3).

This solution corresponding to given output would get 0.59 points.

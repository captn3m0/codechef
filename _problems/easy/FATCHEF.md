---
category_name: easy
problem_code: FATCHEF
problem_name: 'Remy paints the fence'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: rosyish
problem_tester: shangjingbo
date_added: 12-04-2012
tags:
    - combinatorics
    - easy
    - oct14
    - rosyish
editorial_url: 'http://discuss.codechef.com/problems/FATCHEF'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/FATCHEF.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/FATCHEF.pdf).

Our chef Remy ate all the delicious food he made. As a result, he has become really fat :). Chef's assistant Linguini has taken up the herculean task of bringing back chef Remy to shape.

Linguini has built a fence which has **N** planks in a straight line. The planks are numbered 1 to N from left to right. In front of **M** of these N planks, he has put a bucket of paint. The paints may be of different colors. Each color is represented by any uppercase letter (A-Z). Chef Remy needs to paint the fence. He uses his painting brush to paint the fence.

Chef Remy starts the task by choosing a plank which has a bucket of paint in front of it and dips his brush in the bucket. He starts walking randomly along the straight fence passing the planks. He never moves out of the fence. Note that walking randomly along a fence means that Remy keeps walking all the time along his current direction. He can change his direction any time he wishes. Moving along a straight fence has just two directions, forward and backward.

Linguini has devised the following recipe for painting the fence.

- Each bucket has an infinite supply of paint.
- The brush can carry paint of a single color at any time.
- When Remy passes a paint bucket, the brush acquires the color in the bucket first.
- Every plank that Remy passes in his random walk must be colored with the color in the brush. A plank will be colored completely.
- A plank can be colored multiple times. A plank's color is the latest color it is painted with.

A fence coloring is complete when each plank is painted with some color. Linguini is watching Remy dance around with colors. He wonders how many different complete fence colorings will he be able to see. Two fence colorings are different if there is atleast one plank numbered **x** whose color differs in both the colorings. Find out the number of different complete fence colorings modulo 1000000009.

### Input

First line contains **T**, the number of test cases. T test cases follow. The first line of each case contains **N** and **M**separated by a space. Next M lines follow each of the form **x** and **y** separated by a space. Here x is the color in the bucket which is placed at plank numbered y.

###  Constraints 

- 1 <= T <= 10
- 1 <= N <= 100000
- 1 <= M <= N
- x will be an uppercase letter between A to Z
- 1 <= y <= N

### Output

The number of different complete fence colorings modulo 1000000009 for each case on a new line.

### Example

```

<b>Input:</b>

3
2 1
R 1
3 1
A 2
6 2
A 2
B 6

<b>Output:</b>
1
1
4

```
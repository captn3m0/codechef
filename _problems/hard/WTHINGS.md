---
category_name: hard
problem_code: WTHINGS
problem_name: 'Where the Wild Things Are'
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
problem_author: kostya_by
problem_tester: rustinpiece
date_added: 30-05-2014
tags:
    - binary
    - cook47
    - kostya_by
    - medium
    - polygons
editorial_url: 'http://discuss.codechef.com/problems/WTHINGS'
time:
    view_start_date: 1403464500
    submit_start_date: 1403464500
    visible_start_date: 1403464500
    end_date: 1735669800
    current: 1493556901
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK47/mandarin2/WTHINGS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK47/russian/WTHINGS.pdf) as well.

Recently, Max has visited the place where the Wild Things are again. He was very happy to know, that the monsters are living in peace now.

His friend Carol was so excited about Max's coming back, that he proposed everyone a brand new game. Unfortunately, all the Wild Things refused to play the game, except Max and K.W., so there were only three players playing the game.

![](/download/extimages/4e92b0bc21bd247da871da4a6fb7eb79.jpg)

The area, where the game takes place, is the Cartesian plane([link](http://en.wikipedia.org/wiki/Cartesian_plane)).

There are **N** _interesting_ points on the plane. Each _interesting_ point has integer coordinates. Also, all the _interesting_ points form a strictly convex polygon([link](http://en.wikipedia.org/wiki/Convex_polygon#Strict_convexity)).

There is no need to explain the rules of the game, but it's quite important to mention the preparation process:

In order to play the game, the players(Max, K.W. and Carol) must choose three different _interesting_ points
and plant themselves there. Also, they must choose some positive integer **S**.

Let's assume, that Max's _interesting_ point is **A**, K.W.'s - **B** and Carol's - **C**.
If the area of triangle **ABC** is greater than or equal to **S**, then the game will be _awesome_.
 Otherwise, it will be _awful_.

Now Max is on his way home. His head is filled up with the memories about the wonderful game he used to play with
his friends. But there's the thing, that annoys him: he remembers, that he played the game **Q** times, but
he can't recall any _interesting_ point chosen by him!

Max exactly remembers, that in the beginning of **i**'th game K.W. chose point **B** = **Bi**,
Carol chose point **C** = **Ci** and **S** was equal to **Si**.
Also, he remembers, that all the games were awesome.
So, you are to calculate the number of different _interesting_ points,
that could be chosen by Max as **A** in the beginning of **i**'th game. This number can be equal to zero(in that case we can conclude, that **i**'th game wasn't awesome - anyway, just output zero).

### Input

The first line of a test case contains two integers **N** and **Q**,
denoting the number of the _interesting_ points and the number of times Max played the game.

The next **N** lines contain two integers **Xi** and **Yi** each, denoting coordinates of **i**'th _interesting_ point. The points are 1-indexed.

The next **Q** lines contain three integers **Bi**, **Ci** and **Si** each. In the beginning of **i**'th game K.W. chose point **Bi**'th _interesting_ point, Carol chose **Ci**'th _interesting_ point and **S** was equal to **Si**.

It's guaranteed, that the _interesting_ points form a strictly convex polygon and are given in clockwise or counterclockwise order.

It's also guaranteed, that there are no three vertices in the input that lie on one line and no point is given twice.

### Output

For each round of the game, output a single line containing the number of different _interesting_ points, that could be chosen by Max as **A** in the beginning of the corresponding game.

### Constraints

3 ≤ **N** ≤ 60000;

1 ≤ **Q** ≤ 250000;

**|X|**, **|Y|** ≤ 108, for each _interesting_ point;

1 ≤ **B**  != **C** ≤ **N**, **S** ≤ 1018, for each game.

### Example

```
<b>Input:</b>
4 2
0 0
4 0
7 3
7 7
1 4 1
1 4 100

<b>Output:</b>
2
0

```
### Explanations

For the first query, **A** could be equal to both 2 and 3;

For the second query, there are no possible variants for **A**.
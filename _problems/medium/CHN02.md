---
category_name: medium
problem_code: CHN02
problem_name: 'Animesh decides to settle down'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-01-2016
tags:
    - acm15chn
    - admin2
    - computational
    - geometry
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493557565
layout: problem
---
All submissions for this problem are available.After trying his luck in programming contests, Animesh has decided to accept his fate and settle down the good old-fashioned way. He has decided to own a farm and be a shepherd. He knows of **n** grass varieties, each of which grows in a convex polygon area. Some of these polygons may intersect each other. Each grass is lush green and nutritious, and he cannot make up his mind on where he should settle.

His friend Malvika, a long time shepherd herself (this is _the other_ Malvika), suggested that he buy a piece of land where he can find all the **n** grass varieties, so that his sheep will be fat and produce lots of wool. Animesh liked the idea and wants to buy as much of such a pasture as possible. However, being short on money, he decided to be judicious, and only buy land which is covered by all the **n** grasses. That is, he would not buy even a bit of land which isn't part of all **n** of the grassy polygons. Can you please help in finding out the maximum area of land he can buy?

### Input

- First line will contain an integer **n**, denoting the number of polygons.
- Then, the next lines will contain description of **n** polygons, description of the **i**th polygon is given as below. 
  - First line will contains a single integer **c** denoting number of points in the polygon.
  - each of the next **c** lines will have two space separated integers **x\[j\], y\[j\]** denoting **x** and **y** coordinate respectively of the **j**-th point of the polygon. These points will be given in anti-clockwise order.

### Output

- Output your answer in a separate line. Your answer will be considered correct if it has an absolute error less than **1e-2**.

### Constraints

- **1** ≤ **n** ≤ **30**
- **3** ≤ **c** ≤ **30**
- **-105** ≤ **x, y** ≤ **105**

### Example

<pre><b>Input:</b>
3
4
15 0
15 5
0 5
0 0
4
2 3
15 3
15 10
2 10
4
19 7
5 7
5 -1
19 -1

<b>Output:</b>
20.000

</pre>### Explanation
Each region in the current case is rectangular in shape. You can check that the area of intersection of all the three input rectangles is another rectangle with corners at **(5,3), (15,3), (15,5)** and **(5,5)**. This is the place Animesh is going to settle in. The area of this rectangle is 10 \* 2 = 20.

---
category_name: easy
problem_code: AMBOXES
problem_name: 'Nested Candy Boxes'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 22-12-2017
tags:
    - admin2
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525198882
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Andy got a box of candies for Christmas. In fact, he discovered that the box contained several identical smaller boxes, and they could contain even smaller boxes, and so on. Formally, we say that candies are boxes of level 0, and for 1 ≤ i ≤ **n**, a level i box contains **ai** boxes of level i - 1. The largest box has level **n**. Andy realized that it can take quite a long time to open all the boxes before he actually gets to eat some candies, so he put the box aside in frustration.

But today being his birthday, some friends came to visit Andy, and Andy decided to share some candies with them. In order to do that, he must open some of the boxes. Naturally, Andy can not open a box that is still inside an unopened box. If Andy wants to retrieve **X** candies, what is the least number of boxes he must open? You must help him answer many such queries. Each query is independent.

### Input

- The first line contains two integers **n** and **m**, which refer to the level of the largest box, and the number of queries respectively.
- The second line contains **n** integers **a1**, ..., **an**.
- The third line contains **m** integers **X1**, ..., **Xm**.

### Output

- Print **m** integers each in a new line, ith of them equal to the smallest number of boxes Andy must open in order to retrieve at least **Xi** candies.

### Constraints

- 1 ≤ **n**,**m** ≤ 300000
- 1 ≤ **ai** ≤ 109
- 1 ≤ **Xi** ≤ 1012
- It is guaranteed that the total number of candies is at least **Xi** for all i

### Example

<pre>
<b>Input 1:</b>
5 1
1 1 1 1 1
1

<b>Output 1:</b>
5

<b>Input 2:</b>
3 3
3 3 3
2 8 13

<b>Output 2:</b>
3
5
8
</pre>
### Explanation

**Testcase 1:** The only candy is contained in five levels of boxes.

**Testcase 2:** In the third query, for 13 candies, Andy should open the largest box, two level-2 boxes, and finally five of six available level-1 boxes. Each of those boxes will contain 3 level-0 boxes (which are candies). So he'll have 15 candies in total, but he needs only 13 of them.

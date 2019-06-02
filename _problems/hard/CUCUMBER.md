---
category_name: hard
problem_code: CUCUMBER
problem_name: 'Cucumber Boy and Cucumber Girl'
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
max_timelimit: '1.301'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 3-12-2012
tags:
    - gauss
    - hard
    - jan13
    - laycurse
editorial_url: 'http://discuss.codechef.com/problems/CUCUMBER'
time:
    view_start_date: 1358247981
    submit_start_date: 1358247981
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493556676
layout: problem
---
All submissions for this problem are available.As everybody knows, a pizza consists of **N** ingredients, for instance, crust, sauce, toppings, etc.

Long ago in Wolf Town, there were **N** kinds of pizza shops each selling one ingredient of pizza. Let ingredients and pizza shops be numbered from **1** to **N**, then pizza shop **k** selling ingredient **k**. They had never invaded other shops, namely, they had kept to sell only one ingredient. But the situation changed after some shop violates the unspoken rule. Then all of **N** pizza shops start to sell all **N** ingredients and they are competing.

As time past, a pizza is now one of the most popular foods, and every pair of pizza shops is collaborated for improving quality. Let pizza shop **(j1, j2)** denotes the shop collaborated between shops **j1** and **j2**. There are **B** pizza buildings having every pizza shop, including collaborated shops. The price of a pizza is determined by its quality.

Let the quality of ingredient **k** of pizza shop **j** in building **i** be **Q\[i, j, k\]**. Then the quality of ingredient **k** of pizza shop **(j1, j2)** in building **i** is **Q\[i, j1, k\] \* Q\[i, j2, k\]**. The price of a pizza is the summation of qualities of its ingredients.

By the way, Cucumber Boy and Cucumber Girl live in the Wolf Town. Cucumber Boy and Cucumber Girl like pizza very much, but now they are bored by the existing pizzas, despite there are many kinds of pizzas. So they want to propose the collaboration between two distinct buildings (say **i1** and **i2**). If their wish is realized, the pizza collaborated between shop **j1** in building **i1** and **j2** in building **i2** will be sold. The price of the pizza will be determined by the usual way, that is, the price will be
**the summation of **Q\[i1, j1, k\] \* Q\[i2, j2, k\]** over **1 ≤ k ≤ N****.
Note that **j1** = **j2** is possible here.

Now Cucumber Boy chooses two buildings **i1** and **i2** such that **1** ≤ **i1** < **i2** ≤ **B**. In each day Cucumber Boy and Cucumber Girl want to eat **N** collaborated pizzas. Here these **N** pizzas should satisfy the following conditions.

- Each of **N** pizzas is a collaborated pizza between one shop in building **i1** and one shop in building **i2**.
- Every shop in building **i1** collaborates for one of **N** pizzas.
- Every shop in building **i2** collaborates for one of **N** pizzas.

Clearly, there are exactly **N!** (factorial of **N**) of such sets of **N** pizzas. Therefore, Cucumber Boy and Cucumber Girl will eat all distinct such sets during **N!** days eating each such set of pizzas exactly once and, of course, eating exactly one such set per day (see the first sample input for clarity).

Cucumber Boy is a show-off, so he wants to pay more money than Cucumber Girl. But Cucumber Girl is a steadfast person, so she may disturb it. However if at least one of **N** pizzas has odd price (that is, the price not divisible by 2), she gives away him to pay more money than her in this day (otherwise, she pays the same amount of money as he pays). But the next time such situation occurs, she will pay more money than Cucumber Boy in this day. Namely, consider all days for which we have at least one pizza with odd price and number them starting from 1. Then in the (**2\*x−1**)-th such day Cucumber Boy pays more money than Cucumber Girl, and in the (**2\*x**)-th such day, Cucumber Girl pays more money than Cucumber Boy. That is, at such days with numbers **1, 3, 5, ...** Cucumber Boy pays more money than Cucumber Girl, while at such days with numbers **2, 4, 6, ...** we have the opposite situation. So now Cucumber Boy's objective will be accomplished if
**the number of times that he pays more money than her greater than the number of times that he pays less than her**.

Now your task is to calculate the number of pairs of buildings for which Cucumber Boy's objective will be accomplished.

### Input

The first line contains an integer **T** denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains **2** space-separated integers **N** and **B**. The description of each **B** buildings follows.

The first line for each building **i** contains one string, which is **raw** or **random**. If this string is **raw**, then **N** lines follow, each line contains **N** space-separated integers, where the **k**-th integer of the **j**-th line denotes **Q\[i, j, k\]**. If this string is **random**, then a single line follows containing **3** space-separated integers **Si**, **Pi** and **Ai**. Let the array **Xi** be defined as **Xi\[1\] = Si, Xi\[k\] = (Pi \* Xi\[k−1\] + Ai) modulo M**, where **M = 232 = 4294967296**. Then **Q\[i, j, k\]** is calculated as **(floor(Xi\[(j−1)\*N+k\] / D) modulo 100) + 1**, where **D = 212 = 4096**.

### Output

 For each test case, output a single line containing the number of pairs **(i1, i2)** of buildings with **1** ≤ **i1** < **i2** ≤ **B** for which Cucumber Boy's objective will be accomplished.

### Constraints

**1 ≤ T ≤ 4000**
**1 ≤ N ≤ 60**
**2 ≤ B ≤ 8000**
**1 ≤ Q\[i, j, k\] ≤ 100**
**0 ≤ Si, Ti, Ai ≤ 40000 (4\*104)**
The summation of **B** in one input file does not exceed **8000**.
The size of one input file does not exceed **1.5 megabytes = 1,572,864 bytes**.

### Sample

<pre>
<b>Input:</b>
3
3 3
raw
82 51 44
41 10 38
23 33 58
raw
19 84 64
17 43 44
30 81 57
raw
61 84 31
52 90 82
29 16 45
4 8
random
11708 9521 15107
random
5874 19373 36492
random
11504 36617 16182
random
33487 35453 8669
random
33741 25749 9927
random
12099 17221 19740
random
5587 2589 14716
random
36950 17607 32881
10 2
random
29163 283 8737
raw
55 23 6 47 7 89 4 96 77 97
19 20 85 35 72 70 77 71 32 82
44 40 75 68 9 66 10 40 51 46
47 64 73 77 40 49 89 81 50 95
20 88 5 98 52 3 3 26 35 48
25 55 29 49 30 27 70 73 85 93
6 27 81 74 51 21 76 71 12 66
6 49 65 59 92 70 95 56 4 21
98 39 50 13 22 38 31 70 63 29
3 60 93 22 81 95 7 21 12 49

<b>Output:</b>
1
5
1
</pre>
### Explanation

In the first sample case, Cucumber Boy's objective will be accomplished if and only if he selects buildings **(i1, i2) = (1, 2)**. Let's call the pizza of the shop **x** of the building **1** collaborated with the shop **y** of the building **2** as pizza **(x, y)**. Then
the price of the pizza **(1, 1)** is **82\*19+51\*84+44\*64 = 8658**,
the price of the pizza **(1, 2)** is **82\*17+51\*43+44\*44 = 5523**,
the price of the pizza **(1, 3)** is **82\*30+51\*81+44\*57 = 9099**,
the price of the pizza **(2, 1)** is **41\*19+10\*84+38\*64 = 4051**,
the price of the pizza **(2, 2)** is **41\*17+10\*43+38\*44 = 2799**,
the price of the pizza **(2, 3)** is **41\*30+10\*81+38\*57 = 4206**,
the price of the pizza **(3, 1)** is **23\*19+33\*84+58\*64 = 6921**,
the price of the pizza **(3, 2)** is **23\*17+33\*43+58\*44 = 4362**,
the price of the pizza **(3, 3)** is **23\*30+33\*81+58\*57 = 6669**.
There will be **5** days for which at least one of the corresponding pizzas has odd price as follows:
pizzas **(1, 1)**, **(2, 2)**, **(3, 3)**,
pizzas **(1, 2)**, **(2, 1)**, **(3, 3)**,
pizzas **(1, 2)**, **(2, 3)**, **(3, 1)**,
pizzas **(1, 3)**, **(2, 1)**, **(3, 2)**,
pizzas **(1, 3)**, **(2, 2)**, **(3, 1)**.
Therefore Cucumber boy will pay more money than Cucumber girl in 3 of these 5 days, and Cucumber boy will pay less in 2 of these 5 days. Note that all pizzas **(1, 1)**, **(2, 3)**, **(3, 2)** have even price, hence Cucumber Boy and Cucumber Girl pay the same amount of money in this day.

In the second sample case, the data **Q\[1, j, k\]** about building **1** are the following:
**Q\[1, 1, 1\] = 3, Q\[1, 1, 2\] = 19, Q\[1, 1, 3\] = 68, Q\[1, 1, 4\] = 7,
Q\[1, 2, 1\] = 44, Q\[1, 2, 2\] = 89, Q\[1, 2, 3\] = 84, Q\[1, 2, 4\] = 33,
Q\[1, 3, 1\] = 25, Q\[1, 3, 2\] = 10, Q\[1, 3, 3\] = 50, Q\[1, 3, 4\] = 89,
Q\[1, 4, 1\] = 27, Q\[1, 4, 2\] = 27, Q\[1, 4, 3\] = 34, Q\[1, 4, 4\] = 30.** Note that the array **X1** is calculated as follow:
**X1\[1\] = 11708,
X1\[2\] = 111486975,
X1\[3\] = 610581970,
X1\[4\] = 2260199989,
X1\[5\] = 1577957416,
X1\[6\] = 4231938731,
X1\[7\] = 1200469182,
X1\[8\] = 759122273,
X1\[9\] = 3468184468,
X1\[10\] = 875763287,
X1\[11\] = 1610749098,
X1\[12\] = 2908930445,
X1\[13\] = 1977657344,
X1\[14\] = 138961667,
X1\[15\] = 204119446,
X1\[16\] = 2096042681.** Cucumber Boy's objective will be accomplished if and only if he selects buildings **(i1, i2)** to be one of the following: **(1, 4), (1, 6), (2, 5), (4, 5), (4, 6)**.

Note that in the third sample case we have building 1 given as row input and building 2 given as random input. This is only to emphasize that such mix is possible. You should figure it out by yourself why for the only pair of buildings in this example Cucumber Boy's objective will be accomplished.

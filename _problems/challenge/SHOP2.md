---
category_name: challenge
problem_code: SHOP2
problem_name: 'Optimal Shopping II'
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
problem_tester: kevinsogo
date_added: 29-03-2016
tags:
    - challenge
    - may16
    - travel
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SHOP2'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1525199673
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/SHOP2.pdf) and [Russian](http://www.codechef.com/download/translated/MAY16/russian/SHOP2.pdf) as well.

There are **N** junctions and **M** bidirectional roads, connecting these junctions. The junctions are numbered from **1** to **N** inclusive. For each road the time required to pass it is known.

There's a shop in every junction. Each shop contains some of **K** types of goods. In **i**-th shop, the goods of the **j**-th type cost **Ai,j** rubles.

Any item of the **i**th type of goods weighs for **Wi** grams.

Initially, you are standing at the junction 1. You want to get to the junction **N** and buy **exactly** one unit of each of the goods so that your total budget does not exceed **F** rubles and the penalty is minimized (see next section for its details). Please note that buying goods take negligible time, so buying goods and switching roads can be considered instantaneous. Also, passing through junctions and roads multiple times is allowed. Also, note that you are also allowed to pass through junction **N** also, as long as in the end, you end up at this junction.

The penalty is defined as the sum of **Ti \* Wi** over all types of goods, where **Ti** denotes the time between the moment of the purchase of the item of the goods of the **i**th type and the finish moment. Intuitively, penalty is the cost you have to pay in carrying the goods.

### Input

The first line contain four space-separated integer numbers **N, M, K, F** denoting the number of junctions, the number of roads, the number of types of goods and the budget respectively.

Each of the following **K** lines (say, the **i**th) start with a pair of integer numbers **Pi** and **Wi** followed with **Pi** pairs of integers **Bi, j**, **Ai, j**, where **Bi, j** denotes a shop containing **i**th good, the shop is located at junction **Bi, j** and the cost of **i**th good at this junction will be **Ai, j**.

Each of the following **M** lines (say, the **k**th) contains three space-separated integer numbers **Xk, Yk, Zk**, which denotes that there is a road whose two endpoint junctions are given by **Xk, Yk** and the time required to pass this junction is given by **Zk**.

### Output

The first line of the output should contain an integer number **D**, denoting the number of commands.

The following line should contain **D** integer numbers, denoting the commands in the following format: Let the number outputted in some command is **d**.

- If **d** is positive, then it represents a move from the current junction to the adjacent junction numbered **d**.
- If **d** is negative, that it represents buying of the goods of type **-d** in the current shop.

In the beginning, the current junction is always the first junction.

You will get a wrong answer verdict when:

- You try to move to the junction that is not adjacent to the current one.
- You don't finish at the junction **N**.
- You spend more than **F** rubles.
- You try to buy some goods in some shop where they're unavailable.
- You try to buy goods of same type twice or some.
- You don't buy all the goods by the time you finish.
- The number of commands exceeds **2000000**.

### Constraints

In order to ensure that the answer will always exist, the value of the sum of the minimal costs over all goods will not exceed **F**.

- It is possible to get from any junction to any other junction via the given roads.
- **1** ≤ **Zk** ≤ **104**
- **1** ≤ **Wi** ≤ **104**
- **1** ≤ **F** ≤ **107**
- A shop can contain at most one good of a particular type, Hence for each junction **i**, **Bi, j**'s will be distinct.

Group 1:

- **40** ≤ **N** ≤ **50**
- **80** ≤ **M** ≤ **100**
- **20** ≤ **K** ≤ **40**
- **10** ≤ **Ai, j** ≤ **30**

Group 2:

- **40** ≤ **N** ≤ **50**
- **80** ≤ **M** ≤ **100**
- **20** ≤ **K** ≤ **40**
- **10000** ≤ **Ai, j** ≤ **50000**

Group 3:

- **900** ≤ **N** ≤ **1000**
- **1000** ≤ **M** ≤ **10000**
- **100** ≤ **K** ≤ **500**
- **10** ≤ **Ai, j** ≤ **30**

Group 4:

- **900** ≤ **N** ≤ **1000**
- **1000** ≤ **M** ≤ **10000**
- **100** ≤ **K** ≤ **500**
- **10000** ≤ **Ai, j** ≤ **50000**

### Test data generation

Each of the four groups will contain five test cases. During the contest, you will only see the score on the set of four test cases - one from each group.

The junction-road network structure will be random. The values of **N, M, K** will be picked from the given intervals randomly and independently.

For the distribution of the goods between shops, there will be picked a non-random interval **\[L; R\]**, which is common for all goods within a test case. Each of the goods will go to **P** random shops, where **P** is picked randomly from the segment **\[L; R\]**.

For each of the goods, the weight is picked randomly from the segment **\[1; 104\]**.

Then, the sum **S** of minimal costs over all goods is calculated. The value of **F** will be equal to **S** multiplied by some random number within range **\[1.0; 1.1\]** (and rounded).

### Scoring

Your score for a single test case will be calculated as a square root of the value of the penalty function, described in the statement.

Your score for the problem will be calculated as a sum of individual scores for each test case.

### Example

<pre><b>Input:</b>
<tt>4 6 2 28
3 50 2 13 4 17 3 15
2 91 3 19 2 15
2 1 34
1 3 46
3 4 18
1 4 54
2 4 90
3 2 38</tt>
    
<b>Output:</b>
<tt>5
2 -1 -2 3 4</tt>
</pre>### Explanation

### Input

There are **4** junctions, **6** roads and **2** types of goods. The total budget is **28**.

The goods of the first type does weigh **50** and are sold in the shops at the junctions **2, 4, 3** with costs **13, 17, 15** respectively.

The goods of the second type does weigh **91** and are sold in the junctions **3, 2** with costs **19, 15** respectively.

### Output

Let's perform the outputted commands:

- Command **2** means to move to junction 2. There is such a road, so the command is correct.
- Command **-1** means to buy goods of the type **1**. So we buy goods of the type **1**, and spend **13** rubles.
- Command **-2** means to buy goods of the type **2**. So we buy goods of the type **2** and spend **15** burles. Now we've spent **28** burles in total, which is OK, since we didn't exceed the budget of **28** burles.
- Command **3** means to move to the third junction. Meanwhile, the penalty becomes equal to **(50 + 91) \* 38 = 5358**.
- Command **4** means to move to the fourth junction. The penalty function becomes equal to **(50 + 91) \* (38 + 18) = 7896**. We can finish now, since all goods are bought and we've reached the final junction.

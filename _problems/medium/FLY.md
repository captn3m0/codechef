---
category_name: medium
problem_code: FLY
problem_name: Fly-overs
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
problem_author: shettynamit
problem_tester: anton_lunyov
date_added: 21-04-2012
tags:
    - functions
    - graphs
    - june12
    - medium
    - shettynamit
editorial_url: 'http://discuss.codechef.com/problems/FLY'
time:
    view_start_date: 1339403674
    submit_start_date: 1339403674
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493557656
layout: problem
---
All submissions for this problem are available.The Head Chef has opened **N** new restaurants across the city. But he is exhausted since he has to travel so much when he has to go from one restaurant to another. Further, the city traffic is driving him crazy. So he wishes to construct fly-overs between restaurants. A fly-over is a road at a raised height between any two restaurants. If two restaurants are connected by a fly-over, it takes only **1** second for the Chef to move from one restaurant to the other. When commuting between restaurants, our Head Chef wishes to use one or more fly-overs. _He doesn't want to travel by the regular roads at all_.

Unfortunately, construction of fly-overs costs money. A construction company has agreed to build **1** fly-over for a payment of **C** rupees. It is up to the Chef to decide which restaurants he wants to connect using fly-overs. He asks his assistant chefs to give him suggestions. Each assistant chef proposes his own model. The Chef is now confused, he has no way of comparing models. Some models have too many fly-overs, while other models have too few.

The Sous Chef came up with a formula to estimate the **Cost of a model**. Suppose the model has **F** fly-overs. Let's label restaurants by numbers **1**, **2**, ..., **N**. Let **T(U, V)** represents the time taken to go from the restaurant **U** to the restaurant **V** via fly-overs of the current model. Compute **T(X, Y)** for every ordered pair of distinct restaurants **(X, Y)** (**N ∙ (N – 1)**  pairs in total) and then add them up. Denote obtained sum as **P** and called it the time penalty of the model. Note that the constructing of **F** fly-overs will cost **C** ∙ **F** rupees. The Sous Chef strongly believes that saving time is equivalent to saving money, so the total cost of the model is simply **P** + **C** ∙ **F**.

The Head Chef is somewhat satisfied. As a specialist in math and graph theory he immediately found a formula for the cost of the optimal model for a given **C**. But the construction company has a special offer now. It can construct fly-overs between **M** special pairs of restaurants for free. Now the problem of finding the optimal model becomes non-trivial for The Chef and he turns to you for help.

### Input

The first line of the input file contains an integer **T**, the number of test cases. **T** test cases follow. The first line of each test case contains an integer **N**, a real **C** and an integer **M**. Here **N** is the number of restaurants, **C** is the cost of the constructing of one fly-over, and **M** is the number of special pairs of restaurants. Each of the next **M** lines contains two integers **U** and **V**, the indexes of the restaurants that can be connected by the fly-over for free. Each pair of consecutive numbers in every line is separated by exactly one space.

### Output

For each test case output a single value, the minimum possible cost of a model. Output this value with exactly **9** digits after the decimal point. Your answer will be considered as correct if it has an absolute error less than **10-12**.

### Constraints

**1** ≤ **T** ≤ **1000**

**1** ≤ **N** ≤ **109**

0 ≤ **C** ≤ **109**

**C** either will be an integer or will have at most **9** digits after the decimal point.

0 ≤ **M** ≤ **2**

**1** ≤ **U**, **V** ≤ **N**

**U** ≠ **V**

All **M** unordered pairs **{U, V}** will be different.

**Note**: Just to re-iterate, the cost of a model is not simply the cost of constructing the fly-overs. Refer to the Sous Chef's definition of "Cost of a model" in the problem statement.

### Example

<pre>
<b>Input:</b>
3
3 1.500 0
2 18.92 0
3 3.141592653 1
1 2
1 47 0

<b>Output:</b>
10.500000000
20.920000000
11.141592653
0.000000000
</pre>### Explanation

**Case 1.** We will compare two models: **M1** and **M2**. We will denote a fly-over that connects the restaurants with indexes **U** and **V** by **\[U, V\]**.

In the model **M1** we have two fly-overs: **\[1, 2\]** and **\[1, 3\]**. Clearly, **T(1, 2) = T(2, 1) = 1** and **T(1, 3) = T(3, 1) = 1** while **T(2, 3) = T(3, 2) = 2** since traveling from **2** to **3** (and vice versa) requires traversing of two fly-overs. Thus, the time penalty is **1+1+1+1+2+2 = 8** seconds, while the cost of the fly-overs constructing is **2 ∙ 1.5 = 3** rupees. Hence, the total cost is **8 + 3 = 11**.

Now let's consider the model **M2** which has 3 fly-overs: **\[1, 2\]**, **\[2, 3\]** and **\[1, 3\]**. Clearly, **T(X, Y) = 1** for every ordered pair **(X, Y)** of the restaurants. Thus, the time penalty is **1+1+1+1+1+1 = 6** seconds, while the cost of the fly-overs constructing is **3 ∙ 1.5 = 4.5** rupees. Hence, the total cost is **6 + 4.5 = 10.5** which is smaller than that of **M1**. It can be shown that no model has a cost smaller than **10.5**.

**Case 2.** Recall that the Chef wishes to travel only via fly-overs. In the case of **2** restaurants, there obviously has to be a fly-over between them. So the cost is **T(1, 2) + T(2, 1) + 1 ∙ 18.92 = 1 + 1 + 18.92 = 20.92**.

**Case 3.** The optimal model here has fly-overs **\[1, 2\]** and **\[1, 3\]**. But since the first fly-over will be constructed for free, the total cost is **8 + 1 ∙ 3.141592653 = 11.141592653**.

**Case 4.** Note that **C** here is represented without decimal point. Clearly, when the Head Chef has only one restaurant he doesn't need to travel at all and construct fly-overs. Hence the optimal model is an empty model that has zero total cost.

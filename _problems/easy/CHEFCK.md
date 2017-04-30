---
category_name: easy
problem_code: CHEFCK
problem_name: 'Chef and Cake'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: abhra73
problem_tester: kevinsogo
date_added: 11-03-2015
tags:
    - abhra73
    - easy
    - may15
    - range
    - sliding
editorial_url: 'http://discuss.codechef.com/problems/CHEFCK'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.The Chef once decided to prepare some nice dishes on his birthday. There are **N** items kept on his shelf linearly from position **1** to **N**. Taste of the i-th item is denoted by a integer **Ai**.

He wants to make **Q** dishes. A dish will be made using some ingredients in the continuous range **AL, AL + 1, , , AR** (1-base indexing). Quality of the dish will be determined by the ingredient with minimum taste.

### Read problems statements in [Mandarin Chinese](/download/translated/MAY15/mandarin/CHEFCK.pdf) and [Russian](/download/translated/MAY15/russian/CHEFCK.pdf).

The Chef once decided to prepare some nice dishes on his birthday. There are **N** items kept on his shelf linearly from position **1** to **N**. Taste of the i-th item is denoted by a integer **Ai**.

He wants to make **Q** dishes. A dish will be made using some ingredients in the continuous range **AL, AL + 1, , , AR** (1-base indexing). Quality of the dish will be determined by the ingredient with minimum taste.

Chef wants help of his assistant Rupsa to find out sum and product of qualities of the dishes. As product of the qualities of the dishes could be very large, print it modulo **109 + 7**. Also, you are given an integer **K** and you are assured that for each dish, the size of continuous range of the ingredients (i.e. **R - L + 1**) will always lie between **K** and **2 \* K**, both inclusive.

**_Method of generation of Array A_** 
 You are given non-negative integer parameters **a, b, c, d, e, f, r, s, t, m, A\[1\]**

 ```

for x = 2 to N:
	if(t^x mod s  <= r)        // Here t^x signifies "t to the power of x"
		A[x] = (a*A[x-1]^2 + b*A[x-1] + c) mod m
	else
		A[x] = (d*A[x-1]^2 + e*A[x-1] + f) mod m

```**Method of generation of range of ingredients for Q dishes** 
 You are given non-negative integer parameters **L1, La, Lc, Lm, D1, Da, Dc, Dm**

 ```

for i = 1 to Q:
	L1 = (La * L1 + Lc) mod Lm;
	D1 = (Da * D1 + Dc) mod Dm; 
	L = L1 + 1;
	R = min(L + K - 1 + D1, N);

```### Input

- The first line contains three integers **N**, **K** and **Q**.
- The second line contains the integers **a, b, c, d, e, f, r, s, t, m,** and **A\[1\]**.
- Then third line contains the integers **L1, La, Lc, Lm, D1, Da, Dc,** and **Dm**

### Output

Output two space separated integers:

- The sum of qualities of the dishes.
- The product of qualities of the dishes modulo **109+7**.

### Constraints

- **1 ≤ N, Q ≤ 107**
- **1 ≤ K ≤ N**
- **0 ≤ a, b, c, d, e, f, r, s, t, m, A\[1\] ≤ 109+7**
- **1 ≤ Lm ≤ N - K + 1**
- **1 ≤ Dm ≤ K + 1**
- **1 ≤ La, Lc ≤ Lm**
- **1 ≤ Da, Dc ≤ Dm**
- **1 ≤ L1 ≤ N**
- **1 ≤ D1 ≤ K**

### Sub tasks

- Subtask #1: **1 ≤ N, Q ≤ 1000** (10 points)
- Subtask #2: **1 ≤ Q ≤ 104** (20 points)
- Subtask #3: original constraints (70 points)

### Example

 ```
<b>Input:</b>
4 2 1
1 1 1 1 1 1 1 1 1 100 1 
1 1 1 3 1 1 1 2

<b>Output:</b>
13 13

```
### Explanation

- The array **A** comes out to be **{1, 3, 13, 83}** and the first dish has **L = 3** and **R = 4**. The minimum in this range is **13**, thus the sum and product both are **13** and hence the answer.

### Note

Multiplier for C# and Java have been reduced to 1.5 instead of 2.
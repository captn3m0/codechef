---
category_name: medium
problem_code: UNPAIR
problem_name: 'No Unpaired Chefs'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pnkjjindal
problem_tester: xcwgf666
date_added: 14-03-2015
tags:
    - graph
    - ltime22
    - medium
    - mst
    - pnkjjindal
editorial_url: 'http://discuss.codechef.com/problems/UNPAIR'
time:
    view_start_date: 1427617800
    submit_start_date: 1427617800
    visible_start_date: 1427617800
    end_date: 1735669800
    current: 1493557953
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME22/mandarin/UNPAIR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME22/russian/UNPAIR.pdf).

Codechef has now decided to make an admin panel amongst their chefs. This way they think that it would be easier for them to control and regulate their contests. To do so, they have asked them to rate everyone including themselves by a non-negative integer.

There are **N** chefs, numbered from **1** to **N**. Each chef has submitted a rating to the Codechef panel for other all the chefs including a rating to himself. Surprisingly for the team, for each pair of chefs (say, chef with the number **i** and the chef with the number **j**), they collaborated within themselves and gave the same rating to each other i.e. the rating that the chef **i** has given to the chef **j** is equal to the rating that the chef **j** has given to the chef **i**. The Codechef team built a rating matrix from this input from Chefs. Now, from this input rating matrix **M**, they will make a _Paired_ rating matrix **P** as follows:

- **P** is symmetric.
- **Pi, j** is either equal to zero, or to **Mi, j**, where **Mi, j** is the rating given by ith chef to the jth chef.
- There exists **S** > 0, such that each entry in **P + P2 + ... + PS** is positive.
- To make things more friendly between the admin panel of Chefs, the sum of values in **P** is minimum possible.

Help the Codechef panel in selecting such a matrix **P** from **M**. Please find the minimum possible sum of entries in the matrix **P** such that **P** will still satisfy the constraints.

### Input

The first line of the input contains **T**, number of test cases to follow. Then **T** test cases follow.

Each test case start with a line containing an integer **N**, the number of chefs in Codechef team.

Then **N** lines follow. Each of them contains **N** space-separated integers. The **j**th integer in the **i**th line is the rating given by chef with the number **i** to chef with the number **j**.

### Output

For each test case, print the minimum sum of entries, possible for **P**. If it is not possible to do, print "-1" (without quotes).

### Constraints

- **1** ≤ **T** ≤ **100**
- Constraints on **N**:
- Subproblem 1 (30 points):  **1** ≤ **N** ≤ **5**
- Subproblem 2 (70 points): **1** ≤ **N** ≤ **100**

- 0 ≤ **Mi, j** ≤ **109**

### Example

<pre><b>Input:</b>
2
2
1 0
0 1
2
1 1
1 1

<b>Output:</b>
-1
2
</pre>**Explanation:**

In the first sample case, there are only two choices of choosing P, one is a zero-matrix, for a zero matrx, we will never be able to make **P + P2 + ... + PS** all positive. Another choice is to chose P = M, for this case also, we can never make the sum with all positive values for any S.

In the second case, if one selects P such that we eliminate diagonal elements from M, we get all sum positive for S=2 itself. One can check that this is the minimum sum value for P possible to satisfy all constraints.

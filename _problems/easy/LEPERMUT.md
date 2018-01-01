---
category_name: easy
problem_code: LEPERMUT
problem_name: 'Little Elephant and Permutations'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: witua
problem_tester: null
date_added: 2-10-2012
tags:
    - ad
    - cakewalk
    - cook28
    - witua
time:
    view_start_date: 1353263226
    submit_start_date: 1353263226
    visible_start_date: 1353263400
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.The Little Elephant likes permutations. This time he has a permutation **A\[1\]**, **A\[2\]**, ..., **A\[N\]** of numbers **1**, **2**, ..., **N**.

He calls a permutation **A** good, if the number of its inversions is equal to the number of its local inversions. The number of inversions is equal to the number of pairs of integers (**i**; **j**) such that **1** ≤ **i** < **j** ≤ **N** and **A\[i\]** > **A\[j\]**, and the number of local inversions is the number of integers **i** such that **1** ≤ **i** < **N** and **A\[i\]** > **A\[i+1\]**.

The Little Elephant has several such permutations. Help him to find for each permutation whether it is good or not. Print **YES** for a corresponding test case if it is good and **NO** otherwise.

### Input

The first line of the input contains a single integer **T**, the number of test cases. **T** test cases follow. The first line of each test case contains a single integer **N**, the size of a permutation. The next line contains **N** space separated integers **A\[1\]**, **A\[2\]**, ..., **A\[N\]**.

### Output

For each test case output a single line containing the answer for the corresponding test case. It should be **YES** if the corresponding permutation is good and **NO** otherwise.

### Constraints

**1** ≤ **T** ≤ **474** 

**1** ≤ **N** ≤ **100** 

It is guaranteed that the sequence **A\[1\]**, **A\[2\]**, ..., **A\[N\]** is a permutation of numbers **1**, **2**, ..., **N**.

### Example

<pre>
<b>Input:</b>
4
1
1
2
2 1
3
3 2 1
4
1 3 2 4

<b>Output:</b>
YES
YES
NO
YES

</pre>### Explanation
**Case 1.** Here **N = 1**, so we have no pairs **(i; j)** with **1 ≤ i < j ≤ N**. So the number of inversions is equal to zero. The number of local inversion is also equal to zero. Hence this permutation is good.

**Case 2.** Here **N = 2**, and we have one pair **(i; j)** with **1 ≤ i < j ≤ N**, the pair **(1; 2)**. Since **A\[1\] = 2** and **A\[2\] = 1** then **A\[1\] > A\[2\]** and the number of inversions is equal to **1**. The number of local inversion is also equal to **1** since we have one value of **i** for which **1 ≤ i < N** (the value **i = 1**) and **A\[i\] > A\[i+1\]** for this value of **i** since **A\[1\] > A\[2\]**. Hence this permutation is also good.

**Case 3.** Here **N = 3**, and we have three pairs **(i; j)** with **1 ≤ i < j ≤ N**. We have **A\[1\] = 3, A\[2\] = 2, A\[3\] = 1**. Hence **A\[1\] > A\[2\]**, **A\[1\] > A\[3\]** and **A\[2\] > A\[3\]**. So the number of inversions is equal to **3**. To count the number of local inversion we should examine inequalities **A\[1\] > A\[2\]** and **A\[2\] > A\[3\]**. They both are satisfied in our case, so we have **2** local inversions. Since **2 ≠ 3** this permutations is not good.

**Case 4.** Here we have only one inversion and it comes from the pair **(2; 3)** since **A\[2\] = 3 > 2 = A\[3\]**. This pair gives also the only local inversion in this permutation. Hence the number of inversions equals to the number of local inversions and equals to one. So this permutation is good.
